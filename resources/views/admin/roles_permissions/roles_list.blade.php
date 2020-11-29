{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users list')

{{-- vendors styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users list start -->
<section class="users-list-wrapper section">
  <div class="users-list-table">
    <div class="card">
      <div class="col s12 m6 l3 display-flex align-items-center show-btn right mb-3 mt-3">
        <a href="{{url('/roles-add')}}" class="btn btn-block indigo waves-effect waves-light">Add Role</a>
      </div>
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Role</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
            @php
                    $i = 0;
                  @endphp
                  @if(isset($roles) && !empty($roles))
                  @foreach ($roles as $key => $value)
                  @php
                    $i = $i + 1;
                    $edit_url = url('/roles/edit/'.$value->id);
                  @endphp
              <tr>
                <td></td>
                <td>{{$i}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->slug}}</td>
                <td><a href="{{$edit_url}}"><i class="material-icons">edit</i></a></td>
                <td><a href="{{asset('page-users-view')}}"><i class="material-icons" style="color: red;">clear</i></a></td>
              </tr>
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>
<!-- users list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection