<?php
if (isset($_POST["dob"]))
{
    extract($_POST);
    //echo "$names $dob $course $scholarship";
    //connect
    $scholarship=isset($scholarship)?"Yes":"No";
    $conn=mysqli_connect("localhost","root","","shule");
    $sql="INSERT INTO `students`(`id`, `school_id`, `names`, `email`, `dob`, `gender`, `course`, `scholarship`) VALUES 
                                (NULL ,'$school_id','$names','$email','$dob','$gender','$course','$scholarship')";
     mysqli_query($conn,$sql) or die(mysli_error($conn));

     $message="Student $names has been registered successfully";


}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Register Student</h3>
            <p class="text-success">
                <?php
                if (isset($message))
                {
                    echo $message;
                }
                ?>
            </p>
            <form action="register.php" method="post">
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="school_id" placeholder="School_id">
                    </div>
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="date" required class="form-control" name="dob" placeholder="Date of birth">
                </div>
                <div class="radio">
                    <label><input type="radio" name="gender" value="Male"> Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" checked name="gender" value="Female"> Female</label>
                </div>
                <div class="form-group">
                    <select name="course" class="form-control">
                        <option value="Medicine">Medicine</option>
                        <option value="Computer science">Computer science</option>
                        <option value="Economics">Economics</option>
                        <option value="Electrical engineering">Electrical engineering</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>
                        <option value="Animation">Animation</option>
                    </select>
                </div>
                <div class="form-check">
                        <input class="form-check-input" name="scholarship" value="Yes" type="checkbox"> Scholarship?
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>


        </div>
    </div>
</div>

</body>
</html>