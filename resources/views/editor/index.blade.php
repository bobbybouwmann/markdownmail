@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="app">

        <div class="row">

            <div class="col-md-3">

                <aside class="sidebar">

                    <theme :theme="false"></theme>

                </aside>

            </div>

            <div class="col-md-9 content">

                <div id="mail-demo">

                    <mail :theme="false"></mail>

                </div>

            </div>

        </div>

    </div>

@endsection
