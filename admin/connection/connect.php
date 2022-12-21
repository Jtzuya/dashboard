<?php
$con = mysqli_connect('127.0.0.1', 'root', 'hygienix', 'shopify');

if (!$con) {
    echo "Nice try! connection failed as fuck and suck yo mum! (send a 404 page)";
} else {
    //echo "connection success";
    //mysqli_close($con);
}
