@include('layouts.header')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel 8 Image Upload Example - codeanddeploy.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @media (max-width: 767.98px) {
            .upload {
                display: flex;
                flex-direction: column;
            }
            .upload_btn {
                padding-top: 20px;
                position: relative;
                left: 80px;
                width: 40%;
            }

            .back_btn {
                position: relative;
                top: 55px;
                left: -73px;
                width: 80px;
                border-radius: 3px;

            }
        }


    </style>
</head>

<body>
<div class="container mt-5 d-flex justify-content-center">


    <form action="{{ route('gallery.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="upload col d-flex">

            <div class="row">
                <input type="file" name="image" class="form-control">
                @if ($errors->has('image'))
                    <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                @endif
            </div>

            <div class="upload_btn row ml-4">
                <button type="submit" class="btn btn-success">업로드</button>
            </div>

        </div>

        @if(Session::get('success', false))
                <?php $data = Session::get('success'); ?>
            @if (is_array($data))
                @foreach ($data as $msg)
                    <div class="alert alert-success" role="alert">
                        <i class="fa fa-check"></i>
                        {{ $msg }}
                    </div>
                @endforeach
            @else
                <div class="alert alert-success mt-3" role="alert">
                    <i class="fa fa-check"></i>
                    {{ $data }}
                </div>
            @endif

        @endif
    </form>
    <div class="back_btn">
        <a href="{{ route('gallery.index') }}"><button class="back_btn">뒤로 가기</button></a>
    </div>

</div>
</body>
</html>
