<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Toko Obat</h2>
    <table class="table">
        {{-- table head --}}
        <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
        </tr>
        </thead>
        {{-- end table head --}}
        
        {{-- table body --}}
        <tbody>
            @foreach ($result as $r)
            {{-- $result ada pada controller --}}
        <tr>
            <td>{{$r->name }}</td>
            <td>{{$r->description }}</td>
        </tr>
        @endforeach
        </tbody>
        {{-- end table body --}}

    </table>
</div>

</body>
</html>
