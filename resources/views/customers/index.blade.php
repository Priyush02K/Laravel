<!DOCTYPE html>
<html>
<head>
    <title>Customer Pagination</title>
    <style>
        table { width: 70%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        .pagination { display: flex; list-style: none; gap: 8px; padding: 10px; }
        .pagination li { padding: 6px 12px; border: 1px solid #aaa; }
        .active { background-color: #007BFF; color: #fff; }
    </style>
</head>
<body>
    <h2>📋 Customer List</h2>

<table style="width: 100%; border-collapse: collapse;">
    <thead style="background-color: #f0f0f0;">
        <tr style="color: blue;"><th>ID</th><th>Name</th><th>Email</th></tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr style="background-color: {{ $loop->even ? '#e0e0e0' : 'white' }};">
                <td style="padding: 8px;">{{ $customer->id }}</td>
                <td style="padding: 8px;">{{ $customer->name }}</td>
                <td style="padding: 8px;">{{ $customer->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

    {{ $customers->links() }}
</body>
</html>
