@extends('admin.layout.layout')

@section('content')

<div class="row">
@if($profile)
	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">User Profile</h3>
                 
                  <a href="{{url('admin/profileEdit/'.$profile->id)}}"<span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>

                  <a href="{{url('admin/deleteBack/users/'.$profile->id)}}" class="glyphicon glyphicon-trash" style="color:red;float:right;" onclick=" return confirm('Wanna Delete?')"></a>

                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                 <table id="example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                 <tr>
                 	<th>Name</th><td>{{$profile->name}}</td>
                 	
                 </tr>
                 <tr>
                 	<th>Email</th><td>{{$profile->email}}</td>
                 	
                 </tr>
                 <tr>
                 	<th>Password</th><td><a href="{{url('admin/changePassword/'.$profile->id)}}">Change Password</a></td>
                 	
                 </tr>
                 </table>
                </div>
    </div>
    @else 
    <table id="example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
    <tr>
        <td colspan="2">User Deleted or Not exist</td>
    </tr>
    </table>
    @endif
</div>
@stop
