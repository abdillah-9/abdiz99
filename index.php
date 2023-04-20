<?php
if(isset($_POST["submit"])){
  $info = $_POST["info"];
  if(preg_match("/^[designer]*$/i",$info)){
    header("Location:Designer.html");
  }
  else{
    echo "Content not found...";
  }
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="demo.php" method="post">
          <input type="text" name="info" placeholder="Search here ..."/>
           <br/><br/><input type="submit" name="submit"/>
        </form>
    </body>
</html>