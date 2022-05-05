@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{route('admin.posts.store',)}}" method="POST">
    @csrf
  
    <div class="mb-3">
      <label for="title" class="form-label"> Titolo </label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
      @error('title')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
  
    <div class="mb-3">
      <label for="published_at" class="form-label"> Data di pubblicazione </label>
      <input type="date" class="form-control @error('date') is-invalid @enderror" name="published_at" id="published_at">
      @error('date')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="category_id">Categoria</label>
        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
          <option value="">-- Nessuna --</option>
          @foreach ($categories as $category)
            <option {{ old('category_id') && old('category_id') == $category->id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
    </div>
    @error('category_id')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  
    <div class="mb-3">
      <label for="content" class="form-label">Example textarea</label>
      <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3"> {{old('content')}} </textarea>
      @error('content')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
  
    <button class="btn btn-primary" type="submit">Crea</button>
  
  </form>
</div>

@endsection