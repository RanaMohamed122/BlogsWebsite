<!-- Start navBar -->
<?php include('layout/nav.php');?>

<div class="container">

<div class="row">
<div class="col-lg-12">

    <?php
    include('DB.php');
    $search = $_POST['search'];
        $sql = "SELECT posts.id,title,name,img,content,cat FROM POSTS INNER JOIN users ON users.id = posts.user_id WHERE tags LIKE '%$search%'";
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
                $id = $row['id'];


    
                echo "<h1>{$title}</h1>";
                echo "<p>By {$author} , {$cat}</p>";
                echo "<img class='img' style='width:500px;' src='img/{$img}'>";
                echo "<p class='lead'>{$content}</p>";
                echo "<a href='single.php?postid=$id' class='btn btn-primary'>Read More</a>";
    
            }
            
        }else
        {
            echo "<h1>No Result Found</h1>";
        }
    
    ?>

</div>
</div>
</div>

