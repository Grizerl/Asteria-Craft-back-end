@extends('layouts.admin_layouts')
@section('title','Category editing')
@section('content')
<div class="pt-3 pl-3">
   <h3>Category editing page</h3>
   @if(session('success'))
   <div class="alert alert-success mt-2" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<div class="card-body pb-0">
   <form action="{{route('category.update',$category['id'])}}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
         <label for="exampleInputEmail1">Title Category</label>
         <input type="text" value="{{$category['title']}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
      </div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Edit categories</button>
</div>
</form>
@endsection