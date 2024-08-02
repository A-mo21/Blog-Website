<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/new_users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
</head>

<body>
    
<?php include(ROOT_PATH."/app/includes/header.php");?>
     
<div class="auth-content">
    
  <form action="login.php" method="post">
   <h2 class="form-title">Login</h2>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

    <div>
     <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
    </div>
          
    <div>
     <label>Password</label>
      <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
    </div>
           
    <div>
     <button type="submit" name="login-btn" class="btn btn-big">Login</button>
    </div>
     <p>Or <a href="<? echo BASE_URL. ' /register.php' ?>">Sign Up</a></p>

    </form>

    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Custom Script -->
     <script src="assets/js/script.js"></script>
</body>
</html>