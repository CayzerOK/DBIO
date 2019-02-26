<?
var DBIO = function(config) {
    config = config || {};
    DBIO.superclass.constructor.call(this,config);
};
Ext.extend(DBIO,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {}
});
Ext.reg('dbio',DBIO);
DBIO = new DBIO(); ?>