<?php include('layout/nav.php') ?>

<?php
include('DB.php');

if(isset($_POST['post']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $cat;
    $user_id = $_SESSION['id'];
    $tags = $_POST['tags'];


    foreach($_POST['cat'] as $val)
    {
        $cat = $val;
    }

    $sql = "INSERT INTO posts(user_id,title,content,cat,tags) VALUES('$user_id','$title','$content','$cat','$tags')";
    if(mysqli_query($connection,$sql))
    {
        echo 'post added ok';
    }else
    {
        echo 'Error :' . mysqli_error($connection);
    }

}


?>
<!-- Default form contact -->
<div class="container">
<form class="text-left border border-light p-5" action="" method='post'>

    <p class="h4 mb-4">Create Post</p>

    <!-- Name -->
    <input name='title' type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

    <!-- Email -->
    <!-- Subject -->
    <label>Category</label>
    <select name='cat[]' class="browser-default custom-select mb-4">
        <option value="" disabled>Choose option</option>
        <option value="php">php</option>
        <option value="javascript">javascript</option>
        <option value="mysql">mysql</option>
    </select>
    <input name='tags' type="text" id="" class="form-control mb-4" placeholder="tags">

    <!-- Message -->
    <div class="form-group">
        <textarea name='content' class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Content Of The Post"></textarea>
    </div>


    <!-- Send button -->
    <button name='post' class="btn btn-info btn-block" type="submit">Send</button>

</form>
<!-- Default form contact -->
</div>