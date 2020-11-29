{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Users edit')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users edit start -->
<?php
      if (isset($user_data->id) && $user_data->id != 0) {
          $submit_url = url('/user/update/'. $user_data->id);
      } else {
          $submit_url = url('/user/add');
      }
    ?>
<div class="section users-edit">
  <div class="card">
    <div class="card-content">
      <!-- <div class="card-body"> -->
      <ul class="tabs mb-2 row">
        <li class="tab">
          <a class="display-flex align-items-center active" id="account-tab" href="#account">
            <i class="material-icons mr-1">person_outline</i><span>User Account</span>
          </a>
        </li>
      </ul>
      <div class="divider mb-3"></div>
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object start -->
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form id="accountForm" method="post" action="{{ $submit_url }}">
          @csrf
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value="{{$user_data->username ?? ''}}"
                      data-error=".errorTxt1">
                    <label for="username">Username</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate" value="{{$user_data->name ?? ''}}"
                      data-error=".errorTxt2">
                    <label for="name">Name</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value="{{$user_data->email ?? ''}}"
                      data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <select name="role">
                      <option> Select Role</option>
                      @if(isset($roles) && !empty($roles))
                      @foreach($roles as $key => $value)
                      <option value="{{$value->slug}}">{{$value->name}}</option>
                      @endforeach
                      @endif
                    </select>
                    <label>Role</label>
                  </div>
                  <div class="col s12 input-field">
                    <select name="status">
                      <option> Select Status</option>
                      <option value="1" <?php if(isset($user_data->status) && $user_data->status == 1){ echo "selected"; } ?>>Active</option>
                      <option value="0" <?php if(isset($user_data->status) && $user_data->status == 0){ echo "selected"; } ?> >Banned</option>
                    </select>
                    <label>Status</label>
                  </div>
                  @if(!isset($user_data->password))
                  <div class="col s12 input-field">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                  @endif
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn indigo">
                  Save changes</button>
                <button type="button" class="btn btn-light">Cancel</button>
              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection