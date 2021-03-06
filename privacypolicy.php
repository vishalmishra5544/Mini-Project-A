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
            background-color:lightskyblue;
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
               <form action="privacypolicy.php" method="POST">
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
        <div class="wrapper1">
            <input type="text" class="input1" placeholder="search medicine">
            <div class="searchbtn1">
                <button class="fas fa-search"></button>
            </div>
        </div>
        <br>
        <br>
        <div class="w-80">
            <div class="form-box">
                <div class="topimg">
                    <figure>
                        <img src="images/23.jpg" width=100%>
                        <img src="images/m.jpg" width=100%>
                        <img src="images/18.jpg" width=100%>
                        <img src="images/m.jpg" width=100%>
                        <img src="images/20.jpg" width=100%>
                    </figure>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="menu" type="text">
            <h2 class="line">PRIVACY POLICY</h2>
            <p class="para">
                Your Privacy - Our Commitment 1. Absolute Confidentiality 1.1 www.my medi helper.com (also referred to as "My medi helper.com" or "Website" or "We") is totally committed to protecting your privacy and ensuring the security of any personal information
                received from you ("Customer"). At My medi helper.com, the confidentiality of our Customers is a top priority. We strictly adhere to the requirements of the data protection law established in India and this Privacy Policy is published
                in accordance with: � Section 43 A of the Information Technology Act, 2000; � Regulation 4 of the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Information) Rules, 2011 (the "SPI Rules"); and
                � Regulation 3(1) of the Information Technology (Intermediaries Guidelines) Rules, 2011. 1.2 The purpose of this privacy policy statement is to explain to you what personal information We collect from your visit(s) to our Website, and
                how We protect the information that you provide to us when you use our Website. You can be assured that My medi helper.com will use such information sensibly and carefully, and only in accordance with this privacy statement. We maintain
                compliance with the highest standards of website privacy, so our visitors/Customers can securely place orders on our Website. This Privacy Policy is effective from 21/05/2015. Any information that you provide to My medi helper.com is subject
                to our Privacy Policy. 2. Your Consent 2.1 By accessing this Website and whenever you submit any information to My medi helper.com, or use products and services offered by our Website, you agree to be bound by the terms of this Privacy
                Policy. Please read below carefully the entire Privacy Policy before using My medi helper.com website: 2.2 As part of providing our Services to you, We may need to send routine communications to you, such as order transaction emails and
                other administrative messages through email and notifications posted on the Website or through other means available, including text and other forms of messaging. Though we prefer to communicate with our Customers via email, as may be
                deemed necessary, you agree to receive our phone calls, related to your orders/request on My medi helper.com. 2.3 When you sign up to receive our enewsletters, We may periodically send emails about new products, special offers or other
                information, which you may find it interesting and beneficial as well. If you do not wish to receive promotional information from us, you can, at any time, choose to opt out of receiving My medi helper promotional enewsletters. To unsubscribe
                from our enewsletters, you can follow the directions included at the enewsletter. 2.4 You must ensure to provide us with the correct or up-to-date Personal Information. This will allow us to contact you for further correspondences with
                respect to your order at My medi helper.com. We are not responsible for any inaccurate information you provide to us, which may affect your shopping experience on our website. 2.5 If, at any time, you want to access, update, modify or
                eliminate any of your account information at My medi helper.com, you may do so by clicking "Your Account", and then review/change your sensitive personal information as you want it to be. 2.6 My medi helper.com may, in future, request
                other optional information from you in order to customise the Website to deliver personalised service to our Customers. 3. What Information We Collect About You 3.1 We do not automatically collect your personally identifiable information.
                However, you might provide us with your personal and demographic information � including your name, gender, age, address, phone number, email address and your medical prescription(s) � in the following ways: � As a New Customer, when you
                register/create an account, place your order, or upload your medical prescription at My medi helper.com; � As an Existing Customer, when you update your existing profile on My medi helper.com; � When you sign up for enewsletters at My
                medi helper.com; � When you use Refer & Earn programme, Ask Our Pharmacist service, Contact Us or submit your Testimonials at My medi helper.com. 3.2 During your visit to our Website, We may automatically receive technical information
                about your computer/device, including your IP address, your computer operating system, time-zone, browser type and browser plug-in details, due to the communication protocol settings on the Internet. 3.3 When you browse our Website, We
                may also collect information regarding the pages you viewed, the web addresses from which you arrive or click through to, time spent on certain pages, download errors and page response times. All these information help us analyse Customers'
                trends and preferences, and thus assist us in improving our service. 4. How We Use the Information Collected from You 4.1 We will collect and retain your personally identifiable information only to the extent that it is necessary to fulfil
                our services to you. Any Personal information submitted by you to the Website or collected by us will be used ONLY for the purposes mentioned below: 4.1.1 To carry out our obligations arising from your requests for our products and services;
                4.1.2 To improve our Website's functionality, and to customise your future shopping experience with us; 4.1.3 To make sure that our Website content is presented in the manner that is most effective for you; 4.1.4 To communicate with you
                about any changes to our services; 4.1.5 To verify your identity and perform checks to prevent fraud. 5. With Whom We Share Your Information 5.1 We do not sell, rent or exchange your any personally identifiable information that you provide
                to us through this Website with any third party for commercial reasons. However, We engage trusted online payment service partners to perform payment processing and authorisation services (for net banking or credit/debit card validation).
                Through your use of the My medi helper.com Services, you consent to our collection and transfer of your information to our payment service partner websites and third party service providers. 5.2 As with any business, it is possible that
                as our business develops, we might sell or buy other businesses or assets. In such transactions, User/Customer information is typically one of the transferred business assets. Accordingly, in the event that My medi helper.com, or substantially
                all of our assets, is acquired by a third party, such information may be one of the assets that is transferred or acquired by a third party. Under such circumstances, My medi helper.com would, to the extent possible, require the acquiring
                party to follow the practices described in this Privacy Policy. You acknowledge that such transfers may occur, and that any acquirer of My medi helper.com may continue to process your personal information as set forth in this Privacy Policy.
                6. Who Has Access to Your Information Your personally identifiable information can be accessed only on a need-to-know basis by certain My medi helper.com employees who are designated to carry out your requested activity, and all such employees
                are bound to strict confidentiality obligations. 7. How We Use Cookies 7.1 "Cookies" are small pieces of information placed by a website onto your computer's hard drive. Cookies do not collect any sensitive personal information from you.
                We use cookies to analyse data about our web page traffic, which helps us save your preferences for your future visits. This allows us to customise our website according to your interests, which will enable us to deliver a more personalised
                service to our customers. You may choose to accept or decline cookies. Please be aware that by declining cookies you may be unable to use our website to its fullest capability. 8. Security Policy We guarantee that all your personal information
                with us is secure. My medi helper.com takes careful precaution to protect our Customers' personal information from unauthorised access, improper use or disclosure or unauthorised modification. To prevent unauthorised access, we have put
                in place the latest industry-standard security technology and procedures to safeguard the information we collect online. Your personal information is encrypted and is protected with 256-bit Secure Sockets Layer (SSL) software, which encrypts
                all information you input. We store your personally identifiable information on the computer servers placed in a secure environment. Even though we have taken significant steps to protect your personally identifiable information, no company,
                including our Website, can fully eliminate security risks associated with Personal Information. 9. Maintain Confidentiality of Your Prescription We understand the confidential nature of the prescription you provide us to process your medication
                order and we treat your prescription as a protected information. 10. Changes to Our Privacy Policy We may revise this Privacy Policy from time to time by updating this page, and so we urge you to review it periodically to ensure that you
                agree with any such changes that we make. We will make best efforts to inform you of any important amendments by e-mail, message on the Website or notification in Your Account. However, it is your responsibility to check the Policy regularly
                to ensure that you agree with it and your continued use of the Website will be deemed to be your acceptance of any changes that we make. 11. Contact Information If you have questions about this Privacy Policy, please contact Ramesh Kumar
                (legal@my medi helper.com) or our customer service at cs@my medi helper.com or call 72007-12345. 12. Grievance Officer In accordance with Information Technology Act 2000 and rules made there under, the name and contact details of the Grievance
                Officer are provided below: My medi helper.com












            </p>
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
        </div>
    </section>

</body>

</html>