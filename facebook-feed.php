<?php
    //
    $page_id = 'Nike';
    $access_token = '291622940991164%7Ctef6C6VPQJRzCtr6kTpGXHVEBCQ';

    $json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . '/posts?access_token=' . $access_token);
    //Interpret data
    $fbdata = json_decode($json_object);
?>
   
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="grid.css">
    <link rel='stylesheet'  href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
</head>
<body>
<div class="container clearfix">
<div class="grid_12">
    <h1><?php echo $page_id; ?></h1>

    <?php
        $count = 0;
        $posts = "";
        foreach ($fbdata->data as $post ) {
            if(isset($post->message)){
                $count = $count + 1;
                
                if ($count <= 4){
                    $time = strtotime($post->created_time);
                    $content = preg_replace('$(https?://[a-z0-9_./?=&-]+)(?![^<>]*>)$i', ' <a href="$1" target="_blank">$1</a> ', $post->message." ");
                    $content = preg_replace('!(\s|^)((www\.)+[a-z0-9_./?=&-]+)!i', '<a target="_blank" href="http://$2"  target="_blank">$2</a> ', $content." ");
                    $posts = $posts . '<p class="fbmessage">' . $content . '</p>';
                    $posts = $posts . '<p class="fbtime">' . date("M d",$time) . '</p>';
                }
            }
        }
        echo utf8_decode($posts);
    ?>

</div>
</div>
</body>
</head>
