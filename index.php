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
            background-image: url("images/104.jpg");
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
        <div class="w-80" style="padding: 0;">
            <div class="section-img">
                <div class="section-bg-box">
                    <h1 class="animated slideInLeft"><img src="images/logo.png" width=100%></h1>
                    <h2 class="animated slideInRight">Mymedihelper's medicinal Health Care Services</h2>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
        <br>
            <div class="topimg">
                <figure>
                    <img src="images/m.jpg" width=100%>
                    <img src="images/14.jpg" width=100%>
                    <img src="images/15.jpg" width=100%>
                    <img src="images/16.jpg" width=100%>
                    <img src="images/13.jpg" width=100%>
                </figure>
            </div>
            <form action="index.php" method="POST">
              <div class="wrapper">
                 <input type="text" name="get_id1" class="input" placeholder="search medicine" required>
                  <div class="searchbtn">
                      <button  name="fetch_btn1" class="fas fa-search"></button>
                  </div>
              </div>
            </form>

            <!-- text decoration coding -->
            <br>
            <br>

            <h1 class="welcome-text1">WELCOME TO mymedihelper</h1>
            <br/><br/>
            <p>
                MYMEDIHELPER--India's upcoming online medicine order website!!!
            </p>
            <br/>
            <p>
                Register and search for the medicine you need!!!
            </p>
            <br/>
            <p>
                Order the medicines from your local stores!!!
            </p>
            <br/>
            <p>
                No need to travel to the shops!!!
            </p>
            <br/>
            <h1 class="welcome-text1">OUR OUTSTANDING SERVICES</h1>
            <br/>
            <h2>Popular Categories </h2>

            <ul class="pcategories">
                <li>
                    <h2>Immunity Boosters</h2>
                </li>
                <img src="images/8.jpeg" height=300px width=55%>
                <li>
                    <h2>Speciality Medicines</h2>
                </li>
                <img src="images/5.jpeg" height=300px width=55%>
                <li>
                    <h2>Homeopathy</h2>
                </li>
                <img src="images/3.jpeg" height=300px width=55%>
                <li>
                    <h2>Vitamins and Supplements</h2>
                </li>
                <img src="images/10.jpeg" height=300px width=55%>
                <li>
                    <h2>Family nutrition</h2>
                </li>
                <img src="images/11.jpeg" height=300px width=55%>
                <li>
                    <h2>Sports fitness</h2>
                </li>
                <img src="images/12.jpeg" height=300px width=55%>
                <li>
                    <h2>Skin Care</h2>
                </li>
                <img src="images/6.jpeg" height=300px width=55%>
            </ul>
            <br/>
            <h2>Top Brands</h2>

            <ul class="tbrands">
                <li>
                    <h2>Cipla</h2>
                </li>
                <img src="images/4.jpeg" height=300px width=55%>
                <li>
                    <h2>Accu-check</h2>
                </li>
                <img src="images/7.jpeg" height=300px width=55%>
                <li>
                    <h2>Ensure</h2>
                </li>
                <img src="images/1.jpeg" height=300px width=55%>
                <li>
                    <h2>Himalaya</h2>
                </li>
                <img src="images/2.jpeg" height=300px width=55%>
                <li>
                    <h2>Patanjali</h2>
                </li>
                <img src="images/9.jpeg" height=300px width=55%>
            </ul>
            <br/>
            <h1 class="welcome-text1" style="width: 100%;">mymedihelper-India's upcoming online medicie order website!!!</h1>
            <br/>
            <h3>We care about your health needs</h3>
            <div class="about-box">
                <div>
                    <h3>
                        Why choose mymedihelper?
                    </h3>
                    <h4>* Vital medicines from nearby stores.</h4>
                    <h4>* Fast and secure online medicine order.</h4>
                    <h4>* No need to visit stores. </h4>
                    <h4>* Direct order from local stores.</h4>
                    <h4>* We provide services from genuine and trustworthy stores only.</h4>
                    </p>
                </div>
                <div>
                    <img src="images/5.jpg" width="100%">
                </div>
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
</body>

</html>