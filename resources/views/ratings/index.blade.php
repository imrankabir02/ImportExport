<!-- resources/views/ratings/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>Rating Data</h1>
        <a href="{{ route('ratings.upload') }}" class="btn btn-secondary">Upload Data</a>
        <div class="mb-4">
            <a href="{{ route('ratings.export.csv') }}" class="btn btn-primary">Export as CSV</a>
            <a href="{{ route('ratings.export.pdf') }}" class="btn btn-primary">Export as PDF</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Code</th>
                <th>Title</th>
                <th>Main Category</th>
                <th>Platform</th>
                <th>Price</th>
                <th>Number of Ratings</th>
                <th>Number of Reviews</th>
                <th>5 Stars</th>
                <th>4 Stars</th>
                <th>3 Stars</th>
                <th>2 Stars</th>
                <th>1 Star</th>
                <th>Fulfilled</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ratings as $rating)
            <tr>
                <td>{{ $rating->code }}</td>
                <td>{{ $rating->title }}</td>
                <td>{{ $rating->maincateg }}</td>
                <td>{{ $rating->platform }}</td>
                <td>{{ $rating->actprice1 }}</td>
                <td>{{ $rating->norating1 }}</td>
                <td>{{ $rating->noreviews1 }}</td>
                <td>{{ $rating->star_5f }}</td>
                <td>{{ $rating->star_4f }}</td>
                <td>{{ $rating->star_3f }}</td>
                <td>{{ $rating->star_2f }}</td>
                <td>{{ $rating->star_1f }}</td>
                <td>{{ $rating->fulfilled1 ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $ratings->links() }}
    </div>
</div>
@endsection
