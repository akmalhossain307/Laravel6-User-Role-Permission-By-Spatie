@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Role</h2>
        </div>
        <div class="text-right">
            <a class="btn btn-danger" href="{{ route('roles.index') }}"> Back</a>
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

<form action="{{ route('roles.update',$role->id) }}" method="POST">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" value="{{$role->name}}"class="form-control">
	</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
               
                <input type="checkbox" name="permission[]" value="{{$value->id}}" {{in_array($value->id, $rolePermissions) ? "checked" : ''}}> {{ $value->name }}
               
            <br/>



            @endforeach
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
