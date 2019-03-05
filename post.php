<?php require('db.inc.php'); ?>
<?php require('config.php'); ?>

<?php
if(isset($_POST['delete'])){

    

    $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
    $query = "DELETE FROM posts  WHERE id={$delete_id}";

    if(mysqli_query($conn,$query)){
        header('location:'.ROOT_URI);
    } else {
        // echo mysqli_error();
    }


}
// get id

    $id = mysqli_real_escape_string($conn,$_GET['id']);

    // query 
    $query = 'SELECT *FROM posts WHERE id='.$id;

    // get result

    $result = mysqli_query($conn,$query);

    // fetching data from fetch_all

    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    // Free result

    mysqli_free_result($result);
    mysqli_close($conn);


?>


<?php include('include/header.php');?>
    <div class="container">
        <a href="<?php echo ROOT_URI;?>" class="btn btn-primary  ">Back</a>
    <h1>POSTS</h1>
    <div class="well">
    <h1><?php echo $post['title'];?></h1>
            <small>Created on <?php  echo $post['created_at'];?> by <?php echo $post['author'];?></small>
            <p><?php echo $post['body'];?></p>
            <hr> 
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="pull-right" method="POST">
                <input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
                <input type="submit" name="delete" class="btn btn-danger" value="Delete">
            </form>
            <a href="<?php echo ROOT_URI;?>editpost.php?id=<?php echo $post['id'];?>" class="btn btn-default">EDIT</a>
    </div>
            
          
    <?php include('include/footer.php');?>
