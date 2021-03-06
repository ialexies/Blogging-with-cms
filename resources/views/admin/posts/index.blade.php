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
        Trash
      </th>
    </thead>
    <tbody>
      @if($posts->count() > 0)
        @foreach($posts as $post)
          <tr>
            <td><img src="{{$post->featured}}" style="max-width:50px"></td>
            <td>{{$post->title}}</td>
            <td>
            <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info">Edit</a>
            </td>
            <td>
              <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger">Trash</a>
            </td>
            
          </tr>
        @endforeach
          
      @else
        <tr>
          <th colspan="4"> Ther is no trashed post</th>
        </tr>
      @endif
    </tbody>

  </table>
@stop