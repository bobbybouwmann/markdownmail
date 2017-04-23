@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel">

                    <div class="panel-body">

                        <form method="POST" action="{{ route('themes.update', $theme) }}">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Theme name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Theme name"
                                       value="{{ $theme->name }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description">Theme description</label>
                                <textarea class="form-control" id="description" name="description"
                                          placeholder="Theme description">{{ $theme->description }}</textarea>
                                @if ($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('description') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update theme</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
