@extends('layouts.admin')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
            
        <div class="card">
            <div class="card-header">
                <h3>Add Color
                    <a href="{{ url('admin/colors')}}" class="btn btn-primary btn-sm float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/create') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="">Nama Color</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Color Code</label>
                        <input type="text" name="code" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Color Status</label><br>
                        <input type="checkbox" name="status" style="width: 20px; height: 20px;" /> Checked=Hidden,UnChecked=Visible
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection