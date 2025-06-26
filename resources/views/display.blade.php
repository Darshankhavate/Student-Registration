<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h4>Student Information Data</h4>
    <a href="student">Back to Home</a>
    <form action="search" method="get" class="search-form">
        <input type="text" name="search" value="{{ @$search }}" placeholder="Search student">
        <button type="submit">Search</button>
    </form>

<table>
    <tr>
        <th>Student Full Name</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Zip Code</th>
        <th>E-mail</th>
        <th>Phone Number</th>
        <th>Course</th>
        <th>Action</th>
    </tr>
    @foreach ($students as $data )
        <tr>
            <td>{{ $data->first_name }}
                {{ $data->middle_name }}
                {{ $data->last_name }}
            </td>
            <td>{{ $data->dob }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->city }}</td>
            <td>{{ $data->state }}</td>
            <td>{{ $data->country }}</td>
            <td>{{ $data->zip }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->course }}</td>
            <td>
                <a href="{{ 'edit/' . $data->id }}" class="action-btn edit-btn">Edit</a>
                <a href="{{ 'delete/' . $data->id }}" class="action-btn delete-btn">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
{{ $students->links() }}
</body>
</html>