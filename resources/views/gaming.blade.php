<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: #fff;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .error {
            color: red;
            font-size: 1.2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gaming List</h1>

        @if (isset($data['error']))
            <div class="error">
                <p>Error: {{ $data['error'] }}</p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Team Name</th>
                        <th>Country</th>
                        <th>Sport</th>
                        <th>Score</th>
                        <th>User Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['results'] as $gaming)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $gaming['entity']['name'] ?? 'N/A' }}</td>
                            <td>{{ $gaming['entity']['country']['name'] ?? 'N/A' }}</td>
                            <td>{{ $gaming['entity']['sport']['name'] ?? 'N/A' }}</td>
                            <td>{{ number_format($gaming['score'] ?? 0, 2) }}</td>
                            <td>{{ $gaming['userCount'] ?? 0 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
