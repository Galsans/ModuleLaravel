@extends('layout')

@section('content')
    <h1>Create Item</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('CrudTanpaGambar.update', $crud->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $crud->name }}">
        </div>
        <div class="form-group">
            <label>Slug:</label>
            <input type="text" class="form-control" name="slug" value="{{ $crud->slug }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
