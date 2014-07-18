<?php
include("facebook_feed/facebook-feed.php")
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="facebook_feed_style.css">
    <link rel='stylesheet'  href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
</head>
<body>
    <div class="container clearfix">
        <div class="grid_12">
            <?php facebook_feed("Nike", "291622940991164%7Ctef6C6VPQJRzCtr6kTpGXHVEBCQ", 4); ?>
        </div>
    </div>
</body>