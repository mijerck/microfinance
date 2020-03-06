@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
       <div class="content-heading">
          <div>Users</div>
       </div>
       <div class="container-fluid">
          <!-- DATATABLE -->
          <div class="card">
             <div class="card-header"><br>
        
             <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                   <thead>
                      <tr>
                         <th>User Name</th>
                         <th>First Name</th>
                         <th>Last Name</th>
                         <th>Roles</th>
                         <th>Office Name</th>
                         <th>Email</th>
                         <th>Active</th>
                         <th>Status</th>
                      </tr>
                   </thead>
                   <tbody> 
                      <tr class="gradeC">
                         <td>Hawa12</td>
                         <td>Hawa</td>
                         <td>Ally</td>
                         <td>Admin</td>
                         <td>Head Office</td>
                         <td>demo@gmail.com</td>
                         <td>Yes</td>
                         <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                      </tr>
                      
                   </tbody>
                </table>
             </div>
         
          </div>
          
    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    @endsection