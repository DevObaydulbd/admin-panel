@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
    </div>
    <!-- /.card-header -->
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
          @error('name')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
          @error('email')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <!-- Password update optional -->
        <div class="form-group">
          <label for="password">Password (leave blank to keep current)</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="New password">
          @error('password')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update User</button>
      </div>
    </form>
  </div>
</div>
@endsection
