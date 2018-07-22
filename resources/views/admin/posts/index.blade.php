@extends('layouts.app')

@section('content')
  <table class="table table-hover  table-striped ">
    <thead>
      <th>
        Image
      </th>  
      <th>
        Title
      </th>
      <th>
        Edit
      </th>
      <th>
        Delete
      </th>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr>
          <td><img src="{{$post->featured}}" style="max-width:50px"></td>
          <td>{{$post->title}}</td>
          <td>Edit</td>
          <td>
            <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger">Trash</a>
          </td>
        </tr>
      @endforeach
    </tbody>

  </table>
@stop