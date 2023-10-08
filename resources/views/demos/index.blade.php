@extends('layouts.app')
@section('main')

<div class="container">
    <div class="text-right">
      <a href="demos/create" class="btn btn-dark mt-2">New Demo</a>
</div>
<table class="table table-hover mt-2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($demos as $demo)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td> 
        <a href="demos/{{$demo->id}}/show" class="text-dark">{{$demo->name}}</a>
      </td>
      <td>{{$demo->description}}</td>
      <td><img src="demos/{{$demo->image}}" alt=""></td>
      <td>
        <a href="demos/{{$demo->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
        <form method="POST" class="d-inline" action="demos/{{$demo->id}}/delete">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$demos->links()}}

</div>

@endsection