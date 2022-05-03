@extends('layouts.app')

@section('content')
<div class="container">
  <table>
    <th>Titolo</th>
    <th>Data di pubblicazione</th>
    @foreach($posts as $post)
      <tr>
        <td> {{$post->title}} </td>
        <td> {{$post->published_at}} </td>
      </tr>
    @endforeach
  </table>
</div>
@endsection