@extends('layouts.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')
<main>
    <div class="container my-5">
        <form action="{{route('comics.store')}}" method="POST" class="row g-3">
            @csrf
            {{-- title --}}
            <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            {{-- thumb --}}
            <div class="col-12">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            {{-- price --}}
            <div class="col-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="any" min="0.00">
            </div>
            {{-- series --}}
            <div class="col-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            {{-- sale date --}}
            <div class="col-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
            </div>
            {{-- type --}}
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
            <select id="type" class="form-select" name="type">
                <option>comic book</option>
                <option>graphic novel</option>
            </select>
            </div>
            {{-- button --}}
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-success mx-4">Create</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</main>   
@endsection