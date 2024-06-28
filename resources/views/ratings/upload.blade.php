<!-- resources/views/ratings/upload.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Upload Rating Data</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('ratings.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Select Excel File</label>
                <input type="file" name="file" id="file" class="form-control-file" accept=".xls,.xlsx" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('ratings.index') }}" class="btn btn-secondary">View Rating Data</a>
        </div>
    </div>
@endsection
