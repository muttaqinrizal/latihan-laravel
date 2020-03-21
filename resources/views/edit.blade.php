@extends('layout')

@section('title')
  home  
@endsection

@section('name')
<form action="{{ url('edit', $data->id) }}" method="post">
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="patch">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
