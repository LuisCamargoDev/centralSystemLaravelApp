@extends('news.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <h2>Editing News</h2>
                <hr>
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
  
    <form action="{{ route('news.update',$news->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: purple;font-family: Arial, Helvetica, sans-serif;">Title:</strong>
                    <input type="text" name="title" value="{{ $news->title }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: purple;font-family: Arial, Helvetica, sans-serif;">Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $news->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="text-left">
        <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
    </div>
@endsection