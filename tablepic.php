

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUcaksR6PL" crossorigin="anonymous">

  <style>
  img {
    max-width: 100px; 
    max-height: 100px;
  }
.ajouter-btn1,
.ajouter-btn2 {
    display: inline-block;
    padding: 8px 16px;
    margin-left: 10px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    border: 2px solid #3498db; 
    color: #3498db;
    background-color: #ffffff;
    border-radius: 7px;
    transition: background-color 0.3s, color 0.3s;
    float: left;
    cursor: pointer;
}
.ajouter-btn2 {
    margin-right: 0; 
}
.button-container {
    display: flex;
}
.ajouter-btn1:hover,
.ajouter-btn2:hover {
    background-color: #3498db; 
    color: #ffffff;}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}
.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
}
.ajouter-btn1 {
    margin-right: 5px;
}
.ajouter-btn1:hover,
.ajouter-btn2:hover {
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.7);
}
td img {
    display: block;
    margin: 0 auto;
}

td a {
    display: block;
}

</style>
</head>
<body>
<div class="container mt-5">
  <table border="1" >
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
                require 'conex.php';

                $requete = "SELECT * FROM pink";
                $query = mysqli_query($conn, $requete);

                while ($rows = mysqli_fetch_assoc($query)) {
                    $id = $rows['id'];
                    echo "<tr>";
                    echo "<td><img src='" . htmlspecialchars($rows['image']) . "'></td>";
                    echo "<td>" . htmlspecialchars($rows['titre']) . "</td>";
                    echo "<td>" . htmlspecialchars($rows['description']) . "</td>";
                    echo "<td class='bouton-container'>";
                    echo "<form method='GET' action='modif.php'>";
                    echo "<input type='hidden' name='id' value='".$id."'>";
                    echo "<button type='submit' class='ajouter-btn1'>Modifier</button>";
                    echo "</form>";
                    echo "<a href='delete.php?id=".$id."' class='ajouter-btn2'>delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
             
                ?>

    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-rbsr5zQ8PTIcpNQ6HvBNp8aUpQzS/4SHzNRj12HJ6eVM4yP1fYVhHATtExlKswEA" crossorigin="anonymous"></script>
</body>
</html>