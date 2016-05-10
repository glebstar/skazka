@extends('layout.main')

@section('js')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('h2')
<h2>Редактирование главной страницы</h2>
@endsection

@section('content')
        <form method="post" action="/admin/main/save">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                <?php echo base64_decode($body); ?>
            </textarea>
            
            <input type="submit" value="Сохранить" />
            <script>
                CKEDITOR.replace( 'editor1',  {
                    language: 'ru',
                    uiColor: '#9AB8F3',
                    height: 500,
                    extraPlugins: 'filebrowser,popup',
                    allowedContent: true,
                    contentsCss: '/css/edstyle.css',
                    filebrowserBrowseUrl: '/ckeditor/browse.php',
                    filebrowserUploadUrl: '/ckeditor/upload.php'
                });
            </script>
        </form>
@endsection

