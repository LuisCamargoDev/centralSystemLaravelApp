@extends('users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <h2>Editing User Info</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: green;font-family: Arial, Helvetica, sans-serif;">Name:</strong>
                <input type="text" name="name" value="{{ $user->name }}"class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  style="color: green;font-family: Arial, Helvetica, sans-serif;">E-mail:</strong>
                <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="E-mail">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  style="color: green;font-family: Arial, Helvetica, sans-serif;" >Password:</strong>
                <input type="text" class="form-control" value="{{ $user->password }}" name="password" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: green;font-family: Arial, Helvetica, sans-serif;">CPF:</strong>
                <input type="text" class="form-control" name="cpf" value="{{ $user->cpf }}" placeholder="CPF">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Save Edition</button>
            </div>
        </div>
        <div class="pull-right">
            <hr>
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    </div>
   
    </form>
@endsection