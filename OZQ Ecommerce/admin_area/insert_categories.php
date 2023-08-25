<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_tittle=$_POST['cat_tittle'];
    $insert_query="insert into 'categories' (category_tittle) values ('$category_tittle')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Category inserted has been Successfully')</script>";
    }
}

?>



<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        </div>
        <input type="text" class="form-control" name="cat_tittle" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">

        <input type="submit" class="btn btn-outline-dark border-0 p-2 my-3" name="insert_cat" value="insert categories">
    </div>
</form>