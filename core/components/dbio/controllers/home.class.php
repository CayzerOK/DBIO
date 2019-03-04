<?php
/**
 * The home manager controller for DBIO.
 *
 */
class DBIOHomeManagerController extends modExtraManagerController
{
    /** @var modExtra $DBIO */
    public $DBIO;
    /**
     *
     */
    public function initialize()
    {
        $this->DBIO = $this->modx->getService('dbio', 'DBIO', MODX_CORE_PATH . 'components/dbio/model/');
        parent::initialize();
    }
    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['dbio:default'];
    }
    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }
    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('dbio');
    }
    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->DBIO->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/dbio.js');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->DBIO->config['jsUrl'] . 'mgr/sections/home.js');
        $this->addHtml('<script type="text/javascript">
        DBIO.config = ' . json_encode($this->DBIO->config) . ';
        DBIO.config.connector_url = "' . $this->DBIO->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "dbio-page-home"});});
        </script>');
    }
    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="dbio-panel-home-div"></div>';
        return '';
    }
}