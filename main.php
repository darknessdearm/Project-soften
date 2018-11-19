<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Welcome</title>
    <style>
        @import "sildeshow.css";
        .nav-link{
           color: white; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-between" style = "background-color: #FF0D1D">
        <ul class="navbar-nav">
        <li class = "nav-item"><a class = "nav-link" href="#home">Home</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#recipe">Recipe</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#product">Product</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#promotion">Promotion</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#contact">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown mr-sm-2"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Username </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#bookmark">Bookmark</a></li>
            <li><a class="dropdown-item" href="#history">My Purchases</a></li>
            <li><a class="dropdown-item" href="#setting">Setting</a></li>
            <li><a class="dropdown-item" href="#logout">Log Out</a></li>
            </ul>
        </li>
        <li class = "nav-item my-2 my-sm-0t"><a href="#cart" class='fas fa-shopping-cart' style='font-size:24px; color: white; float: right'></a></li>
        </ul>
    </nav>
        <div class="container-fluid" style="margin-top:60px">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <br>
            <h1 style = "text-align: center; color: #FF0D1D">Product</h2>
            </div>
            <div class="col-sm-3"></div>
        </div>
        </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col" style = "float:right">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col" style = "float:center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col" style = "float:center">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        </div>
        </div>
</body>
</html>