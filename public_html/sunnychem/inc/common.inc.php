<?
function xt($a){
 echo "<table cellpadding=0 cellspacing=0><tr><td height=$a></td></tr></table>";
}


function test(){
global $TEST_ADDR,$REMOTE_ADDR;
if($REMOTE_ADDR == $TEST_ADDR){
 //echo "<script>window.alert('=$REMOTE_ADDR =$TEST_ADDR')</script>";
 return 1;
}else{
 return 0;
}
}

function protect_email($a){

 global $home_url;
 //$b=eregi_replace("@","<img src='$home_url/img/at.gif' border=0>",$a);
 $b=eregi_replace("@","@",$a);
 return "$b";
}
function protect_email_notice(){
 global $home_url;
echo "<img src='$home_url/img/at.gif'> �̸����� �������α׷����κ��� ��ȣ�մϴ�.";
}
//==================================================================

if($charset == "utf-8"){

function str_cut($str, $len, $checkmb=false, $tail='...') { 
  preg_match_all('/[\xEA-\xED][\x80-\xFF]{2}|./', $str, $match); 
  $m    = $match[0]; 
  $slen = strlen($str);  // length of source string 
  $tlen = strlen($tail); // length of tail string 
  $mlen = count($m);    // length of matched characters 

  if ($slen <= $len) return $str; 
  if (!$checkmb && $mlen <= $len) return $str; 
  
  $ret  = array(); 
  $count = 0; 
  
  for ($i=0; $i < $len; $i++) { 
    $count += ($checkmb && strlen($m[$i]) > 1)?2:1; 
    if ($count + $tlen > $len) break; 
    $ret[] = $m[$i]; 
  } 
  return join('', $ret).$tail; 
} 

}else{

//�ѱ۵� �ȱ����� ���ڿ� �ڸ��� �Լ� 2001.9.3
function str_cut($val, $cut_len){ 
  
  $tot_len = strlen($val); 
  $cut_str = substr($val,0,$cut_len); 
  $len = strlen($cut_str); 
  
  for($i=0;$i < $len;$i++){ 
  
  if(ord($val[$i]) > 127){ $hanlen++; } 
  else{ $englen++; } 
  
  } 
  
  $cut_gap = $hanlen %2; 
  
  if($cut_gap == 1){ $hanlen--; } 
  $length=$hanlen + $englen; 
  
  if($tot_len > $length){ return substr($val,0,$length).".."; } 
  else{ return substr($val,0,$length); } 
} 

}

function str_cut2($val, $cut_len){

  $tot_len = strlen($val);
  $cut_str = substr($val,0,$cut_len);
  $len = strlen($cut_str);

  for($i=0;$i < $len;$i++){

  if(ord($val[$i]) > 127){ $hanlen++; }
  else{ $englen++; }

  }

  $cut_gap = $hanlen %2;

  if($cut_gap == 1){ $hanlen--; }
  $length=$hanlen + $englen;

  if($tot_len > $length){ return substr($val,0,$length)."O"; }
  else{ return substr($val,0,$length); }
}




//�ѱ��� ���� ���ϰ� ������ ���ڿ� �ڸ��� �Լ�
function string_cut($string,$cut_size)
{
 $len=strlen($string);

  for($i=0;$i<$len;$i++){

  $string_cut=substr($string,$i,1);
  $string_array[$i]=$string_cut;

  }
  for($i=0;$i<$cut_size;$i++)
  {
   $exp_string .= "$string_array[$i]";
  }

  if($len > $cut_size) {
         return "$exp_string"." ...";
  }else{
         return "$exp_string";
  }
}

function make_bold($bold){
        echo("<b>$bold</b>");
        return 1;
}

function is_num($num){
        if(ereg("^\-?[0-9]+$",$num)){
                        return 1;
                }
        else
                return 0;
}

function only_alert($message){
echo "
<script>
window.alert('$message');
</script>
";
}

function alert($message,$history_go='history.go(-1)',$is_exit=''){
 echo "
   <script>
    window.alert('$message');
    $history_go
   </script>
 ";
 if(!$is_exit){
   exit;
 }
}

function alertngo($message,$go_url=''){
 global $home_url;
 if($go_url=="go_1" || !$go_url){
 echo "
   <script>
    window.alert('$message');
    history.go(-1);
   </script>
 ";
 exit;

 }else{

 echo "
   <script>
    window.alert('$message');
    location.href='$go_url';
   </script>
 ";
 exit;

 }

}

function justgo($go_url){
 global $home_url;
 if($go_url=="go_1"){
 echo "
   <script>
    window.alert('$message');
    history.go(-1);
   </script>
 ";
 exit;

 }else{

 echo "
   <script>
    location.href='$go_url';
   </script>
 ";
 exit;
 }
}

