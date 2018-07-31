@extends('layouts.app')


@section('content')
  <table class="table table-hover">
    <thead>
      <th>
        Tag Name
      </th>  
      <th>
        Editing
      </th>
      <th>
        Deleting
      </th>   
    </thead>
    <tbody>
      @if($tags->count() > 0)
        @foreach($tags as $tag)
          <tr>
            <td>
              {{$tag->tag}}
            </td>
            <td>
              <a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-info btn-xs">Edit</a>
          
            </td>
            <td>
              <a href="{{route('tag.delete',['id'=>$tag->id])}}" class="btn btn-danger btn-xs">delete</a>
          
            </td>
          </tr>
        @endforeach

      
        @else
          <tr>
            <th colspan="5"> Ther is no tags yet</th>
          </tr>
      @endif   
    </tbody>

  </table>
@stop