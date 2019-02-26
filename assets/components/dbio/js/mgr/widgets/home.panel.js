DBIO.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>It`s muffin time!</h2>'
            ,border: true
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,items: [{
                title: _('dbio')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>I just want to die!</p>'
                    ,border: true
                    ,bodyCssClass: 'panel-desc'
                }/*,{
					xtype: 'dbio-grid-dbio'
					,cls: 'main-wrapper'
					,preventRender: true
				}*/]
            }]
        }]
    });
    DBIO.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(DBIO.panel.Home,MODx.Panel);
Ext.reg('dbio-panel-home',DBIO.panel.Home);