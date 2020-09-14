@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
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


<form action="{{ route('users.store') }}" method="POST">
    	@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        
        <div class="form-group">
		            <strong>Email:</strong>
		            <input type="email" name="email" class="form-control" placeholder="Email">
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
            @foreach($roles as $role)
                <option value="{{$role->name}}">{{$role->name}}</option>
            @endforeach
            </select>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>


<br><br><br><br><br>
<p class="text-left text-primary"><small>Developed by Md. Akmal Hossain</small></p>
@endsection