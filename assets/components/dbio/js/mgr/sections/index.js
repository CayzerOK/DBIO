Ext.onReady(function() {
    MODx.load({ xtype: 'dbio-page-home'});
});

DBIO.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'dbio-panel-home'
            ,renderTo: 'dbio-panel-home-div'
        }]
    });
    DBIO.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(DBIO.page.Home,MODx.Component);
Ext.reg('dbio-page-home',DBIO.page.Home);