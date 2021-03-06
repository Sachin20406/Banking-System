<!DOCTYPE html>
<html>
<head>
	<title>Users details</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/users1.css">

</head>
<body>
<?php
    include 'conf.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
    <div class="container">
<h1 class="logo">User Details</h1>
<section class="back-btn">
<a href="index.php" class="text">Back</a></section>
        <section class="main">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                    <table class="table table-hover table-sm table-condensed table-bordered">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Account No.</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">View Details</th>
                            </tr>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['Account_NO.']?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td><a href="details.php?id= <?php echo $rows['id'] ;?>" class="text">View</a></td> 
                    </tr>
                <?php
                    }
                ?>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
        </section>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>