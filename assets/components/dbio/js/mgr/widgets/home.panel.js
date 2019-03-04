DBIO.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('dbio') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('dbio_items'),
                layout: 'anchor',
                items: [{
                    html: _('dbio_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'dbio-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    DBIO.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(DBIO.panel.Home, MODx.Panel);
Ext.reg('dbio-panel-home', DBIO.panel.Home);
