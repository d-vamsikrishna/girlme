<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>

          .navbar{
            background-color: bisque;
          }  
          .education{
            width:100%;
            height: 50px;
          }
    </style>      
    </head>
    <body>
       <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Girl Me</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="create.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login1.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="500">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="WhatsApp Image 2023-04-28 at 18.32.51.jpg" alt="Los Angeles" style="width:100%;">
                </div>
    
                <div class="item">
                    <img src="WhatsApp Image 2023-04-28 at 18.36.03.jpg" alt="Chicago" style="width:100%;">
                </div>
    
                <div class="item">
                    <img src="group-of-female-demonstrating-outdoors.jpg" alt="New york" style="width:100%;">
                </div>
            </div>
    
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </body>
</html>