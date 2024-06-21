@extends('layout')

@section('content')
    <h1 class="mb-4">Items</h1>
    <a href="{{ route('CrudTanpaGambar.create') }}" class="btn btn-primary mb-3">Create Item</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crud as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>
                        <a href="{{ route('CrudTanpaGambar.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('CrudTanpaGambar.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
