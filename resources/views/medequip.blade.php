<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            text-align: center;
            }
        .foto{
            border: 1px solid rgb(0, 0, 0);
            border-radius: 5px;
            padding: 5px;
            width: 250px;
        }

        
        * {
        box-sizing: border-box;
        }

        .column {
        float: left;
        width: 33.33%;
        padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
        content: "";
        clear: both;
        display: table;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Medicine</h1>
        <div class="row">
            <div class="column">
                <p>Kursi Roda</p>
                <a href="medequip/1">
                    <img src="{{asset('img/kr.jpg')}}" class ="foto">
                </a>
            </div>
            <div class="column">
                <p>Oxigen</p>
                <a href="medequip/2">
                    <img src="{{asset('img/oxi.jpg')}}" class ="foto">
                </a>
            </div>
            <div class="column">
                <p>Mask</p>
                <a href="medequip/3">
                    <img src="{{asset('img/mask.jpeg')}}" class ="foto">
                </a>
            </div>
        </div>
    </div>
</body>
</html>