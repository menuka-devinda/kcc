<?php require './views/header.html'; ?>

<div class="nav-collapse nav-collapse_  collapse">
    <ul class="nav sf-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="cocopeat.php">Coco</a></li>
        <li><a href="ourquality.php">Our quality</a></li>
        <!--<li class="sub-menu">
            <a href="process.html">Process</a>
              <ul>
            <li><a href="#">Process 01</a></li>
            <li><a href="#">Process 02</a></li>
            <li><a href="#">Process 03</a></li>
          </ul>
            </li>-->
        <li class="active"><a href="contact-us.php">Contact us</a></li>
    </ul>
</div>
</div>
</div>
</div>
</div>
</div>
</header>


<div class="bg-content thumbnail thumbnail-1"> 


    <!-- content -->
    <div id="content"><div class="ic"></div>
        <div class="container">
            <div class="row">
                <article class="span8">
                    <h3><span style="color:#85ab44;">K</span>CC Coco<small> &nbsp;&nbsp;Contact us</small></h2>
                        <?php
                        $name = filter_input(INPUT_POST, 'contact_name', FILTER_SANITIZE_STRING);
                        $phone = filter_input(INPUT_POST, 'contact_phone', FILTER_SANITIZE_NUMBER_INT);
                        $email = filter_input(INPUT_POST, 'contact_email', FILTER_VALIDATE_EMAIL);
                        $message = filter_input(INPUT_POST, 'contact_message', FILTER_SANITIZE_STRING);
                        $message = 'Customer ' . $name . ' has send a message.<br/> Email:' . $email .
                                '<br/> Message:' . $message . '</br>' . 'Phone:' . $phone;
                        $textmessage = 'Thank you for contacting Kalahari Connections Canada Ltd (KCC). Someone from KCC will get back to you soon!';
                        $headers = "From: sales@kalahariconnections.com" . "\r\n";


                        $headers2 = "From: " . $email . "\r\n";

                        $headers2 .= "MIME-Version: 1.0\r\n";
                        $headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $emailSent=0;
                        
                        if (!empty($email) && !empty($name)) {
                        	$emailSent= 1;
                            mail($email, "KCC Coco", $textmessage, $headers); //send an email to customer
                            mail('sales@kalahariconnections.com', "Customer " . $name, $message, $headers2); //KCC get response via an email
                           // callDisplay($name);
                        }
                        ?>
                        <div class="inner-1">
                            <form id="contact-form" action="contact-us.php" method="post">
                                <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                                <fieldset>
                                    <div class="contact-labels">
                                        <label class="label"> Name: </label>
                                        <input type="text" name="contact_name" value="">
                                        <br>
                                        <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> 

                                    </div>
                                    <div class="contact-labels">

                                        <label class="label">Telephone: </label>
                                        <input type="tel" value="" name="contact_phone">
                                        <br>
                                        <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> 

                                    </div>
                                    <div class="contact-labels">
                                        <label class="label">Email:</label>
                                        <input type="email" value="" name="contact_email">
                                        <br>
                                        <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> 

                                    </div>
                                    <div class="contact-labels">
                                        <label class="label">Message:</label>

                                        <textarea name="contact_message" style="width: 56%;"></textarea>
                                        <br>
                                        <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> 

                                    </div>
                                    <div class="buttons-wrapper" style="float: right;right: 222px;"> 
                                        <button class="btn btn-1" type="reset" >Reset</button>

                                        <button class="btn btn-1" type="submit" >Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                </article>
                <article class="span4">
                    <h3>Contact info</h3>

                    <address class="address-1">


                        <div class="overflow"> 
                            <span>Address:</span>9133, 162A Street Surrey,BC, V4N 5S4<br/><br/>
                            <span>Mobile:</span>+778-835-2210<br>
                            <!--  <span>Telephone:</span>+91 12345 67890<br>
                              <span>FAX:</span>+91 12345 67890 <br>-->
                            <span>E-mail:</span> <a href="#" class="mail-1">sales@kalahariconnections.com</a><br>
                           <!-- <span>Skype:</span> <a href="#" class="mail-1">@woohooo</a></div>-->
                            </address>
                            <br/><br/>
                            <!--  -->
                            
					<?php
					if($emailSent==1){
					
					    echo '<span style="color:#85ab44;">'.'Thank you ' . $name . ' for contacting Kalahari Connections Canada Ltd (KCC). Someone from KCC will get back to you soon!'.'</span>';
					    $emailSent=0;
					}
					?>
                            </article>
                        </div>
                        </div>
                        </div>
                        </div>
                        <script type="text/javascript">



                        </script>
                        <?php require './views/footer.php'; ?>