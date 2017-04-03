@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="app">

        <div class="row">

            <div class="col-md-3">

                <aside class="sidebar affix">

                    <theme :theme="{{ $theme->id }}"></theme>

                </aside>

            </div>

            <div class="col-md-9 content">

                <div id="mail-demo">

                    <mail :theme="{{ $theme->id }}"></mail>

                </div>

            </div>

        </div>

    </div>

@endsection
