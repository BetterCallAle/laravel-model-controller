@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('content')
   <section>
    <div class="container">
        <div class="row row-cols-3 gy-5">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card">
                    <div class="card-img">
                         <img src="{{ $movie->image }}" alt="Copertina di {{ $movie->title }}">
                    </div>
     
                    <div class="card-info">
                        <ul>
                             <li>{{ $movie->title }}</li>
                             <li>{{ $movie->original_title }}</li>
                             <li>{{ $movie->nationality }}</li>
                             <li>{{ $movie->date }}</li>
                             <li>{{ $movie->vote }}</li>
                         </ul>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
   </section>
@endsection