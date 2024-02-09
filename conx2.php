<?php 
 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "task1";

$con = mysqli_connect($server, $user, $pass, $db);
if(!$con){
        die("Connection Lost...!".mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $titre= $_POST["titre"];
       $description= $_POST["description"];

        $uploadPath = "uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $uploadPath .$fileName;
       if ( move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/')){    
            $sql = "INSERT INTO pink ( titre , description , image ) VALUES (?,?,?)";
            $stmt = $con->prepare($sql);
    
            if ($stmt) {
                $stmt->bind_param( "sss",$titre,$description,$fileName);
    
                if ($stmt->execute()) {
                    echo "Image uploaded and data inserted successfully!";
                } else {
                    echo "Error executing SQL query: " . $stmt->error;
                }
    
                $stmt->close();
            } 
        } 
    }
    

?>