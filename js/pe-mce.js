/**
 * Created by emmaedgar on 1/25/16.
 */

(function() {
    /* Register the buttons */
    tinymce.create('tinymce.plugins.MyButtons', {
        init : function(ed, url) {
            /**
             * Inserts shortcode content
             */
            ed.addButton( 'button_eek', {
                title : 'Insert shortcode',
                image : '../wp-includes/images/smilies/icon_eek.gif',
                onclick : function() {
                    ed.selection.setContent('[pin-embed url= size=small description=true]');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    /* Start the buttons */
    tinymce.PluginManager.add( 'my_button_script', tinymce.plugins.MyButtons );
})();