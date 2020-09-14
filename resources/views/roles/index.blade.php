@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="text-left">
       
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
           
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            
        <form action="{{ route('roles.destroy',$role->id) }}" method="POST">     
                
                @can('edit post')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
               @endcan
               
         
                 @csrf
                 @method('DELETE')
                 <button type="submit" onclick="return confirm('Are you sure to delete this Role?')"class="btn btn-danger">Delete</button> 
         </form>
             
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}


<br><br><br><br>
<p class="text-center text-primary"><small>Developed by Md. Akmal Hossain</small></p>
@endsection