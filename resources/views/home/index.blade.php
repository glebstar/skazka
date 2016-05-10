@extends('layout.main')

@section('content')
@can('admin-content')
<p><a href="/admin/main">Редактировать</a></p><br />
@endcan
<?php echo base64_decode($body); ?>
@endsection