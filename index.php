<!DOCTYPE html>
<html>

<head>
    <title>
        Bootstrap website
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style="background-color: aquamarine;">
    <div class="Container">
        <div class="row-md-12"> 
            <center>
	    <a href="index.html"> <img src="images/Logo.png" height="100% " width=" 400px" style="padding: 1%;"> </a>
	    </center>
        </div><!--Header close-->
        <div class="col-md-12">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">Ansh Varieties Garments Store</a>
                    </div>
                    <ul class="nav navbar-nav" style="font-size: large;">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="Womens Section Files/women.html">Women's Section</a></li>
                        <li><a href="Kids Section Files/kids.html">Kids Section</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="feedback.html" target="_blank"><span class="glyphicon glyphicon-user"></span>
                                Feedback</a></li>
                        <li><a href="contact us.html"><span class="glyphicon glyphicon-log-in"></span> Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div><!--Menu close-->
        <div class="col-md-12">
            <center>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">   
                            <img src="images/Womens Collage.jpg" alt="Women's Section">
                        </div>

                        <div class="item">
                            <img src="images/Kids Collage.jpg" alt="Kids Section">
                        </div>

                        <div class="item">
                            <img src="images/Jewellery Collage.jpg" alt="Jewellery">
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
            </center>
        </div><!--Slider close-->
        <div class="col-md-12" style="background-color: #000; color: antiquewhite;">
            <center>
                Designed by Pratik Abnave.
            </center>
        </div>
    </div><!--Container close-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6422e84c31ebfa0fe7f5230b/1gsk5mri2';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>