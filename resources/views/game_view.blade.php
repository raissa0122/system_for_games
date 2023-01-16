@extends('frontend.app')
@section('header')
    <div class="container">
        <div class="header-left">
            <ul class="pull-left">
                <li>
                    <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i> +359 89 830 9484
                    </a>
                </li><!--/li-->
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>raissa@gmail.com
                    </a>
                </li><!--/li-->
            </ul><!--/ul-->
        </div><!--/.header-left -->
        <div class="header-right pull-right">
            <ul>
                <li class="reg">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                        Register
                    </a>
                    /
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                        Log in
                    </a>

                </li><!--/li -->
                <li>
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul><!--/.ul -->
                    </div><!--/.social-icon -->
                </li><!--/li -->
            </ul><!--/ul -->
        </div><!--/.header-right -->
    </div>
@endsection
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
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4">
                <div
                    class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center"
                    data-wow-delay=".2s"
                >
                    <h1
                        class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug"
                    >
                        Game Section!
                    </h1>
                    <br>
                    <p
                        class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed"
                    >
                    Here you can see all the popular games, their creators and the genres they belong to!
                    </p>
                </div>
            </div>
        </div>
    </div>
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
                        <th>Game Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date of creating</th>
                        <th>Creators</th>
                        <th>Genre</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($games as $game)
                        <tr>
                            <td><img src="{{$game->image}}" style="width: 140px"></td>
                            <td>{{$game->name}}</td>
                            <td>{{$game->description}}</td>
                            <td>{{$game->create_date}}</td>
                            <td>
                                @foreach($creators as $creator)

                                    @if( $creator->id == $game->creator_id )

                                        {{ ($creator->name)}}<br>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($genres as $genre)

                                    @if( $genre->id == $game->genre_id )

                                        {{ ($genre->name)}}<br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div><!--/.container<-->
@endsection
