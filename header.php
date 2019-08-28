<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <!-- <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewpost" content="width=device-width"> -->
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    <div id='header'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-5'> </div>
                <div class='col-sm-7'>
                    <h1 id='site-title'>ATVA 2019</h1> 
                    <h2 id='site-des'>aaa</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <?php wp_list_pages( '&title_li=' ); ?>
            </nav>
        </div>
    </div>

    