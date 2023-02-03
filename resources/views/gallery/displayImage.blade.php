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
    <div class="container">
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('gallery.uploadForm') }}"><button class="btn btn-primary">사진 올리기</button></a>
        </div>
        <section class="d-flex justify-content-center mx-5">
            <ul class="list-unstyled row">
            @foreach(File::glob(public_path('images/gallery').'/*') as $path)
                <li class="my-2 mx-2"><img style="object-fit: cover; width: 200px; height: 200px;" class="rounded col img-thumbnail img-fluid" src="{{ str_replace(public_path(), '', $path) }}"></li>
            @endforeach
            </ul>
        </section>
    </div>
</body>
</html>

