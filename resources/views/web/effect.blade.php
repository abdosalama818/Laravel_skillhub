<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>button</title>
</head>
<body>
    <h1>hgggggggggggggg</h1>

    <h1>{{ $effect->status }}</h1>



    @if ($effect->status == 0)

    <button type="button" disabled >Click Me!</button>

  @elseif ($effect->status == 1)

 <button type="button" >Click Me!</button>

   @endif









</body>
</html>
