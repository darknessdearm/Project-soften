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
        #pay{
            float:right;
            color:white;
            background-color:#ed553B;
        }
        
        #pay:hover{
            color:white;
            background-color:tomato;
        }
        #pay:active{
            color:red;
            background-color:white;
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
        #bin{
            color:black; 
            font-size:16px; 
            text-indent: 2em;  
            cursor: pointer;
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
        <li class = "nav-item my-2 my-sm-0t">
            <a href="#cart" id = "cart" class='fas fa-shopping-cart'></a>
            <span id="cItem"></span>
        </li>
        
        </ul>
    </nav>
        <div class="container-fluid" style="margin-top:60px">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <br>
            <h1 style = "text-align: center; color:#ed553B">Cart</h1>   
            </div>
            <div class="col-sm-3"></div>
        </div>
        </div>
        
        <div class = "container">
        <table id="inCart" class = "table table-hover">
            
        </table>
        <div id="bCheckout"> </div>
        
        </div>
        <div id="container" style="margin-left:8%"></div>
        
        
      
    <script>
        

        function checkOut(){
            sessionStorage.clear();
            window.alert("Check out complete");
            window.location.href = 'view-product.php';
            
        }
        if(sessionStorage.getItem("count")){
            showCItem();
            chJSON();
            showButtonCheckOut();
        }
        
        function showButtonCheckOut(){
            if(showTotal.length > 0){
                var oButton = "<button type='button' class='btn btn-danger' id='pay' onclick='checkOut()'>Check Out</button>";
                document.getElementById("bCheckout").innerHTML = oButton;
            }else {
                document.getElementById("bCheckout").innerHTML = "";
            }
            
        }
        function showCItem(){
            if(sessionStorage.getItem("count") > 0){
                cOut = "<span class='num'>" + sessionStorage.getItem("count") + "</span>";
                document.getElementById("cItem").innerHTML = cOut;
            }else{
                document.getElementById("cItem").innerHTML = "";
            }
            
        }

        
        
        function chJSON() {
            buff = sessionStorage.getItem("cart");
            buff += "]";
            itemInCart = JSON.parse(buff);
            var totalItem = "[";
            for( var i = 0 ; i < itemInCart.length ; i++ ) {
                var str = '"ProductID":"' + itemInCart[i].ProductID + '"';
                if(Number(totalItem.search(str)) == -1){
                    
                    if (totalItem != "[") {totalItem += ",";}
                    totalItem += '{"ProductID":"' + itemInCart[i].ProductID + '",'+
                                '"ProductName":"' + itemInCart[i].ProductName + '",'+
                                '"img":"' + itemInCart[i].img + '",'+
                                '"Price":"' + itemInCart[i].Price + '",';

                    for (var j = i+1 ; j < itemInCart.length ; j++){
                        var str2 = '"ProductID":"' + itemInCart[j].ProductID + '"';
                        if(Number(str.search(str2)) != -1){
                            itemInCart[i].count = Number(itemInCart[i].count) + Number(itemInCart[j].count);
                        }
                    }
                    totalItem += '"count":"' + itemInCart[i].count + '"}';
                }
            }
            totalItem += "]";
            display(totalItem);
        }

        function deleteItem(ID){
            sessionStorage.count = Number(sessionStorage.getItem("count")) - Number(showTotal[ID].count);
            showTotal.splice(ID,1);
            temp = JSON.stringify(showTotal);
            index = temp.length;
            sessionStorage.cart = JSON.stringify(showTotal).substring(0,index-1);
            showCItem();
            chJSON();
            showButtonCheckOut();
        }
        
        function display(totalItem){
            showTotal = JSON.parse(totalItem);
            if(showTotal.length > 0){
                var sum =0;
                var show = "";
                for (var i = 0; i < showTotal.length ; i++) {
                    show += "<tbody>"+
                        "<tr>"+
                        "<td style='width:200px'><img src='" + showTotal[i].img + "' style='width:60%'' class='mx-auto d-block'></td>"+
                        "<td style='margin-left:5%'>Product: " + showTotal[i].ProductName + "<br>price: " + showTotal[i].Price + " ฿</td>"+
                        "<td style='text-align:center'>Qty : " + showTotal[i].count + "<a onclick='deleteItem(" + i + ")' class='fas fa-trash' id='bin'></a></td>"+
                        "<td style='text-align:right'> ฿" + showTotal[i].count*showTotal[i].Price + " </td>"+
                        "</tr>";
                    sum +=showTotal[i].count*showTotal[i].Price;
                }
                document.getElementById("inCart").innerHTML = show + "<tr>"+
                        "<td ></td>"+
                        "<td ></td>"+
                        "<td ></td>"+
                        "<td style='text-align:right'><h6>Total : ฿" + sum + "</h6></td>"+
                        "</tr>"+
                    "</tbody>";
            }else {
                document.getElementById("inCart").innerHTML = "";
            }
        }


            
        </script>
</body>
</html>