<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
{{-- "https://cdn.tiny.cloud/1/b3xg10tr9dw59dzo0dvolqrth1nrbgp923u9h34bskcvm77q/tinymce/6/tinymce.min.js"  --}}

{{--   API KEY para TinyMCE  b3xg10tr9dw59dzo0dvolqrth1nrbgp923u9h34bskcvm77q  --}}
<script>
    tinymce.init({
        promotion: false,
        language: 'es',
        skin: "oxide-dark",
        content_css: "dark",
        
        
        selector: 'textarea#cuerpo', // Replace this CSS selector to match the placeholder element for TinyMCE
        placeholder: 'Añade aquí el comunicado...',
        plugins: 'code table lists',
        menubar: false,
        toolbar: 'undo redo | blocks | bold italic | forecolor backcolor | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        keep_styles : true,
        paste_retain_style_properties : true,
    });
    
</script>