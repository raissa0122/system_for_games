@extends('frontend.app')

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