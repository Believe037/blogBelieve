<?php

/*
*Header template.
*
*@package blogBelieve
*/

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="<?php blogInfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
 </head>
 <body>
    <div class="site" id="page">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part( 'template-parts/header/nav' ); ?>

        </header>

        <div class="site-content" id="content">

   