@extends('backend.layouts.master')

@section('content')

<h1>All Categories</h1>

@if(Session::has('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif

@if(Session::has('deleted_categories'))
<p class="alert alert-danger">{{session('deleted_categories')}}</p>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Edit</th>
      <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @if($category)
    @foreach($category as $categories)
    <tr>
      <th>{{$categories->id}}</th>
      <td>{{$categories->name}}</td>
      <td>{{$categories->created_at? $categories->created_at->diffForHumans(\Carbon\Carbon::now()): 'doesn\'t exits' }}
      </td>
      <td>{{$categories->updated_at? $categories->updated_at->diffForHumans(\Carbon\Carbon::now()): 'doesn\'t exits'}}
      </td>
      <td>
        <a href="{{route('categories.edit', $categories->id)}}" class="btn btn-success">Edit</a>
    </td>
    <td>
        {!! Form::open(['method'=>'DELETE', 'action'=> ['CategoryController@destroy',$categories->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
@endif
</tbody>
</table>

@endsection