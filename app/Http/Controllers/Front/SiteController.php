<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $news = News::get();
        return view('layouts.front.site', compact('news'));
    }

    public function addNews()
    {
        $xmlstr = simplexml_load_file('http://k.img.com.ua/rss/ru/ukraine.xml'); // подключения xml
        $countItems = count($xmlstr->channel->item);
        $i = 0;
        foreach ($xmlstr->channel->item as $key => $item){
            $i++;
            if($i > $countItems - 10){
                $news = [
                    'title' => $item->title,
                    'img' =>   $item->image,
                    'url' =>   $item->link,
                    'description' => strip_tags($item->description),
                    'data_public' => date('Y-m-d H:i:s')
                ];
                News::create($news);
            }

        }
        return redirect()->back();
    }
}
