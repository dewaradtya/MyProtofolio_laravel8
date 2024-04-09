<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #557c93, #08203e);
        }

        .container {
            margin-top: 15px;
        }

        .card {
            border: 1px solid #557c93;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #557c93;
            color: #000000;
            border-bottom: 0;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #08203e;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #557c93;
            color: #000000
        }
    </style>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <center><img src="{{ asset('img/logo.png') }}" alt="Dewa Raditya R" width="100" class="rounded-circle img-thumbnail"></center> 
                        <h4>User Registration</h4>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('doRegister') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                                @if($errors->has('password'))
                                    <div class="alert alert-danger mt-2">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                            </div>
                            <input type="submit" class="btn btn-block" value="Register">
                        </form>
                        <p class="m-2">Already have an account? <a href="{{route('signIn/login')}}">Login.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>