<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<script>
  function check (){
    var f= document.getElementById("fi");
    var s= document.getElementById("se");
    var t= document.getElementById("th");
    if(f.value == "" || s.value =="" || t.value==""){
      alert("required field")
    }else if (f.value > 255 || s.value > 255 || t.value > 255 ) {
      alert("plz less then 255 numbers")
    }
  }
</script>
<?php
    $name =  "";
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="display.php" onSubmit="check()">  
  <p>R: <input id="fi" type="text" name="r" value="<?php echo $name;?>">
  </p>
  <p>G: <input id="se" type="text" name="g" value="<?php echo $name;?>">
  </p>
  <p>B: <input id="th" type="text" name="b" value="<?php echo $name;?>">
  </p>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>