<?php

class DBIOCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'tagList';
    public $classKey = 'tagList';
    public $languageTopics = ['dbio'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('content'));
        if (empty($name)) {
            $this->modx->error->addField('content', $this->modx->lexicon('dbio_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('content', $this->modx->lexicon('dbio_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'DBIOCreateProcessor';