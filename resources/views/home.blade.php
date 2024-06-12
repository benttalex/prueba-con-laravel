<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-md-center">
        <form id="form"  class="col-3" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <strong id="name_error" class="text-danger">error</strong>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <strong id="email_error" class="text-danger">error</strong>
            </div>

            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>
</div>


</body>
</html>
