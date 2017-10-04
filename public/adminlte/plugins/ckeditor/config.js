CKEDITOR.editorConfig = function( config ) {
    config.extraPlugins = 'youtube';

    config.stylesSet = [
        {name: 'Чёрный текст', element: 'span', styles:{color:'#333'}},
        {name: 'Серый текст', element: 'span', styles:{color:'#999999'}},
        {name: 'Красный текст', element: 'span', styles:{color:'#f73f41'}},
        {name: 'Бордовый текст', element: 'span', styles:{color:'#870925'}},
        {name: 'Фиолетовый текст', element: 'span', styles:{color:'#2A244F'}},
        {name: 'Коричневый текст', element: 'span', styles:{color:'#4d3930'}}
    ];

    config.toolbar = [
        { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Print', '-', 'Templates' ] },
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-','RemoveFormat' ] },
        { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
        { name: 'insert', items: [ 'Image',  'Table', 'Flash', 'Youtube', 'HorizontalRule', 'SpecialChar', 'Iframe' ] },
        { name: 'about', items: [ 'About' ] }
    ];

    config.contentsCss = [
        '/css/reset.css',
        '/css/style.css',
        '/css/media.css',
        '/css/fonts.css'
    ];

};