@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <div id="comic-display">
            <img src="{{$comic->thumb}}" alt="">
            <div class="display-text">
                <h2>{{$comic->title}}</h2>
                <small>{{$comic->series}}</small>
                <p>{{$comic->description}}</p>
                <div class="comic-info">
                    <span>On sale: {{$comic->sale_date}}</span>
                    <span>${{$comic->price}}</span>
                </div>
                <div class="button-container">
                    {{-- edit --}}
                    <a href="{{route('comics.edit', $comic->id)}}" class="button bg-warning">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    {{-- delete --}}
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-danger button">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                    {{-- back --}}
                    <a href="{{route('comics.index')}}" class="button bg-main">Back to comics</a>
                </div>
            </div>
        </div>
    </div>
</main>   
@endsection