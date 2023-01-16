@extends('frontend.app')

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
