<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/details1.css">

</head>
<body>

  <?php
include 'conf.php';
?>

              <?php
                include 'conf.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>

    <div class="container">
      <div class="box">
      <h3 id="element">NAME: <?php echo $rows['name'] ?></h3>
      <h3 id="element">EMAIL: <?php echo $rows['email'] ?></h3>
      <h3 id="element">BALANCE: <?php echo $rows['balance'] ?></h3>
      <section>
      <a href="transfer.php?id= <?php echo $rows['id'] ;?>" class="btn-1" id="element">Transfer</a>
      <a href="users.php?id= <?php echo $rows['id'] ;?>" class="btn-1" id="element">Back</a>
  </section>
      </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>