<?php

include ("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <section class="image">

        <div class="banner-text">
            <nav>
            <div class="logo"> Spark Foundation </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
        
            <ul>
                <a  href="index.php"><li>Home</li></a>
                <a href="about.php"><li>About</li></a>
                <a  class="active" href="#" ><li>Contact Us</li></a>
                <a href="https://rzp.io/l/6mp6CPa"><li>Donate</li></a> 
            </ul>
            </nav>

    <div class="contact-section">

        <h1> Contact Us </h1>

        

        <br> 

        <form class="contact-form" action="" method="post">
         <input type="text" class="contact-form-text" placeholder="Your Name" name="name">
         <input type="email" class="contact-form-text" placeholder="Your email" name="email">
         <input type="phone" class="contact-form-text" placeholder="Your phone"name="phone">
         <input type="city" class="contact-form-text" placeholder="Your city" name="city">
         <textarea class="contact-form-text" placeholder="Describe your problem" name="problem"></textarea>
         <input type="submit" class="contact-form-btn" value="send" name="submit">


        </form>

    </div>
</section>
</body>
</html>


<?php

if(isset($_POST['submit']))
{

$na =$_POST['name'];
$em =$_POST['email'];
$pn =$_POST['phone'];
$ct =$_POST['city'];
$pb =$_POST['problem'];

if($na!="" && $em!="" && $pn!="" && $ct!="" && $pb!="")
{

$query="INSERT INTO CONTACT VALUES (NULL, '$na', '$em', '$pn', '$ct', '$pb')";

$data=mysqli_query($conn,$query);



if($data){


    ?>
    <script>
          location.replace("aftercontact.php");
    </script>
 <?php


    /**************************************************

    ?>
    <script>
         alert("success");
    </script>
    <?php  
    
    **************************************************/
     //header("Location: aftercontact.php");
     // echo "data inserted";
}

}

else{
   // echo "failed to insert";
}

}


?>