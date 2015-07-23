<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="DESCRIPTION" content="<?php echo $meta_desc; ?>">
        <meta name="KEYWORDS" content="<?php echo $meta_keywords; ?>">
        <title><?php echo $title ?> - GenoScientific Molecular Diagnostics Laboratory</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>images/favicon.ico">
        <link href="<?php echo base_url(); ?>styles/main.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>scripts/modernizr/modernizr.custom.17066.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script>
            var baseurl = "<?php echo base_url();?>";
        </script>
        <script src="<?php echo base_url(); ?>scripts/functions.js"></script>

        <link href="<?php echo base_url(); ?>styles/idangerous.swiper.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>scripts/swiper/js/idangerous.swiper-2.1.min.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <?php
        if (isset($links)) {
            foreach ($links as $link) {
                echo $link . "\n";
            }
        }
        ?>
    </head>