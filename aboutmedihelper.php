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
    <style>
        body{
            background-color: cyan;
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
                <form action="aboutmedihelper.php" method="POST">
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
    <!-- Start Footer Coding-->
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
        <br>
   
     
     
       <div class="w-80">
          <div class="form-box">
               <div class="topimg">
                 <figure>
                    <img src="images/21.jpg" width=100%>
                    <img src="images/26.jpg" width=100%>
                    <img src="images/27.jpg" width=100%>
                    <img src="images/m.jpg" width=100%>
                    <img src="images/18.jpg" width=100%>
                 </figure>
              </div>
         </div>
      </div>
      <br>
      <br>
     
       
        <h2  class="titlecolor">
            About mymedihelper.
        </h2>
        <p  class="titlecolor">
           mymedihelper is a innovative project build for the fulfilment of the need of immediate medicines of a common man.It is a dynamic website containing both frontend and backend system allowing any of its user to successfully place their medicine order.Here the user can search for the nearby local shops and get its details by just entering the pincode.Also the user can search for the medicines available along with the other details by just entering the medicine name in searchbox.Also a user can register with mymedihelper in the register page and then login with their account credentials in the login page. 
        </p>
        <p  class="titlecolor"> mymedihelper is a non-profit project build by vishal.mishra,kalpesh.vishwakarma,aniket.mane from computer department of A.C.E</p>
    </section>
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
                    <a href="aboutmedihelper.php">About us</a><br>
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
                <h2>Facilities</h2><br>
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
</body>

</html>