@extends('layout.main')

@section('js')
<script src="/ckeditor/ckeditor.js"></script>
<script src="/js/admin/cms/edit.js"></script>
@endsection

@section('h2')
<h2>Работа с внутренними страницами</h2>
@endsection

@section('content')
<p>
    <a href="/admin/cms/add">Добавить страницу</a>
</p>

<h3>Все страницы:</h3>

<table>
    <tr>
        <th>Url (путь)</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($pages as $page)
    <tr>
        <td>{{ $page->path }}</td>
        <td>{{ $page->title }}</td>
        <td><a href="/admin/cms/edit/{{ $page->id }}">Редактировать</a></td>
        <td><a href="#">Удалить</a></td>
    </tr>
    @endforeach
</table>

@endsection
