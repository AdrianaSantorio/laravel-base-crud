@extends('layouts.main')

@section('title', 'home')

@section('content')

@include('includes.comic_gallery')
</section>
{{-- FEATURED --}}
@include('includes.featured')
@endsection