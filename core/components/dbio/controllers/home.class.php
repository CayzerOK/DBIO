<?php
if (!class_exists('DBIOIndexManangerController')) {
    require_once dirname(__FILE__) . '/index.class.php';
}
class DBIOHomeManagerController extends DBIOIndexManagerController
{
    public function getPageTitle() {
        return $this->modx->lexicon('dbio');
    }
    public function getLanguageTopics() {
        return array('dbio:default');
    }
    public function loadCustomCssJs() {
        //$this->addJavascript($this->doodles->config['jsUrl'].'mgr/widgets/doodles.grid.js');
        $this->addJavascript(MODX_CORE_PATH.'//mgr/widgets/home.panel.js');
        $this->addLastJavascript($this->doodles->config['jsUrl'].'mgr/sections/index.js');
    }
    public function getTemplateFile() {
        return dirname(dirname(__FILE__)) . '/elements/templates/home.tpl';
    }
}