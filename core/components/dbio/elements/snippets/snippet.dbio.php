<?php
$pdo = $modx->getService('pdoFetch');
$dbio_core_path = MODX_CORE_PATH.'components/dbio/';
$modx->loadClass('tagList', $dbio_core_path . 'model/dbio/');

$resources = $pdo->getCollection('tagList');
$tpl = 'item';
return $pdo->getChunk($tpl,array(
    'tags'=>$resources
));