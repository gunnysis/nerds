@include('layouts.header')
    <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <table class="table d-flex justify-content-center mt-3 mx-auto">
            <tr>
                <th>제목: </th>
                <td>{{ $board->title }}</td>
            </tr>
            <tr>
                <th>내용: </th>
                <td>{{ $board->story }}</td>
            </tr>
        </table>
    </section>
    <a href="{{ route('boards.index') }}"><button class="btn btn-primary ml-5 mt-3">처음으로</button></a>
</body>
</html>
