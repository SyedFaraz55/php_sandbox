<?php require('db.inc.php'); ?>
<?php require('config.php'); ?>

<?php

    // query 
    $query = 'SELECT *FROM posts ORDER BY created_at DESC';

    // get result

    $result = mysqli_query($conn,$query);

    // fetching data from fetch_all

    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // var_dump($posts);

    // Free result

    mysqli_free_result($result);
    mysqli_close($conn);


?>

<?php include('include/header.php');?>
    <div class="container">
    <a href="<?php echo ROOT_URI?>addpost.php" class="btn btn-primary">ADD POST</a> 
    <h1>POSTS</h1>
    <?php foreach($posts as $post): ?>
        <div class="well">
            <h3><?php echo $post['title'];?></h3>
            <small>Created on <?php  echo $post['created_at'];?> by <?php echo $post['author'];?></small>
            <p><?php echo $post['body'];?></p>
            <a class="btn btn-default" href="<?php echo ROOT_URI;?>post.php?id=<?php echo $post['id'];?>">Read More</a>
        </div>
    <?php endforeach; ?>
    
    <?php include('include/footer.php');?>