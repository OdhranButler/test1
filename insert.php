<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>

</head>

<body>
    <?php
            include 'db.inc.php';
            date_default_timezone_set("UTC");
            echo "The details sent down are: <br>";

            echo "First Name is : " . $_POST['firstname'] . "<br>";
            echo "Surname is : " . $_POST['surname'] . "<br>";
            echo "EmailAddress is : " . $_POST['emailaddress'] . "<br>";
            echo "PhoneNumber is : " . $_POST['phonenumber'] . "<br>";
            echo "Date of birth is : " . $_POST['dob'] . "<br>";

            $date=date_create($_POST['dob']);

            $sql = "Insert into persons (firstname,lastname,emailaddress,phonenumber,DOB)
            Values ('$_POST[firstname]','$_POST[surname]','$_POST[emailaddress]','$_POST[phonenumber]','$_POST[dob]')";

            if(!mysqli_query($con,$sql))
            {
                die ("An Error in the SQL Query: " . mysqli_error($con));
            }
            echo "<br>A record has been added for  " . $_POST['firstname'] . " " . $_POST['surname'] . " " . $_POST['emailaddress'] . " " . $_POST['phonenumber'] . ".";

            mysqli_close($con);

        ?>

    <form action="insert.html" method="POST">
        <br>
        <input type="submit" value="Return to Insert Page" />
    </form>
</body>

</html>