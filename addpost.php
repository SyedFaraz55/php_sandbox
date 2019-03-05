<?php require('db.inc.php'); ?>
<?php require('config.php'); ?>
<?php 

if(isset($_POST['submit'])){
    
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $body = mysqli_real_escape_string($conn,$_POST['body']);

    $query = "INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`) VALUES (NULL, '$title', '$body', '$author', CURRENT_TIMESTAMP)";

    if(mysqli_query($conn,$query)){
        header('location:'.ROOT_URI);
    } else {
        // echo mysqli_error();
    }


}

?>

<?php include('include/header.php');?>
    <div class="container">
    <h1>ADD POST</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
    
<?php include('include/footer.php');?>