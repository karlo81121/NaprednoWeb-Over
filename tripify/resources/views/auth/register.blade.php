<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register As</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/register-as.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
</head>

<body>
    @include('header')

    <div class="body-container">
        <div class="register-as-title">
            <h1>Register As</h1>
        </div>

        <div class="register-buttons mt-2">
            <button class="btn btn-dark mx-2" onclick="window.location = '{{ url('/register/user') }}'">USER</button>
            <button class="btn btn-dark mx-2"
                onclick="window.location = '{{ url('/register/agency') }}'">BUSINESS</button>
        </div>
    </div>

    @include('footer')
</body>

</html>
