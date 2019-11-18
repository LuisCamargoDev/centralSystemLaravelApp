@extends('news.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-right">
            <h2>Creating News</h2>
            <hr>
        </div>
    </div>
</div>   
<form action="{{ route('news.store') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:280px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-success ">Create</button>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <hr>
                <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
            </div>
        </div>
    </div>
</form>
@endsection