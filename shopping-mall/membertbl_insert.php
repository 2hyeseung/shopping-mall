<?php
   $con = mysqli_connect("localhost", "root", "", "shopDB") or die("MySQL 접속 실패 !!");

$salt=0;
   $sql = "
  INSERT INTO membertbl VALUES
  (HEX(AES_ENCRYPT('aaa','pw')), HEX(AES_ENCRYPT('이수진','key')), SHA2('aaa111', 512),9, 4, '', '111'),
  (HEX(AES_ENCRYPT('bbb','pw')), HEX(AES_ENCRYPT('이혜승','key')), SHA2('bbb112',512), 9, 2, '', '112'),
  (HEX(AES_ENCRYPT('ccc','pw')), HEX(AES_ENCRYPT('이희연','key')), SHA2('ccc113', 512), 9, 2, '', '113'),
  (HEX(AES_ENCRYPT('ddd','pw')), HEX(AES_ENCRYPT('조은민','key')), SHA2('ddd114', 512), 9, 5, '', '114'),
  
  (HEX(AES_ENCRYPT('eee','pw')), HEX(AES_ENCRYPT('김소원','key')), SHA2('eee115', 512), 9, 8, '', '115'),
  (HEX(AES_ENCRYPT('fff','pw')), HEX(AES_ENCRYPT('박신비','key')), SHA2('fff116', 512), 9, 4, '', '116'),
  (HEX(AES_ENCRYPT('ggg','pw')), HEX(AES_ENCRYPT('반은희','key')), SHA2('ggg117', 512), 2, 5, '', '117'),
  (HEX(AES_ENCRYPT('hhh','pw')), HEX(AES_ENCRYPT('이지연','key')), SHA2('hhh134', 512), 2, 5, '', '134'),
  (HEX(AES_ENCRYPT('iii','pw')), HEX(AES_ENCRYPT('최창민','key')), SHA2('iii156', 512), 2, 8, '', '156'),
  (HEX(AES_ENCRYPT('jjj','pw')), HEX(AES_ENCRYPT('주짓수','key')), SHA2('jjj178', 512), 2, 8, '', '178'),
  (HEX(AES_ENCRYPT('kkk','pw')), HEX(AES_ENCRYPT('박장미','key')), SHA2('kkk145', 512), 2, 4, '', '145'),
  (HEX(AES_ENCRYPT('lll','pw')), HEX(AES_ENCRYPT('정지혜','key')), SHA2('lll134', 512), 7, 5, '', '134'),
  (HEX(AES_ENCRYPT('mmm','pw')), HEX(AES_ENCRYPT('전도일','key')), SHA2('mmm163', 512), 7, 5, '', '163'),
  (HEX(AES_ENCRYPT('nnn','pw')), HEX(AES_ENCRYPT('채치수','key')), SHA2('nnn234', 512), 7, 8, '', '234'),
  (HEX(AES_ENCRYPT('ooo','pw')), HEX(AES_ENCRYPT('정대만','key')), SHA2('ooo343', 512), 7, 8, '', '343'),
  (HEX(AES_ENCRYPT('ppp','pw')), HEX(AES_ENCRYPT('강백호','key')), SHA2('ppp683', 512), 7, 4, '', '683'),
  (HEX(AES_ENCRYPT('qqq','pw')), HEX(AES_ENCRYPT('서태일','key')), SHA2('qqq675', 512), 5, 5, '', '675'),
  (HEX(AES_ENCRYPT('rrr','pw')), HEX(AES_ENCRYPT('송태섭','key')), SHA2('rrr145', 512), 5, 5, '', '145'),
  (HEX(AES_ENCRYPT('sss','pw')), HEX(AES_ENCRYPT('김가예','key')), SHA2('sss343', 512), 5, 8, '', '343'),
  (HEX(AES_ENCRYPT('ttt','pw')), HEX(AES_ENCRYPT('피원빈','key')), SHA2('ttt233', 512), 5, 8, '', '233'),
  (HEX(AES_ENCRYPT('uuu','pw')), HEX(AES_ENCRYPT('박현빈','key')), SHA2('uuu167', 512), 5, 4, '', '167'),
  (HEX(AES_ENCRYPT('vvv','pw')), HEX(AES_ENCRYPT('정은지','key')), SHA2('vvv546', 512), 1, 8, '', '546'),
  (HEX(AES_ENCRYPT('www','pw')), HEX(AES_ENCRYPT('황민현','key')), SHA2('www145', 512), 1, 8, '', '145'),
  (HEX(AES_ENCRYPT('xxx','pw')), HEX(AES_ENCRYPT('강찬희','key')), SHA2('xxx093', 512), 1, 4, '', '093'),
  (HEX(AES_ENCRYPT('yyy','pw')), HEX(AES_ENCRYPT('박지연','key')), SHA2('yyy187', 512), 1, 4, '', '187'),
  (HEX(AES_ENCRYPT('zzz','pw')), HEX(AES_ENCRYPT('금강산','key')), SHA2('zzz623', 512), 1, 5, '', '623'),
  (HEX(AES_ENCRYPT('aa2','pw')), HEX(AES_ENCRYPT('이누야샤','key')), SHA2('aa2023', 512), 4, 5, '', '023'),
  (HEX(AES_ENCRYPT('bb2','pw')), HEX(AES_ENCRYPT('윤지영','key')), SHA2('bb2103', 512), 4, 8, '', '103'),
  (HEX(AES_ENCRYPT('cc2','pw')), HEX(AES_ENCRYPT('은지호','key')), SHA2('cc2129', 512), 4, 4, '', '129'),
  (HEX(AES_ENCRYPT('dd2','pw')), HEX(AES_ENCRYPT('은하수','key')), SHA2('dd2153', 512), 4, 1, '', '153'),
  (HEX(AES_ENCRYPT('ee2','pw')), HEX(AES_ENCRYPT('김지민','key')), SHA2('ee2193', 512), 4, 1, '', '193'),
  (HEX(AES_ENCRYPT('ff2','pw')), HEX(AES_ENCRYPT('위소예','key')), SHA2('ff2023', 512), 6, 8, '', '023'),
  (HEX(AES_ENCRYPT('gg2','pw')), HEX(AES_ENCRYPT('경찬미','key')), SHA2('gg2923', 512), 6, 4, '', '923'),
  (HEX(AES_ENCRYPT('hh2','pw')), HEX(AES_ENCRYPT('봉선화','key')), SHA2('hh2823', 512), 6, 1, '', '823'),
  (HEX(AES_ENCRYPT('ii2','pw')), HEX(AES_ENCRYPT('김백합','key')), SHA2('ii2788', 512), 6, 1, '', '788'),
  (HEX(AES_ENCRYPT('jj2','pw')), HEX(AES_ENCRYPT('이태민','key')), SHA2('jj2529', 512), 6, 1, '', '529'),
  (HEX(AES_ENCRYPT('kk2','pw')), HEX(AES_ENCRYPT('송강호','key')), SHA2('kk2820', 512), 3, 1, '', '820'),
  (HEX(AES_ENCRYPT('ll2','pw')), HEX(AES_ENCRYPT('백현아','key')), SHA2('ll2199', 512), 3, 1, '', '199'),
  (HEX(AES_ENCRYPT('mm2','pw')), HEX(AES_ENCRYPT('송백경','key')), SHA2('mm2888', 512), 3, 1, '', '888'),
  (HEX(AES_ENCRYPT('nn2','pw')), HEX(AES_ENCRYPT('소나무','key')), SHA2('nn2777', 512), 3, 1, '', '777'),
  (HEX(AES_ENCRYPT('oo2','pw')), HEX(AES_ENCRYPT('선우정','key')), SHA2('oo2663', 512), 3, 1, '', '663'),
  (HEX(AES_ENCRYPT('pp2','pw')), HEX(AES_ENCRYPT('배나리','key')), SHA2('pp2453', 512), 9, 4, '', '453'),
  (HEX(AES_ENCRYPT('qq2','pw')), HEX(AES_ENCRYPT('계나리','key')), SHA2('qq2783', 512), 9, 2, '', '783'),
  (HEX(AES_ENCRYPT('rr2','pw')), HEX(AES_ENCRYPT('안단테','key')), SHA2('rr2603', 512), 9, 2, '', '603'),
  (HEX(AES_ENCRYPT('ss2','pw')), HEX(AES_ENCRYPT('안채영','key')), SHA2('ss2109', 512), 9, 5, '', '109'),
  (HEX(AES_ENCRYPT('tt2','pw')), HEX(AES_ENCRYPT('한채영','key')), SHA2('tt2097', 512), 9, 5, '', '097'),
  (HEX(AES_ENCRYPT('uu2','pw')), HEX(AES_ENCRYPT('황재연','key')), SHA2('uu2093', 512), 2, 8, '', '093'),
  (HEX(AES_ENCRYPT('vv2','pw')), HEX(AES_ENCRYPT('공재훈','key')), SHA2('vv2198', 512), 2, 8, '', '198'),
  (HEX(AES_ENCRYPT('ww2','pw')), HEX(AES_ENCRYPT('성석우','key')), SHA2('ww2673', 512), 2, 8, '', '673'),
  (HEX(AES_ENCRYPT('xx2','pw')), HEX(AES_ENCRYPT('석이연','key')), SHA2('xx2473', 512), 2, 8, '', '473'),
  (HEX(AES_ENCRYPT('yy2','pw')), HEX(AES_ENCRYPT('연지애','key')), SHA2('yy2198', 512), 7, 2, '', '198'),
  (HEX(AES_ENCRYPT('zz2','pw')), HEX(AES_ENCRYPT('황미리','key')), SHA2('zz2703', 512), 7, 5, '', '703'),
  (HEX(AES_ENCRYPT('aa3','pw')), HEX(AES_ENCRYPT('가은현','key')), SHA2('aa3933', 512), 7, 4, '', '933'),
  (HEX(AES_ENCRYPT('bb3','pw')), HEX(AES_ENCRYPT('백가은','key')), SHA2('bb3533', 512), 7, 5, '', '533'),
  (HEX(AES_ENCRYPT('cc3','pw')), HEX(AES_ENCRYPT('최연지','key')), SHA2('cc3743', 512), 7, 5, '', '743'),
  (HEX(AES_ENCRYPT('dd3','pw')), HEX(AES_ENCRYPT('지창민','key')), SHA2('dd3623', 512), 5, 5, '', '623'),
  (HEX(AES_ENCRYPT('ee3','pw')), HEX(AES_ENCRYPT('주연민','key')), SHA2('ee3725', 512), 5, 5, '', '725'),
  (HEX(AES_ENCRYPT('ff3','pw')), HEX(AES_ENCRYPT('민현수','key')), SHA2('ff3234', 512), 5, 8, '', '234'),
  (HEX(AES_ENCRYPT('gg3','pw')), HEX(AES_ENCRYPT('현진영','key')), SHA2('gg3154', 512), 5, 8, '', '154'),
  (HEX(AES_ENCRYPT('hh3','pw')), HEX(AES_ENCRYPT('현진건','key')), SHA2('hh3523', 512), 5, 4, '', '523'),
  (HEX(AES_ENCRYPT('ii3','pw')), HEX(AES_ENCRYPT('이상','key')), SHA2('ii3563', 512), 1, 5, '', '563'),
  (HEX(AES_ENCRYPT('jj3','pw')), HEX(AES_ENCRYPT('상은','key')), SHA2('jj3163', 512), 1, 8, '', '163'),
  (HEX(AES_ENCRYPT('kk3','pw')), HEX(AES_ENCRYPT('이지혜','key')), SHA2('kk3173', 512), 1, 8, '', '173'),
  (HEX(AES_ENCRYPT('ll3','pw')), HEX(AES_ENCRYPT('박유아','key')), SHA2('ll3623', 512), 1, 1, '', '623'),
  (HEX(AES_ENCRYPT('mm3','pw')), HEX(AES_ENCRYPT('최아린','key')), SHA2('mm3773', 512), 1, 4, '', '773'),
  (HEX(AES_ENCRYPT('nn3','pw')), HEX(AES_ENCRYPT('손예진','key')), SHA2('nn3777', 512), 4, 8, '', '777'),
  (HEX(AES_ENCRYPT('oo3','pw')), HEX(AES_ENCRYPT('제예은','key')), SHA2('oo3753', 512), 4, 4, '', '753'),
  (HEX(AES_ENCRYPT('pp3','pw')), HEX(AES_ENCRYPT('박승희','key')), SHA2('pp3463', 512), 4, 1, '', '463'),
  (HEX(AES_ENCRYPT('qq3','pw')), HEX(AES_ENCRYPT('최태연','key')), SHA2('qq3423', 512), 4, 1, '', '423'),
  (HEX(AES_ENCRYPT('rr3','pw')), HEX(AES_ENCRYPT('박승택','key')), SHA2('rr3523', 512), 4, 4, '', '523'),
  (HEX(AES_ENCRYPT('ss3','pw')), HEX(AES_ENCRYPT('유재석','key')), SHA2('ss3163', 512), 6, 1, '', '163'),
  (HEX(AES_ENCRYPT('tt3','pw')), HEX(AES_ENCRYPT('유지연','key')), SHA2('tt3133', 512), 6, 1, '', '133'),
  (HEX(AES_ENCRYPT('uu3','pw')), HEX(AES_ENCRYPT('이아리','key')), SHA2('uu3323', 512), 6, 4, '', '323'),
  (HEX(AES_ENCRYPT('vv3','pw')), HEX(AES_ENCRYPT('강지현','key')), SHA2('vv3523', 512), 6, 1, '', '523'),
  (HEX(AES_ENCRYPT('ww3','pw')), HEX(AES_ENCRYPT('강하나','key')), SHA2('ww3623', 512), 6, 4, '', '623'),
  (HEX(AES_ENCRYPT('xx3','pw')), HEX(AES_ENCRYPT('김하나','key')), SHA2('xx3823', 512), 3, 1, '', '823'),
  (HEX(AES_ENCRYPT('yy3','pw')), HEX(AES_ENCRYPT('박하나','key')), SHA2('yy3623', 512), 3, 1, '', '623'),
  (HEX(AES_ENCRYPT('zz3','pw')), HEX(AES_ENCRYPT('차두리','key')), SHA2('zz3153', 512), 3, 1, '', '153'),
  (HEX(AES_ENCRYPT('aa4','pw')), HEX(AES_ENCRYPT('박지성','key')), SHA2('aa4133', 512), 3, 1, '', '133'),
  (HEX(AES_ENCRYPT('bb4','pw')), HEX(AES_ENCRYPT('손흥민','key')), SHA2('bb4233', 512), 9, 2, '', '223'),
  (HEX(AES_ENCRYPT('cc4','pw')), HEX(AES_ENCRYPT('황미미','key')), SHA2('cc4523', 512), 9, 5, '', '523'),
  (HEX(AES_ENCRYPT('dd4','pw')), HEX(AES_ENCRYPT('고승현','key')), SHA2('dd4323', 512), 9, 8, '', '323'),
  (HEX(AES_ENCRYPT('ee4','pw')), HEX(AES_ENCRYPT('고라파덕','key')), SHA2('ee4723', 512), 9, 8, '', '723'),
  (HEX(AES_ENCRYPT('ff4','pw')), HEX(AES_ENCRYPT('피카츄','key')), SHA2('ff4167', 512), 9, 6, '', '167'),
  (HEX(AES_ENCRYPT('gg4','pw')), HEX(AES_ENCRYPT('표켓몬','key')), SHA2('gg4527', 512), 7, 6, '', '527'),
  (HEX(AES_ENCRYPT('hh4','pw')), HEX(AES_ENCRYPT('표지표','key')), SHA2('hh4177', 512), 7, 5, '', '177'),
  (HEX(AES_ENCRYPT('ii4','pw')), HEX(AES_ENCRYPT('김이박','key')), SHA2('ii4166', 512), 7, 8, '', '166'),
  (HEX(AES_ENCRYPT('jj4','pw')), HEX(AES_ENCRYPT('박이김','key')), SHA2('jj4188', 512), 7, 4, '', '188'),
  (HEX(AES_ENCRYPT('kk4','pw')), HEX(AES_ENCRYPT('손지민','key')), SHA2('kk4155', 512), 7, 2, '', '155'),
  (HEX(AES_ENCRYPT('ll4','pw')), HEX(AES_ENCRYPT('손현지','key')), SHA2('ll4144', 512), 2, 2, '', '144'),
  (HEX(AES_ENCRYPT('mm4','pw')), HEX(AES_ENCRYPT('정녹두','key')), SHA2('mm4133', 512), 2, 8, '', '133'),
  (HEX(AES_ENCRYPT('nn4','pw')), HEX(AES_ENCRYPT('전녹두','key')), SHA2('nn4155', 512), 2, 1, '', '155'),
  (HEX(AES_ENCRYPT('oo4','pw')), HEX(AES_ENCRYPT('도지민','key')), SHA2('oo4199', 512), 2, 4, '', '199'),
  (HEX(AES_ENCRYPT('pp4','pw')), HEX(AES_ENCRYPT('도도새','key')), SHA2('pp4100', 512), 2, 1, '', '100'),
  (HEX(AES_ENCRYPT('qq4','pw')), HEX(AES_ENCRYPT('박효정','key')), SHA2('qq4199', 512), 1, 1, '', '199'),
  (HEX(AES_ENCRYPT('rr4','pw')), HEX(AES_ENCRYPT('도전해','key')), SHA2('rr4188', 512), 1, 5, '', '188'),
  (HEX(AES_ENCRYPT('ss4','pw')), HEX(AES_ENCRYPT('이규빈','key')), SHA2('ss4177', 512), 1, 8, '', '177'),
  (HEX(AES_ENCRYPT('tt4','pw')), HEX(AES_ENCRYPT('이규진','key')), SHA2('tt4166', 512), 1, 4, '', '166'),
  (HEX(AES_ENCRYPT('uu4','pw')), HEX(AES_ENCRYPT('견미리','key')), SHA2('uu4155', 512), 1, 4, '', '155'),
  (HEX(AES_ENCRYPT('vv4','pw')), HEX(AES_ENCRYPT('견훤전','key')), SHA2('vv4177', 512), 4, 5, '', '177'),
  (HEX(AES_ENCRYPT('ww4','pw')), HEX(AES_ENCRYPT('박떙땡','key')), SHA2('ww4523', 512), 4, 8, '', '523'),
  (HEX(AES_ENCRYPT('xx4','pw')), HEX(AES_ENCRYPT('박야옹','key')), SHA2('xx4553', 512), 4, 4, '', '553'),
  (HEX(AES_ENCRYPT('yy4','pw')), HEX(AES_ENCRYPT('정멍멍','key')), SHA2('yy4553', 512), 4, 8, '', '553'),
  (HEX(AES_ENCRYPT('zz4','pw')), HEX(AES_ENCRYPT('백왈왈','key')), SHA2('zz4663', 512), 4, 1, '', '663'),
  (HEX(AES_ENCRYPT('aa5','pw')), HEX(AES_ENCRYPT('한우','key')), SHA2('aa5883', 512), 6, 1, '', '883'),
  (HEX(AES_ENCRYPT('bb5','pw')), HEX(AES_ENCRYPT('한가람','key')), SHA2('bb5773', 512), 6, 8, '', '773'),
  (HEX(AES_ENCRYPT('cc5','pw')), HEX(AES_ENCRYPT('이푸름','key')), SHA2('cc5663', 512), 6, 4, '', '663'),
  (HEX(AES_ENCRYPT('dd5','pw')), HEX(AES_ENCRYPT('전혜빈','key')), SHA2('dd5553', 512), 6, 1, '', '553'),
  (HEX(AES_ENCRYPT('ee5','pw')), HEX(AES_ENCRYPT('전진자라','key')), SHA2('ee5663', 512), 3, 1, '', '663'),
  (HEX(AES_ENCRYPT('ff5','pw')), HEX(AES_ENCRYPT('김애옹','key')), SHA2('ff5443', 512), 3, 1, '', '443'),
  (HEX(AES_ENCRYPT('gg5','pw')), HEX(AES_ENCRYPT('김끝끝','key')), SHA2('gg5553', 512), 3, 1, '', '553')
   ";
   
 
   $ret = mysqli_query($con, $sql);
 
 
   if($ret) {
    echo "데이터 입력 성공";
   }
   else {
    echo "데이터 입력 실패"."<br>";
    echo "실패 원인 :".mysqli_error($con);
   };
 
   mysqli_close($con);
?>
