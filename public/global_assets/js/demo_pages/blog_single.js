/* ------------------------------------------------------------------------------
*
*  # Blog page - detailed
*
*  Demo JS code for blog page kit - detailed view
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {
    

    // CKEditor
    // ------------------------------

    CKEDITOR.replace( 'add-comment', {
        height: '200px',
        removeButtons: 'Subscript,Superscript',
        toolbarGroups: [
            { name: 'styles' },
            { name: 'editing',     groups: [ 'find', 'selection' ] },
            { name: 'basicstyles', groups: [ 'basicstyles' ] },
            { name: 'paragraph',   groups: [ 'list', 'blocks', 'align' ] },
            { name: 'links' },
            { name: 'insert' },
            { name: 'colors' },
            { name: 'tools' },
            { name: 'others' },
            { name: 'document',    groups: [ 'mode', 'document', 'doctools' ] }
        ]
    });    
});
