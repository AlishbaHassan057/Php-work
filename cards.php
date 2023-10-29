<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'boot_css.php'?>
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php'
    ?>
    <div class="conatiner">
        <div class="row">
            <?php 
            include './config.php';
            $select = "SELECT *  FROM clothing2";
            $result = mysqli_query($connection,$select);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"
                    <div class='col-lg-4'>
                    <div class='card p-3 mt-4 ms-5 rounded-2 shadow p-3 mb-5 bg-white rounded '>
                    <img width='100%' height='500px' style='object-fit:contain'src='./images/{$row['images']}'>
                    <h4>Name:{$row['name']}</h4>
                    <h4><span>$</span>Price:{$row['price']}</h4>
                    <h4>Location:{$row['location']}</h4>
                  <h4>Type:{$row['type']}</h4>
                  <button class='btn btn-dark w-100 my-2'> See More...</button>
                    </div>
                    </div>
                    ";
                }
            }
            
            ?>
        </div>
    </div>
    <?php include 'boot_js.php'?>
</body>
</html>