<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Contact</title>
</head>
<body>
    <h1>Contact Mail</h1>
    {{$content['name']}}  {{$content['email']}}  {{$content['body']}}  {{$content['file']}}
    <div>
    <a href="{{env('APP_URL').Storage::url($content['file'])}}" download>
        Your File
    </a>
    </div>
</body>
</html>