<?php
$dbio = $modx->getService('dbio','DBIO',$modx->getOption('dbio.core_path',null,$modx->getOption('core_path').'components/dbio/').'model/dbio/',$scriptProperties);
if (!($dbio instanceof DBIO)) return '';
/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'rowTpl');
$sort = $modx->getOption('sort',$scriptProperties,'tag_id');
$dir = $modx->getOption('dir',$scriptProperties,'ASC');
$objects = $modx->getCollection('TagList');
$output = count($objects);
return $output;