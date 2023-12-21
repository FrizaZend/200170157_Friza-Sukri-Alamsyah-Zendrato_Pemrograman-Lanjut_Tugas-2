<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <style>
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            place-content: center;
            place-items: center;
        }

        .form-container {
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);
            margin-top: 100px;
            min-width: 220px;
        }

        .form-container h1 {
            text-align: center;
        }

        .btn {
            display: block;
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h1 class="animated fadeInUp">Login</h1>
            <hr>
            <br>
            <br>
            <form method="POST" action="{{ route('login.submit') }}" class="animated fadeInUp">
                @csrf
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group">
                    <label for="username" style="margin-right: 10px">Username</label>
                    <input type="text" id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"  required autofocus>
                </div>
                <div class="form-group" style="margin-top: 60px;">
                    <label for="password" style="margin-right: 10px">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    <div class="sticky-top">

                        <button type="submit" class="btn" style="margin-top: 50px;">Login</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>

</html>