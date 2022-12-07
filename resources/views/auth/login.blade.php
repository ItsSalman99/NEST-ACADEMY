<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ config('app.name') }}
    </title>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/logincss.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>

    <div class="vh-100 d-flex justify-content-center align-items-center ">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
            <h2 class="text-center mb-4 text-primary">Sign In</h2>
            @if ($errors->any())
                <div class="bg-danger p-4" style="border-radius: 20px;">
                    <div class="text-white">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="text-white navbar-nav">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control border border-primary" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-primary">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>

</body>

</html>
