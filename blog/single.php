<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
} 
$new_topics = selectAll('new_topics');
$posts = selectAll('posts', ['published' => 1]);

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

    <title><?php echo $post['title']; ?> | JournalBlog</title>
</head>
<body>

<?php include(ROOT_PATH ."/app/includes/header.php");?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content -->
         <div class="content clearfix">

            <!-- Main Content -->
             <div class="main-content-wrapper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>

                <div class="post-content">
                   <?php echo html_entity_decode($post['body']); ?>
                 </div>

            </div>
         </div>
            <!-- //Main Content -->
            
            <!-- Sidebar -->
            <div class="sidebar single">

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title">
                         <h4><?php echo $p['title'] ?></h4>
                        </a>
                    </div>
                    <?php endforeach; ?>    

                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($new_topics as $topic): ?>
                         <li><a href="<?php echo BASE_URL . '/index.php?t_id='. $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>    
                       
                    </ul>
                </div>

            </div>
            <!-- //Sidebar -->

         </div>
         <!-- //Content -->

    </div>
    <!-- Page Wrapper end -->

    <?php include(ROOT_PATH ."/app/includes/footer.php");?>
     
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
     <script src="assets/js/script.js"></script>
</body>
</html>
