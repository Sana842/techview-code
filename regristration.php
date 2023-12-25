<!DOCTYPE html>
<html lang="en">
<?php

define('DB_USER', "root");
define('DB_PAASWORD', "");
define('DB_DATABASE', "reglog");
define('DB_SERVER', "localhost");

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PAASWORD,DB_DATABASE);
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL: ".mysqli_coonect_error();
}
else
{
//	echo "connected";
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #d1 {
            width: 400px;
            height: 550px;

            margin-left: 500px;

            box-shadow: 2px 2px 10px black;
            border-radius: 30px;

        }

        h2 {
            margin-top: 50px;
            margin-left: 610px;
            font-family: 'Times New Roman', Times, serif;
        }

        .form-control {
            width: 300px;
            margin-top: 10px;
            margin-left: 50px;
        }

        label {
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h2>Registration</h2>
        <div id="d1">

            <br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="firstname">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lastname">
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Roll No" name="rollno">
                <label for="floatingInput">Roll No</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Address" name="addr">
                <label for="floatingInput">Address</label>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Contact No"
                        name="contact">
                    <label for="floatingInput">Contact No.</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email">
                    <label for="floatingInput">email</label>
                </div>
                
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
                    <label for="floatingInput">Password</label>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
            </div>
    </form>
</body>

<?php


if (isset($_POST['submit'])){
	
$firstname = $_POST['firstname']; 
	

$contact = $_POST['contact'];
$addr = $_POST['addr'];
$lastname = $_POST['lastname'];
$email=$_POST['email'];
$rollno = $_POST['rollno'];
$pass=$_POST['password'];
	
	  $query = mysqli_query($conn,"select rollno from registration where rollno  =  '$rollno' ")or die(mysqli_error());
	  $count = mysqli_num_rows($query);
	
	  if ($count > 0){ ?>
	  <script>
	  alert('Date Already Exist');
	  </script>
	 <?php
	  }else{
	  	mysqli_query($conn,"insert into registration (firstname,lastname,rollno,addr,contact,email,password)
values ('$firstname','$lastname','$rollno','$addr','$contact','$email','$pass')") or die(mysqli_error()); 

	?>
	
		<script>
		alert('Sucessfully Sign UP');
		</script>
	  
	
	<?php
	}
	}
		?>
	
</html>