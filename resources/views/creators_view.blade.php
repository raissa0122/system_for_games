@extends('frontend.app')

@section('menu')
<div class="container">
    <div class="menubar">
        <nav class="navbar navbar-default">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('frontend/assets/images')}}/logo/logo.png" alt="logo">
                </a>
            </div><!--/.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li><a href="/games_view">Games</a></li>
                    <li><a href="/creators_view">Creators</a></li>
                    <li><a href="/genres_view">Genres</a></li>
                    <li><a href="/admin">Sign Up</a></li>
                    <li class="search">
                        <form action="">
                            <input type="text" name="search" placeholder="Search....">
                            <a href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </form>
                    </li>
                </ul><!-- / ul -->
            </div><!-- /.navbar-collapse -->
        </nav><!--/nav -->
    </div><!--/.menubar -->
</div><!-- /.container -->
@endsection

@section('table')
<div class="container">
                    <h1
                        class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug"
                    >
                        Creator Section!
                    </h1>
                    <br>
                    <p class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed">
                    Here you can see all creators!
                    </p>
</div>
@endsection

@section('content')
    <div class="container">
                <table class="styled-table">
                    <style>
                    table, th, td {
                      border: 1px solid black;
                    }
                    </style>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of starting</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($creators as $creator)
                    <tr>
                        <td>{{$creator->name}}</td>
                        <td>{{$creator->date_of_starting}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
    </div><!--/.container-->
@endsection
