@extends('layouts.homepage')

@section('content')

    <div class="hero-container">

        <div class="container">

            <h1>
                MarkdownMail
                <span class="pull-right hidden-xs">
                    <a href="{{ route('login', 'github') }}">
                        <i class="fa fa-github"></i> Login with Github
                    </a>
                </span>
            </h1>

            <h2>Create Laravel Markdown Email Themes<br>without a Hassle</h2>

            <p>Including live email preview</p>

            <a href="{{ route('login', 'github') }}" class="btn btn-default btn-lg"><i class="fa fa-github"></i> Get
                Started</a>

            <div class="welcome-screen">

                <img src="/images/screenshot.png" alt="Screenshot MarkdownMail">

            </div>

        </div>

    </div>

    <div class="about-container">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="about-block">

                        <h3>Why do I need this?</h3>

                        <p>When we create an email template as developer or designer we want to make it look good.
                            However writing good and refreshing a page to changes is tedious work. With a visual
                            generator you can create themes fast and easy.</p>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="about-block">

                        <h3>How does it work?</h3>

                        <p>You simply create a new theme and start picking colors per section. When you are satisfied
                            with the theme colors you can click one of the generate buttons to either generate a Laravel
                            Markdown CSS theme or the plain generated HTML including inline styling.</p>

                    </div>

                </div>

            </div>

            <hr>

            <p class="pull-right">
                <small>Created by <a href="https://twitter.com/bobbybouwmann">Bobby Bouwmann</a></small>
            </p>

        </div>

    </div>

@endsection