@extends('layout.main')

@section('h2')
<h2>{{ $title }}</h2>
@endsection

@section('content')
@can('admin-content')
<p><a href="/admin/cms/edit/{{ $id }}">Редактировать</a></p><br />
@endcan
<?php echo $body ?>
@endsection

