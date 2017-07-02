
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Notebook | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="Satish Maharjan"/>
    <link rel="stylesheet" href="<?=ASSETS?>admin/css/app.v2.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>admin/css/font.css" type="text/css" cache="false" />
    <link rel="stylesheet" href="<?=ASSETS?>admin/js/calendar/bootstrap_calendar.css" type="text/css" cache="false" />
    <?php 
        if(isset($css) && !empty($css))
        {
            foreach($css as $src)
            {
                echo ' <link rel="stylesheet" href="'.$src.'" type="text/css" cache="false" />'."\n";
            }
        }
    ?>
    <!--[if lt IE 9]> <script src="<?=ASSETS?>admin/js/ie/html5shiv.js" cache="false"></script> <script src="<?=ASSETS?>admin/js/ie/respond.min.js" cache="false"></script> <script src="<?=ASSETS?>admin/js/ie/excanvas.js" cache="false"></script> <![endif]-->
</head>

<body>
    <section class="vbox">
        <header class="bg-black dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md">
                <a class="btn btn-link visible-xs"> <i class="fa fa-bars"></i> </a>
                <a class="navbar-brand" ><img src="<?=ASSETS?>admin/images/logo.png" class="m-r-sm">Notebook</a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" > <i class="fa fa-cog"></i> </a>
            </div>
            
            <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="<?=ASSETS?>admin/images/avatar.jpg"> </span> <?=$_SESSION['username']?> <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span>
                        <li> <a href="logout.php" >Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>