<!-- file_left -->
  <tr>
    <td><img src="img/left_menu_top_<?=$basename2;?>.gif"></td>
  </tr>


<? /* ?>
<?
 $left_array=array(
"sub_01_01.html?basename=01_01"=>"학원소개",
"sub_01_01.html?basename=01_02"=>"수험안내",
"sub_01_01.html?basename=01_03"=>"찾아오시는 길"
 );

list($key,$val)=each($left_array);
foreach($left_array as $key=>$val){
?>
  <tr><td <?=$XLeft_menu_bg;?>><table width=100% border=0 cellpadding=0 cellspacing=0><tr><td width=35></td><td>
<!--
<a href="sub_<?=$basename2;?>_<?=$key;?>"><?=$val;?></a>
//-->
<a href="<?=$key;?>"><?=$val;?></a>
</td></tr></table></td></tr>
<? } ?>
<? */ ?>


<?
 $left_array=array(
//"sub_04_01.html?basename=04_01"=>"04_01"
 );
list($key,$val)=each($left_array);
foreach($left_array as $key=>$val){
 if($basename==$val){
   $left_i_=$val."_r";
   $left_i_r_=$val."_r";
 }else{
   $left_i_=$val;
   $left_i_r_=$val."_r";
 }


//no 01_r.gif
   $left_i_=$val;
   $left_i_r_=$val;
?>
  <tr>
    <td><a href="<?=$key;?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image_<?=$key;?>','','img/left_menu_<?=$left_i_r_;?>.gif',1)"><img src="img/left_menu_<?=$left_i_;?>.gif" border="0" name="Image_<?=$key;?>"></a></td>
  </tr>

<?
if($basename3==$val){//02_01_02 => 02_01
$file_left_2="left_".$val.".inc.php";//2nd depth left file
//echo "=$file_left_2";
if(file_exists("$d_root/$file_left_2")){ include "$file_left_2"; }
}
?>
<? } ?>


  





<? /* ?>
<?
$sort_table="hkdol_board_sort";
$sort_gid="prd";
$sort_url="sub_02_01.html";

$a="select * from $sort_table where gid='$sort_gid' and depth=1 order by pos desc";
//echo "=$a";
$b=mysql_query($a);
while($c=mysql_fetch_array($b)){

?>
<tr><td <?=$XLeft_menu_bg;?>><table width=100% border=0 cellpadding=0 cellspacing=0><tr><td width=40></td><td>
<a href="<?=$sort_url;?>?lc=<?=$c[sort_id];?>"><?=$c[sort_name];?></a>
</td></tr></table></td></tr>

<? } ?>
<? */ ?>


<!--
  <tr>
    <td><img src="img/left_menu_down.gif"></td>
  </tr>
//-->
<!-- file_left -->
