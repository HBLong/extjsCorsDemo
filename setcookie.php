<?php

session_start();
// 是否存在请求源
if(isset($_SERVER["HTTP_ORIGIN"])) {
    header('Access-Control-Allow-Origin:'.$_SERVER["HTTP_ORIGIN"]);  
}
header('Access-Control-Allow-Origin:null');  
header('Access-Control-Allow-Methods:OPTIONS, GET, POST');
header('Access-Control-Allow-Headers:x-requested-with');
header('Access-Control-Max-Age:86400');

header('Access-Control-Allow-Credentials:true');


// 功能...
// ...



?>







