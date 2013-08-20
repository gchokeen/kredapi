<?php 
$appId = '';
$appKey = '';


$kred = KredApi($appId,$appKey);

/*
 * source - Twiter, facebook etc
 * term - your twitter handle or other
 */
$response = $kred->KredScore('term','source');