@extends('layouts.editor')

@section('sidebar')

    <theme :theme="{{ $theme->id }}"></theme>

@endsection

@section('content')

    <div class="container">

        <mail :theme="{{ $theme->id }}" name="{{ str_slug($theme->name) }}"></mail>

    </div>

@endsection
