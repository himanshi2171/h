<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<div class="container py-5">
@if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
    <div class="card p-5 col-lg-6 mx-auto">
        <form class="row g-3 needs-validation" novalidate method="POST" action="auth">
            @csrf
            <h1>Login Page</h1>
            <div class="col-md-12">
                <label for="email" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="email" placeholder="Enter Your Name" required>
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password" id="password" required>
            </div>
            <div class="col-md-12">
                <label for="type" class="form-label">Type</label>
                <select name="type" class="form-control">
                                <option value="" >Select Type</option>
                                <option value="admin">Admin</option>
                                <option value="customer">Customer</option>
                                <option value="service provider">Service Provider</option>
                            </select>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


