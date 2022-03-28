

@extends('layouts.main')

@section('title',Route::currentRouteName())

@section('content')
    <div class="container">
        <h1>
            {{Route::currentRouteName()}}
        </h1>
    </div>
@endsection