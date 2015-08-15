<?
//session_cache_limiter('no-cache, must-revalidate'); // 검색 후 뒤로가기 해도 빈페이지 나오지 않음. 
session_start();
// FIX - 2015-08-15-01 - require_once "/home/anyhomepage/public_html/sunnychem/inc/conf.inc.php"; //XXXXX
require_once "G:/workspace/project/php/sunnychem/public_html/sunnychem/inc/conf.inc.php"; //XXXXX

if($MemberID){
}else{

 if(!$temp_member_id){

 $var_year=date(y);
 $var_month=date(m);
 $var_date=date(d);

 $var_ip=$REMOTE_ADDR;
 $var_ip=explode(".",$var_ip);

 $random_num=rand(1000,9999);
 $temp_member_id=$var_year.$var_month.$var_date.$var_ip[2].$var_ip[3].$random_num;
 setcookie("temp_member_id",$temp_member_id,0,"/");
 }

 //$MemberID=$temp_member_id;
 $member_name="Guest";
 $member_jumin="Guest";

}

//include "$d_root/C/act.inc.php"; 

if($TempReferer){
}else{
 $temp_referer=$_SERVER["HTTP_REFERER"];
 $temp_referer=urldecode($temp_referer);
 $TempReferer=$temp_referer;
 setcookie("TempReferer",$TempReferer,0,"/");
}


/*
if(!$basename) $basename=basename($PHP_SELF);
$basename=eregi_replace("sub_","",$basename);
$basename=eregi_replace(".html","",$basename);
$basename2=explode("_",$basename);
$basename2=$basename2[0];
*/

if(!$basename) $basename=basename($PHP_SELF);
$basename=eregi_replace("sub_","",$basename);
$basename=eregi_replace(".html","",$basename);
$basename_=explode("_",$basename);
$basename2=$basename_[0];//02_01 => 02
$basename3=$basename_[0]."_".$basename_[1]; //02_01_01 => 02_01 in anyhomepage.com/eok for left_02_01.inc.php



if(!$PageNum) $PageNum=$basename2;//for fixing the specific menu.

$XW="width=941";//total width

$XWL="width=199";//left width for left.inc.php
$XWL="";//left width for left.inc.php

$XWLC="width=199";//left width for contents in left.inc.php
$XWLC="";//left width for contents in left.inc.php

$XWC=" width=685";
$XWC=" ";

$XWL2="<td width=24> </td>";
$XWL2="";


$X_main_body_bg=" ";
$X_main_body_bg=" background=\"img/main_bg_1px.gif\"  style=\"background-repeat:repeat-x;\"";

$X_main_body_color=" bgcolor=\"#F9F9F9\"";
$X_main_body_color=" ";

$X_main_bg=" ";
$X_main_bg=" background=\"img/main_bg.gif\" style=\"background-repeat:no-repeat; background-position:center top\"";

$X_main_color=" bgcolor=\"#f6f6f6\"";
$X_main_color=" ";

$Xmenu_bg=" background=\"img/menu_bg.gif\" height=85 width=720";
$Xmenu_bg=" height=47";//menu height

$X_main_v_height=" ";
$X_main_v_height=" height=362";

$X_main_v=" ";
$X_main_v=" background='img/main_v.jpg' $X_main_v_height";
$X_main_v=" $X_main_v_height";


$Xalign="";//content align
$Xalign="align=left";//content align
$Xalign="align=center";//content align

$XLmargin="width=23";
$XLmargin="width=0";


$X_sub_body_bg=" ";
$X_sub_body_bg=" background=\"img/sub_bg_1px.gif\" style=\"background-repeat:repeat-x;\"";

$X_sub_body_color=" bgcolor=\"#E1DCD1\"";
$X_sub_body_color=" ";


$X_sub_bg=" ";
$X_sub_bg=" background=\"img/sub_bg.gif\" style=\"background-repeat:no-repeat; background-position:center top\"";

$X_sub_color=" bgcolor=\"#f6f6f6\"";
$X_sub_color=" ";


$X_sub_v_height=" ";
$X_sub_v_height=" height=152";

$X_file_sub_v="v_$basename2.jpg";
$X_sub_v=" background='img/$X_file_sub_v' $X_sub_v_height";


$Xcontents_bg=" bgcolor=#ffffff";
$Xcontents_bg=" ";


$XLeft_bg=" background=\"img/left_menu_bg.gif\" style=\"background-repeat:no-repeat\"";
$XLeft_bg="";
$XLeft_menu_bg=" ";
$XLeft_menu_bg=" background=\"img/left_menu_bg.gif\" height=30"; 


$Xcopy_height="height=100";
$Xcopy_height="";
$Xcopy_bg="";
$Xcopy_bg=" bgcolor=\"#000000\"";
$Xcopy_bg=" background=\"img/copy_bg.gif\"";

$Ximg="img";
?>
