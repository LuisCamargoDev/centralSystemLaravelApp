@extends('news.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">                            
                    <a class="btn btn-success" href="{{ route('news.create') }}" style="margin-bottom:10px;margin-top:10px;margin-left:0px; margin-right:0px;"> Create News</a>                    
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
            <th>Title</th>
            <th heigth="20px" >Description</th>
            <th width="220px" >Action</th>
        </tr>
        @foreach ($news as $new)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $new->title }}</td>
            <td>{{ $new->description }}</td>
            <td>
                <form action="{{ route('news.destroy',$new->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('news.show',$new->id) }}">Info</a>
    
                    <a class="btn btn-warning" href="{{ route('news.edit',$new->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $news->links() !!}
@endsection