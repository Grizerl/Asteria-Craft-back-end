@extends('layouts.admin_layouts')
@section('title','All Help')
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
         <h3 class="card-title">All|Help</h3>
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
                  <th style="width: 4%">
                     ID
                  </th>
                  <th style="width: 20%">
                     Email
                  </th>
                  <th style="width: 30%">
                     Question
                  </th>
                  <th style="width: 30%">
                     Date of request
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach ($help as $helps)
               <tr>
                  <td>{{ $helps['id'] }}</td>

                  <td>{{ $helps['email'] }}</td>

                  <td>{{ $helps['content'] }}</td>

                  <td>{{ $helps['created_at'] }}</td>
                  
                  <td class="project-actions text-right" style="display: inline-flex;">
                     <form action="{{route('help.destroy',$helps['id'])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                        <i class="fas fa-trash"></i>Remove
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