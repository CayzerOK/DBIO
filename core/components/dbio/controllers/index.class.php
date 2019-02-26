<?php
class DBIOIndexManagerController extends modExtraManagerController {
    public $DBIO;

    public function addCss($script)
    {
        $script = $script . '?v=' . $this->DBIO->version;
        parent::addCss($script);
    }
    public function addJavascript($script)
    {
        $script = $script . '?v=' . $this->DBIO->version;
        parent::addJavascript($script);
    }
    public function addLastJavascript($script)
    {
        $script = $script . '?v=' . $this->DBIO->version;
        parent::addLastJavascript($script);
    }
    public function initialize()
    {
        $this->DBIO = $this->modx->getService('dbio');
        $this->addCss($this->DBIO->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->DBIO->config['jsUrl'].'mgr/dbio.js');
        $this->addHtml('
            <script type="text/javascript">
                Ext.onReady(function() {DBIO.config = '.$this->modx->toJSON($this->DBIO->config).';});
            </script>
        ');
        parent::initialize();
    }
}