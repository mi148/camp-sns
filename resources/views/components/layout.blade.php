<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
<div class="sm:flex-wrap md:flex-wrap bg-yellow-400 h-full py-1">
    <div class="m-6">
        <div class="text-white text-2xl">ギアシェア</div>
        <div class="text-white">キャンプギア情報交換SNS</div>
    </div>
    <div class="flex-1 bg-white px-8 py-2 m-6 rounded-lg h-full">
        {{ $contents }}
    </div>
</div>

</body>
</html>
