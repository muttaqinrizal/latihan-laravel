@extends('layout')

@section('title')
  home  
@endsection

@section('name')
<form action="{{ url('create') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
