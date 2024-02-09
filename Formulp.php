<!DOCTYPE html >
<html  xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
 background-color: #fff;   
   padding: 30px;
 border-radius: 10px;
   box-shadow:10px 5px 5px pink;;
   text-align: center;
width: 350px;
height: auto;
position: absolute;
left: 55%;
top: 20%;
transform: translate(-50%, -70%);
-webkit-transform: translate(-70%, 40%);
}
</style>
</head>
<body>

    ?>

    <form method="POST" action ="conx2.php?" enctype="multipart/form-data">
        
        <input type="hidden" name="id"> 
       Titre <br> <input type="text" id="titre" name="titre" ><br><br>  
       description <br><input type="text" name="description" ><br><br>
      Ajouter un Fichier  <br> <input type="file" id="image" name="image" >
                        <br><br>
   <input type="submit" value="Insert" name="insert" class="form-btn">
               
                   
          