@extends('layouts.admin_layouts')
@section('title','Home')
@section('content')
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Welcome to the Admin|Panel {{$user['name']}}</h1>
         </div>
      </div>
   </div>
</div>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{$post}}</h3>
                  <p>All | News</p>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-newspaper"></i>
               </div>
               <a href="{{route('post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
               <div class="inner">
                  <h3>{{$category}}</h3>
                  <p>All | Categories</p>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-list"></i>
               </div>
               <a href="{{route('category.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success ">
               <div class="inner">
                  <h3>{{$shop}}</h3>
                  <p>All | Goods</p>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-tag"></i>
               </div>
               <a href="{{route('shop.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{$support}}</h3>
                  <p>All | Support</p>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-handshake-angle"></i>
               </div>
               <a href="{{route('help.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>
      <div class="row">
      </div>
   </div>
</section>
@endsection