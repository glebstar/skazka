@extends('layout.main')

@section('content')
<?php echo base64_decode($body); ?>
@endsection