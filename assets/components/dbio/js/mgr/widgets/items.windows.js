DBIO.window.CreateItem = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'dbio-item-window-create';
    }
    Ext.applyIf(config, {
        title: _('dbio_item_create'),
        width: 300,
        autoHeight: true,
        url: DBIO.config.connector_url,
        action: 'mgr/item/create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    DBIO.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(DBIO.window.CreateItem, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'textfield',
            fieldLabel: _('dbio_item_name'),
            name: 'content',
            id: config.id + '-content',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('dbio-item-window-create', DBIO.window.CreateItem);


DBIO.window.UpdateItem = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'dbio-item-window-update';
    }
    Ext.applyIf(config, {
        title: _('dbio_item_update'),
        width: 300,
        autoHeight: true,
        url: DBIO.config.connector_url,
        action: 'mgr/item/update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    DBIO.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(DBIO.window.UpdateItem, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('dbio_content'),
            name: 'content',
            id: config.id + '-content',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('dbio-item-window-update', DBIO.window.UpdateItem);