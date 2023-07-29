@extends('layouts.master')


@section('content')
<!-- Main content -->

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category-Name</th>
                <th>Description</th>
              
              </tr>
            </thead>
            <tbody>
              @foreach  ($pro as $x) 
             <tr>
                <td>{{$x->id}}</td>
                <td>{{$x->category_name}}</td>
                <td>{{$x->description}}</td>
               <td> <a href="{{route('ecomerce.edit',$x->id)}}" class="btn btn-primary">Edit</a>  
        <form action="{{route('ecomerce.destroy',$x->id)}}" method="post" >
            @csrf
            @method('DELETE') 
            <button type="submit" class="btn btn-primary" style="background-color: crimson"> Delete</button> 
        </form>
        </td>
            </tr>    
               @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

<!-- /.content--->
@stop