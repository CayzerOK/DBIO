<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var modExtra $DBIO */
$DBIO = $modx->getService('DBIO', 'DBIO', MODX_CORE_PATH . 'components/dbio/model/');
$modx->lexicon->load('dbio:default');

// handle request
$corePath = $modx->getOption('dbio_core_path', null, $modx->getOption('core_path') . 'components/dbio/');
$path = $modx->getOption('processorsPath', $DBIO->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);