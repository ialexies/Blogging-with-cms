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
        Trashed
      </th>
      <th>
        Permanent
      </th>
    </thead>
    <tbody>

      @if($posts->count() > 0)
        @foreach($posts as $post)
          <tr>
            <td><img src="{{$post->featured}}" style="max-width:50px"></td>
            <td>{{$post->title}}</td>
            <td>Edit</td>
            <td>
              <a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-success">Restore</a>
            </td>
            <td>
              <a href="{{route('post.kill',['id'=>$post->id])}}" class="btn btn-success">Delete</a>
            </td>
          </tr>
        @endforeach
      
      @else
        <tr>
          <th colspan="5"> Ther is no trashed post</th>
        </tr>
      @endif          

    </tbody>

  </table>
@stop