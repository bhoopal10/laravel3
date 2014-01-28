<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <?php
    echo Asset::container('header')->styles();
    echo Asset::container('header')->scripts();
    ?>
    <?php echo Section::yield('javascript'); ?>


</head>

<body class="skin-2">
<div class="container-fluid" id="main-container">

    <a id="menu-toggler" href="#"> <span></span></a>
    <?php echo render('admin::components.sidebar');?>
    <div id="sidebar-collapse">
        <i class="icon-double-angle-left"></i>
    </div>
</div>
<!-- End Sidebar -->
<div id="main-content" class="clearfix">
    <?php echo render('admin::components.navbar'); ?>
    <div id="breadcrumbs"style="margin-top: 46px">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="#">Home</a>

                            <span class="divider">

                            </span>
            </li>
            <li class="active"></li>
        </ul><!--.breadcrumb-->
        <div id="nav-search">
            <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
                                <i class="icon-search" id="nav-search-icon"></i>
                            </span>
            </form>
        </div><!--#nav-search-->
    </div>



    <?php echo Section::yield('page-header');?>
    <div class="row-fluid">
        <!--PAGE CONTENT BEGINS HERE-->
        <?php echo Section::yield('contentWrapper')?>
    </div><!--/row-->
</div><!--/#page-content-->
<?php
echo Asset::container('footer')->scripts();
echo Asset::container('footer')->styles();
?>
<?php echo Section::yield('javascript-footer');?>
</body>
