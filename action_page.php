<html>
<body>

  <form action="action_page.php method="post">
    Name:<br>
    <input type="text" name="foodName"><br> 
    Expiry Date:<br>
    <input type="text" name="expDate"><br>
    <input type="submit" value="Submit">
  </form>

 <?php
  echo $_POST["foodName"];
 ?>
  
</body>
</html>
