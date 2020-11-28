{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','App Email')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/quill.snow.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-email.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- Sidebar Area Starts -->
<div class="email-overlay"></div>
<div class="sidebar-left sidebar-fixed">
  <div class="sidebar">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <div class="sidebar-details">
          <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">mail_outline</i> Mailbox</h5>
          <div class="row valign-wrapper mt-10 pt-2 animate fadeLeft">
            <div class="col s3 media-image">
              <img src="{{asset('images/user/2.jpg')}}" alt="" class="circle z-depth-2 responsive-img">
              <!-- notice the "circle" class -->
            </div>
            <div class="col s9">
              <p class="m-0 subtitle font-weight-700">Lawrence Collins</p>
              <p class="m-0 text-muted">lawrence.collins@xyz.com</p>
            </div>
          </div>
        </div>
      </div>
      <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft">
        <div class="sidebar-list-padding app-sidebar sidenav" id="email-sidenav">
          <ul class="email-list display-grid">
            <li class="sidebar-title">Folders</li>
            <li><a href="{{asset('message/inbox')}}" class="text-sub"><i class="material-icons mr-2"> mail_outline </i> Inbox</a>
            </li>
            <li><a href="{{asset('message/sentMessage')}}" class="text-sub"><i class="material-icons mr-2"> send </i> Sent</a></li>
            <li class="active"><a href="{{asset('message/trash')}}" class="text-sub"><i class="material-icons mr-2"> delete </i> Trash</a></li>
            <li class="sidebar-title">Filters</li>
            <li><a href="{{asset('message/Star')}}" class="text-sub"><i class="material-icons mr-2"> star_border </i> Starred</a></li>
            <li><a href="{{asset('message/important')}}" class="text-sub"><i class="material-icons mr-2"> label_outline </i> Important</a></li>
            <li class="sidebar-title">Labels</li>
            <li><a href="#!" class="text-sub"><i class="purple-text material-icons small-icons mr-2">
                  fiber_manual_record </i> Note</a></li>
            <li><a href="#!" class="text-sub"><i class="amber-text material-icons small-icons mr-2">
                  fiber_manual_record </i> Paypal</a></li>
            <li><a href="#!" class="text-sub"><i class="light-green-text material-icons small-icons mr-2">
                  fiber_manual_record </i> Invoice</a></li>
          </ul>
        </div>
      </div>
      <a href="#" data-target="email-sidenav" class="sidenav-trigger hide-on-large-only"><i
          class="material-icons">menu</i></a>
    </div>
  </div>
</div>
<!-- Sidebar Area Ends -->

<!-- Content Area Starts -->
<div class="app-email">
  <div class="content-area content-right">
    <div class="app-wrapper">
      <div class="app-search">
        <i class="material-icons mr-2 search-icon">search</i>
        <input type="text" placeholder="Search Mail" class="app-filter" id="email_filter">
      </div>
      
      <div class="card card card-default scrollspy border-radius-6 fixed-width">
      <form id="delete" method="post" action="/deleteTrash"> 
        @csrf
        @method('delete')
        <div class="card-content p-0 pb-2">
          <div class="email-header">
            <div class="left-icons">
           
              <span class="header-checkbox">
                <label>
                  <input type="checkbox" onClick="toggle(this)" id="selectAll" />
                  <span></span>
                </label>
              </span>
              <span class="action-icons">
                <i class="material-icons">refresh</i>
                <i class="material-icons">mail_outline</i>
                <i class="material-icons">label_outline</i>
                <i class="material-icons">folder_open</i>
                <i class="material-icons">info_outline</i>
               
                <a href="javascript:void(0);" onclick="document.getElementById('delete').submit();">
                 <i class="material-icons delete-mails" id="deleteAllSelectedRecords">delete</i>
                </a>
                
              </span>
            </div>
            <div class="list-content"></div>
            <div class="email-action">
              <span class="email-options"><i class="material-icons grey-text">more_vert</i></span>
            </div>
          </div>


        
          <div class="collection email-collection">
          @foreach($messages as $inbox)
            <div class="email-brief-info collection-item animate fadeUp delay-1">
              <div class="list-left">
                <label>
                  <input type="checkbox" name="ids" class="checkBoxMessage" value="{{$inbox->id}}"/>
                  <span></span>
                </label>
                <div class="favorite">
                  <i class="material-icons" name="star" value="">star_border</i>
                </div>
                <div class="email-label">
                  <i class="material-icons">label_outline</i>
                </div>
              </div>
              
              <a class="list-content" href="{{asset('app-email/content')}}">
                <div class="list-title-area">
                  <div class="user-media">
                    <img src="{{asset('images/user/2.jpg')}}" alt="" class="circle z-depth-2 responsive-img avtar">
                    <div class="list-title">Gorge Fernandis</div>
                  </div>
                  <div class="title-right">
                    <span class="attach-file">
                      <i class="material-icons">attach_file</i>
                    </span>
                    <span class="badge grey lighten-3"><i class="purple-text material-icons small-icons mr-2">
                        fiber_manual_record </i>Note</span>
                  </div>
                </div>
                
                <div class="list-desc">{{$inbox->message}}</div>
              </a>
            
              <div class="list-right">
                <div class="list-date">
                

                </div>
              </div>
            </div>
          @endforeach 
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Content Area Ends -->

@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/sortable/jquery-sortable-min.js')}}"></script>
<script src="{{asset('vendors/quill/quill.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-email.js')}}"></script>
@endsection


<script src="{{asset('js/jquery.js')}}"></script>

<!-- script that connect checkboxes -->
<script>

$(function(e){
  $("#selectAll").click(function(){
    $(".checkBoxMessage").prop('checked',$(this).prop('checked'));
  });
  $("#deleteAllSelectedRecords").click(function(){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });

      $.ajax({
        url:'',
        type:'DELETE',
        data:{
          ids:allids,
          _token:$("input[name_token]").val()
        },
        success:function(response){
          $each(allids,function(key,val){
            val.remove();
          })
        }
      })
  });
})

// $(document).ready(function(){ 
//     var timer;
//     var timeout = 5000; //Timeout duration
//     $('#email','#subject','#message','file').keyup(function(){
//         if(timer){
//             clearTimeout(timer);

//             }
//             timer =setTimeout(saveData,timeout)
        
//     });
//     $('#submit').click(function(){
//         saveData();
//     });

// });





$(document).ready(function(){

  function saveData(){
  var postId  =  $('#postId').val();
  var email   =  $('#email').val();
  var subject =  $('#subject').val();
  var message =  $('#message').val();
  var file    =  $('#file').val();

  if(email != '' && message !=''){
      $.ajax({

          url: '/sendMessage',
          method:'post',
          data:{id:id,email:email,subject:subject,message:file,file:file},
          dataType:'text',
          success:function(data){

            if(data !=''){
              $('id').val(data);
            }
            
            $('#saveData').text('Post save as Draft');
            setInterval(function(){
              
              $("#saveData").text()
            },2000)
          }
      });
  }
}

  setInterval(function(){
    // $('#delete').trigger('submit')
      saveData();
    }, 5000);
  
 
});


</script>
