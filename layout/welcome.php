<div class='container-fluid welcome'>
    
    <div class='container'>
        <h1>welcome to our site</h1>
        <h4> Share Your Posts Here ! </h4>
        <button class='btn btn-danger' id='login'>Login</button>
        <button class='btn btn-primary' id='btn'>Sign Up</button>
    </div>
</div>


<?php
    if(isset($_POST['login']))
    {
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM users WHERE mail='$mail' AND password='$pass'";

        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            echo 'ok y logged in';
            header('location:Home.php');
            session_start();

            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['name'];
            }

            
            
        }else
        {
            echo 'error try agin';
        }
    }

?>
<div class='container'>
    <div class="login">

        <!-- Default form login -->
    <form class="text-center border border-light p-5" action="" method='post'>

        <p class="h4 mb-4">Sign in</p>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name='mail'>

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name='pass'>

        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
            </div>
        </div>

        <!-- Sign in button -->
        <button id='test' class="btn btn-info btn-block my-4" type="submit" name='login'>Log in</button>

      
    </form>
    <!-- Default form login -->
    </div>
</div>
<?php


    if(isset($_POST['signup']))
    {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO users(name,mail,password,phone) VALUES('$name','$mail','$pass','$phone')";

        if(mysqli_query($connection,$sql))
        {
            echo 'users added u can login';
        }else
        {
            echo 'error try agin';
        }
    }

?>

<div class='container'>
    <div class="signup">

        <!-- Default form login -->
    <form class="text-center border border-light p-5" action="" method='post'>

        <p class="h4 mb-4">Sign Up</p>
        <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name='name' placeholder="UserName">


        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name='mail' placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" name='pass' placeholder="Password">
        <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" name='phone' placeholder="Phone">


        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" name='signup' type='submit'>Sign Up</button>

        <!-- Register -->


        <!-- Social login -->
    
    </form>
    <!-- Default form login -->
    </div>
</div>