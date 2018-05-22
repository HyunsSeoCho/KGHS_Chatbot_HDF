<?php
function cal($req)
{
  $init = date("m");
  $month = intval($init) + intval($req);
  if ( $month > 12 ) {
    $month = intval($month) - intval(12);
  }
  if ( $month == 3 ) {
    $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: \\n";
    $cal[31] = "" . $month . "월 31일: ";
  }
  else if ( $month == 4 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: ";
    $cal[31] = ""; //4월은 30일이니까 공백
  }
  else if ( $month == 5 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: 중간고사\\n";
    $cal[2] = "" . $month . "월 2일: 교내 생태사진대회\\n";
    $cal[3] = "" . $month . "월 3일: STEAM 1기 (1)\\n";
    $cal[4] = "" . $month . "월 4일: 토론대회 입론서 제출\\n";
    $cal[5] = "" . $month . "월 5일: 어린이날\\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: 대체공휴일\\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: 소규모테마형교육여행 (2)\\n";
    $cal[10] = "" . $month . "월 10일: 소규모테마형교육여행 (2) / 봉사활동(2)\\n";
    $cal[11] = "" . $month . "월 11일: 소규모테마형교육여행 (2) / 봉사활동 (1, 3)\\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: 과학 토론대회 / 교과협의회\\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: 토론대회\\n";
    $cal[17] = "" . $month . "월 17일: 학생회장단 후보 정책토론회 / STEAM 1기 (2)\\n";
    $cal[18] = "" . $month . "월 18일: 학생회 회장단 선거 / 과학탐구토론 결선\\n";
    $cal[19] = "" . $month . "월 19일: 창의인재 1기 (1)\\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: 재량휴업일\\n";
    $cal[22] = "" . $month . "월 22일: 부처님오신날\\n";
    $cal[23] = "" . $month . "월 23일: 영어경시대회\\n";
    $cal[24] = "" . $month . "월 24일: 멘토멘티결연식 / STEAM 1기(3)\\n";
    $cal[25] = "" . $month . "월 25일: 학급별 봉사활동 (1, 2, 3)\\n";
    $cal[26] = "" . $month . "월 26일: 창의인재 1기 (2)\\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: 수학경시대회 (3) / 미술경시대회\\n";
    $cal[29] = "" . $month . "월 29일: 자유인문화인평화인 글짓기 대회\\n";
    $cal[30] = "" . $month . "월 30일: 창의력대회\\n";
    $cal[31] = "" . $month . "월 31일: STEAM1기 (4)";
  }
  else if ( $month == 6 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: 학부모직업특강(1) / 진로탐색(2)\\n";
    $cal[2] = "" . $month . "월 2일: 창의인재1기(3)\\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: 과학경시대회(3)\\n";
    $cal[5] = "" . $month . "월 5일: 민관식배마라톤대회 (1, 2, 3)\\n";
    $cal[6] = "" . $month . "월 6일: 현충일\\n";
    $cal[7] = "" . $month . "월 7일: 대수능모의평가 (3) / STEAM 1기 (5)\\n";
    $cal[8] = "" . $month . "월 8일: 대학입시설명회 (3)\\n";
    $cal[9] = "" . $month . "월 9일: 창의인재 1기 (4)\\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: 교과협의회 / 창의독서발표대회 / 수학TED강연제출마감\\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: 2018년 지방선거\\n";
    $cal[14] = "" . $month . "월 14일: STEAM1기 (6) / 논술대회\\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: 창의인재 1기 (5)\\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: 학업성취도평가 (2)\\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: 2학기 학급임원 선출\\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: ";
    $cal[31] = ""; //6월은 30일이니까 공백
  }
  else if ( $month == 7 ) {
    $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: 기말고사 (1, 2, 3)\\n";
    $cal[4] = "" . $month . "월 4일: 기말고사 (1, 2, 3)\\n";
    $cal[5] = "" . $month . "월 5일: 기말고사 (1, 2, 3)\\n";
    $cal[6] = "" . $month . "월 6일: 기말고사 (1, 2, 3)\\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: 기말고사 (1, 2, 3)\\n";
    $cal[10] = "" . $month . "월 10일: ★ 경기컵 ★ 영어말하기대회\\n";
    $cal[11] = "" . $month . "월 11일: ★ 경기컵 ★ 학력평가 (3)\\n";
    $cal[12] = "" . $month . "월 12일: ★ 경기컵 ★ 저자와의 만남 / 수학TED강연발표\\n";
    $cal[13] = "" . $month . "월 13일: ★ 경기컵 ★ 사회참여발표대회신청마감 / 2학기 간부수련회\\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: ★ 경기컵 ★ 컴퓨터 활용대회\\n";
    $cal[17] = "" . $month . "월 17일: ★ 경기컵 ★ 수학캠프 / 논리적 글쓰기 특강\\n";
    $cal[18] = "" . $month . "월 18일: 수학캠프\\n";
    $cal[19] = "" . $month . "월 19일: 방학식\\n";
    $cal[20] = "" . $month . "월 20일: STEAM 전공심화캠프\\n";
    $cal[21] = "" . $month . "월 21일: STEAM 전공심화캠프\\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: \\n";
    $cal[31] = "" . $month . "월 31일: ";
  }
  else if ( $month == 8 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: 개학식 \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: ★ 화동제준비 ★\\n";
    $cal[18] = "" . $month . "월 18일: ★★★★ 화동제 ★★★★\\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: 교과협의회, 창의융합과제연구 보고서 제출\\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: 경제경시대회\\n";
    $cal[24] = "" . $month . "월 24일: 캘리그라피컨테스트\\n";
    $cal[25] = "" . $month . "월 25일: 융합인재 2기 (1)\\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: 사회참여발표대회\\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: 창의융합과제연구 발표대회 \\n";
    $cal[31] = "" . $month . "월 31일: 진로탐색 (3)";
  }
  else if ( $month == 9 ) {
    $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: ";
  $cal[31] = ""; //9월은 30일이니까 공백
  }
  else if ( $month == 10 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: \\n";
    $cal[31] = "" . $month . "월 31일: ";
  }
  else if ( $month == 11 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: ";
    $cal[31] = ""; //11월은 30일이니까 공백
  }
  else if ( $month == 12 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: \\n";
    $cal[31] = "" . $month . "월 31일: ";
  }
  else if ( $month == 1 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: \\n";
    $cal[29] = "" . $month . "월 29일: \\n";
    $cal[30] = "" . $month . "월 30일: \\n";
    $cal[31] = "" . $month . "월 31일: ";
  }
  else if ( $month == 2 ) {
        $cal[0] = "<경기고등학교 " . $month . "월 학사일정> \\n\\n";//날짜 맞추려고 공백. 여기에 입력된 데이터는 출력되지 않음
    $cal[1] = "" . $month . "월 1일: \\n";
    $cal[2] = "" . $month . "월 2일: \\n";
    $cal[3] = "" . $month . "월 3일: \\n";
    $cal[4] = "" . $month . "월 4일: \\n";
    $cal[5] = "" . $month . "월 5일: \\n";
    $cal[6] = "" . $month . "월 6일: \\n";
    $cal[7] = "" . $month . "월 7일: \\n";
    $cal[8] = "" . $month . "월 8일: \\n";
    $cal[9] = "" . $month . "월 9일: \\n";
    $cal[10] = "" . $month . "월 10일: \\n";
    $cal[11] = "" . $month . "월 11일: \\n";
    $cal[12] = "" . $month . "월 12일: \\n";
    $cal[13] = "" . $month . "월 13일: \\n";
    $cal[14] = "" . $month . "월 14일: \\n";
    $cal[15] = "" . $month . "월 15일: \\n";
    $cal[16] = "" . $month . "월 16일: \\n";
    $cal[17] = "" . $month . "월 17일: \\n";
    $cal[18] = "" . $month . "월 18일: \\n";
    $cal[19] = "" . $month . "월 19일: \\n";
    $cal[20] = "" . $month . "월 20일: \\n";
    $cal[21] = "" . $month . "월 21일: \\n";
    $cal[22] = "" . $month . "월 22일: \\n";
    $cal[23] = "" . $month . "월 23일: \\n";
    $cal[24] = "" . $month . "월 24일: \\n";
    $cal[25] = "" . $month . "월 25일: \\n";
    $cal[26] = "" . $month . "월 26일: \\n";
    $cal[27] = "" . $month . "월 27일: \\n";
    $cal[28] = "" . $month . "월 28일: ";
    $cal[29] = ""; //2월 29일까지 있는 경우 추가바람. 이하공백.
    $cal[30] = "";
    $cal[31] = "";
  }
  else {
    $cal[0] = "에러가 발생했습니다. ";
    $cal[1] = "";
    $cal[2] = "";
    $cal[3] = "";
    $cal[4] = "";
    $cal[5] = "";
    $cal[6] = "";
    $cal[7] = "";
    $cal[8] = "";
    $cal[9] = "";
    $cal[10] = "";
    $cal[11] = "";
    $cal[12] = "";
    $cal[13] = "";
    $cal[14] = "";
    $cal[15] = "";
    $cal[16] = "";
    $cal[17] = "";
    $cal[18] = "";
    $cal[19] = "";
    $cal[20] = "";
    $cal[21] = "";
    $cal[22] = "";
    $cal[23] = "";
    $cal[24] = "";
    $cal[25] = "";
    $cal[26] = "";
    $cal[27] = "";
    $cal[28] = "";
    $cal[29] = "";
    $cal[30] = "";
    $cal[31] = "";
  }
  return $cal;
}
?>
