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

    <form action="{{ route('CrudTanpaGambar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Slug:</label>
            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
@endsection
