<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="MYMEDIHELPER,MYMEDIHELPER.COM,MYMEDIHELPER WEBSITE, MEDICAN">
    <meta name="description" content="India's upcoming online medicine order website!!!">
    <meta name="author" content="mymedihelper.com">
    <title>mymedihelper.com</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/77c6dc7986.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url("images/114.jpg");
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
                <form action="login.php" method="POST">
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
        <?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["password"]) || !empty($_POST["username"])) {
  $query = "SELECT * FROM `registration` WHERE `password`  = '". $_POST["password"] ."' AND `username` = '".$_POST["username"]."';";	
 
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      ?>
      <h1 class="titlecolor">You are Successfully Signed in</h1>
      <h1 class="titlecolor">WELCOME</h1>
      <?php
	  echo  $_POST["username"];
  }else{
      header("location: login.html?error=3 ");
  }
}
?>
        <div class="w-80">
            <div class="form-box">
                <div class="topimg">
                    <figure>
                        <img src="images/24.jpg" width=100%>
                        <img src="images/18.jpg" width=100%>
                        <img src="images/13.jpg" width=100%>
                        <img src="images/20.jpg" width=100%>
                        <img src="images/m.jpg" width=100%>
                    </figure>
                </div>
                <br>
                <br>
                <h1  class="titlecolor">Login Page</h1>
                <hr>
                <form>
                    <label  class="titlecolor" for="username"><b>Username :</b></label><br/>
                    <input type="text" name="username" id="username" required placeholder="Enter username" onBlur="checkAvailability()" /><label style="margin:10px;"><span id="user-availability-status"></span> </label>
                    <br/><br/>

                    <label  class="titlecolor" for="password"><b>Password :</b></label>
                    <br/>
                    <input type="password" name="password" id="password" required placeholder="Enter password" onBlur="checkPassword()" /><label style="margin:10px;"><span id="password-status"></span> </label>
                    <br/><br/>

                    <button type="submit" id="login-btn" formaction="http://localhost/online website/login.php" formmethod="post">Login</button>
                        <p id="error_code" style="color:#FF0000; font-size: 12px"></p>
                </form>
              <form>
                    <button type="submit" id="login-btn" formaction="http://localhost/online website/register.php">Register New User</button>
                    <p id="error_code" style="color:#FF0000; font-size: 12px"></p>
                    
             </form>
            </div>
        </div>
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
    <script>
$(document).ready(function() {
	var Username = 1;
	var Password = 1;
});
				  
function checkAvailability() {
	//$("#loaderIcon").show();
	jQuery.ajax({
		url: "check_availability.php",
		data:'username='+$("#username").val(),
		type: "POST",
		success:function(data){
			$("#user-availability-status").html(data);
			//$("#loaderIcon").hide();
		},
		error:function (){}
	});
}
	
function checkPassword() {
	//$("#loaderIcon").show();
	jQuery.ajax({
		url: "check_password.php",
		data:'password='+$("#password").val()+'&username='+$("#username").val(),
		type: "POST",
		success:function(data){
			$("#password-status").html(data);
			//$("#loaderIcon").hide();
		},
		error:function (){}
	});
}
	
 $(document).ready(function(){
	 if (window.location.search.substr(1) == "error=3") {
	  $("#error_code").text("Incorrect Username / Password Combination ");
	} 
});

</script>
</body>

</html>