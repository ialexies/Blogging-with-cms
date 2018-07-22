
@extends('layouts.app')



@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header">Create an new Category</div>

    <div class="card-body">
    <form action="{{route('category.store')}}" method="post" >
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Name</label>
          <input type="text" name="name" class="form-control">
        </div>      
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">
              
                Store category
              
            </button>
          </div>
        </div>     
      </form>
    </div>
</div>



@stop