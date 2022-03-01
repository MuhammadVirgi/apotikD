<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medicines</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .col-md-4{
            padding-top: 10px;
            max-width: 25%; 
            /* max width to make a maximum size of each image */
        }
        .midText {
            text-align: center;
        }
        .container{
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach($result as $r)
        <div class="col-md-3">
            <img src="{{ asset('img/'.$r->images) }}" class="img-thumbnail"/>
            <div class="midText">
                {{ $r->generic_name }}
            </div>
            <div class="midText">
                Rp. {{ $r->price }}
            </div>
        </div>
            @endforeach
    </div>
</body>
</html>
