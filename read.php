<?php
require_once 'RawDataHandler.php';
/**
 * Created by PhpStorm.
 * User: zpldsg
 * Date: 2017/8/10
 * Time: 10:45
 */

//wegeneRawdata
$filename="silent";
$fp=fopen($filename.".txt",'rb');
echo 'start<br/>';
$rawDataWegene=new RawDataHandler($fp,$filename);
fclose($fp);

//23andmeRawdata
$header='# This data file generated by 23andMe at: '.date("D M  j H:i:s Y").'
#
# This file contains raw genotype data, including data that is not used in 23andMe reports.
# This data has undergone a general quality review however only a subset of markers have been
# individually validated for accuracy. As such, this data is suitable only for research,
# educational, and informational use and not for medical or other use.
#
# Below is a text version of your data.  Fields are TAB-separated
# Each line corresponds to a single SNP.  For each SNP, we provide its identifier
# (an rsid or an internal id), its location on the reference human genome, and the
# genotype call oriented with respect to the plus strand on the human reference sequence.
# We are using reference human assembly build 37 (also known as Annotation Release 104).
# Note that it is possible that data downloaded at different times may be different due to ongoing
# improvements in our ability to call genotypes. More information about these changes can be found at:
# https://www.23andme.com/you/download/revisions/
#
# More information on reference human assembly build 37 (aka Annotation Release 104):
# http://www.ncbi.nlm.nih.gov/mapview/map_search.cgi?taxid=9606
#
# rsid	chromosome	position	genotype';
$snpList=fopen("snp.txt","rb");
$rawDataWegene->outPutRawData($snpList,$header);
fclose($snpList);
echo "success";
