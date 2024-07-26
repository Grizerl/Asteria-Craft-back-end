@extends('layouts.admin_layouts')
@section('title','Editing news')
@section('content')
<div class="pt-3 pl-3">
   <h2>Editing news page</h2>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<div class="card-body pb-0">
   <form action="{{route('post.update',$post['id'])}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
         <label for="exampleInputEmail1">Title Post</label>
         <input type="text" value="{{$post['title']}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введіть назву постів">
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
<button type="submit" class="btn btn-primary">Edit news</button>
</div>
</form>
@endsection