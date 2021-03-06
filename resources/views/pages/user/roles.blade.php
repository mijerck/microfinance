@extends('layouts.app')
@section('content')
          <!-- DATATABLE -->
          <div class="card card-default">
            <div class="content-heading "><h2>Roles</h2></div>
          <div class="card">
             <div class="card-header"><br>
             <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                   <thead>
                      <tr>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Active</th>
                         <th>Status</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr class="gradeC">
                         <td>Hawa12</td>
                         <td>Head Office</td>
                         <td><i class="fa fa-check"></i></td>
                         <td><a href="/user/role"><button class="btn btn-primary"><i class="fa fa-eye" style="color:white">&nbsp;view</i></a></td>
        
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
