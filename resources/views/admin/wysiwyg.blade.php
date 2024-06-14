@extends('layouts.app-admin')

@section('title', 'Wysiwyg')

@section('content')

    <h1 class="text-3xl text-black pb-6">Wysiwyg</h1>

    <textarea class="content" name="content" cols="30" rows="10"></textarea>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>

@endsection
