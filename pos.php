<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "registration");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
$Fullname =$_POST['Fullname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$services=$_POST['services'];
$message=$_POST['message'];
$customer_type=$_POST['customer_type'];
// $photo=$_POST['photo'];

        // Performing insert query execution
        // here our table name is registration
        $sql = "INSERT INTO registration  VALUES ($Fullname, $gender, $address, $phone, $email,$services,$message,$customer_type)";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$Fullname\n $gender\n $address\n "
                . "$phone\n $email\n$services\n$message\n$customer_type");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>