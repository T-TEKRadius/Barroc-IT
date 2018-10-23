<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            margin: 0px;
        }
        embed{
            display: block;
            background: #000;
            border: none;
            height: 100vh;
            width: 100vw;
        }
    </style>
    <title>Document</title>
</head>
<body>
<button type="submit" onclick="window.location='/sales/status/{{$file['id']}}';">Back</button>
<embed src= "{{URL::asset('uploads/'.$file['id'].'/'.$file['link'].'/'.$file['hash'].'.pdf')}}" width= "100%" >
</body>
</html>