@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @foreach ($themes as $theme)

                        <h4>{{ $theme->name }} (updated {{ $theme->updated_at->diffForHumans() }})</h4>
                        <p>{{ $theme->description }}</p>

                        <a href="{{ route('themes.edit', $theme->id) }}" class="btn btn-primary">Show theme</a>

                        <hr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
