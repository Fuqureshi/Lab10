<!DOCTYPE html>
<html>

<head>
    <title>Lab Results: An Interactive HTML Color Sampler</title>
</head>

<body>
    <h2>Lab Results: An Interactive HTML Color Sampler</h2>
    <?php
    // include 'index.php';
    // echo $nameErr;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["r"]) || $_POST["r"] > 255 ) {
            header("Location: index.php");
          // $nameErr = "Name is required";
          $_POST["r"] ='';
        } else {
          $name = test_input($_POST["r"]);
          // $nameErr = "yes";
        }
        if (empty($_POST["g"]) || $_POST["g"] > 255 ) {
          header("Location: index.php");
        // $nameErr = "Name is required";
        $_POST["g"] ='';
      } else {
        $name = test_input($_POST["g"]);
        // $nameErr = "yes";
      }
      if (empty($_POST["b"]) || $_POST["b"] > 255 ) {
        header("Location: index.php");
      // $nameErr = "Name is required";
      $_POST["b"] ='';
    } else {
      $name = test_input($_POST["b"]);
      // $nameErr = "yes";
    }
      }
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
    // get input values
    $r = $_POST['r'];
    $g = $_POST['g'];
    $b = $_POST['b'];
    // generate RGB string from input
    $rgb = $r . ',' . $g . ',' . $b;
    ?>
    <p>
        R: <?php echo $r . '<br \>'; ?>
        G: <?php echo $g . '<br \>'; ?>
        B: <?php echo $b . '<br \>'; ?>
    </p>
    <div style="width:150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>)"></div>
</body>

</html>