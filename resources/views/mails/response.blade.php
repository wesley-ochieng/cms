<DOCTYPE html>
<html>
<head>
    <title>Response</title>
</head>
<body>

<h1>Mail from: {{ \Illuminate\Support\Facades\Auth::user()->email }}</h1>
<p>Message: {!! $response['message'] !!}</p>

</body>
