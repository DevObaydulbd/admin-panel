@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
  <div class="card card-info">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title">User Details</h3>
      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $user->name }}</dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{ $user->email }}</dd>

        <dt class="col-sm-3">Created At</dt>
        <dd class="col-sm-9">{{ $user->created_at->format('d M Y, h:i A') }}</dd>
      </dl>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
</div>
@endsection
