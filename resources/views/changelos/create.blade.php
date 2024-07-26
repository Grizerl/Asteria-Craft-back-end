@extends('layouts.admin_layouts')
@section('title','Change creation')
@section('content')
<div class="pt-3 pl-3">
   <h3>Changelog creation page</h3>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<div class="card-body pb-0">
   <form action="{{route('change.store')}}" method="post">
      @csrf
      <div class="form-group">
         <label for="exampleInputEmail1">Title the change or update</label>
         <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter the title change or update">
      </div>
      <label for="exampleInputEmail1">Сontent changes or updates</label>
      <div class="form-group">
         <textarea name="content" class="editor"></textarea>
      </div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Add changes</button>
</div>
</form>
@endsection