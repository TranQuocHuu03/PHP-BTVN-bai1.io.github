<?php
    $cookieName="user";
    $cookieValue="thuong";
    setcookie($cookieName,$cookieValue, time()+(86400),"/");
    //time() +(86400*30)=30

    if(isset($_COOKIE[$cookieName])){
        echo "cookie" . $cookieName. "đang tồn tại";
    }
    else{
        echo "cookie" . $cookieName. "không tồn tại";
    }
?>