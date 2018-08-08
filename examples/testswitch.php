<?php
include "../lib/BladeOne.php";
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$compiledFolder = __DIR__ . '/compiled';
$blade=new BladeOne($views,$compiledFolder,BladeOne::MODE_SLOW);


$records=array(1,2,3);


try {
    echo $blade->run("test.switch"
        , ["name" => "hello"
            , 'records' => $records
            , 'i' => 44
        ]);



} catch (Exception $e) {
    echo $e->getMessage();
}