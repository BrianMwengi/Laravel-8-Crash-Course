@extends('layouts.app')

@section('content')
<div class ="text">
<h1 class="heading">This is the Blog page for all the posts</h1>
</div>

<div class="card-body">
<table class="table table-bordered mb-0">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Created By</th>
    </tr>
    </thead>
<tbody>
@foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->user->name }}</td>
        </tr>
        @endforeach
</tbody>
      </table>
  </div>
@endsection


