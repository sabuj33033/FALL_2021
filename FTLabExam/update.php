<!DOCTYPE html>
<html>
<head>
<script>

  var x = $_POST['Name'].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else{
    <?php
    include("db.php");
    $sql= "Update heros set Name= '".$_POST['Name']."', Address='".$_POST['Address']."',Email='".$_POST['Email']."',Password='".$_POST['Password']."',Telephone='".$_POST['Telephone']."',Superpower='".$_POST['Superpower']."' where id='".$_POST['id']."' ";
    
    $res = $conn->query($sql);
    echo $res;
?>
  }
  
</script>
</head>
</html>