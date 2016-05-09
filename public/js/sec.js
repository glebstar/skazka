function insertphoto(n_photo)
{
    var nt = document.getElementById('news_text');
    nt.value +=  ' ' + n_photo + ' ';
    nt.focus();
}
