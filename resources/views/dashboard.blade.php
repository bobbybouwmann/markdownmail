@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="themes">

            @foreach ($themes as $theme)

                @include('partials.theme')

            @endforeach

        </div>

    </div>

@endsection
