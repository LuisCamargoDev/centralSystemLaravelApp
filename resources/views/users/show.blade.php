@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <h1> User Details</h1>     
                <hr>           
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3  style="color: green;font-family: Arial, Helvetica, sans-serif;"><strong>Name </strong></h3>                          
                {{ $user->name }}                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3  style="color: green;font-family: Arial, Helvetica, sans-serif;"><strong>E-mail </strong></h3>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3  style="color: green;font-family: Arial, Helvetica, sans-serif;"><strong>Password </strong></h3>
            <div class="form-group">
                {{ $user->password }}
            </div>
        </div>
    </div>   
    <hr>
    <a class="btn btn-primary text-center" href="{{ route('users.index') }}" style="margin-bottom:10px;margin-top:10px;margin-left:0px; margin-right:0px;"> Back</a>
            
@endsection