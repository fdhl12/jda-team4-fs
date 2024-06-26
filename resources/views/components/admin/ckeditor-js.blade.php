@props(['route'])

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    let ckeditorOptions = {
        language: 'id-ID',
        filebrowserUploadUrl: '{{ $route }}',
        filebrowserUploadMethod: 'form',
        height: 500,
    }

    CKEDITOR.replace('description', ckeditorOptions);
</script>
