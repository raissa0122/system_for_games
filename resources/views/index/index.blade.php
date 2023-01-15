@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-txt">
                            <h2>Game System</h2>
                            The game system was created with the aim of making it easier for users to access information about the most popular games in the world!
                        </div><!--/.about-us-txt-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-img">
                            @if(isset($entry->image))
                            <img src="{{$imgURL}}" alt="about images">
                            @endif
                            
                        </div><!--/.about-us-img-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.about-us-content-->
    </div><!--/.container-->
@endsection