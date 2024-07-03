@props(['route'])

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.22.1/ckeditor.js" integrity="sha512-F8fV4+wpHYl9zul08Soff9H9fCx6OMIFfgbQcy+2v2gV7PdbT0OgM1LFwujQmwlLGWWKNbOFZ13uWP+Cbe0Ngw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let ckeditorOptions = {
        versionCheck: false,
        language: 'id-ID',
        filebrowserUploadUrl: '{{ $route }}',
        filebrowserUploadMethod: 'form',
        height: 500,
    }

    CKEDITOR.replace('description', ckeditorOptions);
</script>
