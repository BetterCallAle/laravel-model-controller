@extends('layouts.app')

@section('title')
    Movies
@endsection

@section('content')
   <section class="py-5">
    <div class="container">
        <div class="row row-cols-3 gy-5">
           @include('partials.home-cards')
        </div>
    </div>
   </section>
@endsection