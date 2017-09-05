<?php
require_once 'RawDataHandler.php';
/**
 * Created by PhpStorm.
 * User: zpldsg
 * Date: 2017/8/10
 * Time: 10:45
 */

//23mfRawdata
$filename='liu_wang';
$fp=fopen($filename.".txt",'rb');
echo 'start<br/>';
$rawDataWegene=new RawDataHandler($fp,$filename,"wang");
fclose($fp);
//wegeneRawdata
$snpList=fopen("liu.txt","rb");
$rawDataWegene->outputSameSnp2($snpList);
fclose($snpList);
echo "success";