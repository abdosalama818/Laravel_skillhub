<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status</title>
</head>
<body>

<form action="{{ url('/status/store') }}" method="post">
    @csrf
    <select name="value">
        <option >choose</option>

        <option value="1">Enable</option>
        <option value="0">Disable</option>

    </select>

    <button type="submit"> submite</button>
</form>
    <br>


</body>
</html>
