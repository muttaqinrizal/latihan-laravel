@extends('layout')

@section('title')
  home  
@endsection

@section('name')

<form action="{{ url('create') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $no => $datas)
      <tr>
        <th scope="row">{{ $no+1 }}</th>
        <td>{{ $datas->email }}</td>
        <td>
          <a href="{{ url("edit", $datas->id ) }}"><button type="button" class="btn btn-primary">Edit</button></a>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
