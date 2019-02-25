<?php
if (isset($_POST["names"])){
    extract($_POST);
    //echo "$dob,$names";
    //connecting
    $conn=mysqli_connect("localhost","root","","shule");

    $sql="INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`)
                         VALUES (null ,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";
     mysqli_query($conn,$sql) or  die(mysqli_error($conn));
     $message="Done Successfully!";

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container bg-info">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h2>Employees Form</h2>
            <p class="text-secondary">
                <?php
                if (isset($message))
                {
                    echo $message;
                }
                ?>
            </p>

            <form action="employees.php" method="post">
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="date" required class="form-control" name="dob" placeholder="Date of birth">
                </div>
                <div class="radio">
                    <label><input type="radio" checked name="gender" value="Male"> Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio"  name="gender" value="Female"> Female</label>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="kra_pin" placeholder="Kra_pin">
                </div>
                <div class="form-group">
                    <select name="department" class="form-control">
                        <option value="Games">Games</option>
                        <option value="Computer">Computer</option>
                        <option value="Maths">Maths</option>
                        <option value="Languages">Languages</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>
                        <option value="Animation">Animation</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="salary" placeholder="Salary">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>








</body>
</html>