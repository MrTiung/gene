<?php
require_once 'RawDataHandler.php';
/**
 * Created by PhpStorm.
 * User: zpldsg
 * Date: 2017/8/23
 * Time: 16:23
 */
//wegeneRawdata
$filename="liu";
$fp=fopen($filename.".txt",'rb');
echo 'start<br/>';
$rawDataWegene=new RawDataHandler($fp,$filename);
fclose($fp);

$snpList=fopen("ancestry.txt","rb");
$rawDataWegene->outPutAncestry($snpList);
fclose($snpList);
echo "success";