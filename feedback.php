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
                        <a class="navbar-brand" href="/index.html">Ansh Varieties Garments Store</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/index.html">Home</a></li>
                        <li><a href="/Womens Section Files/women.html">Women's Section</a></li>
                        <li><a href="/Kids Section Files/kids.html">Kids Section</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/feedback.html" target="_blank"><span class="glyphicon glyphicon-user"></span>
                                Feedback</a></li>
                        <li><a href="/contact us.html"><span class="glyphicon glyphicon-log-in"></span> Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div><!--Menu close-->
        <div>
            <center>
                <form style="font-size: x-large; " ; name="feedback" method="post" onsubmit="">
                    Enter Your Name:<br><input type=" text" name="name1"><br><br>
                    Enter Your Email Id:<br><input type="email" name="email"><br><br>
                    Please Type some Feedback about us:<br><input type="text"><br><br>
                    How would you rate our site:<br>
                    <Input type="radio" name=Name>1 Star
                    <Input type="radio" name=Name>2 Star
                    <Input type="radio" name=Name>3 Star
                    <Input type="radio" name=Name>4 Star
                    <Input type="radio" name=Name>5 Star
                    <br><br>
                    <a href="index.html">
                        <input type="button" onclick="validatenResponse();" value="submit">
                    </a>
                </form>
            </center>
        </div><!--Feedback close-->
        <div class="col-md-12" style="background-color: #000; color: antiquewhite;">
            <center>
                Designed by Pratik Abnave.
            </center>
        </div>
    </div><!--Container close-->
</body>
<script>
    function validatenResponse() {
        console.log("Done!!")

        if (document.feedback.name1.value == "" || document.feedback.name1.value == null) {

            alert("Name can't be blank");
            document.feedback.name1.focus();
            return false;

        }
        console.log("Cehc");
        var mobile = prompt("Enter Mobile Number ");
        while (check = true) {

            if (mobile == "") {
                mobile = prompt("Mobile number Can't be empty")
                continue;
            } else {

                if (isNaN(mobile)) {
                    alert(" Mobile Number should contain only numbers")
                    mobile = prompt("Enter Mobile Number")
                    continue;
                }
                break;
            }
        }
        alert("Your Response has been recorded. Thankyou for feedback.");


    }
</script>

</html>