@extends('frontend.app')

@section('table')
<div class="container">
                    <h1
                        class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug"
                    >
                        Genre Section!
                    </h1>
                    <br>
                    <p
                        class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed"
                    >
                    Here you can see all genres!
                </p>
</div>
@endsection

@section('content')
    <div class="container">     
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
            <div class="mb-12 max-w-[620px] lg:mb-20">     
                <table class="styled-table">
                    <style>
                        table, th, td {
                          border: 1px solid black;
                        }
                        </style>
                    <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($genres as $genre)
                    <tr>
                        <td>{{$genre->name}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
            </div>
        </div>
      </div>
    </div><!--/.container-->
@endsection