<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login User</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #557c93, #08203e);
        }

        button {
            background: #08203e;
            transition: transform 0.2s;
        }

        button:hover {
            transform: scale(1.01);
        }

        .card{
            border-radius:5%;
            top:15%;
            border: 1px solid #08203e;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            color: #08203e;
            height: bold;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                       <center><img src="{{ asset('img/logo.png') }}" alt="Dewa Raditya R" width="100" class="rounded-circle img-thumbnail"></center> 
                        <h4 class="text-center">Login</h4>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('doLogin') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-block text-white">Log In</button>
                        </form>
                        <p class="m-2">Don't have an account? <a href="{{route('signIn/register') }}">Add account.</a></p>
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