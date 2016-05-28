@extends('layout.main')

@section('js')
<script src="/ckeditor/ckeditor.js"></script>
<script src="/js/admin/cms/edit.js"></script>
@endsection

@section('h2')
<h2>Редактирование</h2>
<?php
foreach ($errors->all() as $message)
{
    echo '<p class="error">' . $message . '</p>';
}
?>
@endsection

@section('content')
        <form id="edit-form" method="post" action="/admin/cms/edit/save/{{ $id }}" data-confirm="0">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">           
            <label>Путь:</label><br />
            <input id="edit-form-path" type="text" name="path" value="{{ $path }}" />
            <label>Заголовок:</label><br />
            <input id="edit-form-title" type="text" name="title" value="{{ $title }}" />
            
            <label>Сортировка:</label>
            <input id="edit-form-sort" type="text" class="small" name="sort" value="{{ $sort }}" />
            <br />
            <label>Включить в главное меню:</label>
            <input id="edit-form-is-main" type="hidden" value="0" name="is_main" />
            <input id="edit-form-is-main-check" type="checkbox" <?php if($isMain == 1){ echo 'checked="checked"'; } ?> /><br />
            
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                <?php echo base64_decode($body); ?>
            </textarea>
            
            <input type="submit" value="Сохранить" />
            <a href='#' onclick="confirmDelPage('{{ $title}}', {{ $id }}); return false;">Удалить эту страницу</a>
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

<div id="dlg-save" style="display: none;"></div>

