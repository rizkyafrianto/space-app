<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

    <title>Space</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fs-4" href="/"><i class="bi bi-medium"></i> Space</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/login">Sign in</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="form-signin w-100 mx-auto mt-5">
                    <h1 class="h3 mb-3 fw-normal text-center">Fill up to complete register</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating my-2">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="Name" required value="{{ old('name') }}"
                                autocomplete="off">
                            <label for="name">Name</label>
                            {{-- give error message from laravel --}}
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" id="username" placeholder="username" required
                                value="{{ old('username') }}" autocomplete="off">
                            <label for="name">Username</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating my-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="name@example.com" required
                                value="{{ old('email') }}" autocomplete="off">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating my-2">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
                    </form>
                    <small class="d-block text-center mt-2">Already registered?
                        <a href="/login">
                            Login
                        </a>
                    </small>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>
