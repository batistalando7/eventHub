window.addEventListener('load', () => {
    const {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Underline,
        Paragraph,
        Table,
        TableToolbar,
        Image,
        ImageToolbar,
        ImageUpload,
        ImageInsert,
        SimpleUploadAdapter
    } = window.CKEDITOR;

    const LICENSE_KEY = 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3ODc0NDMxOTksImp0aSI6ImJhNmYyNWE2LTgzYTctNGY2Ny1hZThmLTUyNWVhNjFhOTNmNyIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiXSwiZmVhdHVyZXMiOlsiRFJVUCIsIkUyUCIsIkUyVyJdLCJ2YyI6Ijc2NzJkZjBhIn0.S74FHpvyVgaymMnY9883M7WqFQ3TuWZMOI6hKxGHuE4gNQnX4PN0dleF6jd6fJ1o5g8t8LkoqxlAfcAkcj9a1A';

    ClassicEditor
        .create(document.querySelector('#editor'), {
            licenseKey: LICENSE_KEY,

            toolbar: {
                items: [
                    'undo', 'redo', '|',
                    'bold', 'italic', 'underline', '|',
                    'insertTable', 'imageUpload', 'imageInsert'
                ]
            },

            plugins: [
                Essentials, Bold, Italic, Underline,
                Paragraph, Table, TableToolbar,
                Image, ImageToolbar, ImageUpload, ImageInsert,
                SimpleUploadAdapter
            ],

            simpleUpload: {
                // Aqui colocas o teu endpoint PHP para upload de imagens
                uploadUrl: 'news/upload-image',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            },

            image: {
                toolbar: ['imageTextAlternative', 'toggleImageCaption', 'imageStyle:inline', 'imageStyle:block', 'imageStyle:side']
            },

            placeholder: 'Digite o corpo da notícia aqui...'
        })
        .then(editor => {
            console.log('✅ CKEditor inicializado com sucesso.');
            window.editor = editor;
        })
        .catch(error => {
            console.error('❌ Erro ao inicializar o CKEditor:', error);
        });
});
