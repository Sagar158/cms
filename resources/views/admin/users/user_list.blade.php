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
  <div class="users-list-filter">
    <div class="card-panel">
      <div class="row">
        <form>
          <div class="col s12 m6 l3">
            <label for="users-list-verified">Verified</label>
            <div class="input-field">
              <select class="form-control" id="users-list-verified">
                <option value="">Any</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <label for="users-list-role">Role</label>
            <div class="input-field">
              <select class="form-control" id="users-list-role">
                <option value="">Any</option>
                <option value="User">User</option>
                <option value="Staff">Staff</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <label for="users-list-status">Status</label>
            <div class="input-field">
              <select class="form-control" id="users-list-status">
                <option value="">Any</option>
                <option value="Active">Active</option>
                <option value="Close">Close</option>
                <option value="Banned">Banned</option>
              </select>
            </div>
          </div>
          <div class="col s12 m6 l3 display-flex align-items-center show-btn">
            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
 
  <div class="users-list-table">
    <div class="card">
    <div class="col s12 m6 l3 display-flex align-items-center show-btn right mb-3 mt-3">
            <a href="{{url('/user-add')}}" class="btn btn-block indigo waves-effect waves-light">Add User</a>
          </div>
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Verified</th>
                <th>Role</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
            @php
                    $i = 0;
                  @endphp
                  @if(isset($users) && !empty($users))
                  @foreach ($users as $key => $value)
                  @php
                    $i = $i + 1;
                    $edit_url = url('/users/edit/'.$value->id);
                  @endphp
              <tr>
                <td></td>
                <td>{{$i}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>Yes</td>
                <?php
                $role  = App\Role::where('id', $value->id)->first();
                ?>
                <td>
                {{$role->name}}
                </td>
                <td><span class="chip green lighten-5">
                    <span class="green-text">Active</span>
                  </span>
                </td>
                <td><a href="{{$edit_url}}"><i class="material-icons">edit</i></a></td>
                <td><a href="#"><i class="material-icons" style="color: red;">clear</i></a></td>
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