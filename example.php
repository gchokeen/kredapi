<?php 
$appId = '';
$appKey = '';


$kred = KredApi($appId,$appKey);

$kred->KredScore('term','source');