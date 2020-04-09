<?php
$conn=mysqli_connect('localhost','root','','sujay');
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sujay Rajput</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
if(isset($_POST["Submit"]))
  {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];

        // $query = "INSERT INTO table SET username='".$username."', email='".$email."', password='".$password."', confirm_password='".$confirm_password."'";

        // echo $query;
        // die();

        $query="INSERT INTO table1 (username,email,password,confirm_password) VALUES ('".$username."','".$email."','".$password."','".$confirm_password."')";
        $run=mysqli_query($conn,$query);


        if($run)
        {
          echo"data inserted successfully";

        }
        else
        {
          echo"error:".mysqli_error($conn);
        }

     }

?>



<!-- partial:index.partial.html -->
<form class="main-form first" action="" method="POST">
  <div class="main-form__title">
    <h1>Sign-up</h1>
  </div>
  <div class="main-form__body">
    <input class="main-form__input" type="text" name='username' placeholder="Username" required />
    <input class="main-form__input" type="email" name='email'  placeholder="Email Address" required />
    <input class="main-form__input" type="password" name='password' placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}"  required />

    <input class="main-form__input" type="password" name='confirm_password' placeholder="Repeat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}"  required/>
    <button class="btn">Clear</button>
    <button class="btn" name="Submit">Sign up</button>
  </div>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
