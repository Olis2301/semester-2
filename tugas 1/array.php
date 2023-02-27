<?php
//data array buah//

  $m_fruits = [
    ["id" => "1", "name" => "Pisang", "color" => "Kuning", "stock" => 98, "price" => 17000, "description" => "Pisang dengan rasa manis dan kalsium"],
    ["id" => "2", "name" => "Jeruk", "color" => "Orange", "stock" => 77, "price" => 23000, "description" => "Buah yang kaya akan vitamin C dan antioksidan"],
    ["id" => "3", "name" => "Mangga", "color" => "Hijau", "stock" => 65, "price" => 19000, "description" => "Buah yang kaya akan vitamin C"],
    ["id" => "4", "name" => "Stawberry", "color" => "Merah", "stock" => 76, "price" => 12000, "description" => "Buah yang kaya akan serat dan vitamin C dan menyegarkan"],
    ["id" => "5", "name" => "Durian", "color" => "Kuning", "stock" =>12, "price" => 21000, "description" => "Buah yang sangat enak"],
    ["id" => "6", "name" => "Melon", "color" => "Hijau", "stock" => 95, "price" => 16000, "description" => "Buah yang kaya akan akan kesegaran"]
  ];
  
  foreach ($m_fruits as $fruit) {
    echo '<li>'.$fruit["id"].'</li>';
    echo '<li>'.$fruit["name"].'</li>';
    echo '<li>'.$fruit["color"].'</li>';
    echo '<li>'.$fruit["stock"].'</li>';
    echo '<li>'.$fruit["price"].'</li>';
    echo '<li>'.$fruit["description"].'</li>';
    echo '<br>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <link rel="stylesheet" href="css.css" />

</head>
<body class="bg">
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody class="bg1">
        <?php
        //table buah//
        
        foreach ($m_fruits as $fruit) {
            echo "<tr>";
            echo "<th>" . $fruit["id"] . "</th>";
            echo "<th>" . $fruit["name"] . "</th>";
            echo "<th>" . $fruit["color"] . "</th>";
            echo "<th>" . $fruit["stock"] . "</th>";
            echo "<th>" . $fruit["price"] . "</th>";
            echo "<th>" . $fruit["description"] . "</th>";
            echo "</tr>";
          }
    
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>