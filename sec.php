
<!DOCTYPE html>
<html lang="en">


<head>
      <title>Sessions</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="HandheldFriendly" content="true">
      <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
      
	  
	  
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
	  
	  
	  
	  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
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






.bgimg {
    background-image: url('images/back.jpg');
}





#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 10px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 20%;
  border: 1px solid #ddd;
  font-size: 8px;
}

#myTable th, #myTable td {
  text-align: right;
  padding: 10px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
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



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile_app";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


else{
	
$sql = "SELECT id, serialId, firstname, lastname, company_name, address, pincode, Email, PASSWORD FROM company_details ";
$result = $conn->query($sql);

     ?>

	<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>




	
<div class="row" style="background-color: rgb(195, 250, 247);">
	<table border="2" id="myTable" class="display"   style="width:1230px; height: 5px;">
    <thead>  
     	<tr>	
            <th>id</th>
            <th>Serial id</th>
			<th>first name</th>
			<th>last name</th>
			 <th>company name</th>
			 <th>address</th> 
            <th>pincode</th>
			<th>Email</th>
			<th>date of birth</th>	
        </tr>
    </thead>
	
	

    <tbody>
	
		<?php
				if ($result->num_rows > 0) 
				{
					// output data of each row
					while($row = $result->fetch_assoc()) 
						{
		
		?>
	
        <tr>
              <td> <?php echo " " . $row["id"] ."<br>" ; ?> </td>
			<td>    <?php echo " " . $row["serialId"]. "<br>"; ?> </td>
			<td>	 <?php echo " " . $row["firstname"].  "<br>"; ?></td>
			<td>  <?php  echo " " . $row["lastname"]. "<br>";?> </td>
			<td> <?php  echo " " . $row["company_name"].  "<br>"; ?></td>
			<td> <?php echo " " . $row["address"].  "<br>"; ?></td>
			<td> <?php   echo " " . $row["pincode"]. "<br>";?> </td>
			<td> <?php  echo " " . $row["Email"].  "<br>"; ?></td>
			<td>	<?php echo "" . $row["PASSWORD"]."<br>";?> </td>
        </tr>
		
						<?php
									}
	
									}
						?>
		
    </tbody>
		
</table>



</div>



  <script src = "js/jquery-3.2.1.min.js"></script>
      <script src = "js/main.js"></script>
      <script src = "js/impExt.js"></script>
      <script src="js/confRoom.js"></script>
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
            $('#myTable').DataTable();
         } );
      </script>


		   
		<?php
									
    }
	
















mysqli_close($conn);






?>



 
</div>


 





<div class="row" style="background-color: rgb(195, 250, 247);">
<div class="center"> <h5>Terms and condition </h5>  </div>

<div class="center"> 
<p1>      1)  You get more time to focus on individual words. When a text is short, you can devote more time to learning how every single word is used and what importance it has in the piece.</p1>
<p1> <br> 2)  You can read a whole story in one sitting. Attention spans are very important for learning, and the ability to finish a story gives you more time to digest it. Short stories are designed to give you maximum information with minimal effort.</p1><br>
<br>
</div></div>

                 
				 <div class="row" style="height: 150px; background-color: rgb(17, 19, 153);">
                        
   <div class="col-md-3"><img src="img/twitter.png" width="200" height="50"></div> 
                
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
