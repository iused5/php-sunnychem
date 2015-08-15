<?
Function font($string, $color, $size){
	echo("<font color=$color size=$size>$string</font>");
	}

Function br(){
	echo"<br>";
	}

Function hr(){
	echo"<hr>";
	}



Function msg_warn(){
echo("<center>
	<table width=300 border=10 height=63>
	  <tr bordercolor=#FF9900 bgcolor=#FF9800> 
	    <td> 
	      <div align=center><font size=6 face=Times New Roman, Times, serif color=#0000CC><b><font color=#FFFFFF>Warning !!</font></b></font></div>
	    </td>
	  </tr>
	</table>
      </center> ");
}


Function href($link,$text,$size)
{
	echo("<a href=\"$link\"><font size=$size>$text</font></a>\n");
}



Function show_writer($writer)  //기자의 전자우편 과 글쓴이출력
{
	$len=strlen($writer);
	$sqlquery="SELECT email,name FROM reporter WHERE name LIKE '$writer'";
	$result=mysql_query($sqlquery);
	if($result)
	{
	 $number_rows=mysql_num_rows($result);
	 if($number_rows>=1){
		$email=mysql_result($result,0,"email");
		}else
		{
		$email="";
		}
	}
	else{ $email=""; }

	

	if($writer=="연합"){
		font("[글쓴이] $writer","#334455",2);
		}
	if($len<7 && $email!="" ){
		font("[글쓴이] <a href=mailto:$email>$writer</a> 기자(<a href=mailto:$email>$email</a>)","#334455",2);
		}
	if($len>6 && $email!="" ){
		font("[글쓴이] <a href=mailto:$email>$writer</a>(<a href=mailto:$email>$email</a>)","#334455",2);
		}
	if($len>6 && $email=="" ){
		font("[글쓴이] $writer ","#334455",2);
		}		
	if($len==0){
		font("[글쓴이] <a href=mailto:medibank@medibank.co.kr>메디뱅크</a>","#334455",2);
		}
}
	


Function show_menu_top($section){

  echo("<table cellspacing=0 cellpadding=0 width=603 align=center border=0>
  <!-- BEGIN SEARCH CODE --> <tbody> 
  <tr bgcolor=#ffffff> 
    <td><img height=50 alt='' src='http://www.medibank.co.kr/9119/images/top_nav.gif' width=603 
      usemap=#Tabs border=0><map name='Tabs'><area shape='rect' coords='256,30,327,48' href='http://www.medibank.co.kr/news/'><area shape='rect' coords='343,30,413,48' href='http://www.medibank.co.kr'><area shape='rect' coords='431,29,497,50' href='http://medibank.co.kr/living/'><area shape='rect' coords='515,29,583,49' href='http://www.medibank.co.kr/board/'></map></td>
  </tr>
  <tr align=left bgcolor=#b1b1b1> 
    <td align=middle height=33> 
      <table cellspacing=0 cellpadding=0 width=603 align=left border=0>
        <tbody> 
        <tr> 
          <td valign=top width=198 bgcolor=#f2f1ed><img height=33 alt='' 
            src='http://www.medibank.co.kr/9119/images/adress.gif' width=193usemap=#Homemail 
          border=0><map name='Homemail'><area shape='rect' coords='1,0,39,18' href='http://www.medibank.co.kr/9119/'><area shape='rect' coords='41,0,94,18' href='mailto:medibank@medibank.co.kr'></map></td>
          <td class=sizeLt1 valign=center align=left bgcolor=#f2f1ed width='224'> 
            <select 
            class=FormLt1 size=1 name=FILTER>
              <option>병원명</option>
              <option>지역별</option>
              <option>진료과목별</option>
            </select>
            <select 
            class=FormLt1 size=1 name=select>
              <option>병원명</option>
              <option>지역별</option>
              <option>진료과목별</option>
            </select>
          </td>
          <td class=sizeLt1 align=left bgcolor=#f2f1ed width='126'> 
            <input maxlength=30 size=16 name=query>
          </td>
          <td class=sizeLt1 valign=center align=left bgcolor=#f2f1ed width='48'> 
            <input 
            type=image src='http://www.medibank.co.kr/9119/images/go.gif' 
  border=0 name='image'>
          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  <!-- END SEARCH CODE --><!-- BEGIN FEATURED CODE --> 
  <tr bgcolor=#b1b1b1> 
    <td height=1><img height=1 alt='' src='http://www.medibank.co.kr/9119/images/horiz_bar602.gif' 
      width=603></td>
  </tr>
  <tr valign=top align=middle> 
    <td bgcolor=#b1b1b1 height=27> 
      <table cellspacing=0 cellpadding=0 width=601 bgcolor=#f2f1ed border=0>
        <tbody> 
        <tr bgcolor=#f2f1ed> 
          <td valign=center align=left height=27 width='92'><img height=18 alt='' hspace=3 
            src='http://www.medibank.co.kr/9119/images/homemail.gif' width=96 usemap=#Homemail 
          border=0></td>
          <td valign=center align=right width='509'><font color='#333333' size='2'><font size='2' color='#336633'><font color=#223344 size=2><font color='#333333'>l 
            <a href='http://www.medibank.co.kr/news/index.html'>종합</a>l</font></font><font size='2' color='#333333'> 
            <a href='http://www.medibank.co.kr/news/section.html?section=병원'>의사,병원</a>l 
            <a href=http://www.medibank.co.kr/news/section.html?section=약국>약사,약국</a>l 
            <a href=http://www.medibank.co.kr/news/section.html?section=의약>유통,의약</a>l 
            <a href=http://www.medibank.co.kr/news/section.html?section=의료기기>의료기기</a>l 
            <a href=http://www.medibank.co.kr/news/section.html?section=한방>한방,한약</a>l 
            <a href=http://www.medibank.co.kr/news/section.html?section=행정>행정,법률</a>l 
            <a href=http://www.medibank.co.kr/news/section.html?section=기획특집>기획특집</a>l</font></font></font></td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  <tr bgcolor=#b1b1b1> 
    <td height=1><img height=1 alt='' src='http://www.medibank.co.kr/9119/images/horiz_bar602.gif' 
      width=603></td>
  </tr>
  
  <tr> 
    <td valign=center height=25>
    
    <!--   날짜 출력  --> <font size='2'> 

      </font> <!--   날짜 출력  --></td>
  </tr>
  <tr bgcolor=#b1b1b1> 
    <td height=1><img height=1 alt='' src='http://www.medibank.co.kr/9119/images/horiz_bar602.gif' 
      width=602></td>
  </tr>
  </tbody>
</table>");
 
}


Function show_date(){
	$date=date("Y/m/d (D)",time());
	echo("<center>$date</center>");
}


Function show_menu_1(){ // 왼쪽메뉴


echo("<ul>
        <li> 
          <div align='left'><font size='2'><a href='http://medibank.co.kr/news/insertdata/index.html'>기사쓰기</a></font></div>
        </li>
        <li> 
          <div align='left'><font size='2'><a href='http://medibank.co.kr/news/searchform.html'>기사검색</a></font></div>
        </li>
        <li> 
          <div align='left'><font size='2'><a href='http://medibank.co.kr/news/admin/list.html'>기사관리</a></font></div>
        </li>
        
        
      </ul>
      ");




}

Function show_menu_2(){ // 엔터테인먼트
echo("<table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFC60F'>
              <tr> 
                <td colspan='2'><img src='http://www.kjtimes.co.kr/images_1/000_l_02.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td colspan='2'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/Entertainment/Music/index.html'>뮤직 뱅크</a></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/Entertainment/Movie/index.html'>타임스 시네마</a></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td width='11' height='10'>&nbsp;</td>
                <td width='109' valign='bottom' height='10'><a href='http://www.kjtimes.co.kr/Entertainment/tv/index.html'>TV하이라이트</a></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td width='11' height='11'>&nbsp;</td>
                <td width='109' valign='bottom' height='11'>오늘의 
                  운세 </td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'>오늘의 날씨</td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCC99'> 
                <td colspan='2'></td>
              </tr>
            </table>");









}

Function show_menu_3(){  //메인메뉴
 echo("<table width='698' border='0' bordercolordark='#CCCCFF'>
  <tr> 
    <td width='21%' height='57'><a href='http://www.kjtimes.co.kr/~neo21/index.html'> 
      <img src='http://kjtimes.co.kr/~neo21/images/medibank_logo2.gif' width='163' height='48' border='0'></a><br>
    </td>
    <td colspan='2' height='57' valign='bottom' width='79%'>
      <div align='center'><font size='2' color='#3333CC'><img src='http://kjtimes.co.kr/~neo21/images/Ad233980St1Sz1Sq2Id2.gif' width='468' height='60'><br>
        ㅣ<a href='http://www.kjtimes.co.kr/~neo21/medibank/wanted_list.html'>채용정보</a>ㅣ<a href='http://www.kjtimes.co.kr/~neo21/medibank/wanted_list2.html'>구직정보</a>ㅣ<a href='http://www.kjtimes.co.kr/~neo21/medibank/login2.html'>벼룩시장</a>ㅣ<a href='http://www.kjtimes.co.kr/~neo21/medibank/regidet2.html'>의료자료실</a>ㅣ자유게시판ㅣ이용안내ㅣ</font> 
      </div>
      <table width='100%' border='0' cellspacing='0' cellpadding='0'>
        <tr> 
          <td><img src='http://www.kjtimes.co.kr/~neo21/news/img/title_bar.gif' width='525' height='3'></td>
        </tr>
      </table>
    </td>
  </tr>
</table>");




}

Function show_menu_4(){  //회원가입
 echo("<table width='100%' border='0' cellpadding='1' cellspacing='1' bgcolor='#CCCC99'>
        <tr bgcolor='#FFFFFF'> 
          <td> 
            <table border=0 cellpadding=1 cellspacing=0 width=132>
              <tr> 
                <td align=right nowrap><font size=-1 color=#000000>아이디:</font></td>
                <td><font size=3 face=굴림체> 
                  <input type=text name='id' size=9>
                  </font></td>
              </tr>
              <script language='JavaScript'>
<!--
document.forms[0].id.focus();
//-->
</script>
              <tr> 
                <td align=right nowrap><font size=-1 color=#000000>비밀번호:</font></td>
                <td><font size=3 face=굴림체> 
                  <input type=password name='pw' size=9>
                  </font></td>
              </tr>
              <tr> 
                <td colspan=2 height=2></td>
              </tr>
              <tr> 
                <td colspan=2 align=right> <font size=-1> </font><font size='2' class=font> 
                  <input type='radio' name='DB_name' value='Gugik_J' checked >
                  개인
                  <input type='radio' name='DB_name' value='Guin_J'>
                  기업<br>
                  </font> <font size=1><a href='http://www.kjtimes.co.kr/~neo21/medibank/login2.html'>기업회원로그인<br>
                  </a><a href='http://www.kjtimes.co.kr/~neo21/medibank/login.html'>일반회원로그인 
                  <input type=submit size=10 value=' 로그인 ' name='submit'>
                  </a> </font> </td>
              </tr>
              <tr> 
                <td colspan=2 height=8></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table border=0 cellpadding=1 cellspacing=0 width=139>
        <td colspan='2'><img src='http://image.hanmail.net/hanmail/top/trans.gif' width=5 height=1><a href='http://kjtimes.co.kr/~neo21/medibank/regidet.html'><font size=2
 color=blue>일반회원가입</font></a><br>
          <font size='2'><a href='http://kjtimes.co.kr/~neo21/medibank/regidet.html'>병원회원가입</a><br>
          </font> 
            <table width=139 cellpadding=1 cellspacing=0 border=0 bgcolor=#000000>
              <tr> 
              <td> 
                <table width=100% cellpadding=3 cellspacing=0 border=0>
                  <tr> 
                    <th align=left><a href='jobdb/' style='TEXT-DECORATION: none'><font size='-1' face='굴림' color='#ffffff'>채용정보</font></a> 
                    </th>
                  </tr>
                  <tr bgcolor=#ffffff> 
                    <td><font size=-1> <b><font style='font-size: 8.1pt'>총1609회사,3640건</font></b><br>
                      <font face=arial><b>&#183;</b></font> <a href='/jobdb/search.asp?d1=4'>채용속보</a><br>
                      <font face=arial><b>&#183;</b></font> <a href='/jobdb/occupation/'>직종별</a><br>
                      <font face=arial><b>&#183;</b></font> <a href='/jobdb/industry/'>업종별</a><br>
                      <font face=arial><b>&#183;</b></font> <a href='/jobdb/regional/'>지역별</a><br>
                      <font face=arial><b>&#183;</b></font> 경력별<br>
                      <font face=arial><b>&#183;</b></font> <b><a href='/company/'>기업정보</a></b><br>
                      </font></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <font size='2'> </font></td>
      </table>
      <a href='http://www-1.daum.net/Mail-bin/top_click?top_gosamsung-0002&http://www.gosamsung.co.kr' target='nw777'><img src='http://image.hanmail.net/hanmail/ad_image0005/samsungdigtal-f0005.gif' width='138' height='90' border='0' alt='삼성전자 디지털'></a><font size=2> 
      <li><a href='http://www.ncim.net/search/manager/add.cgi?ID=6'>홈페지등록</a> 
      <li><a href='http://www.ncim.net/search/Cool'>추천사이트</a> 
      <li><a href='http://www.ncim.net/search/Ratings'>TOP10사이트</a> 
      <li><a href='http://www.ncim.net/search/manager/modify.cgi?ID=6'>등록수정및 신청 </a> 
      <li><font size=2>검색 </font> 
      </font>
	  
	  
	  
	  ");



}


Function show_menu_5(){ //타임스 만평/시사만화/연재/기획특집
echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#CCCC66'>
              <tr> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/picture.html?section=만평'><font sze=2>만평</font> </a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/picture.html?section=만화'><font sze=2>시사만화 </font></a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><font sze=2>연재</font></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><font
sze=2>기획특집</font></td>               </tr>
              <tr> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td colspan='2'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' width='1' height='8'></td>
              </tr>
            </table>");

}
Function show_menu_6(){ //메디아
echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#CCCC99'>
              <tr> 
                <td colspan='2'></td>
              </tr>
            </table>");
}

Function show_menu_7(){ //광주타임스 소개
echo("<table width='120' height='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#CCCC99'>
              
              <tr bgcolor='#CCCC99'> 
                <td width='11' rowspan='9'>&nbsp;</td>
                <td valign='bottom' bgcolor='#CCCC99'>광주타임스 소개</td>
              </tr>
              <tr> 
                <td height='4' bgcolor='#CCCC99'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td valign='bottom' bgcolor='#CCCC99'>광고안내</td>
              </tr>
              <tr> 
                <td height='4' bgcolor='#CCCC99'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td valign='bottom' bgcolor='#CCCC99'>도움말</td>
              </tr>
              <tr> 
                <td height='4' bgcolor='#CCCC99'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td valign='bottom' bgcolor='#CCCC99'>사이트맵</a></td>
              </tr>
              <tr> 
                <td height='4' bgcolor='#CCCC99'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td height='100%' bgcolor='#CCCC99'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
            </table>");


}


Function show_menu_8(){ //타임스 리빙 
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>
              <tr> 
                <td colspan='2'><a href='http://www.kjtimes.co.kr/living/index.html'><img src='http://www.kjtimes.co.kr/images_1/000_L_01.gif' width='120' height='20' border='0'></a></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/budong/index.html'>부동산</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/wanted1/index.html'>구인</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
	      <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/wanted2/index.html'>구직</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/living/index.html'>생활용품</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/computer/index.html'>컴퓨터</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
	       <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/computer/index.html'>컴퓨터부품</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#CCCCCC'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#CCCCCC'><a href='http://www.kjtimes.co.kr/living/insert.html'>매물등록</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#FFFFFF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");
}

Function show_menu_9(){ //정치 기타 
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#DEE4AF'>
              <tr> 
                <td colspan='2' ><font size=2><B>▶SECTION</B></font></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/local_story.html'>지역정가</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/marl.html'>말따로입따로</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/n_korea.html'>북한소식</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/kj.html'>광주시정</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'>기타</td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#DEE4AF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");


}


Function show_menu_10(){ //경제 기타
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#DEE4AF'>
              <tr> 
                <td colspan='2'><font size=2><B>▶SECTION</B></font></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/econo_file.html'>이코노파일</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/establish.html'>창업타임스</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/living/index.html'>타임스리빙</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/budongsan.html'>부동산</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/shopping.html'>유통소식</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#DEE4AF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");



}


Function show_menu_11(){ //사회 기타 
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#DEE4AF'>
              <tr> 
                <td colspan='2'><font size=2><B>▶SECTION</B></font></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/dongne.html'>동네방네</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/sago.html'>사건소식</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.reward.co.kr/' target=_blank>공개수배</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/law.html'>법률정보</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/medical'>의료정보</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#DEE4AF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");


}


Function show_menu_12(){ //문화 기타 
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#DEE4AF'>
              <tr> 
                <td colspan='2'><font size=2><B>▶SECTION</B></font></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/play.html'>공연안내</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/tccm.html'>교통정보</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/cul_03.html'>비엔날레</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/cul_04.html'>5.18항쟁</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/cul_05.html'>정자기행</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#DEE4AF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");

}


Function show_menu_13(){ //오피니언 기타 
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#DEE4AF'>
              <tr> 
                <td colspan='2'><font size=2><B>▶SECTION</B></font></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/sasul.html'>사설</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/colum/colum_list1.html'>칼럼</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/reporter.html'>기자현장</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'>신문고</td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/etc/reader.html'>독자투고</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#DEE4AF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");


}


Function show_menu_14(){ //지역 기타 
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#DEE4AF'>
              <tr> 
                <td colspan='2'><font size=2><B>▶SECTION</B></font>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/local/local_01_01.html'>강원</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/local/local_02_01.html'>경기/인천</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/local/local_03_01.html'>경상</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/local/local_04_01.html'>전라</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr> 
                <td width='11' bgcolor='#DEE4AF'>&nbsp;</td>
                <td width='109' valign='bottom' bgcolor='#DEE4AF'><a href='http://www.kjtimes.co.kr/local/local_05_01.html'>충청</a></td>
              </tr>
              <tr> 
                <td height='4' colspan='2' align='center' bgcolor='#DEE4AF'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#DEE4AF'> 
                <td colspan='2' height='2'>&nbsp;</td>
              </tr>
            </table>");
}







Function show_menu_15(){ //section 메인
 echo(" <table width='120' border='0' cellpadding='0' cellspacing='0' bgcolor='#666666'>
              <tr> 
                <td colspan='2'><font size=2><B>▶SECTION</B></font></td>
              </tr>
              <tr> 
                <td colspan='2' bgcolor='#CCCCCC'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' height='12'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/etc/ngo.html'>NGO캘린더</a></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/etc/human.html'>인권</a></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/etc/work.html'>노동</a></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/etc/womanpower'>여성</a></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/etc/sco.html'>환경</a></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'><a href='http://www.kjtimes.co.kr/etc/etc_06'>통일</a></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td width='11'>&nbsp;</td>
                <td width='109' valign='bottom'>단체별 
                  보기</td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td height='4' colspan='2' align='center'><img src='http://www.kjtimes.co.kr/images_1/000_L_line.gif' border='0'></td>
              </tr>
              <tr bgcolor='#CCCCCC'> 
                <td colspan='2'><img src='http://www.kjtimes.co.kr/images_1/00.gif' border='0' width='1' height='8'></td>
              </tr>
            </table>

");
}

Function show_menu_17(){ //section 테일
echo(" <table border=0 cellpadding=0 cellspacing=0 width=699>
  <tr>
    <td align=center colspan='2'>&nbsp; </td>
    <td align=center width='551'> 
      <hr noshade size='1'>
      <font size='2'>Copyright Medi Bank .co.Ltd., All Rights Reserved. <br>
      경기도 고양시 일산구 주엽동115. 대우시티플라자 616호</font><font size='2' face='Arial, Helvetica, sans-serif'><br>
      </font><font size='2'>Tel 031-922-2119 /4119, Fax 031-922-6119</font><font size='2' face='Arial, Helvetica, sans-serif'> 
      <br>
      <b><a href='mailto:medibank@medibank.co.kr'><font size='2'>medibank@medibank.co.kr 
      </font></a></b></font></td>
  
</table>");


}
 
    
Function show_menu_18(){ // 기사쓰기/검색/제보/회원가입


echo("<table width=120 border='0' cellpadding='0' cellspacing='0' bgcolor='#D3AE38'>
            <tr> 
               <td width='11'>&nbsp;</td>
                <td valign='bottom' height='17'>회원가입</td>
                <td width='11'>&nbsp;</td>
              </tr>
              <tr> 
                <td colspan='3' bgcolor='white'><img src='http://www.kjtimes.co.kr/images_1/00.gif' width='1' height='1' border='0'></td>
              </tr>
              <tr> 
                <td width='11'>&nbsp;</td>
                <td valign='bottom' height='17'><a href='http://www.kjtimes.co.kr/searchform.html'>기사검색</a></td>
                <td width='11'>&nbsp;</td>
              </tr>
              <tr> 
                <td colspan='3' bgcolor='white'><img src='http://www.kjtimes.co.kr/images_1/00.gif' width='1' height='1' border='0'></td>
              </tr>
	       <tr> 
               <td width='11'>&nbsp;</td>
                <td valign='bottom' height='17'><a href='http://www.kjtimes.co.kr/insertdata/index.html'>기사쓰기</a></td>
                <td width='11'>&nbsp;</td>
              </tr>
              <tr> 
                <td colspan='3' bgcolor='white'><img src='http://www.kjtimes.co.kr/images_1/00.gif' width='1' height='1' border='0'></td>
              </tr>
           
              <tr> 
                <td width='11'>&nbsp;</td>
                <td valign='bottom' height='17'><a href='http://www.kjtimes.co.kr/jebo/index.html'>기사제보</a></td>
                <td width='11'>&nbsp;</td>
              </tr>
            </table>");




}


?>
