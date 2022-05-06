@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{route('admin.posts.update', $post)}}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
      <label for="title" class="form-label"> Titolo </label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" value=" {{old('title')?: $post->title}} " name="title" id="title">
      @error('title')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
  
    <div class="mb-3">
      <label for="published_at" class="form-label"> Data di pubblicazione </label>
      <input type="date" class="form-control @error('date') is-invalid @enderror" value=" {{old('published_at')?: $post->published_at}} " name="published_at" id="published_at">
      @error('date')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="category_id">Categoria</label>
        <select class="form-control" name="category_id" id="category_id">
          <option value="">-- Nessuna --</option>
          @foreach ($categories as $category)
            <option {{ old('category_id', optional($post->category)->id) == $category->id? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
    </div>
    @error('category_id')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <label>Tag</label>
    <div class="d-flex" style="gap:1rem">
      @foreach ($tags as $tag)
      <div class="mb-3 form-check">
        <input type="checkbox" {{$post->tags->contains($tag)? 'checked' : ''}} class="form-check-input" value="{{$tag->id}}" name="tags[]" id="tags-{{$tag->id}}">
        <label class="form-check-label" for="tags-{{$tag->id}}">{{$tag->name}}</label>
      </div>
      @endforeach
    </div>
    @error('tags')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  
    <div class="mb-3">
      <label for="content" class="form-label">Contenuto</label>
      <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3"> {{old('content')?: $post->content}} </textarea>
      @error('content')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
  
    <button class="btn btn-primary" type="submit">Modifica</button>
  
  </form>
</div>
@endsection