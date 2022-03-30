@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        @include('includes.comics.gallery')
        <div class="button-container">
            <a href="{{route('comics.create')}}" class="button bg-main">Aggiungi</a>
        </div>
    </div>
</main>   
@endsection

@section('scripts')
<script src="{{asset(('js/delete-confirm.js'))}}" defer></script>
@endsection