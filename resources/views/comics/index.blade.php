@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        @include('includes.comic_gallery')
        <div>
            <a href="{{route('comics.create')}}" class="button">Aggiungi</a>
        </div>
    </div>
</main>   
@endsection