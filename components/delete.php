<?php
require('../config/connection.php');
require('../config/class_article.php');
$page_title = " Delete ARTICLE";
 $page_heading = " Delete your Article";
 
 $Article = new Article();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/delete.css">
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




    <?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($Article->Delete($id)){
    ?>
    <!-- <div style="background:red;color:white;padding: 10px;">
        <p class="center"> the article is #<?php echo $id; ?>deleted</p>
    </div> -->



    <div id='card' class='center' class="animated fadeIn">
        <div id="upper-side">


            <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
                <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
                <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353"
                    r="32.53" />
            </svg>
            <h3 id='status'>
                Success
            </h3>
        </div>
        <div id='lower-side'>
            <p id='message'>
                Congratulations, your Article is #<?php echo $id; ?> has been successfully deleted.
            </p>
            <a id="contBtn" class="center" href="dashboard.php">Go Back To Home Page</a>
        </div>
    </div>
    <?php

        }
    }
    
    ?>


</body>

</html>