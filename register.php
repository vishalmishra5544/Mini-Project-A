

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="MYMEDIHELPER,MYMEDIHELPER.COM,MYMEDIHELPER WEBSITE, MEDICAN">
    <meta name="description" content="india's upcoming medicine order website">
    <meta name="author" content="mymedihelper.com">
    <title>mymedihelper.com</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <style>
        body{
            background-image: url("images/124.jpg");
        }
        table,th,td{
            border:2px solid black;
            width:1100px;
            background-color: lightgreen;
        }
        .btn{
            width:10%;
            height:5%;
            font-size:22px;
            padding:2 px;
        }
    </style>
</head>

<body>
    <!-- Start Header Coding-->
    <header>
       <div class="menu">
            <!-- Start Brand name coding-->
            <div class="brand-name">
                <a href="index.php">
                    <h2 class="animated flash">
                        <img src="images/m.jpg" width=20%>
                        <h1 class="logo">mymedihelper.com</h1>
                    </h2>
                </a>
            </div>
            <!-- End Brand name coding-->
            <!-- Start Nav coding & menu coding -->
            <nav>
               <form action="register.php" method="POST">
                  <div  class="wrapper1">
                      <input  name="get_id1"type="text" class="input1" placeholder="search medicine" required>
                      <div class="searchbtn1">
                          <button name="fetch_btn1" class="fas fa-search"></button>
                      </div>
                   </div>
                </form>
                <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="online medicine order.php">online medicine</a></li>
                        <li><a href="connect.php">Available stores</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
            </nav>
            <!-- End Nav coding & menu coding -->
        </div>
    </header>
    <!-- End Header Coding-->
    <!-- Start Section Coding-->
    <section>
    <br>
    <?php
        $server="localhost:3307";
        $username="root";
        $password="";
        $dbname = "onlinemedicine";
    
        $connection=mysqli_connect($server, $username, $password , $dbname);
        if (!$connection) {
            die("connection to this database failed due to".mysqli_connect_error());
        }
    
       
        if(isset($_POST['fetch_btn1']))
        {
            $id=$_POST['get_id1'];
            $query="SELECT*FROM `medicinelist` WHERE nameofmedicine LIKE '%$id%'";
            $query_run=mysqli_query($connection,$query);
            if(mysqli_num_rows($query_run)>0)
            {  
                 while($row=mysqli_fetch_array($query_run))
                 {  
                     ?>
                     <table>
                        <tr>
                                        <th id="Name of medicine">Name of medicine</th>
                                        <th id="Category">Category</th>
                                        <th id="Type">Type</th>
                                        <th id="description">description</th>
                        </tr> <br>
                        <tr>
                            
                            <td><?php echo $row['nameofmedicine'];?></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['type'];?></td>
                            <td><?php echo $row['description'];?></td>
                              
                        </tr>
                     </table>
                    <?php
                 }
            }
            else{
               echo "no record found";
            }
        }
        ?>
        <div class="w-80">
           <div class="form-box">
                 <div class="topimg">
                        <figure>
                            <img src="images/18.jpg" width=100%>
                            <img src="images/19.jpg" width=100%>
                            <img src="images/18.jpg" width=100%>
                            <img src="images/20.jpg" width=100%>
                            <img src="images/m.jpg" width=100%>
                        </figure>
                  </div>
                    <br>
                    <br>
                    <br>
                <h1  class="titlecolor">User Registration Page</h1>
                <hr>
                <form action="register.php" method="POST">
                    <label  class="titlecolor"for="name"><b>Name :</b></label><br/>
                    <input type="name" name="name" id="name" placeholder="Enter name" required />
                    <br/><br/>

                    <label  class="titlecolor" for="email"><b>Email :</b></label><br/>
                    <input type="email" name="email" id="email"   placeholder="Enter email"required />
                    <br/><br/>

                    <label   class="titlecolor"for="mobile"><b>Mobile :</b></label><br/>
                    <input type="mobile" name="mobile" id="mobile"  placeholder="Enter mobile number"required  />
                    <br/><br/>

                    <label  class="titlecolor" for="username"><b>Username :</b></label><br/>
                    <input type="username" name="username" id="username"  placeholder="Enter username"required />
                    <br/><br/>

                    <label  class="titlecolor" for="password"><b>Password :</b></label>
                    <br/>
                    <input type="password" name="password" id="password"  placeholder="Enter password"required  />
                    <br/><br/>

                    <label  class="titlecolor" for="confirm"><b>Confirm Password :</b></label>
                    <br/>
                    <input type="confirm" name="confirm" id="confirm"   placeholder="Confirm password"required />
                    <br/><br/>

                    <button type="submit" id="register-btn">Submit</button>

                </form>
           </div>
      </div>
                <?php
if (isset($_POST['name'])) {
    $server="localhost:3307";
    $username="root";
    $password="";
	$dbname = "register1";

    $conn=mysqli_connect($server, $username, $password,$dbname);
    if (!$conn) {
        die("connection to this database failed due to".
      mysqli_connect_error());
    }

   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
  
    $sql="INSERT INTO `registration` (`no` ,`name`, `email`, `mobile`, `username`, `password`,`confirm`) VALUES (NULL ,'$name', '$email', '$mobile', '$username', '$password', '$confirm')";
    

    if (!$conn->query($sql)) {
        echo "error:$sql <br> $conn->error";
    } else {
        ?>
         <h1 class="titlecolor"> Your data is successfully inserted.</h1>
        <h1 class="titlecolor"> Thanks for registering with us</h1>
        <?php
    }
    $conn->close();
}
?>
           
       
    </section>
    <!-- End Section Coding-->
    <!-- Start Footer Coding-->
    <footer>
        <div class="w-80">
            <div class="footer-box">
                    <h2>Company</h2>
                    <a href="index.php">Home</a><br>
                    <a href="online medicine order.php">online medicine</a><br>
                    <a href="connect.php">Available stores</a><br>
                    <a href="register.php">Register</a><br>
                    <a href="login.php">Login</a><br>
                    <a href="contact.php">Contact Us</a><br>
                    <a href="aboutmedihelper.php">About mymedihelper</a><br>
                    <a href="termsandconditions.php">T&C</a><br>
                    <a href="privacypolicy.php">privacy</a><br>
                    
            </div>

            <div class="footer-box">
                <h2>Popular Categories</h2>
                <a href="#">Immunity Boosters</a><br>
                <a href="#">Speciality Medicines</a><br>
                <a href="#">Homeopathy</a><br>
                <a href="#">Vitamins and supplements</a><br>
                <a href="#">Skin care</a><br>
            </div>
            <div class="footer-box">
                <h2>Facilities</h2>
                <a href="#">Cipla</a><br>
                <a href="#">Accu-check</a><br>
                <a href="#">AromaMagic</a><br>
                <a href="#">Himalaya</a><br>
                <a href="#">Patanjali</a><br>
            </div>
            <div class="footer-box">
                <h2>Social Media</h2>
                <a href="#">Facebook</a><br>
                <a href="#">Instagram</a><br>
                <a href="#">Whatsapp</a><br>
                <a href="#">Skype</a><br>
                <a href="#">Twitter</a><br>
            </div>
        </div>
    </footer>
    <!-- End footer Coding-->

    <!---->
</body>
</html>
