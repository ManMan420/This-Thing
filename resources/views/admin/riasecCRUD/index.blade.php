<!DOCTYPE html>
<html>
    <head>
        <title>AI Test</title>
    </head>

    <body>
        <ol>
            @foreach($items as $item)
                <li>{{$item->name}} - {{$item->description}}</li>
            @endforeach
        </ol>
    <body>
</html>