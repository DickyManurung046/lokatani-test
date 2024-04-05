@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{ $employee->name }}</h1>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $employee->email }}</p>
                <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                <p><strong>Address:</strong> {{ $employee->address }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection