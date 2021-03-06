<?php
include '../config/connection.php';
require_once '../config/class_article.php';
// for login 
session_start();
if($_SESSION['id'] == false){
    header('location:login.php');
}





?>
<!DOCTYPE html>
<html class="menu">
<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="google" value="notranslate" />
    <title>Side Menu</title>
    <link rel="stylesheet" href="../css/style_dash.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css"
        href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>



    </div>
    <nav class="main-menu">



        <div>
            <a class="logo" href="http://startific.com">
            </a>
        </div>
        <div class="settings"></div>
        <div class="scrollbar" id="style-1">

            <ul>

                <li>
                    <a href="">
                        <i class="fa fa-home fa-lg"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="fa fa-user fa-lg"></i>
                        <span class="nav-text">Login</span>
                    </a>
                </li>


                <li>
                    <a href="">
                        <i class="fa fa-envelope-o fa-lg"></i>
                        <span class="nav-text">Contact</span>
                    </a>
                </li>




                <li>
                    <a href="">
                        <i class="fa fa-heart-o fa-lg"></i>

                        <span class="share">


                            <div class="addthis_default_style addthis_32x32_style">

                                <div style="position:absolute;
margin-left: 56px;top:3px;">




                                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank"
                                        class="share-popup"><img
                                            src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png"
                                            width="30px" height="30px"></a>

                                    <a href="https://twitter.com/share" target="_blank" class="share-popup"><img
                                            src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/512/Twitter_alt.png"
                                            width="30px" height="30px"></a>




                                    <a href="https://plusone.google.com/_/+1/confirm?hl=en&url=_URL_&title=_TITLE_
" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/google-plus-icon.png"
                                            width="30px" height="30px"></a>



                                </div>
                                <script type="text/javascript">
                                var addthis_config = {
                                    "data_track_addressbar": true
                                };
                                </script>
                                <script type="text/javascript"
                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff17589278d8b3a"></script>





                        </span>
                        <span class="twitter"></span>
                        <span class="google"></span>
                        <span class="fb-like">
                            <iframe
                                src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fstartific&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35"
                                scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;"
                                allowTransparency="true"></iframe>

                        </span>
                        <span class="nav-text">
                        </span>

                    </a>

                </li>




                </li>
                <li class="darkerlishadow">
                    <a href="">
                        <i class="fa fa-clock-o fa-lg"></i>
                        <span class="nav-text">News</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-desktop fa-lg"></i>
                        <span class="nav-text">Technology</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-plane fa-lg"></i>
                        <span class="nav-text">Travel</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="nav-text">Shopping</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-microphone fa-lg"></i>
                        <span class="nav-text">Film & Music</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-flask fa-lg"></i>
                        <span class="nav-text">Web Tools</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-picture-o fa-lg"></i>
                        <span class="nav-text">Art & Design</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-align-left fa-lg"></i>
                        <span class="nav-text">Magazines
                        </span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-gamepad fa-lg"></i>
                        <span class="nav-text">Games</span>
                    </a>
                </li>

                <li class="darkerli">
                    <a href="">
                        <i class="fa fa-glass fa-lg"></i>
                        <span class="nav-text">Life & Style
                        </span>
                    </a>
                </li>

                <li class="darkerlishadowdown">
                    <a href="">
                        <i class="fa fa-rocket fa-lg"></i>
                        <span class="nav-text">Fun</span>
                    </a>
                </li>


            </ul>


            <li>

                <a href="">
                    <i class="fa fa-question-circle fa-lg"></i>
                    <span class="nav-text">Help</span>
                </a>
            </li>


            <ul class="logout">
                <li>
                    <a href="">
                        <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">
                            BLOG
                        </span>

                    </a>
                </li>
            </ul>
    </nav>








    <body>
        <form action="dashboard.php" method="post">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h2>User <b>Management</b></h2>
                                </div>
                                <div class="col-sm-7">
                                    <a href="add.php" class="btn btn-secondary"
                                        onclick="document.getElementById('id01').style.display='block'"><i
                                            class="material-icons">&#xE147;</i>
                                        <span>Add
                                            New Article</span></a>





                                    <a href="logout.php" class="btn btn-secondary"><i class="material-icons"><span
                                                class="material-icons">
                                                logout
                                            </span></i>
                                        <span>Logout</span></a>
                                </div>
                            </div>
                        </div>


                        <?php 

                            $Article = new Article();
                            $results = $Article->getAll();
                        ?>
                        <table class="table table-striped table-hover">
                            <thead>

                                <tr class="line1">
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Actions</th>
                                </tr>
                                <?php


                          foreach($results as $row):?>


                                <tr class="line1">
                                    <td><?php  echo $row["id"]; ?></td>
                                    <td><?php echo $row["title"]; ?></td>
                                    <td><?php echo $row["date"]; ?></td>
                                    <td><?php echo $row["image"]; ?></td>
                                    <td><?php echo $row["content"]; ?></td>

                                    <td>
                                        <div class="btn btn"><span> <a class="button primary edit" href="update.php
                                            ?id=<?php echo $row["id"]; ?>">Edit</a></span></div>
                                        <div class="btn btn"><span><a class="button primary delete"
                                                    href="delete.php?id=<?php echo $row["id"] ?>">Delete</a></span>
                                        </div>
                                    </td>

                                </tr>
                                <?php
        endforeach;
        ?>




                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </form>
        <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
    </body>

</html>