@include('layouts.header')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="mx-3">
    <div class="container-fluid">
        <section>

            <div class="d-flex justify-content-center mx-5 mt-3">
                <h3 style="color: #89ba16;">게시판</h3>

            </div>

            <div>
                <table class="table text-center mt-3">
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>생성일</th>
                    </tr>
                    </thead>
                @foreach($boards as $board)
                        <tbody>
                        <tr>
                            <td>{{$board -> id}}</td>
                            <td><a href="{{ route('boards.show', $board->id) }}" style="color: #89ba16;">{{$board -> title}}</a></td>
                            <td>{{$board -> created_at -> format('Y-m-d')}}</td>
                        </tr>
                        </tbody>
                @endforeach
                </table>


                <div class="d-flex justify-content-end mx-3 mt-1">
                    <a href="{{route('boards.create')}}">
                        <button class="btn btn-primary">글쓰기</button>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                {{ $boards->links() }}
            </div>
        </section>


    </div>
</body>
</html>
