<?php
    session_start();
?>

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
        @import "filter.css";
        .nav-link{
           color: white; 
        }
        .card {
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
        #sch{
            color:#ed553B;
        }
        #sch:hover{
            color:#FF683F;
        }
        #sch:active{
            color:white;
            background-color:#ed553B;
        }
        #addCart{
            color:white;
            background-color:#ed553B;
        }
        #addCart:hover{
            border-radius: 5px;
            border: 1.5px solid #ed553B;
            color:#ed553B;
            background-color:white;
        }
        #addCart:active{
            color:white;
            background-color:#ed553B;
        }
        #addBookmark{
            border-radius: 5px;
            border: 1.5px solid #ffbf00;
            background-color:#fcfcfc;
        }
        #deleteBookmark{
            color:black;
            border-radius: 5px;
            border: 1.5px solid #ffbf00;
            background-color:#ffbf00
        }
        
        p{
            font-size:14px;
            word-wrap: break-word;
        }
        .num{
            position:absolute;
            top:5px;
            right:3px;
            width:20px;
            height:20px;
            border-radius:50%;
            background:white;
            color:red;
            line-height:20px;
            font-size:12px;
            font-family:sans-serif;
            text-align:center;
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
        .card-text,.card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .flex-item {
            margin: 3%;
        }
        .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: #f1f1f1;
        cursor: pointer;
        }

        .btn:hover {
        background-color: #ddd;
        }

        .btn.active {
        background-color: #ed553B;
        color: white;
        }
        #c{
            text-align:center;
            font-size:18px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-between" style="background-color: #ed553B">
        <a class = "navbar-brand" href="#home">Gourmet Home Cooking</a>
        <ul class="navbar-nav mr-auto">
        <li class = "nav-item"><a class = "nav-link" href="#recipe">Recipe</a></li>
        <li class = "nav-item"><a class = "nav-link" href='view-product.php'>Product</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#promotion">Promotion</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#contact">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item dropdown mr-sm-2"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Username </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href='bookmark.php'>Bookmark</a></li>
            <li><a class="dropdown-item" href="#history">My Purchases</a></li>
            <li><a class="dropdown-item" href="#setting">Setting</a></li>
            <li><a class="dropdown-item" href="#logout">Log Out</a></li>
            </ul>
        </li>
        <li class = "nav-item my-2 my-sm-0t">
            <a href="view-cart.php" id = "cart" class='fas fa-shopping-cart'></a>
            <span id="cItem"></span>
        </li>

        </ul>
    </nav>
        <div class="container-fluid" style="margin-top:60px">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <br><h1 style = "text-align: center; color:#ed553B">Product</h1>
                </div>
                <div class="col-sm-3"></div>
            </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form class = "from-inline">
                    <input id ="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div class="col-sm-1">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit" id = "sch" onclick="SearchSelection();">Search</button>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <br>
        <div class = "row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('Pasta')"> Pasta</button>
                <button class="btn" onclick="filterSelection('Olive_Oil')"> Olive Oil</button>
                <button class="btn" onclick="filterSelection('Soup')"> Soup</button>
                <button class="btn" onclick="filterSelection('Pasta_sauce')"> Pasta Sauce</button>
                <button class="btn" onclick="filterSelection('Soy_Sauce')"> Soy Sauce</button>
                <button class="btn" onclick="filterSelection('Spices')"> Spices</button>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div>
     
        <div id="container"  style="margin-left:8%"></div>
        <div id="pmodal"></div>
        </div>
        <br>
        
        </div>
        <script>
        if(sessionStorage.getItem("count")){
            showCItem();
        }
        
        function showCItem(){
            cOut = "<span class='num'>" + sessionStorage.getItem("count") + "</span>";
            document.getElementById("cItem").innerHTML = cOut;
        }

        if(!sessionStorage.getItem("cart")){
            var itemInCart = "[";
        }
        else {
            itemInCart = sessionStorage.getItem("cart");
        }
        
        function addCart(ID){
            ID--;
            var cproduct = "#c" + product[ID].ProductID;
            window.alert(cproduct);
            if (itemInCart != "[") {itemInCart += ",";}
            itemInCart += '{"ProductID":"' + product[ID].ProductID + '",'+
                            '"ProductName":"' + product[ID].ProductName + '",'+
                            '"Price":"' + product[ID].Price + '",'+
                            '"img":"' + product[ID].img + '",'+
                            '"count":"' + $(cproduct).val() + '"}';
                    
            if (sessionStorage.count) {
                sessionStorage.count = Number(sessionStorage.count) + Number($(cproduct).val());
            } else {
                sessionStorage.count = $(cproduct).val();;
            }
            sessionStorage.setItem("cart", itemInCart);
            showCItem();
        }

        load();
        function load(){
            var xmlhttp = new XMLHttpRequest();
            var url = location.protocol + '//' + location.host+"/Project-soften/view-product-link.php"

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
                    "<div class='card' style='width:350px' data-toggle='modal' data-target='#p" + product[i].ProductID + "'>"+
                        "<img class='card-img-top' src='" + product[i].img + "' alt='Card image' style='width:100%'>"+
                        "<div class='card-body'>"+
                            "<h4 class='card-title'>" + product[i].ProductName + "</h4>"+
                            "<p class='card-text'>" + product[i].Description + "</p>"+
                        "</div>"+
                    "</div>"+
                "</li>";
            }
            out += "</ul>";
            
            var outModal = "";
            for( var i = 0 ; i < product.length ; i++ ) {
                outModal += "<div class='modal fade' id='p" + product[i].ProductID + "'>"+
                    "<div class='modal-dialog modal-lg'>"+
                        "<div class='modal-content'>"+
                            "<div class='modal-header'>"+
                                "<h4 class='modal-title'>" + product[i].ProductName + "</h4>"+
                                "<button type='button' class='close' data-dismiss='modal'>&times;</button>"+
                            "</div>"+
                            "<div class='modal-body'>"+
                                "<div class='row'>"+
                                    "<div class='col-sm-5'>"+
                                        "<img src='" + product[i].img + "' style='width:100%'>"+
                                    "</div>"+
                                    "<div class='col-sm-6'>"+
                                        "<h5>Price: " + product[i].Price + " baht.</h5>"+
                                        "<h6>Descpirtion: </h6>"+
                                        "<p>" + product[i].Description + "</p>"+
                                        "<h5>Quantity : "+"<input type='number' name='quantity' min='1' max='20' id='c'" + product[i].ProductID + "' value='1'>"+"</h5>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                            "<div class='modal-footer'>"+
                                "<div class='col-sm-6'>";
                                
                if(product[i].Bookmark != 1){  
                    outModal += "<button type='button' class='btn btn-outline-warning' id='addBookmark' name = 'addb"+product[i].ProductID+"' onclick='bookMarkSelection(" + product[i].ProductID + ")'>Add Bookmark</button>";
                }
                else{
                    outModal += "<button type='button' class='btn btn-outline-warning' id='deleteBookmark' name = 'delb"+product[i].ProductID+"' onclick='bookMarkDeletion(" + product[i].ProductID + ")'>Bookmark Added</button>";
                }
                outModal += "</div>"+
                                "<div class='col-sm-4'>"+
                                    "<button type='button' class='btn btn' id='addCart' onclick='addCart(" + product[i].ProductID + ")'>Add to Cart</button>"+
                                "</div>"+
                                "<div class'col-sm-2'></div>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</div>";
            }
            document.getElementById("container").innerHTML = out;
            document.getElementById("pmodal").innerHTML = outModal;
        }

        function bookMarkSelection(b) {
            var xmlhttp = new XMLHttpRequest();
            var url = location.protocol + '//' + location.host+"/Project-soften/add-bookmark-link.php"
            
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    
                }
            }
            xmlhttp.open("GET", url+"?bookmark="+b, true);
            xmlhttp.send();
            addb =document.getElementsByName("addb"+b);
            console.log(addb[0]);
            console.log(addb[0].onclick);
            addb[0].id = "deleteBookmark";
            addb[0].onclick = function() { bookMarkDeletion(b);};
            addb[0].innerHTML = "Bookmark Added"
            addb[0].name = "delb"+b;
        }

        function bookMarkDeletion(b) {
            var xmlhttp = new XMLHttpRequest();
            var url = location.protocol + '//' + location.host+"/Project-soften/delete-bookmark-link.php"
            
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                }
            }
            xmlhttp.open("GET", url+"?bookmark="+b, true);
            xmlhttp.send();
            addb =document.getElementsByName("delb"+b);
            console.log(addb[0]);
            addb[0].id = "addBookmark";
            addb[0].onclick = function() { bookMarkSelection(b);};
            addb[0].innerHTML = "Add Bookmark"
            addb[0].name = "addb"+b;
        }
        
       load()
        function filterSelection(c) {
            document.getElementById("search").value = '';
            var xmlhttp = new XMLHttpRequest();
            var url = location.protocol + '//' + location.host+"/Project-soften/filter-link.php"

            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    displayResponse(xmlhttp.responseText);
                }
            }
            xmlhttp.open("GET", url+"?filter="+c, true);
            xmlhttp.send();
        }

        

        function SearchSelection() {
            var x = document.getElementById("search").value;
            var xmlhttp = new XMLHttpRequest();
            var url = location.protocol + '//' + location.host+"/Project-soften/search-link.php";

            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    displayResponse(xmlhttp.responseText);
                }
            }

            xmlhttp.open("GET", url+"?search="+x, true);
            xmlhttp.send();
            btns[0].className = "btn active";
            for(var i =1; i < btns.length ; i++){
                btns[i].className = "btn";
            }
        }

        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
        }

        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
        element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer"); // button filter
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
        </script>

</body>
</html>