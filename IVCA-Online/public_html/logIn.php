

<html >
    <head >
    <title>IVCA Log In</title>
</head>
    <?php 
  include ("topNav.htm");
?>
<body>
    <div>
        
<?php
  // this is phpinfo.php
phpinfo();

//If the user is logged in, log out.
if(isset($_SESSION['password']))
{
        //We log out password session
        unset($_SESSION['password']);
    }
?>
<div class="message">You have been logged out.<br />
<a href="<?php echo $url_home; ?>">Home</a></div>
<?php
{
        //We check if the form has been sent
        if(isset($_POST['password']))
        {
                //We remove slashes depending on the configuration
                if(get_magic_quotes_gpc())
                {
                        $password = stripslashes($_POST['password']);
                }
                else
                {
                        $password = $_POST['password'];
                }
                //We get the password of the user
                //We compare the submited password and the real one
                if('velocipede'==$password )
                {
                        //If the password is good, we dont show the form
                        $form = false;
    $_SESSION['password'] = $_POST['password'];
    
            $message =$_SESSION['password'];
            echo "<script type='text/javascript'>alert('$message');</script>";
?>
<div class="message">You have successfuly been logged in. You can access to your member area.<br />
<a href="<?php echo $url_home; ?>">Journals</a></div>
<?php
                }
                else
                {
                        //Otherwise, we say the password is incorrect.
                        $form = true;
                        $message = 'The password is incorrect.';
                }
        }
        else
        {
                $form = true;
        }
        if($form)
        {
                //We display a message if necessary
        if(isset($message))
        {
                echo '<div>'.$message.'</div>';
        }
        //We display the form
?>
<div >
    <form action="logIn.php" method="post">
        Please enter the password to log in:<br />
        <div >
            <label for="password">Password</label><input type="password" name="password" id="password" /><br />
            <input type="submit" value="Log in" />
                </div>
    </form>
</div>
<?php
        }
}
?>
                <div ><a href="<?php echo $url_home; ?>">Home</a> - <a href="journal.php">IVCA Online</a></div>
        
    </div>
</body>
</html>
