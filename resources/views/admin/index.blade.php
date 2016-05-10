@extends('layout.main')

@section('h2')
<h2>Администрирование сайта</h2>
@endsection

@section('content')
<a href="/admin/main">Редактировать главную страницу</a><br />
<a href="/admin/news">Новости</a><br />
<a href="/admin/cms">Внутренние страницы</a><br />
@endsection
