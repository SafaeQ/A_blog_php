<?php 
//start session
session_start();
 
//including the database connection file
include_once('../config/class_article.php');
?>
<?php $page_title = " ADD ARTICLE";?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add.css">
    <link rel="stylesheet" href="../css/style_dash.css">


    <title><?php echo $page_title;?></title>
</head>


<?php
 

 
if(isset($_POST['submit'])) {   
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $image = "";
 
    $A = new Article();
    if($A->Add($title,$date,$content,$image)){
        $_SESSION['message'] = 'article added successfully';
    }else{
        $_SESSION['message'] = 'Cannot add article';
    }
    header('location: dashboard.php');
 
}
// else{
//     $_SESSION['message'] = 'Fill up add form first';
//     header('location: dashboard.php');
// }
?>

<body>
    <h1>Add your Article</h1>

    <div id="_atssh"
        style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe
            id="_atssh535" title="AddThis utility frame"
            style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"
            src="https://s7.addthis.com/static/sh.f48a1a04fe8dbf021b4cda1d.html#rand=0.597562255553169&amp;iit=1621515203845&amp;tmr=load%3D1621515203811%26core%3D1621515203831%26main%3D1621515203843%26ifr%3D1621515203848&amp;cb=0&amp;cdn=0&amp;md=0&amp;kw=&amp;ab=-&amp;dh=localhost&amp;dr=http%3A%2F%2Flocalhost%2FA_BLOG_PHP%2Fcomponents%2Flogout.php&amp;du=http%3A%2F%2Flocalhost%2FA_BLOG_PHP%2Fcomponents%2Fdashboard.php&amp;href=http%3A%2F%2Flocalhost%2FA_BLOG_PHP%2Fcomponents%2Fdashboard.php&amp;dt=Side%20Menu&amp;dbg=0&amp;cap=tc%3D0%26ab%3D1&amp;inst=1&amp;jsl=1&amp;prod=undefined&amp;lng=fr&amp;ogt=&amp;pc=men&amp;pub=ra-4ff17589278d8b3a&amp;ssl=0&amp;sid=60a65bc349ebc296&amp;srf=0.01&amp;ver=300&amp;xck=0&amp;xtr=0&amp;og=&amp;csi=undefined&amp;rev=v8.28.8-wp&amp;ct=1&amp;xld=1&amp;xd=1&amp;fcu=YKZbw7VKiMp"></iframe>
    </div>
    <p> <a href="dashboard.php">Go Back To Home Page</a></p>

    <br />
    <div class="inner contact" class="container h-100">
        <!-- Form Area -->
        <div class="contact-form" class="row h-100 justify-content-center align-items-center">

            <!-- Form -->
            <form id="contact-us" method="post" action="">
                <!-- Left Inputs -->
                <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                    <!-- Name -->
                    <input type="text" name="title" id="title" required="required" class="form" placeholder="Title" />
                    <!-- date -->
                    <input type="date" name="date" id="date" required="required" class="form" placeholder="date" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                    <!-- Message -->
                    <textarea name="content" id="message" class="form textarea" placeholder="Content"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="form-btn semibold">Save </button>
                </div><!-- End Bottom Submit -->

                <!-- Clear -->
                <div class="clear"></div>
            </form>

            <!-- Your Mail Message -->
            <div class="mail-message-area">
                <!-- Message -->
                <div class="alert gray-bg mail-message not-visible-message">
                    <strong>Thank You !</strong> Your email has been delivered.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
    </div><!-- End Inner -->





</body>

</html>