<!-- Start navBar -->
<?php include('layout/nav.php');?>

<div class="container">

<div class="row">
<div class="col-lg-12">

    <?php
    include('DB.php');
    if(isset($_GET['postid']))
    {
        $postid = $_GET['postid'];
        $sql = "SELECT title,name,img,content,cat FROM POSTS INNER JOIN users ON users.id = posts.user_id WHERE posts.id='$postid'";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $title = $row['title'];
                $author = $row['name'];
                $img = $row['img'];
                $content = $row['content'];
                $cat = $row['cat'];
                $hr = '<hr>';

    
                echo "<h1>{$title}</h1>";
                echo "<p>By {$author} , {$cat}</p>";
                echo "<img class='img' style='width:500px;' src='img/{$img}'>";
                echo "<p class='lead'>{$content}</p>";
    
            }
            
        }else
        {
            echo "<h1>No Posts Yet</h1>";
        }

    }
    
    ?>

</div>
</div>
<?php
$postID = $_GET['postid'];
if(isset($_POST['send']))
{

    
    $comment = $_POST['comment'];
    
    $user_id = $_SESSION['id'];

    $commentSQL = "INSERT INTO comments(user_id,post_id,comments) VALUES('$user_id','$postID','$comment')";

    if(mysqli_query($connection,$commentSQL))
    {
        echo 'ok';
    }else
    {
        echo 'Error :' . mysqli_error($connection);
    }
    
}


?>

<form action="" method='post'>
<textarea id="" cols="25" rows="2" name='comment'></textarea>
<br>
<input type="submit" value="comment" name='send'> 
</form>

<div>
    <?php

        $getComment = "SELECT name,comments FROM users INNER JOIN comments ON 
        users.id=comments.user_id WHERE post_id='$postID'";

        $commentResult = mysqli_query($connection,$getComment);

        if(mysqli_num_rows($commentResult)>0)
        {
            while($row = mysqli_fetch_assoc($commentResult))
            {
                $user = $row['name'];
                $commenttext = $row['comments'];

                echo "<b>{$user}</b>";
                echo "<p class='lead'>{$commenttext}</p>";
            }
        }else
        {
            echo 'no comments yet';
        }


    
    ?>

</div>

</div>

