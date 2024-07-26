@extends('layouts.admin_layouts')
@section('title','Category creation')
@section('content')
<div class="pt-3 pl-3">
   <h3>Category creation page</h3>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<div class="card-body pb-0">
   <form action="{{route('category.store')}}" method="post">
      @csrf
      <div class="form-group">
         <label for="exampleInputEmail1">Title Category</label>
         <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
      </div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Add category</button>
</div>
</form>
@endsection