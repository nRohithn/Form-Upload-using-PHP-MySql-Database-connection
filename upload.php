
<?php

session_start();


   
  // if( isset( $_SESSION['counter'] ) ) {
   //   $_SESSION['counter'] += 1;
   //}else {
   //   $_SESSION['counter'] = 1;
  // }

	
 //  $msg = "You have visited this page ".  $_SESSION['counter'];
  // $msg .= "in this session.";

?>

<!DOCTYPE html>
<html lang="en">


<head>
      <title>Sessions </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="HandheldFriendly" content="true">
      <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
      <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
      <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
      <script src="extensions/export/bootstrap-table-export.js"></script>
      <script src="toggled-search-bar.js"></script>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </head>





    <style  type="text/css">
	
	
	
	
	.center {
  margin: auto;
  width: 75%;
 
  padding: 10px;
}

@media (min-width: 481px) and (max-width: 768px) {
   #banner { width:740px; }
   #banner img { max-width:740px; max-height:222px; }
   #main { width:740px; }           
   #main-content { width:450px; float:left; }
   #widget-container { width:200px; float:right; }
   .widget-content { width:160px; }
}
 
@media (min-width: 321px) and (max-width: 480px) {
   #banner { width:450px; }
   #banner img { max-width:450px; max-height:135px; }
   #main { width:450px; }           
   #main-content { width:400px;}
   #widget-container { width:400px; }
   .widget-content { width:120px; margin:5px; float:left;}
   .widget-text { display:none; }
}
 
@media (max-width: 320px) {
   #banner { width:275px; }
   #banner img { max-width:275px; max-height:83px; }
   #main { width:250px; }           
   #main-content { width:250px;padding:0px;}
   #widget-container { width:250px; padding:0px; }
   .widget-content { width:250px; margin:5px;}
   .widget-text { display:none; }
}





.ss {
  background-image: url("images/back.jpg");
}

.h7 {
    color: rgb(255, 255, 255);
}

.h6 {
    color: #000;
}

.p1  {
	color: black;
}

.a {

    color: black;
}

.bg {
  /* The image used */
  opacity: 0.75;
  filter: alpha(opacity=50); 
  background-image: url("images/back.jpg");

  /* Full height */
  height: 100%; 
  
  background-image: rgb(238, 90, 90) transparent;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

p1 {
    color: #000;
}

.div3 {
    background-color: dimgrey;
}

p {
    color: rgb(248, 250, 252);
}


.text-block {
  position: absolute;
  top: 200px;
  bottom: 90px;
  
  color: white;
  padding-left: 200px;
  padding-right: 400px;
}



.text-block1 {
  position: absolute;
  top: 200px;
  bottom: 100px;
  
  color: white;
  padding-left: 900px;
  padding-right: 400px;
}





.bgimg {
    background-image: url('images/back.jpg');
}




@media only screen and (min-width: 768px) {
  .dropdown:hover .dropdown-menu {
    display: block;
    background-color: darkslategrey;
  }
}


        </style>







    <body>


<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
	<img src="img/logo.png" width="200" height="50">
  </nav>
</div>


<div class="row" style="height: 1200px; background-color: rgb(195, 250, 247);">

<!-- Default form register -->

	<div class="row">
 <?php 
 




// echo ( $msg );

 ?>




<!-- Default form register -->
<center>

<form method="post" action="db.php" enctype="multipart/form-data">

			<center>	<label>serial number 1 :</label> </center>

		

				<center>	<input class="input" type="text" name="serialId" style="height: 30px; width: 250px;"> <center>
				

				<center> <label>first Name :</label> </center>
					<input class="input" type="text" name="firstname"  style="height: 30px; width: 250px;" >
					
				<center>	<label>Last Name :</label> </center>

					<input class="input" type="text" name="lastname"  style="height: 30px; width: 250px;" >
					
					<center>	<label>email:</label> </center>

                                       <input class="input" type="text" name="email"  style="height: 30px; width: 250px;" >
									   
									   

									   
					<center>	<label> Birthday::</label> </center>

  <input type="date" name="PASSWORD" style="height: 30px; width: 250px;">




				
			
					<center>	<label>company details</label> </center>
					<input class="input" type="text" name="company_name"  style="height: 30px; width: 250px;" >
					
					
					
					<center>		<label>address</label> </center>
					<input class="input" type="text" name="address"  style="height: 30px; width: 250px;" >
				
					
					<center>	<label>Zipcode :</label> </center>
					<input class="input" type="text" name="pincode"  style="height: 30px; width: 250px;" >
			
					

					
			<br>	<center>	Select Image File to Upload:<br> </center>
                  <br> <center> <input type="file" name="files[]" multiple  style="height: 30px; width: 250px;" > <center>

				  <br>
				  <div id="result">
        <!--Position information will be inserted here-->
    

                       <div class="row" style="background-color: rgb(195, 250, 247);">      
<div class="center"> <h5>Terms and condition </h5>  </div>

<div class="center"> 
<h8>   1)  You get more time to focus on individual words. When a text is short, you can devote more time to learning how every single word is used and what importance it has in the piece.</h8><br>
<h8>   2)  You can read a whole story in one sitting. Attention spans are very important for learning, and the ability to finish a story gives you more time to digest it. Short stories are designed to give you maximum information with minimal effort.</h8><br>
<br> 
	<center>	Select: <input type="checkbox" id="fruit1" name="dropdown" value="male">  </center>
</div>

</div>



				
				<br>	<center><input class="submit" type="submit" name="submit" value="Submit"  style="height: 30px; width: 150px;"><center>
					<br><br>
				</form>

</center>
</div>
	


</form>










    

</div>
<!-- Default form register -->
     
				 <div class="row" style="height: 250px; background-color: rgb(75, 113, 245);">
                        
   <div class="col-md-3"><img src="img/twitter.png" width="200" height="75"></div> 
                
                              <div class="col-md-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                    <h11>Albertsons Technologies pvt ltd</h11><p>NO 110,  Richmond Towers, 1st Floor 12,Richmon Road banglore-560025</p>
                                </div>
                
                                <div class="col-md-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                    <h11>cantact number:</h11><p>+91 9845081593 , +91 18022273510</p><h11>E Mail:</h11><p>bindu@albertson.net</p>
                                </div>
                                <div class="col-md-3" style="font-family: Georgia, 'Times New Roman', Times, serif;"><h11>Latest News:</h11><p>visit us at def expo 2018 <br> visit us at FILTECH 2018</p></div>
                             
                 </div>
        




        </body>


    

        </html>
		
		

