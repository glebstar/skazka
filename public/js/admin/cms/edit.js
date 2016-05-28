$(document).ready(function(){
    $('#edit-form').submit(function(){
        if($(this).attr('data-confirm') == 1) {
            return true;
        }
        
        if($('#edit-form-path').val() == '') {
            editFormShowError('Поле Путь обязательно!');           
            return false;
        }
        
        if(!/^[a-z][a-z0-9\/-]+[^\/]$/.test($('#edit-form-path').val())) {
            editFormShowError('Поле путь некорректно!');           
            return false;
        }
        
        if($('#edit-form-title').val() == '') {
            editFormShowError('Поле Заголовок обязательно!');           
            return false;
        }
        
        if(!/^\d+$/.test($('#edit-form-sort').val())) {
            editFormShowError('Поле сортировка должно быть числом!');           
            return false;
        }
        
        $('#edit-form-is-main').val('0');
        if(document.getElementById('edit-form-is-main-check').checked) {
            $('#edit-form-is-main').val('1');
        }
        
        $("#dlg-save").html('Сохранить? Вернуть будет невозможно!').dialog({
            title: 'Подтвердите!',
            modal: true,
            buttons: [
                {
                    text: "Да",
                    click: function() {
                        $(this).dialog( "close" );
                        $('#edit-form').attr('data-confirm', 1);
                        $('#edit-form').submit();
                    }
                },
                {
                    text: "Отмена",
                    click: function() {
                        $(this).dialog( "close" );
                    }
                }
            ]
         });
        
        return false;
    });
});

function editFormShowError(message) {
    $("#dlg-save").html(message).dialog({
        title: 'Ошибка!',
        modal: true,
        buttons: [
            {
                text: 'Ок',
                click: function(){
                    $(this).dialog( "close" );
                }
            }
        ]
    });
}



