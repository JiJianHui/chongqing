<?php
header("Conteng-Type: application/vnd.msword");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=sampleword.doc");

echo $records[0]->pID;
echo $records[0]->pName;
echo $records[0]->pDescription;