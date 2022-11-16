<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;" style="height: 70px;">
  <div class="container-fluid">
    <a class="navbar-brand text-dark"><b>Electronic Item Services</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="#">All Complains</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="product">Insert Product</a></li>
            <li><a class="dropdown-item" href="viewproduct">View Product</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="provider_registration">Service Provider Registration</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-dark">Service Provider Allocation</a>
        </li>
      </ul>
      
      <h5 class="text-dark">Welcome..@if(session()->has('name'))
        {{session()->get('name')}}
        @endif</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <a href="logout" class="btn btn-outline-primary">Logout</a>
     
    </div>
  </div>
</nav>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>