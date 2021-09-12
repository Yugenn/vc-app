<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCApp - Language</title>
</head>

<body>
    <ul>
    @foreach ($language as $lang)
    <li>{{ $lang }}</li>
    @endforeach
</ul>
</body>
</html>