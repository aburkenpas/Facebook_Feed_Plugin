Facebook Feed Plugin

This is a plugin that I created that allows you to have a custom designed facebook feed on your website.

How to use this plugin

First you need your page to have the .php extension.  Then you need to add the facebook-feed.php file to your directory.  If you would like to use the default style you also need to add the facebook-feed-style.css to you directory as well.  The index.php file is just a demo file, so no need to add this to your directory.

Next you need to add this line of code to the top of the page you would like your facebook feed to be displayed.

    <?php include("facebook_feed/facebook-feed.php") ?>
    
Now, you need to add this line of code to the location you want your feed to be displayed.

    <?php facebook_feed("Name of Facebook Page", "Access token", number of post you would like displayed); ?>
    
You will need to replace "Name of Facebook Page" with the name of the facebook page you would like the feed from to be displayed in quotations.  You will need to get an access token from facebook by signing up as a developer.  This value should be in quotations.  The number of post should just be a number like 4 not in quotations and not exceeding 20.

If you would like to change the styles do so in the facebook feed style sheet to what ever font, width, color, or anything else you want to change.

Now, enjoy you new facebook feed.

Please, report any bugs, or suggestions for the plugin here.

Thanks!