<!--
var c=false;
function FocusIn (valueid) {
                if(valueid ==  'ID')  document.frmLog.member_id.style.backgroundImage="";
                else document.frmLog.passwd.style.backgroundImage="";
                c=true;
}
function FocusOut (valueid) {
                if(valueid ==  'ID') {
                        if(!document.frmLog.member_id.value) document.frmLog.member_id.style.backgroundImage="url(img_eng/member_id_bg.gif)";
                }
                else {
                        if(!document.frmLog.passwd.value) document.frmLog.passwd.style.backgroundImage="url(img_eng/passwd_bg.gif)";
                }
                c=true;
}

function addfavorite(a,b){
if (document.all)
window.external.AddFavorite(a,b)
}


function num_only()
{
if(((event.keyCode<48) || (event.keyCode>57))) {
window.alert('숫자만을 입력하세요.  ');
event.returnValue=false;
}
}

function num_format(frm)
  {

    var rtn = "";
    var val = "";
    var j = 0;
    x = frm.value.length;

    for(i=x; i>0; i--)
      {
        if(frm.value.substring(i,i-1) != ",")
          {
            val = frm.value.substring(i,i-1)+val;
          }
      }
    x = val.length;
    for(i=x; i>0; i--)
      {
        if(j%3 == 0 && j!=0)
          {
            rtn = val.substring(i,i-1)+","+rtn;
          } else {
            rtn = val.substring(i,i-1)+rtn;
          }
        j++;
      }
    frm.value=rtn;
    amount=frm.value.replace(/,/g,'')
  }
-->
