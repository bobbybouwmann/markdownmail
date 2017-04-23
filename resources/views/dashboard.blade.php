@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="themes">

            @if (count($themes))

                @foreach ($themes as $theme)

                    @include('partials.theme')

                @endforeach

            @else

                <div class="theme">

                    <div class="panel">

                        <div class="panel-heading">

                            <h4>It looks like there are no themes yet!</h4>

                        </div>

                        <div class="panel-body">

                            <a href="{{ route('themes.create') }}" class="btn btn-primary">Create My First Theme</a>

                        </div>

                    </div>

                </div>

            @endif

        </div>

    </div>

@endsection
