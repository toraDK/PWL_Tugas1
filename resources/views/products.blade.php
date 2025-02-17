<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>List Produk</h3>

    @if(isset($food))
        <h4>Food & Beverage</h4>
        <ul>
            @foreach ($food as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($beverage))
        <h4>Beverage</h4>
        <ul>
            @foreach ($beverage as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($beauty))
        <h4>Beauty & Health</h4>
        <ul>
            @foreach ($beauty as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($home))
        <h4>Home Care</h4>
        <ul>
            @foreach ($home as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($baby))
        <h4>Baby & Kids</h4>
        <ul>
            @foreach ($baby as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>