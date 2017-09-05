<?php
require_once 'RawDataHandler.php';
/**
 * Created by PhpStorm.
 * User: zpldsg
 * Date: 2017/8/10
 * Time: 10:45
 */

//23mfRawdata
$filename='rawdata_23andme';
$fp=fopen($filename.".txt",'rb');
echo 'start<br/>';
$rawDataWegene=new RawDataHandler($fp,$filename);
fclose($fp);
//wegeneRawdata
$snpList=fopen("rawdata_wegene.txt","rb");
$rawDataWegene->outputSameSnp($snpList);
fclose($snpList);
echo "success";