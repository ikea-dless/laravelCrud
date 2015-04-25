{{--@extends('app')--}}

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>本文</th>
                <th>作成日時</th>
                <th>編集日時</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->body }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
                <td><a href="/articles/show/{{{ $article->id }}}">詳細</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection