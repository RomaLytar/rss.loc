<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'img', 'description', 'url', 'data_public'];
}
//
//public function index()
//{
//
//    $xmlstr = simplexml_load_file('http://k.img.com.ua/rss/ru/ukraine.xml'); // gподключения xml
//    foreach ($xmlstr->channel->item as $item){
//        $news = [
//            'title' => $item->title,
//            'img' =>   $item->image,
//            'url' =>   $item->link,
//            'description' => strip_tags($item->description),
//            'data_public' => $date = date('Y-m-d H:i:s')
//        ];
//        News::create($news);
//    }
//    return view('layouts.front.site');
//}