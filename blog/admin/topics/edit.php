<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/new_topics.php");
adminOnly();
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Edit Topic</title>
</head>
<body>
   
<!-- header  -->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">   
        
       <!-- Left Sidebar -->
       <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
     <!-- //Left Sidebar -->

     <!-- Admin Content -->
      <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Topic</a>
            <a href="index.php" class="btn btn-big">Manage Topic</a>
        </div>
       
        <div class="content">
           
            <h2 class="page-title">Edit Topic</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

           <form action="edit.php" method="post">
           <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <div>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
               </div>
            <div>
                <label>Description</label>
                <textarea name="description" id="body"><?php echo $description; ?></textarea>
            </div>
            <div>
            <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
        </div>   
        </form>
        
        </div>
      </div>
      <!-- //Admin Content -->

    </div>
    <!-- Page Wrapper end -->
   
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- CKeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    
    <script src="
https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-build-classic@42.0.0/build/translations/ar.min.js
"></script>

    <!-- Custom Script -->
     <script src="../../assets/js/script.js"></script>
</body>
</html>