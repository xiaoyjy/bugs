<?php

$string = 'GET /2/trackcorrect/2/get_alltrps_byPid?pid=389&_=1436754087347 HTTP/1.1
Host: 10.183.0.90:8088
Connection: keep-alive
Pragma: no-cache
Cache-Control: no-cache
Accept: application/json, text/javascript, */*; q=0.01
Origin: http://10.183.0.99
User-Agent: Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36
Referer: http://10.183.0.99/src/trpjudge.html?pid=389&trpid=11783&sid=0
Accept-Encoding: gzip, deflate, sdch
Accept-Language: zh-CN,zh;q=0.8

 ';

$o = new http\Message($string);
$headers = $o->getHeaders();

print_r($o);

?>
