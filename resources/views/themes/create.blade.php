@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <form method="POST" action="{{ route('themes.store') }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Theme name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Theme name">
                    </div>

                    <div class="form-group">
                        <label for="description">Theme description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Theme description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Create theme</button>

                </form>

            </div>

        </div>

    </div>

@endsection
