@foreach ($movies as $movie)
<div class="col">
    <div class="card">
        <a href="">
            <div class="card-img mb-3">
                 <img src="{{ $movie->image }}" alt="Copertina di {{ $movie->title }}">
            </div>
    
            <div class="card-info">
                <ul>
                     <li class="text-center">
                        <h3 class="card-heading">{{ $movie->title }}</h3>
                    </li>
    
                     <li>Titolo Originale: <strong>{{ $movie->original_title }}</strong></li>
                     <li>Lingua originale: <strong>{{ $movie->nationality }}</strong></li>
                     <li>Data di uscita nelle sale: <strong>{{ $movie->date }}</strong></li>
                     <li>Voto: <strong>{{ $movie->vote }}</strong></li>
                 </ul>
            </div>
        </a>
    </div>
</div>
 @endforeach