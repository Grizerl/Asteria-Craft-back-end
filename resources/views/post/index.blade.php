@extends('layouts.admin_layouts')
@section('title','All News')
@section('content')
<section class="content">
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
   </div>
   @endif
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">All|News</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
         </div>
      </div>
      <div class="card-body p-0">
         <table class="table table-striped projects">
            <thead>
               <tr>
                  <th style="width: 1%">
                     ID
                  </th>
                  <th style="width: 20%">
                     Name of the news
                  </th>
                  <th style="width: 20%">
                     Category
                  </th>
                  <th style="width: 20%">
                     Text
                  </th>
                  <th style="width: 8%" class="text-center">
                     Status
                  </th>
                  <th style="width: 20%">
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach ($post as $posts)
               <tr>
                  <td>
                     {{$posts['id']}}
                  </td>
                  <td>
                     {{$posts['title']}}
                  </td>
                  <td>
                     {{$posts->category['title']}}
                  </td>
                  <td>
                     {{$posts['content']}}
                  </td>
                  <td class="project-state" style="width: 60%;">
                     <span class="badge badge-success">Success</span>
                  </td>
                  <td class="project-actions text-right" style="display: inline-flex;">
                     <a class="btn btn-info btn-sm mr-2" href="{{route('post.edit',$posts['id'])}}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit 
                     </a>
                     <form action="{{route('post.destroy',$posts['id'])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                        <i class="fas fa-trash">
                        </i>
                        Remove
                        </button>
                     </form>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</section>
@endsection