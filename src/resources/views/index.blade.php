<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>

    @foreach($details as $detail)

        <li><img src="{{ strip_tags($detail['avatar']) }}" alt="" > </li>
        <li>{{ $detail['company'] }}</li>
        <li>{{ $detail['name'] }}</li>
        <li>{{ strip_tags($detail['bio']) }}</li>
        <br>
        <br>

    @endforeach

</ul>

    <div>
        {{ $details->links() }}
    </div>

</body>
</html>