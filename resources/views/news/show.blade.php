@extends('news.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-right">
            <h1> News Details </h1>
            <hr>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h3 style="color: purple;font-family: Arial, Helvetica, sans-serif;"><strong>Title  </strong></h3>
            <p><strong>{{ $news->title }}</strong></p>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h3><strong style="color: purple;font-family: Arial, Helvetica, sans-serif;">Description </strong></h3>
            <p> {{ $news->description }} </p>

        </div>
    </div>
</div>
<hr>
<div class="text-left">
    <a class="btn btn-primary text-right" href="{{ route('news.index') }}"> Back</a>
</div>
@endsection