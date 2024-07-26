@extends('layouts.admin_layouts')
@section('title','News creation')
@section('content')
<div class="pt-3 pl-3">
   <h2>News creation page</h2>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<div class="card-body pb-0">
   <form action="{{route('post.store')}}" method="post">
      @csrf
      <div class="form-group">
         <label for="exampleInputEmail1">Title Post</label>
         <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter the title of the news">
         <div class="form-group mt-3">
            <label>Select a category</label>
            <select name="cat_id" class="form-control" required>
               @foreach ($category as $categories)
               <option value="{{$categories['id']}}">{{$categories['title']}}</option>
               @endforeach
            </select>
         </div>
      </div>
      <div class="form-group">
         <textarea name="content" class="editor"></textarea>
      </div>
      <div class="form-group">
         <label for="feature_image">News photo</label>
         <img src="" alt="" class="img-uploaded" style="display:block">
         <input name="img" type="text" class="form-control" id="feature_image" name="feature_image" value="" readonly>
         <a href="" class="popup_selector" data-inputid="feature_image">Select an image</a>
      </div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Add news</button>
</div>
</form>
@endsection