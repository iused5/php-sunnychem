<?
if($admin_YN=="Y"){
 $block_ip_YN="";//run block IP system
}else{
 $block_ip_YN="Y";//run block IP system
 $block_ip_YN="";//run block IP system
}
$table_ip="webhard_ip";
$date_picker_YN="Y";
$date_picker_YN="";

$url_log="log";
$url_log="simple_log";

$QuickDeal_YN="";//after login, go to arrange.inc.php etc..

//set.inc.php later
$user="any";
$admin_id = "admin"; //XXXXX
$admin_pw = "a1234"; //XXXXX
$board_admin_pw="$admin_pw";

//$url_index="main.html";
$url_index="index.html";


$mother_root="";
$home_url="http://anyhomepage.com/sunnychem"; //XXXXX
// FIX - 2015-08-15-01 - $d_root="/home/anyhomepage/public_html/sunnychem";
//$d_root="C:/app/git-repository/php-sunnychem/public_html/sunnychem";
$d_root="C:/project-space/git-repository/php-sunnychem/public_html/sunnychem";

$title_text="::: $home_url :::";


$admin_name="°ü¸®ÀÚ";
$admin_tel="";
$admin_email1="";
$admin_email2="";
$admin_email3="";

$site_name="";
$MemberFrom="";

if(!$charset) $charset="utf-8";
$charset="euc-kr";

if($CookieLang=="kr"){
 $lang="kr";
}else if($CookieLang=="jp"){
 $lang="jp";
}else if($CookieLang=="eng"){
 $lang="eng";
}else if($CookieLang=="cn"){
 $lang="cn";
}else{
 $lang="eng";
 $lang="kr";
}

if($admin_YN == "Y"){
 $lang="eng";
 $lang="kr";
}

$charset="utf-8";
$lang="eng";

$charset="euc-kr";
$lang="kr";

//for inc
/*
if($charset=="utf-8"){
        if($lang=="eng"){
                 include "$d_root/inc/exp_eng_utf8.inc.php";
        }else if($lang=="kr"){
                include "$d_root/inc/exp_kr_utf8.inc.php";
        }else if($lang=="jp"){
                include "$d_root/inc/exp_jp_utf8.inc.php";
        }else if($lang=="cn"){
                include "$d_root/inc/exp_cn_utf8.inc.php";
        }
}else if($charset=="euc-kr"){
         include "$d_root/inc/exp_kr.inc.php";
}else{
         include "$d_root/inc/exp_eng.inc.php";
}


//for main
if($charset=="utf-8"){
        if($lang=="eng"){
                 include "$d_root/exp_eng_utf8.inc.php";
        }else if($lang=="kr"){
                include "$d_root/exp_kr_utf8.inc.php";
        }else if($lang=="jp"){
                include "$d_root/exp_jp_utf8.inc.php";
        }else if($lang=="cn"){
                include "$d_root/exp_cn_utf8.inc.php";
        }
}else if($charset=="euc-kr"){
         include "$d_root/exp_kr.inc.php";
}else{
         include "$d_root/exp_eng.inc.php";
}
*/


$dir_img="img_eng";
//echo "thku charset=$charset lang=$lang";


if($asd=="Y"){ echo "=$REMOTE_ADDR<br>"; }



$admin_email="
<a href=\"mailto:$admin_email2\">
<font color=black>
$admin_email1
</font>
</a>
";

$FirstAdminLevel="THKUFIRST";
$SecondAdminLevel="THKUSECOND";
$ThirdAdminLevel="THKUTHIRD";


$array_level_FS=array( $FirstAdminLevel, $SecondAdminLevel);
$array_level_FST=array( $FirstAdminLevel, $SecondAdminLevel, $ThirdAdminLevel);

//connected width M/local_conf.inc.php
$array_level_YOGA1=array( $FirstAdminLevel, $SecondAdminLevel, $ThirdAdminLevel, "YOGA1");
$array_level_YOGA2=array( $FirstAdminLevel, $SecondAdminLevel, $ThirdAdminLevel, "YOGA1","YOGA2");
$array_level_YOGA3=array( $FirstAdminLevel, $SecondAdminLevel, $ThirdAdminLevel, "YOGA1","YOGA2","YOGA3");


$MemberID=$THKUMemberID;
$MemberLevel=$THKUMemberLevel;
$MemberName=$THKUMemberName;
$MemberJumin=$THKUMemberJumin;
$MemberEmail=$THKUMemberEmail;
$MemberTel1=$THKUMemberTel1;
$MemberTel2=$THKUMemberTel2;
$MemberTel3=$THKUMemberTel3;
$MemberCp1=$THKUMemberCp1;
$MemberCp2=$THKUMemberCp2;
$MemberCp3=$THKUMemberCp3;
$MemberHomepage=$THKUMemberHomepage;
$MemberSex=$THKUMemberSex;
$MemberNickname=$THKUMemberNickname;

$db_host="localhost"; //XXXXX
$db_name=""; //XXXXX
$db_id=""; //XXXXX
$db_pw=""; //XXXXX

$p2p_mother_YN="";//important group relating with inheritance
//set.inc.php later

require_once "$d_root/inc/set.inc.php";




$homepage_align_type = "center";

$left_1="";
$left_2="
<Table cellpadding=0 cellspacing=0>
<Tr><Td>
</td></tr>
</table>
";

$banner_left="
<Table cellpadding=0 cellspacing=0>
<Tr><Td><img src=\"img/benner_01.gif\" width=\"167\" height=\"90\" usemap=\"#Map3\" border=\"0\"></td></tr>
<tr><td><img src=\"img/benner_02.gif\" width=\"167\" height=\"82\" usemap=\"#Map4\" border=\"0\"></td></tr>
</table>
";


$headpart .="
<script language=\"JavaScript\">
<!--
function MM_swapImgRestore() { //v3.0
var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf(\"#\")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_findObj(n, d) { //v4.01
var p,i,x;  if(!d) d=document; if((p=n.indexOf(\"?\"))>0&&parent.frames.length) {
 d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
 for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script>
function simple_open(doc) {
 var simple_open=window.open(doc,'','top=50,left=50,width=800,height=550,scrollbars=yes,toolbar=yes,location=yes,status=yes,resizable=yes');
}
function isEmpty( data ){
        for ( var i = 0 ; i < data.length ; i++ ){
                if ( data.substring( i, i+1 ) != \" \" )
                        return false;
        }
        return true;
}
</script>
";

//require_once "$d_root/inc/connect.inc.php";
require_once "$d_root/inc/common.inc.php";
require_once "$d_root/inc/access.inc.php";

//mysql_query('SET CHARACTER_SET euc-kr');
//mysql_query('SET CHARACTER_SET utf8');
if($charset=="utf-8"){
 mysql_query("set names utf8");
}else if($charset=="euc-kr"){
 mysql_query("set names euckr");
}
?>
