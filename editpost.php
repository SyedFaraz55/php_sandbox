<?php require('db.inc.php'); ?>
<?php require('config.php'); ?>
<?php 

if(isset($_POST['submit'])){

    

    $update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $body = mysqli_real_escape_string($conn,$_POST['body']);

    $query = "UPDATE posts SET title='$title',body='$body',author='$author' WHERE id={$update_id} ";

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
    <h1>ADD POST</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author'];?>">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"><?php echo $post['body'];?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
    
<?php include('include/footer.php');?>