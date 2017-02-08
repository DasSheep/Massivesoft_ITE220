<!DOCTYPE html>
<html>
    <head>
        <title>Registration  | Massivesoft</title>
        <?php include '../include/header.php';?>
    </head>
    <body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
<?php   require('config.php');                                                                                          //Created by Trin
        if( $user->is_logged_in() ){ header('Location: ../index.php'); }                                                //If logged in, return to index.
        if(isset($_POST['submit']))
        {
            if(strlen($_POST['username']) < 3){$error[] = 'Username is too short.';}                                    //Username length check.
            else    {
                        $stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
                        $stmt->execute(array(':username' => $_POST['username']));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if(!empty($row['username'])){$error[] = 'Username provided is already in use.';}                //Check for existing Username.
                    }
            if(strlen($_POST['password']) < 3){$error[] = 'Password is too short.';}
            if(strlen($_POST['passwordConfirm']) < 3){$error[] = 'Confirm password is too short.';}
            if($_POST['password'] != $_POST['passwordConfirm']){$error[] = 'Passwords do not match.';}
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){$error[] = 'Please enter a valid email address';}   //Email validation.
            else {
                    $stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
                    $stmt->execute(array(':email' => $_POST['email']));
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    if(!empty($row['email'])){$error[] = 'Email provided is already in use.';
                    }
            }
            if(!isset($error)){                                                                                         //Go ahead with account creation if no error.
                            $hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);                //Hashing the password.
                            $activasion = md5(uniqid(rand(),true));                                                     //Generate the activation code.
                            try {       
                                    $stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
                                    $stmt->execute(array(
                                        ':username' => $_POST['username'],
                                        ':password' => $hashedpassword,
                                        ':email' => $_POST['email'],
                                        ':active' => $activasion
                                    ));
                                    $id = $db->lastInsertId('memberID');
                                    echo "<div class='alert alert-info' role='alert'>Activate :<a href='activate.php?x=".$id."&y=".$activasion."'>Here</a></p> DEBUG(X:".$id." Y:".$activasion.")</div>";
                                } 
                            catch(PDOException $e) {$error[] = $e->getMessage();}                                       //Else catch the error and throws the error.
                            }
        }
?>
            <div class="container">
                <div class="row jumbotron">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                        <form role="form" method="post" action="" autocomplete="off">
                            <h2>Registration</h2>
                            <p>Already a member? <a href='login.php'>Login</a></p>
                            <hr>
<?php                
                            if(isset($error)){                                                                          //check for any errors
                                foreach($error as $error){echo "<div class='alert alert-danger alert-dismissable' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>".$error."</div>";}}
                            if(isset($_GET['action']) && $_GET['action'] == 'joined'){                                  //If returned action is 'joined' show success msg.
                                echo "<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>Registration successful.<div>";}
?>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
                            </div>
                        </form>
                        <hr><br><a href='../index.php'><-- Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../include/footer.php';?>
    </body>
</html>
