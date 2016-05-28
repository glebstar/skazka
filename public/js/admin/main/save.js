$(document).ready(function(){
    $('#main-page-save').submit(function(){       
        if($(this).attr('data-confirm') == 1) {
            return true;
        }
        
        $("#dlg-save").dialog({
            title: 'Подтвердите!',
            modal: true,
            buttons: [
                {
                    text: "Да",
                    click: function() {
                        $(this).dialog( "close" );
                        $('#main-page-save').attr('data-confirm', 1);
                        $('#main-page-save').submit();
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


