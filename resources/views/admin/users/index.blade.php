@extends('backend.layouts.master')

@section('content')

<h1>All Users</h1>

@if(Session::has('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif

@if(Session::has('deleted_users'))
<p class="alert alert-danger">{{session('deleted_users')}}</p>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Edit</th>
    </tr>
</thead>
<tbody>
    @if($users)
    @foreach($users as $user)
    <tr>
      <th>{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->created_at? $user->created_at->diffForHumans(\Carbon\Carbon::now()): 'doesn\'t exits' }}
      </td>
      <td>{{$user->updated_at? $user->updated_at->diffForHumans(\Carbon\Carbon::now()): 'doesn\'t exits'}}
      </td>
      <td>
        <a href="{{route('users.edit', $user->id)}}" class="btn btn-success">Edit</a>
    </td>
</tr>
@endforeach
@endif
</tbody>
</table>

@endsection