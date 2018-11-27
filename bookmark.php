<!DOCTYPE html>
<html>
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
        @import "filter.css";
        .nav-link{
           color: white; 
        }.card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }
        #cart{
            font-size:24px; 
            color:white;
            opacity:0.4; 
            float: right;
        }
        #cart:hover{
            color:white;
            opacity:0.6; 
        }
        #cart:active{
            color:white;
        }
        .flex-container {
            padding: 0;
            margin: 0;
            list-style: none;
            -ms-box-orient: horizontal;
            display: flex;
        }
        .nowrap  { 
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
        .wrap { 
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .card-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .flex-item {
            margin: 3%;
        }
        #rec{
            color:#444444;
        }
        #rec:hover{
            color:white;
            background-color:#ed553B;
        }
        #pd{
            color:#ed553B;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-between" style="background-color: #ed553B">
        <a class = "navbar-brand" href="#home">Gourmet Home Cooking</a>
        <ul class="navbar-nav mr-auto">
        <li class = "nav-item"><a class = "nav-link" href="#recipe">Recipe</a></li>
        <li class = "nav-item"><a class = "nav-link" onclick="window.location.href='view-product.php'">Product</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#promotion">Promotion</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#contact">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown mr-sm-2"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Username </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bookmark.php">Bookmark</a></li>
            <li><a class="dropdown-item" href="#history">My Purchases</a></li>
            <li><a class="dropdown-item" href="#setting">Setting</a></li>
            <li><a class="dropdown-item" href="#logout">Log Out</a></li>
            </ul>
        </li>
        <li class = "nav-item my-2 my-sm-0t"><a href="#cart" id = "cart" class='fas fa-shopping-cart'></a></li>
        </ul>
    </nav>
        <div class="container-fluid" style="margin-top:60px">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <br>
            <h1 style = "text-align: center; color:#ed553B">Bookmark</h1>   
            </div>
            <div class="col-sm-3"></div>
        </div>
        </div>
        <div class="container mt-3">
            <ul class="nav nav-tabs" style="margin-left:5%" >
                <li class="nav-item">
                <a class="nav-link active" href="#pd" data-toggle="container" id="pd"  >Product</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" id="rec" data-toggle="#">Recipe</a>
                </li>
            </ul>
        </div>
        
        <div id="container" style="margin-left:8%"></div>
        
        
      
        <script>
            load();
        
            function load(){
                var xmlhttp = new XMLHttpRequest();
                var url = location.protocol + '//' + location.host+"/Project-soften/bookmark-link.php"

                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        displayResponse(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }

            function displayResponse(response) {
                product = JSON.parse(response);
                
                var out = "<ul class='flex-container wrap'>";
                for( var i = 0 ; i < product.length ; i++ ) {
                    out += "<li class='flex-item'>"+
                        "<div class='card' style='width:350px'>"+
                            "<img class='card-img-top' src='" + product[i].img + "' alt='Card image' style='width:100%'>"+
                            "<div class='card-body'>"+
                                "<h4 class='card-title'>" + product[i].ProductName + "</h4>"+
                                "<p class='card-text'>" + product[i].Description + "</p>"+
                            "</div>"+
                        "</div>"+
                    "</li>";
                }
                out += "</ul>";
                document.getElementById("container").innerHTML = out;
            }
            
        </script>
</body>
</html>