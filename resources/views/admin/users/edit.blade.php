@extends('layouts.admin')

@section('title','Users List')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @if (session('massage'))
                <div class="alert alert-success">{{ session('massage') }}</div>
            @endif

            @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            
            <div class="card-header">
                <h3>Add Users
                    <a href="{{ url('admin/users') }}" class="btn btn-danger btn-sm float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/users/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Select Role</label>
                            <select name="role_as" class="form-control">
                                <option value="">Select Role</option>
                                <option value="0" {{ $user->role_as == '0' ? 'selected':'' }}>User</option>
                                <option value="1" {{ $user->role_as == '1' ? 'selected':'' }}>Admin</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection