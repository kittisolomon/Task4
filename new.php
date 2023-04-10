<?php
require 'ConnectDabase.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $SQL="INSERT INTO crudoperation (name, age, password, email, mobile)
    VALUES ('$name', '$age', '$password', '$email', '$mobile')";
    $result = mysqli_query($connect,$sql);
    if ($result){
        echo "data inserted successfully!!";
    } else {
        echo "faild";
    }
}
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Students page</title>
</head>
<body><br>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="name" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>

            <div class="container">
                <form method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
                    </div>

                    <div class="container">
                        <form method="post">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="age" class="form-control" placeholder="Enter your age" name="age" autocomplete="off">
                            </div>

                            <div class="container">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
                                    </div>

                                    <div class="container">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </form>
                                    </div><br><br>


</body>

</html>
