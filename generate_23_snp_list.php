<?php
/**
 * Created by PhpStorm.
 * User: zpldsg
 * Date: 2017/8/11
 * Time: 9:12
 */
require_once "RawDataHandler.php";
function snp_compare(Snp $s1,Snp $s2){
    if(strnatcmp($s1->getChromosome(),$s2->getChromosome())){
        return strnatcmp($s1->getChromosome(),$s2->getChromosome());
    }else{
        return strnatcmp($s1->getPosition(),$s2->getPosition());
    }
}
$fp=fopen('genome_Z_F_v4_Full_20160605153316.txt','rb');
$new=fopen("snp_list.txt","wb");
$total=0;
if(file_exists("snp_list.txt")){
    unlink("snp_list.txt");
}
$rawData=(new RawDataHandler($fp))->getData();
uasort($rawData,"snp_compare");

$count=0;
$str='';
foreach($rawData as $snp){
    $str=$str.$snp->getRsid()."\n";
    $count++;
    if($count>10000){
        fwrite($new,$str);
        $str='';
        fclose($new);
        $new=fopen("snp_list.txt","ab");
        $count=0;
    }
}
fwrite($new,$str);
fclose($new);

echo "total:$total";
fclose($fp);