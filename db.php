

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
  echo "connected";



    
    $serialId = "";
    $firstname = "";	// Sender Name
        $lastname = ""; 
        $company_name = ""; // Sender's email ID
        $address = ""; // Sender's Message
        $pincode = "";
      
   if(isset($_POST['dropdown'])!='') { 
    // check if the username has been set
}

   $sql = "INSERT INTO company_details (id, serialId, firstname, lastname, company_name, address, pincode, uploaded_on, dropdown, email, PASSWORD) VALUES
    ('', '$_POST[serialId]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[company_name]','$_POST[address]', '$_POST[pincode]', NOW(), '$_POST[dropdown]', '$_POST[email]', '$_POST[PASSWORD]')";

 // $last_id = $conn->mysqli_InsertId();
 //  echo "New record created successfully. Last inserted ID is: " . $last_id;
 


if ($conn->query($sql) === TRUE) 
{


    
    header("Refresh: 0.000000001; url=http://localhost/mobile_app/sec.php");

 //  echo "<br><br>New record created successfully";
   
    $latest_id = $conn->insert_id;  
    
   // echo "Insert successful. Latest ID is: <br>" . $latest_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$company_id = $latest_id;

$targetDir = "img/";
$allowTypes = array('jpg','png','jpeg','gif');

$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
if(!empty(array_filter($_FILES['files']['name']))){
    foreach($_FILES['files']['name'] as $key=>$val){
        // File upload path
        $fileName = basename($_FILES['files']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        $location = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
           if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                // Image db insert sql
                $insertValuesSQL .= "('".$fileName."', NOW(), '".$location."', '".$company_id."'),";
            }
            else{
                $errorUpload .= $_FILES['files']['name'][$key].', ';
           }
        }else{
            $errorUploadType .= $_FILES['files']['name'][$key].', ';
        }
    }
    
    if(!empty($insertValuesSQL)){
        $insertValuesSQL = trim($insertValuesSQL,',');
        // Insert image file name into database
        $insert = $conn->query("INSERT INTO images1 (file_name, uploaded_on, location, company_id) VALUES $insertValuesSQL");
       // $last_id = $conn->lastInsertId();
       // echo "New record created successfully. Last inserted ID is: " . $last_id;
        if($insert){
            $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
           // $statusMsg = " <br> Files are uploaded successfully".$errorMsg;
        }else{
           // $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
}else{
    //$statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;





/*$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);

$targetFilePath = $targetDir . $fileName;
$location = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        //if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into images (file_name, uploaded_on, location) VALUES ('".$fileName."', NOW(),'".$location."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
//}else{
   // $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;



//$sql1 = "INSERT INTO media (id, media_type, media_path, company_id, customer, created_at) VALUES
  //  ('', '$_POST[media_type]', '$_POST[media_path]', '$_POST[company_id]','', '')";

*/



/*if ($conn->query($sql1) === TRUE) 
{
    echo "New record created successfullydfdgfdgfdgfgfdgf";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} */


//}
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

//if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
//} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 

?>




