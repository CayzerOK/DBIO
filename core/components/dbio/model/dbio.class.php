<?php
class DBIO
{

    public $modx;
    function __construct(modX &$modx, array $config = [])
    {
        $this->modx =& $modx;
        $corePath = MODX_CORE_PATH . 'components/dbio/';
        $assetsUrl = MODX_ASSETS_URL . 'components/dbio/';
        $this->config = array_merge([
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'processorsPath' => $corePath . 'processors/',
            'connectorUrl' => $assetsUrl . 'connector.php',
            'assetsUrl' => $assetsUrl,
            'cssUrl' => $assetsUrl . 'css/',
            'jsUrl' => $assetsUrl . 'js/',
        ], $config);
        $this->modx->addPackage('dbio', $this->config['modelPath']);
        $this->modx->lexicon->load('dbio:default');
    }
}