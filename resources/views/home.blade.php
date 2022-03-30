@extends('layouts.main')

@section('title', 'home')

@section('content')

@include('includes.comics.gallery')
</section>
{{-- FEATURED --}}
@include('includes.featured')
@endsection