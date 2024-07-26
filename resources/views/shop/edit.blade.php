@extends('layouts.admin_layouts')
@section('title','Product editing')
@section('content')
<div class="pt-3 pl-3">
   <h3>Product editing page</h3>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
</div>
<div class="card-body pb-0">
   <form action="{{route('shop.update',$shop['id'])}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
         <label for="exampleInputEmail1">Title Goods</label>
         <input type="text" value="{{$shop['title']}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter the name of the product">
         <div class="form-group mt-3">
            <label>Select a category</label>
            <select name="category" class="form-control" required>
               @foreach ($category as $categories)
               <option value="{{$categories['id']}}">{{$categories['title']}}</option>
               @endforeach
            </select>
         </div>
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">Price Goods</label>
         <input type="text" value="{{$shop['price']}}" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter the price of the product">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">New|Price Goods</label>
         <input type="text" value="{{$shop['new_price']}}" name="new_price" class="form-control" id="exampleInputEmail1" placeholder="Enter the  new price of the product">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">Availability</label>
         <input type="text" value="{{$shop['in_stock']}}" name="in_stock" class="form-control" id="exampleInputEmail1" placeholder="Enter the stock of the product">
      </div>
      <div class="form-group">
         <textarea name="content" class="editor"></textarea>
      </div>
      <div class="form-group">
         <label for="feature_image">Product photo</label>
         <img src="{{$shop['img']}}" alt="" class="img-uploaded" style="display:block">
         <input name="img" value="{{$shop['img']}}"  type="text"   class="form-control" id="feature_image" name="feature_image" value="" readonly>
         <a href="" class="popup_selector" data-inputid="feature_image">Select an image</a>
      </div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Edit Goods</button>
</div>
</form>
@endsection