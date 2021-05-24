<?php
require('../config/connection.php');
require('../config/class_article.php');
$Article = new Article();
$page_title = " Update ARTICLE";
 $page_heading = " Update your Article";?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update.css">


    <title> <?php echo $page_title ?></title>
</head>

<body>
    <h1> <?php echo $page_heading ?></h1>
    <div id="_atssh"
        style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe
            id="_atssh535" title="AddThis utility frame"
            style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"
            src="https://s7.addthis.com/static/sh.f48a1a04fe8dbf021b4cda1d.html#rand=0.597562255553169&amp;iit=1621515203845&amp;tmr=load%3D1621515203811%26core%3D1621515203831%26main%3D1621515203843%26ifr%3D1621515203848&amp;cb=0&amp;cdn=0&amp;md=0&amp;kw=&amp;ab=-&amp;dh=localhost&amp;dr=http%3A%2F%2Flocalhost%2FA_BLOG_PHP%2Fcomponents%2Flogout.php&amp;du=http%3A%2F%2Flocalhost%2FA_BLOG_PHP%2Fcomponents%2Fdashboard.php&amp;href=http%3A%2F%2Flocalhost%2FA_BLOG_PHP%2Fcomponents%2Fdashboard.php&amp;dt=Side%20Menu&amp;dbg=0&amp;cap=tc%3D0%26ab%3D1&amp;inst=1&amp;jsl=1&amp;prod=undefined&amp;lng=fr&amp;ogt=&amp;pc=men&amp;pub=ra-4ff17589278d8b3a&amp;ssl=0&amp;sid=60a65bc349ebc296&amp;srf=0.01&amp;ver=300&amp;xck=0&amp;xtr=0&amp;og=&amp;csi=undefined&amp;rev=v8.28.8-wp&amp;ct=1&amp;xld=1&amp;xd=1&amp;fcu=YKZbw7VKiMp"></iframe>
    </div>

    <?php if(isset($_GET['id'])):
        $id = $_GET['id'];
          
        $article = $Article->find($id);
// print_r($article);
?>
    <div style="    background: #49ba9e; ; padding: 30px;">
        <p> You are updating the article #<?php echo $id; ?> </p>
    </div>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form method="POST">
                <?php foreach($article as $key=>$value): ?>
                <label class="form" for="<?php echo $key;?> "><?php echo $key;?> </label>

                <?php if($key == 'text '):?>
                <textarea name="content" id="message" class="form textarea" name="<?php echo $key;?>" rows="8"
                    cols="80"><?php echo $value ?></textarea>
                <?php else: ?>

                <input type="text" class="form" name="<?php echo $key;?> " value="<?php echo $value;?>"
                    id="<?php echo $key;?>" <?php if($key == 'id'){
             echo 'readonly';
         }?>>




                <?php endif ?>
                <br>
                <br>

                <?php endforeach; ?>

                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button href="dashboard.php" type="submit" id="submit" name="submit" class="form-btn semibold">Save
                    </button>
                </div><!-- End Bottom Submit -->

            </form>
        </div>

    </div>
    <p> <a class="center" href="dashboard.php">Go Back To Home Page</a></p>

    <?php  if(isset($_POST['submit'])):?>
    <?php 
    print_r($_POST);
    $id = $_POST['id_'];
    $title = $_POST['title_'];
    $date = $_POST['date_'];
    $content = $_POST['content_'];
    $image = $_POST['image_'];
        $Article->Update($id,$title,$date,$content,$image);
        ?>
    <?php endif;?>

    <?php endif; ?>





</body>

</html>