function confirm($msg){
         echo("
        <script language=javascript>
        window.confirm('$msg');
        </script>
        ");
}
function refresh($url,$time=0){
        echo("
        <meta http-equiv='Refresh' content='$time; url=$url'>
        ");
        exit;
}


//==================================================================
//�ð�/��¥ ����

$True = 1;
$False = 0;
$True = 1;
$False = 0;

//����üũ
function Leap_Year($year) {
        Global $True, $False;

        //�⵵�� 4�ڸ��� �ٲ۴�
        $year += 1900;

        //4�� ����� �������� 0 �̸� ����
        //���߿��� 100���� ����� �������� 0�̸� ���� �ƴϰ�
        //���߿��� 400���� ����� �������� 0�̸� ����
        if($year % 4 == 0) {
                if($year % 100 == 0) {
                        if($year % 400 == 0) {
                                return $True;
                        }
                        else {
                                return $False;
                        }
                }
                else {
                        return $True;
                }
        }
        else {
                return $False;
        }
}
function Check_Day($year,$month,$day) {

        Global $True,$False;
        $ERROR_DAY="�ֹε�Ϲ�ȣ�� ��¥ �Է��� ��Ȯ���� �ʽ��ϴ�.";

        //�� �Է��� ��Ȯ���� �˻�
        if($month < 1 || $month > 12) {
                return "�ֹε�Ϲ�ȣ�� ���� ��Ȯ���� �ʽ��ϴ�";
        }

        switch($month) {
        case 1 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 2 :
                if(Leap_Year($year) == $True) {
                        if($day > 29)
                                return $ERROR_DAY;
                        else return $True;
                }
                else {
                        if($day > 28)
                                return $ERROR_DAY;
                        else
                                return $True;
                }
                break;
        case 3 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
 	case 4 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 5 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 6 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 7 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 8 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 9 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 10 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 11 :
                if($day > 30)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        case 12 :
                if($day > 31)
                        return $ERROR_DAY;
                else
                        return $True;
                break;
        }
}
function ctznnum_check($citizen_num)
{
        Global $True,$False;

        //��ü �ڸ��� �˻�
        if(strlen($citizen_num) != 14) {
                return "�ֹε�Ϲ�ȣ �ڸ����� �ùٸ��� �ʽ��ϴ�";
        }

        //��Ȯ�� ��ġ�� "-"�� �ִ��� �˻�
        if( substr($citizen_num,6,1) != "-") {
                return "�ֹε�Ϲ�ȣ�� '-'�� �־��ּ���";
        }

        //����, ��, �� ����
        //

        $Bi_Year = intval( substr( $citizen_num, 0, 2));
        $Bi_Month = intval( substr( $citizen_num, 2, 2));
        $Bi_Date = intval( substr( $citizen_num, 4, 2));

        //�����ڵ尡 ��Ȯ���� �˻�
        if(substr($citizen_num,7,1) != "1" && substr($citizen_num,7,1) != "2")
                return "�ֹε�Ϲ�ȣ ���� �ڵ尡 ��Ȯ���� �ʽ��ϴ�.";

        for( $i=0; $i<14;$i++)
        {
                //�ֹε�Ϲ�ȣ�� ���ڷ� ��Ȯ�ϰ� �Է��� �Ǿ����� �˻�
                if( $i!=6 && ( substr($citizen_num,$i,1) < "0" || substr($citizen_num,$i,1) > "9")) {
                        return "�ֹε�Ϲ�ȣ�� ��Ȯ�� ���ڸ� �����ּ���";
                }

                //�ֹε�� ���ڸ� �ڵ� �˻�
                if( $i < 6)
                        $Sum += intval(substr($citizen_num,$i,1))*($i+2);
                if( $i > 6 && $i < 9 )
                        $Sum += intval(substr($citizen_num,$i,1))*($i+1);
                if( $i > 8 && $i < 13)
                        $Sum += intval(substr($citizen_num,$i,1))*($i-7);
        }

        //��, ��, �� �Է��� ��Ȯ���� �˻��ؼ� ����
        $return=Check_Day($Bi_Year,$Bi_Month,$Bi_Date);

        if ( $return != $True )
                return $return;

	//���ڸ� �ڵ� ���
        $Mod=11-($Sum%11);
        if((11-($Sum%11))>=10)
                $Mod-=10;

        //��� �ѰͰ� ���ڸ� �ڵ尡 ��ġ���� ������ ����
        if( $Mod != intval(substr($citizen_num,13))) {
                return "�ֹε�Ϲ�ȣ �ڵ尡 ��Ȯ���� �ʽ��ϴ�";
        }
        else {
                return "ok";
        }
}
//if(date("d") > 27) exit;



//�ٴ�- ä������κп��� ����ϴ� �Լ��� ���� ����
function find_companyname($findpeople_id)
{
        $search_query="select company_name from findpeople_member where member_id='$findpeople_id'";
//echo "$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function find_companyname1($findpeople_id)
{
        $search_query="select company_name from findpeople_member where findpeople_id='$findpeople_id'";
//echo "$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function find_personname($findjob_id)
{
        $search_query="select name from findjob_member where member_id='$findjob_id'";
//      echo "qqq=$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function find_personname1($findjob_id)
{
        $search_query="select name from findjob_member where findjob_id='$findjob_id'";
//      echo "qqq=$search_query";
        $result=mysql_query($search_query) or die(mysql_error());
        $result2=mysql_fetch_row($result);
        return ($result2[0]);
}

function errormsg($string){
      echo ("
            <script language=\"javascript\">
            <!--
               alert(\"$string\");
               history.go(-1);
                                //-->
            </script>
            ");
        exit;
}

?>
