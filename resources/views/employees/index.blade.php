@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Employees List</h1>
            <a href="{{ route('employees.create') }}" class="btn btn-success">Tambah Employee</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $employees->links() }} <!-- Display pagination links -->
    </div>
@endsection