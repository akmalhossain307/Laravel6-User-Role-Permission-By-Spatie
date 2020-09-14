@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>
        <div class="text-right">
            <a class="btn btn-danger" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('users.update',$user->id) }}" method="POST">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control"value="{{$user->name}}">
		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        
        <div class="form-group">
		            <strong>Email:</strong>
		            <input type="email" name="email" class="form-control" value="{{$user->email}}">
		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        
        <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
           
            <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
       
        <div class="form-group">
                <strong>Role:</strong>

            <select class="form-control" name="roles">
            @foreach($userRole as $urole)
                @foreach($roles as $role)
                @if($urole==$role)
                <option value="{{$role}}" selected >{{$role}}</option>
                @else 
                <option value="{{$role}}" selected >{{$role}}</option>
                @endif 
                @endforeach
            @endforeach
            </select>

          


        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    @csrf
    @method('PATCH')
        <button type="submit" class="btn btn-primary">Update</button>
      
    </div>
</div>

</form>


<p class="text-center text-primary"><small>Developed by Md. Akmal Hossain</small></p>
@endsection