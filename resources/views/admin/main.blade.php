@extends('layout.main')

@section('js')
<script src="/ckeditor/ckeditor.js"></script>
<script src="/js/admin/main/save.js"></script>
@endsection

@section('h2')
<h2>Редактирование главной страницы</h2>
@endsection

@section('content')
        <form id="main-page-save" method="post" action="/admin/main/save" data-confirm="0">
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

<div id="dlg-save" style="display: none;">Сохранить? Вернуть будет невозможно!</div>

