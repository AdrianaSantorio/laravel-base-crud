@extends('layouts.main')

@section('content')
<main>
    <h2>ciao sono l' index</h2>
    <ul>
        @forelse ($comics as $comic)
        <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
            
        @empty
            <li>Nessun fumetto trovato</li>
        @endforelse
    </ul>
    <div>
        <a href="{{route('comics.create')}}" class="btn btn-primary btn-bg">Aggiungi</a>
    </div>
</main>   
@endsection