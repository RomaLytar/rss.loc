@extends('layouts.app')
@section('content')
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                       width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Заголовок</th>
                                        <th>Описание</th>
                                        <th>Картинка</th>
                                        <th>Url</th>
                                        <th>Дата публикации</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Заголовок</th>
                                        <th>Описание</th>
                                        <th>Картинка</th>
                                        <th>Url</th>
                                        <th>Дата публикации</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($news as $new)
                                        <tr>
                                            <th>{{ $new->id }}</th>
                                            <td>{{ $new->title }}</td>
                                            <td>{{ $new->description }}</td>
                                            <td>{!!  $new->img  !!}</td>
                                            <td>{{ $new->url }}</td>
                                            <td>{{ $new->data_public }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('news.add') }}" class="btn btn-sm">Add</a>
@endsection
