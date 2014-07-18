<?php
    function facebook_feed($page_id, $access_token, $post_number) {
        
        $json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . '/posts?access_token=' . $access_token);
        //Interpret data
        $fbdata = json_decode($json_object);

        echo "<div class='facebook_feed'>";
        echo "<h1 class='page_name'>" . $page_id . "</h1>";
        echo "<div class='fbmessages'>";
        $count = 0;
        $posts = "";
        foreach ($fbdata->data as $post) {
            if(isset($post->message)){
                $count = $count + 1;
                
                if ($count <= $post_number){
                    $time = strtotime($post->created_time);
                    $content = preg_replace('$(https?://[a-z0-9_./?=&%-]+)(?![^<>]*>)$i', ' <a href="$1" target="_blank">$1</a> ', $post->message." ");
                    $content = preg_replace('!(\s|^)((www\.)+[a-z0-9_./?=&-]+)!i', '<a target="_blank" href="http://$2"  target="_blank">$2</a> ', $content." ");
                    $posts = $posts . '<p class="fbmessage">' . $content . '</p>';
                    $posts = $posts . '<p class="fbtime">' . date("M d",$time) . '</p>';
                }
            }
        }
        echo utf8_decode($posts);
        echo "</div>";
        echo "</div>";
   }
    ?>

</div>
</div>
</body>
</head>
