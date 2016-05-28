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
@endsection
