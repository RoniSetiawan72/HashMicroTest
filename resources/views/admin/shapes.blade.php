@extends('theme.default')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Shape List</title>
</head>
<body>
    <h2>Daftar Bentuk</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Luas</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $shape)
                <tr>
                    <td>{{ $shape['name'] }}</td>
                    <td>{{ $shape['type'] }}</td>
                    <td>{{ $shape['area'] }}</td>
                    <td>{{ $shape['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection

