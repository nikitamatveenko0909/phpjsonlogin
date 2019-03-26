<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    session_start();
    if(!isset($_SESSION['auth'])){
      header("Location:index.php");
    }
   ?>
  <a href="logout.php">Log out</a>
  <?php
    echo $_SESSION['success'];

    $url = 'list.json';
    $data = file_get_contents($url);
    $list = json_decode($data);





    foreach ($list as $obj) {
      for($i = 0; $i < count($obj); $i++){
        var_dump($obj[$i]->name);
        var_dump($obj[$i]->number);
      }
    }


   ?>

</body>
</html>
