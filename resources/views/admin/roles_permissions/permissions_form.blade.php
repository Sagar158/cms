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
      if (isset($permissions->id) && $permissions->id != 0) {
          $submit_url = url('/permissions/update/'. $permissions->id);
      } else {
          $submit_url = url('/add-permissions');
      }
    ?>
<div class="section users-edit">
  <div class="card">
    <div class="card-content">
      <!-- <div class="card-body"> -->
      <ul class="tabs mb-2 row">
        <li class="tab">
          <a class="display-flex align-items-center active" id="account-tab" href="#account">
            <i class="material-icons mr-1">person_outline</i><span>Permissions</span>
          </a>
        </li>
      </ul>
      <div class="divider mb-3"></div>
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object start -->
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form id="accountForm" method="post" action="{{$submit_url}}">
            @csrf
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="role" name="name" type="text" class="validate" value="{{$permissions->name ?? ''}}"
                      data-error=".errorTxt1">
                    <label for="role">Permissions</label>
                    <small class="errorTxt1"></small>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                <div class="col s12 input-field">
                    <input id="slug" name="slug" type="text" class="validate" value="{{$permissions->slug ?? ''}}" placeholder="Slug" data-error=".errorTxt2" readonly>
                    <small class="errorTxt2"></small>
                  </div>
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

