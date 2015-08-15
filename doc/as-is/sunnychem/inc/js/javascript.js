var bNetscape4plus = (navigator.appName == "Netscape" && navigator.appVersion.substring(0,1) >= "4");
var bExplorer4plus = (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.substring(0,1) >= "4");


function flashWrite(url,w,h,id,bg,vars,win){

var flashStr=
"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
"<param name='allowScriptAccess' value='always' />"+
"<param name='movie' value='"+url+"' />"+
"<param name='FlashVars' value='"+vars+"' />"+
"<param name='wmode' value='"+win+"' />"+
"<param name='menu' value='false' />"+
"<param name='quality' value='high' />"+
"<param name='bgcolor' value='"+bg+"' />"+
"<embed src='"+url+"' FlashVars='"+vars+"' wmode='"+win+"' menu='false' quality='high' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
"</object>";

document.write(flashStr);

}

function confirmngo(msg,url){
 if(confirm(msg))
 {
  location=url;
 }
}

function CheckUIElements()
{
        var yMenuFrom, yMenuTo, yButtonFrom, yButtonTo, yOffset, timeoutNextCheck;

        if ( bNetscape4plus ) { // 
                //yButtonFrom = document["divLinkButton"].top;
                //yButtonTo   = top.pageYOffset + top.innerHeight - 55;
                yMenuFrom   = document["divMenu"].top;
                yMenuTo     = top.pageYOffset + 103;   //
        }
        else if ( bExplorer4plus ) {  //
                //yButtonFrom = parseInt (divLinkButton.style.top, 10);
                //yButtonTo   = document.body.scrollTop + document.body.clientHeight - 55;
                yMenuFrom   = parseInt (divMenu.style.top, 10);
                yMenuTo     = document.body.scrollTop +100; // 
        }

        timeoutNextCheck = 500;

        if ( Math.abs (yButtonFrom - (yMenuTo + 152)) < 6 && yButtonTo < yButtonFrom ) {
                setTimeout ("CheckUIElements()", timeoutNextCheck);
                return;
        }


        if ( yButtonFrom != yButtonTo ) {
                yOffset = Math.ceil( Math.abs( yButtonTo - yButtonFrom ) / 10 );
                if ( yButtonTo < yButtonFrom )
                        yOffset = -yOffset;

                if ( bNetscape4plus )
                        document["divLinkButton"].top += yOffset;
                else if ( bExplorer4plus )
                        divLinkButton.style.top = parseInt (divLinkButton.style.top, 10) + yOffset;

                timeoutNextCheck = 10;
        }
        if ( yMenuFrom != yMenuTo ) {
                yOffset = Math.ceil( Math.abs( yMenuTo - yMenuFrom ) / 20 );
                if ( yMenuTo < yMenuFrom )
                        yOffset = -yOffset;

                if ( bNetscape4plus )
                        document["divMenu"].top += yOffset;
                else if ( bExplorer4plus )
                        divMenu.style.top = parseInt (divMenu.style.top, 10) + yOffset;

                timeoutNextCheck = 10;
        }

        setTimeout ("CheckUIElements()", timeoutNextCheck);
}

<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->

<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function OnLoad()
{
        var y;

        //if ( top.frames.length )
        //        top.location.href = self.location.href;

        if ( bNetscape4plus ) {
                document["divMenu"].top = top.pageYOffset + 10;
                document["divMenu"].visibility = "visible";
                //document["divLinkButton"].top = top.pageYOffset + top.innerHeight - 55;
                //document["divLinkButton"].visibility = "visible";
        }
        else if ( bExplorer4plus ) {
                divMenu.style.top = document.body.scrollTop + 10;
                divMenu.style.visibility = "visible";
                //divLinkButton.style.top = document.body.scrollTop + document.body.clientHeight - 55;
                //divLinkButton.style.visibility = "visible";
        }

        // initializing UI update timer
        CheckUIElements();
        //if ( bExplorer4plus )
        //        setTimeout ( "FlashTitleStepIt(255)", 10 );
        return true;
}

function funcSwapImage(imageName, bHilite) {
// DUMB Netscape doesn't see img names if they're inside a <div which has an id
// if they're just in <div></div> - it's okay, but that's not the case :\
// Workaround (using layers) was provided by Kostya. Tnx man :)
        if ( bExplorer4plus ) {
                document.images[imageName].src = "images/" + imageName + (bHilite == 1 ? "_hi.gif" : "_lo.gif");
        }
        else if ( bNetscape4plus ) {
                document.layers["divMenu"].document.images[imageName].src = "images/" + imageName + (bHilite == 1 ? "_hi.gif" : "_lo.gif");
        }
        return false;
}

function jumin_check(j1, j2) 
{
    if (j1.value.length < 6 || j2.value.length < 7)
        return false;

    var sum_1 = 0;
    var sum_2 = 0;
    var at=0;
    var juminno= j1.value + j2.value;
    sum_1 = (juminno.charAt(0)*2)+
            (juminno.charAt(1)*3)+
            (juminno.charAt(2)*4)+
            (juminno.charAt(3)*5)+
            (juminno.charAt(4)*6)+
            (juminno.charAt(5)*7)+
            (juminno.charAt(6)*8)+
            (juminno.charAt(7)*9)+
            (juminno.charAt(8)*2)+
            (juminno.charAt(9)*3)+
            (juminno.charAt(10)*4)+
            (juminno.charAt(11)*5);
    sum_2=sum_1 % 11;

    if (sum_2 == 0) {
        at = 10;
    } else {
        if (sum_2 == 1) 
            at = 11;
        else 
            at = sum_2;
    }
    att = 11 - at;
    if (juminno.charAt(12) != att) {
        return false;
    }

    return true
}

function popup_zip(frm_name, frm_zip1, frm_zip2, frm_addr1, frm_addr2, dir, top, left)
{
    url = './?doc='+dir+'/mbzip.php&frm_name='+frm_name+'&frm_zip1='+frm_zip1+'&frm_zip2='+frm_zip2+'&frm_addr1='+frm_addr1+'&frm_addr2='+frm_addr2;
    opt = 'scrollbars=yes,width=417,height=250,top='+top+',left='+left;
    window.open(url, "mbzip", opt);
}

function del(href) 
{
    if (confirm("Do you really want to delete this? - 897890")) {
        document.location.href = href;
    }
}

function winopen(url, name, option)
{
    window.open(url, name, option);
    return ;
}

function textarea_size(fld, size)
{
	var rows = parseInt(fld.rows);

	rows += parseInt(size);
	if (rows > 0) {
		fld.rows = rows;
	}
}

function set_cookie(name, value, expirehours) 
{
	var today = new Date();
	today.setTime(today.getTime() + (60*60*1000*expirehours));
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";";
}

function get_cookie(name) 
{
    var find_sw = false;
    var start, end;
    var i = 0;

	for (i=0; i<= document.cookie.length; i++)
	{
		start = i;
		end = start + name.length;

		if(document.cookie.substring(start, end) == name) 
		{
			find_sw = true
			break
		}
	}

    if (find_sw == true) 
	{
        start = end + 1;
        end = document.cookie.indexOf(";", start);

        if(end < start)
            end = document.cookie.length;

        return document.cookie.substring(start, end);
    }
    return "";
}

function delete_cookie(name) 
{
	var today = new Date();

	today.setTime(today.getTime() - 1);
	var value = getCookie(name);
	if(value != "")
		document.cookie = name + "=" + value + "; path=/; expires=" + today.toGMTString();
}
