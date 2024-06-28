<!-- resources/views/ratings/pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Rating Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Rating Data</h1>

    <table>
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
</body>
</html>
