function val_qbook()
{
    var af = document.getElementById('addbook_form');
    if(af.username.value == "")
    {
        alert("������� ���� ���");
        af.username.focus();
        return false;
    }
    
    if(af.message.value == "")
    {
        alert("������� ���������");
        af.message.focus();
        return false;
    }
    
    if(af.captcha.value == "")
    {
        alert("������� ���, ��������� �� ��������");
        af.captcha.focus();
        return false;
    }
    
    return true;
}

// ���� ��� png � IE5-6
function fixPNG(element)
{
  //���� ������� IE ������ 5.5-6
  if (/MSIE (5\.5|6).+Win/.test(navigator.userAgent))
  {
    var src;
    if (element.tagName=='img') //���� ������� ������� �������� (��� IMG)
    {
      if (/\.png$/.test(element.src)) //���� ���� �������� ����� ���������� PNG
      {
        src = element.src;
        element.src = "../i/blank.gif"; //�������� ����������� ���������� gif-��
      }
    }
    else //�����, ���� ��� �� �������� � ������ �������
    {
   //���� � �������� ������ ������� ��������, �� ����������� �������� �������� background-image ���������� src
      src = element.currentStyle.backgroundImage.match(/url\("(.+\.png)"\)/i);
      if (src)
      {
        src = src[1]; //����� �� �������� �������� background-�mage ������ ����� ��������
        element.runtimeStyle.backgroundImage="none"; //������� ������� �����������
      }
    }
    //����, src �� ����, �� ����� ��������� ����������� � ������� ������� AlphaImageLoader
    if (src) element.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "', sizingMethod='crop')";
  }
}

function valid_login_admin()
{
    if ( login_form.login.value == "" ) {
        alert("������� �����...");              
        login_form.login.focus();
        return false
    }
    
    if ( login_form.password.value == "" ) {
        alert("������� ������...");       
        login_form.password.focus();
        return false
    }
    
    return true   
}
