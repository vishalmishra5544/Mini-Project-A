<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="MYMEDIHELPER,MYMEDIHELPER.COM,MYMEDIHELPER WEBSITE, MEDICAN">
    <meta name="description" content="india's best hospital website of indian">
    <meta name="author" content="hospital.com">
    <title>mymedihelper.com</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <style>
         body{
          background-color: lightseagreen;
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
               <form action="termsandconditions.php" method="POST">
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
        <br>
        <div class="menu" type="text">
            <div class="w-80">
                <div class="topimg">
                    <figure>
                        <img src="images/22.jpg" width=100%>
                        <img src="images/25.jpg" width=100%>
                        <img src="images/24.jpg" width=100%>
                        <img src="images/18.jpg" width=100%>
                        <img src="images/20.jpg" width=100%>
                    </figure>
                </div>
            </div>
            <br>
            <br>
            <h2 class="line">Terms and conditions.</h2>
            <p class="para">
                The following are the Terms and Conditions, read together with the Privacy Policy, that govern your purchase and use of the products and services (the "Products") from My medi helper.com, and constitute a legally binding agreement, between you ("the Customer",
                the "User" or "the Caregiver") and My medi helper.com, a fully licensed Pharmacy. In terms of Information Technology Act, 2000, this document is an electronic record. Being generated by a computer system it does not require any physical
                or digital signatures. This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries Guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and
                Terms of Use for access or usage of https://www.my medi helper.com/ or the application �My medi helper-Aap ki dost. The domain name https://www.my medi helper.com/ (hereinafter referred to as �Website�) and the Mobile Application My medi
                helper-Aap ki dost (hereinafter referred to as �App�) bearing the registered address at No. 1 Lalithapuram street, Royapettah, Chennai � 600014, Tamil Nadu, India and its Corporate Office at 5th Floor, EA Chambers (Express Avenue) No 49
                & 50 L, Whites Road, Royapettah, Chennai - 600014 (hereinafter referred to as �Company�). For the purpose of these Terms of Service, wherever the context so requires the term �You�/ �User� shall mean any natural or legal person who has
                downloaded and installed this Mobile Application (hereinafter referred to as �App�) and provided Registration Data while registering on the App or by simply visiting the Website by entering the domain name in any internet browser. Any
                services provided by the Website/App which do not require registration do not absolve you of the contractual relationship established by this Agreement. Wherever the context requires, the term �Doctor/registered medical practitioners�
                shall mean any person permitted to practice medicine by the MCI (Medical Council of India) or any regional council for registration of Doctor/registered medical practitioners duly authorized by the government who will be verified and authenticated
                by us. By downloading and installing this App, you are bound by these Terms of Service and any other binding document as decided by the Company. You are requested to read them carefully before accepting the same and moving forward to using
                the App/Website. By visiting, viewing, accessing or otherwise using any of the services or information created, collected, compiled or submitted to www.my medi helper.com, you are deemed to have agreed to all the following Terms and Conditions
                of Sale/Service. So, before you use this Website/App, please read these Terms carefully as you agree to be bound by them. If you do not accept these Terms and Conditions, please do not use this App/Website. 1.CREATING AN ACCOUNT: 1.1 To
                use certain features of the Website/App (e.g., ordering Products, posting rating/reviews, receiving My medi helper enewsletters), you must set up an account with My medi helper.com ("My medi helper Account") and provide certain information
                about yourself as prompted by the Customer Information form, including, your name, gender, email address, account password, mobile phone number and billing/shipping address. All of your registration information is protected by our Privacy
                Policy. 1.2 You represent and warrant that the information you submit during registration is truthful and accurate and that you will maintain the accuracy of such information. 1.3 Your My medi helper Account username and password are personal
                to you. You may not transfer your account and you will be responsible for the activities associated with your My medi helper Account. 1.4 My medi helper.com will not be liable for any loss or damages as a result of your failure to maintain
                the confidentiality of your account credentials. If you suspect any unauthorised use of your My medi helper account, you shall immediately notify My medi helper.com. 1.5 It is your responsibility to keep your email address up-to-date on
                your account setup at My medi helper.com/app so that we can communicate with you electronically. 1.6 By creating this account you agree to receive transactional and/or promotional communications from us via email, telephone, SMS and chat.
                If you, at any time, wish to discontinue receiving communications from us, you agree to notify us by email. 2. PRIVACY POLICY: 2.1 Your personally identifiable information will be used in accordance with our Privacy Policy. To understand
                our practices, as to how we collect, use and disclose your personally identifiable information, please refer our Privacy Policy, which also governs your visit to My medi helper.com. 2.2 We understand the privacy of all information you
                provide is of a primary importance. This is why we do everything possible to use it carefully and sensibly. This information is never shared with other companies or third party service providers. 3. COMMUNICATIONS By using this Website/App,
                it is deemed that you have consented to receiving calls, auto-dialled and/or pre-recorded messages or calls, from us at any time with the use of the telephone number that has been provided by you for the use of this Website/App, subject
                to the Privacy Policy. This includes contacting you through information received through other parties as well as contacting other parties through the information you provide to us. By using this Website/App, you�who has placed orders
                with us, or has only signed up, or submitted your personal details in any of our forms�also consent to receive transactional and/or promotional emails/SMSs from us at any time we deem fit. This consent to be contacted is for purposes that
                include and are not limited to clarification calls and marketing and promotional calls. In case you wish to stop the contact with us for the same, you may send us a mail to the effect at cs@my medi helper.com. You may also be contacted
                by Service Providers with whom we have entered into a contract in furtherance of our rights, duties and obligations under other agreements, contracts and policies followed by us. Such contact will be made only in pursuance of the respective
                contracts, agreements and/or policies. The sharing of the information provided by you will be governed by the Privacy Policy. We will not give out your contact information to third parties not connected with the Website/App and the services
                offered by it, and/or for any purpose not in furtherance of the activities and aims of the Company. Please refer to the 'Privacy Policy' for more information. 4.SECURITY POLICY: All your transactions are secure when you place an order
                online at My medi helper.com. Your personal information is encrypted by using 256-bit Secure Sockets Layer (SSL) encryption technology before being sent over the Internet, which ensures the privacy and high level of security of all your
                information. 5. CUSTOMER MEMBERSHIP/USAGE/ELIGIBILITY: The membership/usage of the Website/App is restricted to those above 18 years of age, or to such group that can be termed to have attained 'majority' under the laws of the respective
                jurisdictions where this Website/App can be seen and is accessible or to emancipated minors, who possess legal parental or guardian consent, or are in a position so as to be fully able and competent to enter into the terms, conditions,
                obligations, affirmations, representations, and warranties set forth in these Terms of Service, and to abide by and comply with these Terms of Service. Membership cannot be availed of by those who are deemed Incompetent to Contract under
                the Indian Contract Act, 1872 subject to the aforementioned conditions. Further, you are solely responsible for protecting the confidentiality of your username and password and any activity under the account will be deemed to have been
                done by you. In the case that you provide us with false and inaccurate details or the Company has reasonable reasons to believe you have done so, we hold the rights to suspend your account and/or terminate this Agreement without any notice
                and without being held liable for the same. You understand the App downloaded/or the website you use on to your phone or tablet is owned by us and we may automatically upgrade the App/website and these Terms shall apply to the upgrades
                as well. We reserve the right to terminate this agreement without any notice and suspend the account without assigning any reason. 6. PRICE AND PAYMENT: The installation and use of this Website/App is free of cost and this includes only
                the usage of certain services of the Website/App. You hereby understand that this no charge policy maybe amended at anytime at the discretion of the Company. However, in the event, you use the App/Website to choose a Doctor/registered
                medical practitioners and book an appointment, you shall be required to pay for the consultation. In case of video or phone consult, you shall be required to pay for the consultation prior and in the case of clinic consult, the patient
                shall pay the Doctor/registered medical practitioners after the consult. For the purpose of this section, Buyer would include any user choosing to use the services offered on our App/Website. Seller means Us/Website/App/Company. While
                availing any of the payment methods available on the App/Website, We will not be responsible or assume any liability, whatsoever in respect of any loss or damage arising directly or indirectly to you due to: i. Lack of authorization for
                any transaction(s), or ii. Exceeding the preset limit mutually agreed by you and between �Bank(s)�, or iii. Any payment issues arising out of the transaction, or iv. Decline of transaction for any other reason(s). All payments made against
                the services on the App by you shall be compulsorily in Indian Rupees. The Website/App will not facilitate transaction with respect to any other form of currency with respect to the purchases made on Website/App. 6.1 All our product prices
                include all applicable statutory taxes. 6.2 We make every effort to make sure that the pricing and availability of Products on our Website/App is accurate and up to date. However, rarely, there may be an error on the pricing of a product
                or an error related to product availability. In such cases, we are not responsible for any typographical errors and we reserve the right to cancel the sale. 6.3 We reserve the right to correct any inaccuracies or omissions related to pricing
                and product availability/descriptions, even after you have submitted your order, and to change or update any other information at any time without prior notice. 6.4 Following are My medi helper.com delivery charges, which are based on
                the order value. Order Value Delivery Charge Up to Rs. 149.99 Rs. 50 Rs. 150 � Rs. 999.99 Rs. 25 Over Rs. 1000 FREE Shipping Note: Delivery charges quoted above are applicable on ALL Orders at My medi helper.com. 6.5 Delivery times may
                vary depending on the delivery location as well as the type of product you order. 6.6 You can make the payment via any one of the following methods of payment: Credit/Debit Card, Net Banking or Cash on Delivery. 6.7 Credit/Debit Card and
                Net Banking Payments are processed via our online payment service partners. 7. USE OF INFORMATION ON THE WEBSITE/APP: 7.1 The information on this Website/App is not a substitute for professional medical advice or treatment for specific
                medical conditions. It is important that you do not make medical decisions, and you should always seek the advice from qualified healthcare professional with any questions you may have about your medical condition. 7.2 My medi helper.com
                does not endorse any views or opinions that may be included in the Website/App Content, or other information provided through our Services. Your submission of questions or reviews on our Products does not constitute a professional relationship
                between you and My medi helper.com. 8. THIRD PARTY INFORMATION: The content on the Website/App which includes all text, graphics, user interfaces, visual interfaces, photographs, trademarks, logos, sounds, music, design documents, and
                artwork is Our content (hereinafter referred to as �Content�). The Website/App may contain links to/ content of third party websites that are not associated with us. We have no control over any third party user generated content as we
                are merely an intermediary for the purposes of those content. In the event, if any of the Third Party Content infringes any Intellectual Property of any person, the Third Party shall be solely responsible for any loss caused and we shall
                not be liable. You may send as an email at cs@my medi helper.comto report any such content. Other than that when expressly allowed, any use of our Content and it being reproduced, republished, uploaded, posted, publicly displayed, encoded,
                translated, transmitted or distributed in any way (including "mirroring") to any other computer, server, website or other medium for publication or distribution or for any commercial enterprise, without our express prior written consent
                is not allowed. 9. USER CONTENT: The content that you upload or post will become our property and you grant us the worldwide, perpetual and transferable rights in such Content. We shall be entitled to, consistent with our Privacy Policy
                as adopted in accordance with applicable law, use the Content or any of its elements for any type of use forever, including but not limited to promotional and advertising purposes and in any media whether now known or hereafter devised,
                including the creation of derivative works that may include any content you provide and are not entitled to any payment or other compensation for such use. You also grant us the right to sub-license these rights, and the right to bring
                an action for infringement of these rights. We reserve the right to edit or remove any material submitted to this Website/App, or stored on our servers, or hosted or published upon this Website/App. Those posting any form of User content
                on the Website/App must verify the truthfulness and authenticity of the particulars of the content, including the time, place and nature. Before allowing such content to be posted on the Website/App, we have the right and authority to
                verify the accuracy of such particulars related to the content with the respective sources provided by the user posting such content, if we feel that there is a need to check such accuracy. We have the right to upload content on behalf
                of third parties, subsequent to collecting such information and verifying it if we deem it necessary. Notwithstanding this, we can in no way be held liable for any false or misleading information. In case any content is considered to be
                unlawful or against the law within any jurisdiction in which our Website/App can be seen and accessed, it shall be removed forthwith by us on being intimated by the authorities of the respective jurisdiction that such content is deemed
                unlawful. We cannot be held liable or questioned for the same. 10. USER OBLIGATIONS: You are a restricted user of this Website/App. 10.1. You are bound not to cut, copy, distribute, modify, recreate, reverse engineer, distribute, disseminate,
                post, publish or create derivative works from, transfer, or sell any information or software obtained from the Website/App. With our prior permission limited use may be allowed. For the removal of doubt, it is clarified that unlimited
                or wholesale reproduction, copying of the content for commercial or non-commercial purposes and unwarranted modification of data and information within the content of the Website/App is not permitted. You shall not, nor allow third parties
                on your behalf to (i) make and distribute copies of the Website/App (ii) attempt to copy, reproduce, alter, modify, reverse engineer, disassemble, decompile, transfer, exchange or translate the Website/App; or (iii) create derivative works
                of the Website/App of any kind whatsoever. 10.2. You agree not to access (or attempt to access) the App and/or the materials or Services by any means other than through the interface that is provided by the Website/App. The use of deep-link,
                robot, spider or other automatic device, program, algorithm or methodology, or any similar or equivalent manual process, to access, acquire, copy or monitor any portion of the App or Content, or in any way reproduce or circumvent the navigational
                structure or presentation of the Website/App, materials or any Content, to obtain or attempt to obtain any materials, documents or information through any means not specifically made available through the Website/App. You acknowledge and
                agree that by accessing or using the Website/App or Services, you may be exposed to content from other users that you may consider offensive, indecent or otherwise objectionable. We disclaim all liabilities arising in relation to such
                offensive content on the Website/App. Further, you may report such offensive content by sending us an e-mail to our official e-mail address. 10.3. This Website/App by nature allows you to upload information; you undertake to ensure that
                such material is in accordance with applicable laws. Further, you undertake not to: a) Abuse, harass, threaten, defame, disillusion, erode, abrogate, demean or otherwise violate the legal rights of others; b) Engage in any activity that
                interferes with or disrupts access to the Website/App or the Services (or the servers and networks which are connected to the Website/App); c) Impersonate any person or entity, or falsely state or otherwise misrepresent your affiliation
                with a person or entity; d) Publish, post, disseminate, any information which is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophilic, libellous, invasive of another's privacy, hateful, or racially, ethnically
                objectionable, disparaging, relating or encouraging money laundering or gambling, or otherwise unlawful in any manner whatsoever; or unlawfully threatening or unlawfully harassing including but not limited to "indecent representation of
                women" within the meaning of the Indecent Representation of Women (Prohibition) Act, 1986; e) Post any file that infringes the copyright, patent or trademark of other legal entities. f) Upload or distribute files that contain viruses,
                corrupted files, or any other similar software or programs that may damage the operation of the Website/App or another's computer; g) Download any file posted by another user of a Service that you know, or reasonably should know, cannot
                be legally distributed in such manner; h) Probe, scan or test the vulnerability of the Website/App or any network connected to the Website/App, nor breach the security or authentication measures on the Website/App or any network connected
                to the Website/App. You may not reverse look-up, trace or seek to trace any information on any other user, of or visitor to, the Website/App, or any other customer of the Website/App, including any account not owned by you, to its source,
                or exploit the Website/App or Service or information made available or offered by or through the Website/App, in any way whether or not the purpose is to reveal any information, including but not limited to personal identification information,
                other than your own information, as provided for by the Website/App; i) Disrupt or interfere with the security of, or otherwise cause harm to, the Website/App, systems resources, accounts, passwords, servers or networks connected to or
                accessible through the Website/App or any affiliated or linked sites; j) Collect or store data about other users in connection with the prohibited conduct and activities set forth in this Section. k) Use the Website/App or any material
                or Content for any purpose that is unlawful or prohibited by these Terms of Service, or to solicit the performance of any illegal activity or other activity which infringes the rights of this Website/App or other third parties; l) Violate
                any code of conduct or other guidelines, which may be applicable for or to any particular Service; m) Violate any applicable laws or regulations for the time being in force within or outside India; n) Violate the Terms of Service including
                but not limited to any applicable Additional Terms of the Website/App contained herein or elsewhere; o) Violate any code of conduct or other guidelines, which may be applicable for or to any particular Service; p) Threaten the unity, integrity,
                defence, security or sovereignty of India, friendly relations with foreign states, or public order or causes incitement to the commission of any cognizable offence or prevents investigation of any offence or is insulting any other nation.
                q) Publish, post, disseminate information that is false, inaccurate or misleading; violate any applicable laws or regulations for the time being in force in or outside India; r) Directly or indirectly, offer, attempt to offer, trade or
                attempt to trade in any item, the dealing of which is prohibited or restricted in any manner under the provisions of any applicable law, rule, regulation or guideline for the time being in force. s) Create liability for us or cause us
                to lose (in whole or in part) the services of our internet service provider ("ISPs") or other suppliers; While we shall not be held liable or answerable to Users for any such acts on your part, violation of this clause would lead to potential
                criminal legal action against you, either by other Users of the Website/App or by us. We can (and You hereby expressly authorize Us to) disclose any information about you to law enforcement or other government officials, as we, in our
                sole discretion, believe necessary or appropriate in connection with the investigation and/or resolution of possible crimes, especially those that may involve personal injury. You understand that we have the right at all times to disclose
                any information (including the identity of the persons providing information or materials on the Website/App) as necessary to satisfy any law, regulation or valid governmental request. This may include, without limitation, disclosure of
                the information in connection with investigation of alleged illegal activity or solicitation of illegal activity or in response to a lawful court order or subpoena. We have no obligation, to monitor the material posted on the Website/App.
                We shall have the right to remove or edit any content that in its sole discretion violates, or is alleged to violate, any applicable law or either the spirit or letter of these Terms of Service. Notwithstanding this right, YOU REMAIN SOLELY
                RESPONSIBLE FOR THE CONTENT OF THE MATERIALS YOU POST ON THE WEBSITE/APP. In no event shall we assume or have any responsibility or liability for any Content posted or for any claims, damages or losses resulting from use of Content and/or
                appearance of Content on the App. You hereby represent and warrant that you have all necessary rights in and to all Content which you provide and all information it contains and that such Content shall not infringe any proprietary or other
                rights of third parties or contain any libelous, tortuous, or otherwise unlawful information. 11. DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY: 11.1 All information, Products and services included on or otherwise made available
                to you through this Website/App are provided by My medi helper.com on an "as is" and "as available" basis, either expressed or implied, we specifically disclaim warranties of any kind to the extent allowed by the applicable law. You expressly
                agree that your use of this Website/App is at your sole risk. 11.2 My medi helper.com assumes no responsibility for any damages or viruses that may infect your computer equipment or other property on account of your access to, use of,
                or browsing in this site. 11.3 My medi helper.com has exerted reasonable efforts to ensure that all information published on the Website/App is accurate at the time of posting; however, there may be errors in such information for which
                we shall have no liability. We reserve the right to remove or alter any of the information contained on the Website/App at our sole discretion. 11.4 My medi helper.com cannot guarantee the adequacy, currency or completeness of the Website/App
                content. My medi helper.com does not warrant or endorse the effectiveness, quality or safety of the Products available on its Website/App. 11.5 We disclaim responsibility for any harm to persons resulting from any instructions or Products
                referred to in the Website/App. My medi helper.com is not associated with any manufacturer of medicines or other products on the Website/App. We do not warrant that the Website/App, or its content will meet your requirements. 11.6 Please
                note that while My medi helper has made every effort to accurately display the colours of products on its Website/App, the actual colour you see will depend on your monitor. We cannot guarantee that your monitor's display of any colour
                will be the same as the colour of the Products delivered to you. 11.7 We may let you view our information and communicate with us through the Social Media services such as Facebook and Twitter. My medi helper explicitly disclaims any responsibility
                for the terms of use and privacy policies that govern these third-party websites, which are in no way associated with us. 11.8 My medi helper.com accepts no responsibility for any loss or damage suffered due to your reliance on the product
                reviews posted by the My medi helper Users. 11.9 My medi helper.com reserves the right to modify or withdraw any part of the website/App or any of its content at any time without notice. 12. APP/WEBSITE AVAILABILITY: We take all reasonable
                care to ensure the availability of the My medi helper.com Website/App 24 hours every day, 365 days per year. However, the Website/App may become temporarily unavailable due to maintenance, server or other technical issues, or for reasons
                beyond our control. My medi helper.com does not warrant uninterrupted access to this Website/App or any linked website/App. However, we may, but shall not be obliged to, issue a notice when we know of scheduled maintenance of our Website/App.
                13. LINKS TO THIRD-PARTY WEBSITES: We provide link to third-party websites, our online payment service partners, which process your Net Banking and Credit/Debit Card payments, respectively. We are not responsible for the availability or
                proper functioning of such linked pages or sites, and we will not be held responsible for any loss or inconvenience encountered as a result of using such Website link. 14. TERMS OF SALE: 14.1 My medi helper.com may accept or decline any
                order placed by a Customer in its absolute discretion without liability to you. 14.2 My medi helper.com reserves the right to discontinue any program or offer on its Website/App. 14.3 We reserve the right, without prior notice, to limit
                the order quantity of any Products available on My medi helper.com. 14.4 We acknowledge and you agree that you have fully and accurately disclosed your personal information and personal health information and consent to its use by the
                Pharmacy My medi helper and/or its affiliates. You confirm that you have had a physical examination by a physician and do not require a physical examination. 14.5 You understand that all Products shall be sold & dispensed by a registered
                Pharmacist at My medi helper and/or its affiliates. 14.6 If you are the patient/parent/authorised person on behalf of the patient, you authorise and appoint the Pharmacy My medi helper and/or its affiliates, as your attorney and agent,
                to take all steps, sign all documents and to act on your behalf as if you were personally present and acting for yourself for the limited purposes of (a) obtaining a valid prescription for any prescription which you have sent the Pharmacy;
                and (b) packaging your prescriptions and delivering them to you. By making this purchase you hereby authorise My medi helper and/or its affiliates to ship the order by Post/courier to your designated location. This authorisation shall
                include, but not be limited to: collecting and using your personal and personal health information as reasonably necessary for the fulfillment of your order. "YOU HAVE READ AND UNDERSTAND THESE TERMS AND AGREE THAT THEY SHALL BE BINDING
                UPON YOU AND YOUR ASSIGNS, HEIRS AND PERSONAL REPRESENTATIVES." 14.7 "If you are the parent/legal guardian/authorised person for the patient disclosed herein, you affirm that you are over the age of majority, and have full authority to
                sign for and provide the above representations to the Pharmacy My medi helper and/or its affiliates on the Patient's behalf." 15. PRESCRIPTION MEDICATION POLICY: 15.1 My medi helper.com, a fully licensed and regulated pharmacy, takes all
                precautions to strictly abide by the laws and regulations set forth in the dispensing of prescription medications. By placing the order for your prescription medicines, you acknowledge and accept the following terms regarding the purchase
                of any prescription medicines. 15.2 My medi helper.com will not dispense any prescription medication without a valid prescription from a licensed physician. 15.3 If you are ordering prescription medication(s), you hereby confirm that you
                will send us a scanned copy of your valid prescription(s) via email, fax, Whatsapp, or by post, and this prescription shall then be subject to the scrutiny of and approval by our qualified Pharmacists. 15.4 If our pharmacists have any
                questions or concerns about the prescription(s) you hereby authorize them to consult with an external network of doctors about the validity of the prescription. 15.5 The drug information provided in the My medi helper.com is for informative
                purposes only and this Website/App is not intended to provide diagnosis, treatment or medical advice. We are not liable for any adverse effects or harm to you as a result of your reliance on the information in the Website/App. 15.6 My
                medi helper requires either the User or Customer or the Caregiver to confirm he/she is completely aware of the indications, side effects, drug interactions, effects of missed dose or overdose of the medicines he/she orders from us. It
                is imperative to seek professional advice from your physician before purchasing or consuming any medicine from My medi helper.com. 15.7 At My medi helper.com, a Caregiver can order prescription medicines on your behalf. 16. CANCELLATION,
                RETURN AND REFUND POLICY: Refund Policy: At My medi helper.com, we do our best to ensure that you are completely satisfied with our products. And we are happy to issue a full refund based on the conditions listed below: Full Refund Possible
                If: � you received a defective item; � the ordered item(s) is lost or damaged during transit; � the ordered item(s) is past its expiry date. Please note: Mode of refund may vary depending on circumstances. If the mode of refund is by Credit/Debit
                Card or Net Banking, please allow 7 to 10 working days for the credit to appear in your account. While we regret any inconvenience caused by this time frame, it is the bank's policy that delays the refund timing and we have no control
                over that. If the mode of refund is by NMS Wallet, credit should be available within 24 hours. How to Request a Refund: To request a refund, simply email us your order details, including the reason why you're requesting a refund. We take
                customer feedback very seriously and use it to constantly improve our quality of service. If you have any queries, do call our help desk at 72007-12345, email us at sales@my medi helper.com, or contact our customer support executives through
                online chat. We're here for you! Return Policy: We do our best to ensure that the products you order are delivered according to your specifications. However, should you receive an incomplete order, damaged or incorrect product(s), please
                notify My medi helper Customer Support immediately or within 10 working days of receiving the products, to ensure prompt resolution. Please note that My medi helper.com will not accept liability for such delivery issues if you fail to
                notify us within 10 working days of receipt. We also understand that various circumstances may arise leading you to want to return a product or products that are not defective. In these cases, we may allow the return of unopened, unused
                products after deducting a 20% restocking charge, ONLY if you notify us within 30 working days of receipt. Return Policy Exceptions: Please note that we are unable to offer replacements or exchanges for the following product categories:
                Injections, Health Monitor & Equipments and Ortho Support. Also, My medi helper.com reserves the right to refuse returns (or refunds) for certain products, as marked in the respective product pages as "Note: This item cannot be returned
                for a refund or exchange." 17. CANCELLATION : The Website/App shall be only an intermediary connecting the User with the Doctor/registered medical practitioners of the service booked. Once the appointment has been made and a confirmation
                has been given to the User, the Company shall inform the Doctor/registered medical practitioners who shall render the consult at the agreed time, location and mode provided at the time of booking the service. Once an appointment has made
                and it is confirmed at our end, no amount shall be refunded, in the event of a cancellation. However, in certain circumstances, the Company at its discretion shall permit a refund of the full or partial amount if the Doctor/registered
                medical practitioners becomes unavailable or if an alternative Doctor/registered medical practitioners is arranged to consult. The decision of the Company shall be final in such cases. 18. LOCATION: Currently we provide the phone call
                and face to face video call services in India. We also book appointments for direct consultation. For the same please contact us at cs@my medi helper.com. 19. COPYRIGHTS, TRADEMARKS AND OTHER INTELLECTUAL PROPERTY RIGHTS: 19.1 As per the
                Terms and Conditions of My medi helper.com, the Website/App grants access to Users/Customers to view the content solely for visiting, ordering, and communicating only. All materials in this Website/App, including, but not limited to, images,
                illustrations, text, logos and page headers, that are part of this Website/App are copyrights and/or other intellectual properties owned by My medi helper Marketplace Limited. All other trademarks not owned by My medi helper.com that appear
                on this Website/App are the property of their respective owners, who may or may not be affiliated with, connected to, or sponsored by My medi helper.com. 19.2 You hereby agree that you will not reproduce, duplicate or copy the content
                of My medi helper.com for any purpose, unless you have been specifically permitted to do so in a separate agreement with this Website/App. 20. USER INDEMNIFICATION: You hereby agree to indemnify, defend, hold harmless My medi helper.com
                and its officers, directors, employees, agents, information providers, partners, licensors, advertisers and suppliers from and against all claims, losses, expenses, damages and costs, including reasonable legal fees and costs, resulting
                from any violation of this agreement, or any activity related to your account, or any information or material you have submitted or will submit to us in violation of any law or in breach of any third party rights (including, but not limited
                to, claims in respect of defamation, invasion of privacy, or infringement of any other intellectual property right). We reserve the right to exclusively defend and control any claims arising from the above and any such indemnification
                matters, and you hereby agree to cooperate fully with us in asserting any available defenses. 21.COMPLIANCE WITH LAWS: The User of the Website/App shall comply with all the applicable laws including without limitation to Foreign Exchange
                Management Act, 1999 and the rules made and notifications issued there under and the Exchange Control Manual as may be issued by Reserve Bank of India from time to time, Customs Act, Information and Technology Act, 2000 as amended by the
                Information Technology (Amendment) Act 2008, Prevention of Money Laundering Act, 2002 and the rules made there under, Foreign Contribution Regulation Act, 1976 and the rules made there under, Income Tax Act, 1961 and the rules made there
                under, Export Import Policy of government of India) applicable to them respectively for using Payment Facility and the website/App. 22. APPLICABLE LAW AND JURISDICTION: These Terms and Conditions and your use of this Website/App and its
                content will be governed by and construed in all respects in accordance with the laws of India subject to the jurisdictional courts of Chennai. 23. DISPUTE RESOLUTION: These Terms of Service will be governed by and construed in accordance
                with the laws of India without regard to its conflicts of law provisions. Any failure of the Website/App/ Company to enforce or exercise any provision of this Agreement or related right shall not constitute a waiver of that right or provision.
                The section titles used in this Agreement are purely for convenience and carry with them no legal or contractual effect. In the event of termination of this Agreement for any reason, you agree the following provisions will survive: the
                provisions regarding limitations on your use of Content, the license(s) you have granted to the Website/App/Company, and all other provisions for which survival is equitable or appropriate. In the case of a conflict between these terms
                and the terms of any electronic or machine readable statement or policy, these Terms of Service shall prevail. Similarly, in case of a conflict between these terms and our Privacy Policy, these Terms of Service shall prevail. All disputes
                involving but not limited to rights conferred, compensation, refunds, and other claims will be resolved through a two-step Alternate Dispute Resolution (�ADR�) mechanism. It is further agreed to by the Parties that the contents of this
                Section shall survive even after the termination or expiry of the Terms and/or Policy. a) Mediation: In case of any dispute between the parties, the Parties will attempt to resolve the same amicably amongst themselves, to the mutual satisfaction
                of both Parties. In the event that the Parties are unable to reach such an amicable solution within thirty (30) days of one Party communicating the existence of a dispute to the other Party, the dispute will be resolved by arbitration,
                as detailed here in below; b) Arbitration. In the event that the Parties are unable to amicably resolve a dispute by mediation, said dispute will be referred to arbitration by a sole arbitrator to be appointed by the Company, and the award
                passed by such sole arbitrator will be valid and binding on both Parties. The Parties shall bear their own costs for the proceedings, although the sole arbitrator may, in his/her sole discretion, direct either Party to bear the entire
                cost of the proceedings. The arbitration shall be conducted in English, and the seat of Arbitration shall be the city of Chennai in the state of Tamil Nadu, India. The Parties expressly agree that the Terms, Policy and any other agreements
                entered into between the Parties are governed by the laws, rules and regulations of India, and that the Courts at Chennai shall have exclusive jurisdiction over any disputes arising between the Parties. 24. SEVERABILITY: If any provision
                of these Terms and Conditions shall be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from these Terms and Conditions and shall not affect the validity and enforceability of any remaining
                provisions. 25. DISCLAIMER OF WARRANTIES AND LIABILITIES YOU EXPRESSLY UNDERSTAND AND AGREE THAT, TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW: THE WEBSITE/APP, SERVICES AND OTHER MATERIALS ARE PROVIDED BY THIS WEBSITE/APP IS ON AN
                "AS IS" BASIS WITHOUT WARRANTY OF ANY KIND, EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, INCLUDING THE IMPLIED WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. WITHOUT LIMITING THE FOREGOING, WE
                MAKE NO WARRANTY THAT: (I) YOUR REQUIREMENTS WILL BE MET OR THAT SERVICES PROVIDED WILL BE UNINTERRUPTED, TIMELY, SECURE OR ERROR-FREE; (II) MATERIALS, INFORMATION OBTAINED AND RESULTS WILL BE EFFECTIVE, ACCURATE OR RELIABLE; (III) ANY
                ERRORS OR DEFECTS IN THE WEBSITE/APP, SERVICES OR OTHER MATERIALS WILL BE CORRECTED. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, WE WILL HAVE NO LIABILITY RELATED TO USER CONTENT ARISING UNDER INTELLECTUAL PROPERTY RIGHTS, LIBEL,
                PRIVACY, PUBLICITY, OBSCENITY OR OTHER LAWS. WE ALSO DISCLAIM ALL LIABILITY WITH RESPECT TO THE MISUSE, LOSS, MODIFICATION OR UNAVAILABILITY OF ANY USER CONTENT. THE USER UNDERSTANDS AND AGREES THAT ANY MATERIAL OR DATA DOWNLOADED OR OTHERWISE
                OBTAINED THROUGH THE WEBSITE/APP IS DONE ENTIRELY AT THEIR OWN DISCRETION AND RISK AND THEY WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO THEIR COMPUTER SYSTEMS OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF SUCH MATERIAL OR DATA. WE
                ARE NOT RESPONSIBLE FOR ANY TYPOGRAPHICAL ERROR LEADING TO AN INVALID COUPON. WE ACCEPT NO LIABILITY FOR ANY ERRORS OR OMISSIONS, WITH RESPECT TO ANY INFORMATION PROVIDED TO YOU WHETHER ON BEHALF OF ITSELF OR THIRD PARTIES. WE SHALL NOT
                BE LIABLE FOR ANY THIRD PARTY PRODUCT OR SERVICES. 26. SUBMISSIONS: 26.1 My medi helper.com reserves sole discretion to accept, edit or reject any and all materials you may send to us (collectively, "Submissions") as part of the features
                in the Website/App, including but not limited to, Ratings & Reviews, Ask Our Pharmacist Your Questions and Testimonials. Such Submissions should not be offensive on moral, religious, racial or political grounds or of an abusive, indecent,
                threatening, unlawful, obscene, defamatory, menacing or otherwise objectionable nature. Transmitting such offensive materials may violate relevant laws, regulations and ethics of pharmacy. 26.2 My medi helper.com shall be deemed to own
                all known and hereafter existing rights of every kind and nature regarding the Submissions. By posting, uploading, inputting or providing your Submissions, you hereby grant unrestricted use of the Submissions for any purpose, without compensation
                to you, including a non-terminable, royalty-free and non-exclusive license to use, copy, distribute, transmit, publicly display, publicly perform, reproduce, edit, translate and reformat your Submission; and to publish your name in connection
                with your Submission. 26.3 You also represent and warrant that your Submissions will not infringe, misappropriate or violate a third party's patent, copyright, trademark, trade secret, moral rights or other intellectual property rights,
                or rights of publicity or privacy. 26.4 The User/Customer shall be prohibited to introduce, post, or transmit any information or software, which contains a virus, worm or other harmful components into the My medi helper.com Website/App.
                26.5 My medi helper.com does not endorse and is not responsible for any Submissions on its Website/App. We will not be liable for any loss or harm caused by the Submissions or your reliance on the information, including but not limited
                to, statements, opinions and reviews posted by the Users/Customers, which may be inaccurate, offensive, obscene, threatening or harassing. 27. DISCLAIMERS You understand that the Website/App is a platform that Users utilize to locate Doctor/registered
                medical practitioners and make appointments for consult. Even though we take all the necessary steps to verify the authenticity of the Doctor/registered medical practitioners, You understand and agree that we shall not be liable for any
                deficiencies including but not limited to misconduct, injury caused or lack of knowledge from the end of the Doctor/registered medical practitioners. We are not a party to such interaction and take no liability that arises from any such
                acts of the Doctor/registered medical practitioners. Healthcare Services: All of the Treating Providers who deliver Services through My medi helper are independent professionals solely responsible for the services each provides to you.
                My medi helper does not practice medicine or any other licensed profession, and does not interfere with the practice of medicine or any other licensed profession by Treating Providers, each of whom is responsible for his or her services
                and compliance with the requirements applicable to his or her profession and license. Neither My medi helper nor any third parties who promote the Services or provide you with a link to the Service shall be liable for any professional
                advice you obtain from a Treating Provider via the Services. Informed Consent: The telehealth Services you receive from Treating Providers are not intended to replace a primary care physician relationship or be your permanent medical home.
                You should seek emergency help or follow-up care when recommended by a Treating Provider or when otherwise needed and continue to consult with your primary care physician and other healthcare professionals as recommended. You will have
                direct access to customer support services to follow up on medication reactions, side effects or other adverse events. Among the benefits of our Services are improved access to healthcare professionals and convenience. However, as with
                any health service, there are potential risks associated with the use of telehealth. These risks include, but may not be limited to: � In rare cases, information transmitted may not be sufficient (e.g. poor resolution of images) to allow
                for appropriate health care decision making by the Treating Provider; � Delays in evaluation or treatment could occur due to failures of the electronic equipment. If this happens, you may be contacted by phone or other means of communication.
                In rare cases, a lack of access to all of your health records may result in adverse drug interactions or allergic reactions or other judgment errors; � Although the electronic systems we use will incorporate network and software security
                protocols to protect the privacy and security of health information, in rare instances, security protocols could fail, causing a breach of privacy of personal health information By accepting these Terms of Use, you acknowledge that you
                understand and agree with the following: You understand that you may expect the anticipated benefits from the use of telehealth in your care, but that no results can be guaranteed or assured. You understand that the laws that protect the
                privacy and security of health information apply to telehealth, and have received Netmed�s Notice of Privacy Practices, which describes these protections in more detail. Electronic communications are directed to your Treating Provider(s)
                and their supervisees through a secure, encrypted video interface and electronic health record. Your Treating Provider may determine that the Services are not appropriate for some or all of your treatment needs, and accordingly may elect
                not to provide telehealth services to you through the Site. With respect to psychotherapy, you are entitled to receive information from your Treating Provider about the methods of therapy, the techniques used, the duration of your therapy
                (if known), and the fee structure. You can seek a second opinion from another therapist or terminate therapy at any time. With respect to psychotherapy, if you and your Treating Provider decide to engage in group or couples therapy (collectively
                �Group Therapy�), you understand that information discussed in Group Therapy is for therapeutic purposes and is not intended for use in any legal proceedings involving Group Therapy participants. You agree not to subpoena the Treating
                Provider to testify for or against other Group Therapy participants or provide records in court actions against other Group Therapy participants. You understand that anything any Group Therapy participant tells the Treating Provider individually,
                whether on the phone or otherwise, may at the therapist�s discretion be shared with the other Group Therapy participants. You agree to share responsibility with the Treating Provider for the therapy process, including goal setting and
                termination. You can send messages to your Treating Provider by contacting My medi helper Customer Support. If you are experiencing a medical emergency, you should call the emergency ambulance number or go to the nearest emergency room.
                All communication between the Doctor/registered medical practitioners and you is a separate transaction which includes without any limitation all warranties related to consult and after consult services related to consult. We do not have
                any control over such information and play no determinative role in the finalization of the same and hence do not stand liable for the outcomes of such communication. We do not endorse any specific Doctor/registered medical practitioners
                on the App nor place any guarantee as to its quality and value. Any such recommendations that are done are done by other users and the Company does not verify or acknowledge the same. Further We may suggest apt treatments or services in
                accordance with the your information within our knowledge but we do not guarantee any effectiveness or success upon using these services. Subject to the above sub-clauses, a contract exists between the Doctor/registered medical practitioners
                and You and as such any breach of contract and thus, any claim arising from such breach is the subject matter of the Doctor/registered medical practitioners and you alone and we are in no way a party to such breach or involved in any suit
                claim/negligence/damages etc arising from the same breach. Even thought we authenticate and approve the Doctor/registered medical practitioners, You are expected to check and satisfy the creditworthiness of the Doctor/registered medical
                practitioners and the genuineness of the skill. We are not liable for the same. We are in no way liable for any deficiency of services if any arises including but not limited to cancellation of order due to any unavailability of the Doctor/registered
                medical practitioners. We are not liable for the general conduct of the Doctor/registered medical practitioners and we shall not be liable for any unwarranted act performed by the Doctor/registered medical practitioners. You are advised
                to ensure your safety and the safety of your belongings. The content on the Website and App is general in nature and summarized, and is provided for informational purposes only. The content of the Website and App, including without limitation,
                text, copy, audio, video, photographs, illustrations, graphics and other visuals, is for informational purposes only and does not constitute professional advice, or recommendations of any kind. We do not assure any liability for the contents
                of any material provided on the App. Reliance on any information provided by us, other visitors to the Website/App is solely at your own risk. We assume no liability or responsibility for damage or injury to persons or property arising
                from any use of any product, information, idea, or instruction contained in the materials provided to you. We reserve the right to change or discontinue, at any time, any aspect or feature of this Site without notice. You do hereby grant
                us a non-exclusive, worldwide, perpetual, irrevocable, royalty- free, sub-licensable right to exercise the copyright, publicity, and database rights you have in Your information, in any media now known or not currently known, with respect
                to your information to enable us to use the information for the purpose of providing the Services. You release and indemnify us and/or any of its officers and representatives from any cost, damage, liability or other consequence of any
                of the actions of the Users of the Website/App and specifically waive any claims that You may have in this behalf under any applicable law. Please note that there could be risks in dealing with underage persons or people acting under false
                pretence. The parties hereby agree that the Platform shall not be held liable neither to the Doctors/registered medical practitioners nor the Patients/users for any offer of service/consultation/ communication made between them for whatsoever
                reason it may be. Further the platform/company shall not be held liable neither by the Doctor/registered medical practitioners nor the patients/users for any technical mishap of whatever kind. The Platform is only an intermediary and cannot
                be held liable for any dispute/claim/damages etc that arise between the Doctors/registered medical practitioners and the Patients/users for whatsoever reason it may be. Both of them hereby indemnify the company for any such claims. 28.
                INDEMNIFICATION AND LIMITATION OF LIABILITY YOU AGREE TO INDEMNIFY, DEFEND AND HOLD HARMLESS THIS WEBSITE/APP INCLUDING BUT NOT LIMITED TO ITS AFFILIATE VENDORS, AGENTS AND EMPLOYEES FROM AND AGAINST ANY AND ALL LOSSES, LIABILITIES, CLAIMS,
                DAMAGES, DEMANDS, COSTS AND EXPENSES (INCLUDING LEGAL FEES AND DISBURSEMENTS IN CONNECTION THEREWITH AND INTEREST CHARGEABLE THEREON) ASSERTED AGAINST OR INCURRED BY US THAT ARISE OUT OF, RESULT FROM, OR MAY BE PAYABLE BY VIRTUE OF, ANY
                BREACH OR NON-PERFORMANCE OF ANY REPRESENTATION, WARRANTY, COVENANT OR AGREEMENT MADE OR OBLIGATION TO BE PERFORMED BY YOU PURSUANT TO THESE TERMS OF USE. FURTHER, YOU AGREE TO HOLD US HARMLESS AGAINST ANY CLAIMS MADE BY ANY THIRD PARTY
                DUE TO, OR ARISING OUT OF, OR IN CONNECTION WITH, YOUR USE OF THE WEBSITE/APP, ANY CLAIM THAT YOUR MATERIAL CAUSED DAMAGE TO A THIRD PARTY, YOUR VIOLATION OF THE TERMS OF SERVICE, OR YOUR VIOLATION OF ANY RIGHTS OF ANOTHER, INCLUDING ANY
                INTELLECTUAL PROPERTY RIGHTS. IN NO EVENT SHALL WE, OR OUR OFFICERS, DIRECTORS, EMPLOYEES, PARTNERS OR SUPPLIERS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY SPECIAL, INCIDENTAL, INDIRECT, CONSEQUENTIAL OR PUNITIVE DAMAGES WHATSOEVER, INCLUDING
                THOSE RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER OR NOT FORESEEABLE OR WHETHER OR NOT WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, OR BASED ON ANY THEORY OF LIABILITY, INCLUDING BREACH OF CONTRACT OR WARRANTY, NEGLIGENCE
                OR OTHER TORTIOUS ACTION, OR ANY OTHER CLAIM ARISING OUT OF OR IN CONNECTION WITH YOUR USE OF OR ACCESS TO THE WEBSITE/APP, SERVICES OR MATERIALS. THE LIMITATIONS AND EXCLUSIONS IN THIS SECTION APPLY TO THE MAXIMUM EXTENT PERMITTED BY
                APPLICABLE LAW. 29. TERMINATION: You agree that My medi helper.com, in its sole discretion and for any or no reason, including without limitation if you breach these Terms and Conditions, may terminate your access to and use of the Website/App,
                at any time. You agree that any termination of your access to the Website/App or suspension of your account may be effected without prior notice, and you agree that My medi helper.com shall not be liable to you for any such termination.
                Your right to use the My medi helper Website/App /Service immediately ceases upon termination of your access/use of the Website/App. 30. CHANGES TO THESE TERMS AND CONDITIONS: We reserve the right to amend these terms and conditions from
                time to time without further notice to you. Any such amendments we make shall be effective once we post a revised version of these Terms and Conditions on the Website/App. It is your responsibility to review the My medi helper.com Terms
                and Conditions regularly. Your continued use of the Website/App following the publication of any such changes will constitute your agreement to follow and be automatically bound by the amended terms and conditions. 31. MISCELLANEOUS We
                reserve the right to change these Terms of Service at any time without notice in its discretion and to notify users of any such changes solely by changing this Terms of Service. Your continued use of the Website/App after the posting of
                any amended Terms of Service shall constitute your agreement to be bound by any such changes. Your use of this Website/App prior to the time this Terms of Service was posted will be governed according to the Terms of Service that applied
                at the time of your use. We may modify, suspend, discontinue or restrict the use of any portion, including the availability of any portion of the Content at any time, without notice or liability. We may deny access to any person or user
                at any time for any reason. In addition, we may at any time transfer rights and obligations under this Agreement to any affiliate, subsidiary or business unit, or any of their affiliated companies or divisions, or any entity that acquires
                us or any of their assets. We hereby reserve the right to block usage of the Website/App if any breach of the Terms of Service is caused by a User. This can in no way be construed as a waiver of any legal right under Indian law to claims
                any damages or initiate any legal proceedings against the User. Contact Information Please contact us for any questions or comments regarding these Terms and Conditions. copyright @2020.
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
</body>

</html>