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
                <a href="{{route('comics.index')}}" class="button">Back to comics</a>
            </div>
        </div>
    </div>
</main>   
@endsection