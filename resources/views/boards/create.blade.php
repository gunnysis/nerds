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
    <div class="container d-flex justify-content-center">
        <section class="">
            <p class="d-flex justify-content-center" style="font-size: 3rem">글쓰기</p>
            <form action="/boards" method="post" class="">
                @csrf
                <p class="d-flex justify-content-center">
                    <label for="title" class="text-black">제목 : </label>
                    <input type="text" id="title" name="title" style="width: 65vw;">
                </p>
                <p class="d-flex justify-content-center">
                    <label for="story" class="text-black">내용 : </label>
                    <textarea id="story" name="story" style="height: 40vh; width: 65vw;"
                              class=""></textarea>
                </p>

                <p class="d-flex justify-content-center" style="">
                    <input type="submit" value="작성"
                           class="btn btn-primary" style="margin-right: 20px">
                    <input type="button" value="취소" onclick="history.back()"
                           class="btn btn-danger">
                </p>
            </form>
        </section>
    </div>
</body>
</html>
