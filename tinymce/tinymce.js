(function ( tinymce ) {
    'use strict';
    tinymce.PluginManager.add( 'purehighlightjs', function ( editor, url ) {

        // generate language values
        var languageValues = [{
            text: 'Default',
            value: null
        }];

        tinymce.each(hljs.listLanguages(), function(value, key){
            languageValues.push({
                text : value,
                value : value
            });
        });

        editor.on( 'init', function () {
        } );
        // Add Code Insert Button to toolbar
        editor.addButton('PureHighlightjsInsert', {
            title : '代码',
            icon: 'wp_code',
            onclick: function() {
                editor.windowManager.open({
                    title : '代码插入',
                    minWidth : 700,
                    body : [
                        {
                            type : 'listbox',
                            name : 'lang',
                            label : '语言',
                            values : languageValues
                        },
                        {
                            type : 'textbox',
                            name : 'code',
                            label : '内容',
                            multiline : true,
                            minHeight : 200
                        }
                    ],
                    onsubmit : function(e){
                        var code = e.data.code.replace(/\r\n/gmi, '\n'),
                            tag = 'code';

                        //转义
                        // code =  tinymce.html.Entities.encodeAllRaw(code);

                        var sp = (e.data.addspaces ? '&nbsp;' : '');

                        editor.insertContent(sp + '<pre class="pure-highlightjs"><code class="' + e.data.lang + '">' + code + '</code></pre>' + sp + '<p></p>');
                    }
                });
            }
        });
    } );
})( window.tinymce );

