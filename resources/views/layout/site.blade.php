<!DOCTYPE html>
<html lang="us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .d-inline-flex{
            display: inline-flex;
        }
        .nav{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            min-height: 40px;
            background: transparent;
            color: white;
            font-size: large
        }
        .px-5{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .brand{
            color: black;
            font-weight: bold;
            text-decoration: none;
            font-size: x-large;
            font-family: sans-serif;
            margin-right: auto;
            padding-right: 10px
        }
        .nav-item{
            padding: 10px 20px;
            list-style-type: none;
            transition: 0.5s;
        }
        .nav-item:hover{
            background-color: black;
            color: whitesmoke;
        }
        .nav-link{
            color: inherit;
            text-decoration: none
        }
        .container{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
        body{
            background: linear-gradient(38deg, #e37d7d, #337da8);
            min-height: 100vh;
        }
        @media screen and (max-width:470px){
            .nav{
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    @include("include.navbar")
    <div class="container">
    @yield("container")
    </div>
</body>

</html>