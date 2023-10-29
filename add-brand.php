<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'boot_css.php'?>
</head>
<body>
<?php include 'navbar.php';
if(isset($_SESSION['success'])){
    echo"
    <div class='flash bg-dark text-light p-2 position-fixed' style='top:0;right:0'><h4>Your Brand Added Successfully!!!</h4></div>";

}
?>
<div class="container mt-2 shadow p-3">
    <h1 class="display-3 text-center">Add a Brand</h1>
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img width="100%" height="500px" style="object-fit:contain;"
            src="https://i.pinimg.com/originals/3e/34/f4/3e34f4b937963712b0e41959a5361afb.jpg">
        </div>
        <div class="col-lg-6">
            <form action="./add.php" method="POST" enctype="multipart/form-data">
                <label for="">Brand Name</label>
                <input class="form-control" type="text" name="name" placeholder="Add a Brand...">

                <label for="">Location</label>
                <input class="form-control" type="text" name="location" placeholder="Add a Location..">

                <label for="">Price</label>
                <input class="form-control" type="number" name="price" placeholder="Add a Price...">

                <label for="">Type</label>
                <input class="form-control" type="text" name="type" placeholder="Add a Type...">

                <label for="">Decsription</label>
                <textarea name="desc" id="" cols="82" rows="5" placeholder="Description..."></textarea>

                <label for="">Images</label>
                <input class="form-control" type="file" name="image">
                <button type="submit" class="btn btn-dark my-3 w-100">ADD BRAND</button>
            </form>
        </div>
    </div>
</div>


<?php include 'boot_js.php';
session_unset();   
?>


<script>
    let flash = document.querySelector('.flash');
    setTimeout(()=>{
        flash.style.transform='translateX(100%)'
        flash.style.transition='all 0.6s'
    },2000)

</script>
</body>
</html>