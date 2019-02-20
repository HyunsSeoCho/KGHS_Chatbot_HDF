<?php
function cal($req)
{
  $init = date("W");
  $week = intval($init) + intval($req);
  if ( $week > 52 ) {
    $week = intval($week) - intval(52);
  }
  if($week==9){
    $cal[1] = "3월 1일: 삼일절\\n";
    $cal[2] = "3월 2일: \\n";
    $cal[3] = "3월 3일: \\n";
  } if($week==10){
    $cal[4] = "3월 4일: 입학식 (1) / 시업식 (2,3)\\n";
    $cal[5] = "3월 5일: 대면식 (1,2,3)\\n";
    $cal[6] = "3월 6일: \\n";
    $cal[7] = "3월 7일: 학력평가 (1,2,3)\\n";
    $cal[8] = "3월 8일: 학급임원 선출\\n";
    $cal[9] = "3월 9일: \\n";
    $cal[10] = "3월 10일: \\n";
  } if($week==11){
    $cal[11] = "3월 11일: \\n";
    $cal[12] = "3월 12일: \\n";
    $cal[13] = "3월 13일: 학급환경미화\\n";
    $cal[14] = "3월 14일: 학부모총회 / 과중반 학부모OT / pi-day 행사\\n";
    $cal[15] = "3월 15일: 간부수련회 / 창의융합과제연구 OT\\n";
    $cal[16] = "3월 16일: 융합인재1기 (1)\\n";
    $cal[17] = "3월 17일: \\n";
  } if($week==12){
    $cal[18] = "3월 18일: \\n";
    $cal[19] = "3월 19일: \\n";
    $cal[20] = "3월 20일: \\n";
    $cal[21] = "3월 21일: \\n";
    $cal[22] = "3월 22일: 진로탐색 (1,2)\\n";
    $cal[23] = "3월 23일: 융합인재1기 (2)\\n";
    $cal[24] = "3월 24일: \\n";
  } if($week==13){
    $cal[25] = "3월 25일: 과학포스터대회 / 123책읽기운동 (2)\\n";
    $cal[26] = "3월 26일: 독서멘토링 신청마감\\n";
    $cal[27] = "3월 27일: \\n";
    $cal[28] = "3월 28일: \\n";
    $cal[29] = "3월 29일: 동아리 편성 / 창의융합과제연구 계획서제출\\n";
    $cal[30] = "3월 30일: 융합인재1기 (3) / 대학 전공학과 설명\\n";
    $cal[31] = "3월 31일: ";
  } if($week==14){
    $cal[1] = "4월 1일: 수업공개및수업컨설팅 / 상담주간\\n";
    $cal[2] = "4월 2일: 인권교육의 날, 발명품대회 작품제출 마감 / 상담주간\\n";
    $cal[3] = "4월 3일: 상담주간\\n";
    $cal[4] = "4월 4일: 상담주간\\n";
    $cal[5] = "4월 5일: 과학토론대회 개요서 제출 / 상담주간\\n";
    $cal[6] = "4월 6일: 융합인재1기 (4)\\n";
    $cal[7] = "4월 7일: \\n";
  } if($week==15){
    $cal[8] = "4월 8일: 과학창의력대회 교과서 제출 / 논리적 글쓰기 특강\\n";
    $cal[9] = "4월 9일: \\n";
    $cal[10] = "4월 10일: 학력평가 (3)\\n";
    $cal[11] = "4월 11일: \\n";
    $cal[12] = "4월 12일: 창의융합과제연구 2차계획서 제출\\n";
    $cal[13] = "4월 13일: \\n";
    $cal[14] = "4월 14일: \\n";
  } if($week==16){
    $cal[15] = "4월 15일: 지리경시대회\\n";
    $cal[16] = "4월 16일: \\n";
    $cal[17] = "4월 17일: \\n";
    $cal[18] = "4월 18일: \\n";
    $cal[19] = "4월 19일: 4.19 기념행사\\n";
    $cal[20] = "4월 20일: \\n";
    $cal[21] = "4월 21일: \\n";
  } if($week==17){
    $cal[22] = "4월 22일: \\n";
    $cal[23] = "4월 23일: \\n";
    $cal[24] = "4월 24일: \\n";
    $cal[25] = "4월 25일: 중간고사 (1,2,3)\\n";
    $cal[26] = "4월 26일: 중간고사 (1,2,3)\\n";
    $cal[27] = "4월 27일: \\n";
    $cal[28] = "4월 28일: \\n";
  } if($week==18){
    $cal[29] = "4월 29일: 중간고사 (1,2,3)\\n";
    $cal[30] = "4월 30일: 중간고사 (1,2,3) / 토론대회 논제발표";
    $cal[1] = "5월 1일: 중간고사 (1,2,3)";
    $cal[2] = "5월 2일: STEAM 1기 (1)\\n";
    $cal[3] = "5월 3일: 교내 생태사진대회 / 토론대회 입론서 제출\\n";
    $cal[4] = "5월 4일: \\n";
    $cal[5] = "5월 5일: 어린이날\\n";
  } if($week==19){
    $cal[6] = "5월 6일: 대체공휴일\\n";
    $cal[7] = "5월 7일: \\n";
    $cal[8] = "5월 8일: ★ 소규모테마형교육여행 (2) ★\\n";
    $cal[9] = "5월 9일: ★ 소규모테마형교육여행 (2) ★ / 봉사활동(2)\\n";
    $cal[10] = "5월 10일: ★ 소규모테마형교육여행 (2) ★ / 봉사활동 (1, 3)\\n";
    $cal[11] = "5월 11일: \\n";
    $cal[12] = "5월 12일: \\n";
  } if($week==20){
    $cal[13] = "5월 13일: 과학 토론대회 / 교과협의회\\n";
    $cal[14] = "5월 14일: 토론대회\n";
    $cal[15] = "5월 15일: 스승의 날\\n";
    $cal[16] = "5월 16일: 학생회장단 후보 정책토론회 / STEAM 1기 (2)\\n";
    $cal[17] = "5월 17일: 학생회 회장단 선거 / 과학탐구토론 결선\\n";
    $cal[18] = "5월 18일: 창의인재 1기 (1)\\n";
    $cal[19] = "5월 19일: \\n";
  } if($week==21){
    $cal[20] = "5월 20일: 화동제포스터 마감, 미술경시대회\\n";
    $cal[21] = "5월 21일: \\n";
    $cal[22] = "5월 22일: 영어경시대회\\n";
    $cal[23] = "5월 23일: 멘토멘티결연식 / STEAM 1기(3)\\n";
    $cal[24] = "5월 24일: \\n";
    $cal[25] = "5월 25일: 창의인재 1기 (2)\\n";
    $cal[26] = "5월 26일: \\n";
  } if($week==22){
    $cal[27] = "5월 27일: 수학경시대회 (3)\\n";
    $cal[28] = "5월 28일: 자유인문화인평화인 글짓기 대회\\n";
    $cal[29] = "5월 29일: 창의력대회\\n";
    $cal[30] = "5월 30일: STEAM1기 (4)\\n";
    $cal[31] = "5월 31일: 진로탐색(2)";
    $cal[1] = "6월 1일: 창의인재1기(3)\\n";
    $cal[2] = "6월 2일: \\n";
  } if($week==23){
    $cal[3] = "6월 3일: 과학경시대회(3)\\n";
    $cal[4] = "6월 4일: 대수능모의평가 (3)\\n";
    $cal[5] = "6월 5일: 민관식배마라톤대회 (1, 2, 3)\\n";
    $cal[6] = "6월 6일: 현충일\\n";
    $cal[7] = "6월 7일: 재량휴업일\\n";
    $cal[8] = "6월 8일: \\n";
    $cal[9] = "6월 9일: \\n";
  } if($week==24){
    $cal[10] = "6월 10일: 교과협의회 / 저자와의 만남 / 수학TED강연제출마감\\n";
    $cal[11] = "6월 11일: \\n";
    $cal[12] = "6월 12일: STEAM1기 (5)\\n";
    $cal[13] = "6월 13일: STEAM1기 (6)\\n";
    $cal[14] = "6월 14일: 대학입시설명회 (3)\\n";
    $cal[15] = "6월 15일: 창의인재 1기 (4)\\n";
    $cal[16] = "6월 16일: \\n";
  } if($week==25){
    $cal[17] = "6월 17일: 독서탐구 제출 마감\\n";
    $cal[18] = "6월 18일: \\n";
    $cal[19] = "6월 19일: 논술대회\\n";
    $cal[20] = "6월 20일: \\n";
    $cal[21] = "6월 21일: \\n";
    $cal[22] = "6월 22일: 창의인재 1기 (5)\\n";
    $cal[23] = "6월 23일: \\n";
  } if($week==26){
    $cal[24] = "6월 24일: \\n";
    $cal[25] = "6월 25일: \\n";
    $cal[26] = "6월 26일: \\n";
    $cal[27] = "6월 27일: \\n";
    $cal[28] = "6월 28일: 2학기 학급임원 선출\\n";
    $cal[29] = "6월 29일: \\n";
    $cal[30] = "6월 30일: ";
  } if($week==27){
    $cal[1] = "7월 1일: \\n";
    $cal[2] = "7월 2일: 기말고사 (1, 2, 3)\\n";
    $cal[3] = "7월 3일: 기말고사 (1, 2, 3)\\n";
    $cal[4] = "7월 4일: 기말고사 (1, 2, 3)\\n";
    $cal[5] = "7월 5일: 기말고사 (1, 2, 3)\\n";
    $cal[6] = "7월 6일: \\n";
    $cal[7] = "7월 7일: \\n";
  } if($week==28){
    $cal[8] = "7월 8일: 기말고사 (1, 2, 3)\\n";
    $cal[9] = "7월 9일: ★ 경기컵 ★ 영어말하기대회\\n";
    $cal[10] = "7월 10일: 학력평가 (3)\\n";
    $cal[11] = "7월 11일: ★ 경기컵 ★ 수학TED강연발표\\n";
    $cal[12] = "7월 12일: ★ 경기컵 ★ 사회참여발표대회신청마감 / 2학기 간부수련회\\n";
    $cal[13] = "7월 13일: \\n";
    $cal[14] = "7월 14일: \\n";
  } if($week==29){
    $cal[15] = "7월 15일: ★ 경기컵 ★ 컴퓨터 활용대회\\n";
    $cal[16] = "7월 16일: ★ 경기컵 ★ 수학캠프\n";
    $cal[17] = "7월 17일: 수학캠프\\n";
    $cal[18] = "7월 18일: 방학식\\n";
    $cal[19] = "7월 19일: STEAM 전공심화캠프\\n";
    $cal[20] = "7월 20일: STEAM 전공심화캠프\\n";
    $cal[21] = "7월 21일: \\n";
  } if($week==30){
    $cal[22] = "7월 22일: \\n";
    $cal[23] = "7월 23일: \\n";
    $cal[24] = "7월 24일: \\n";
    $cal[25] = "7월 25일: \\n";
    $cal[26] = "7월 26일: \\n";
    $cal[27] = "7월 27일: \\n";
    $cal[28] = "7월 28일: \\n";
  } if($week==31){
    $cal[29] = "7월 29일: \\n";
    $cal[30] = "7월 30일: \\n";
    $cal[31] = "7월 31일: ";
    $cal[1] = "8월 1일: \\n";
    $cal[2] = "8월 2일: \\n";
    $cal[3] = "8월 3일: \\n";
    $cal[4] = "8월 4일: \\n";
  } if($week==32){
    $cal[5] = "8월 5일: \\n";
    $cal[6] = "8월 6일: \\n";
    $cal[7] = "8월 7일: \\n";
    $cal[8] = "8월 8일: \\n";
    $cal[9] = "8월 9일: \\n";
    $cal[10] = "8월 10일: \\n";
    $cal[11] = "8월 11일: \\n";
  } if($week==33){
    $cal[12] = "8월 12일: 개학식\\n";
    $cal[13] = "8월 13일: \\n";
    $cal[14] = "8월 14일: \\n";
    $cal[15] = "8월 15일: 광복절\\n";
    $cal[16] = "8월 16일: ★ 화동제준비 ★\\n";
    $cal[17] = "8월 17일: ★★★★ 화동제 ★★★★\\n";
    $cal[18] = "8월 18일: \\n";
  } if($week==34){
    $cal[19] = "8월 19일: 자율휴업일\\n";
    $cal[20] = "8월 20일: 창의융합과제연구 보고서 제출\\n";
    $cal[21] = "8월 21일: \\n";
    $cal[22] = "8월 22일: 경제경시대회\\n";
    $cal[23] = "8월 23일: \\n";
    $cal[24] = "8월 24일: 융합인재 2기 (1)\\n";
    $cal[25] = "8월 25일: \\n";
  } if($week==35){
    $cal[26] = "8월 26일: 사회참여발표대회\\n";
    $cal[27] = "8월 27일: \\n";
    $cal[28] = "8월 28일: \\n";
    $cal[29] = "8월 29일: \\n";
    $cal[30] = "8월 30일: 창의융합과제연구 발표대회\\n";
    $cal[31] = "8월 31일: 융합인재 2기 (2)";
    $cal[1] = "9월 1일: \\n";
  } if($week==36){
    $cal[2] = "9월 2일: 교과협의회\\n";
    $cal[3] = "9월 3일: \\n";
    $cal[4] = "9월 4일: 대수능모의평가(3), 학력평가 (1,2)\\n";
    $cal[5] = "9월 5일: \\n";
    $cal[6] = "9월 6일: 심폐소생술교육\\n";
    $cal[7] = "9월 7일: 융합인재2기(3)\\n";
    $cal[8] = "9월 8일: \\n";
  } if($week==37){
    $cal[9] = "9월 9일: \\n";
    $cal[10] = "9월 10일: \\n";
    $cal[11] = "9월 11일: \\n";
    $cal[12] = "9월 12일: 추석연휴\\n";
    $cal[13] = "9월 13일: 추석\\n";
    $cal[14] = "9월 14일: 추석연휴\\n";
    $cal[15] = "9월 15일: \\n";
  } if($week==38){
    $cal[16] = "9월 16일: \\n";
    $cal[17] = "9월 17일: \\n";
    $cal[18] = "9월 18일: \\n";
    $cal[19] = "9월 19일: \\n";
    $cal[20] = "9월 20일: 심폐소생술교육\\n";
    $cal[21] = "9월 21일: \\n";
    $cal[22] = "9월 22일: \\n";
  } if($week==39){
    $cal[23] = "9월 23일: \\n";
    $cal[24] = "9월 24일: 중간고사(1,2,3)\\n";
    $cal[25] = "9월 25일: 중간고사(1,2,3)\\n";
    $cal[26] = "9월 26일: 중간고사(1,2,3)\\n";
    $cal[27] = "9월 27일: 중간고사(1,2,3)\\n";
    $cal[28] = "9월 28일: \\n";
    $cal[29] = "9월 29일: \\n";
  } if($week==40){
    $cal[30] = "9월 30일:  중간고사(1,2,3)";
    $cal[1] = "10월 1일: \\n";
    $cal[2] = "10월 2일: 개교기념식\\n";
    $cal[3] = "10월 3일: 개천절\\n";
    $cal[4] = "10월 4일: 재량휴업일\\n";
    $cal[5] = "10월 5일: \\n";
    $cal[6] = "10월 6일: \\n";
  } if($week==41){
    $cal[7] = "10월 7일: 교과협의회 / 인문학특강\\n";
    $cal[8] = "10월 8일: \\n";
    $cal[9] = "10월 9일: 한글날\\n";
    $cal[10] = "10월 10일: STEAM2기(1)\\n";
    $cal[11] = "10월 11일: \\n";
    $cal[12] = "10월 12일: \\n";
    $cal[13] = "10월 13일: \\n";
  } if($week==42){
    $cal[14] = "10월 14일: 수업공개및수업컨설팅 / 상담주간 (~19) / 123 책읽기운동 (1)\\n";
    $cal[15] = "10월 15일: 학력평가(3)\\n";
    $cal[16] = "10월 16일: 독서퀴즈대회\\n";
    $cal[17] = "10월 17일: STEAM2기(2)\\n";
    $cal[18] = "10월 18일: \\n";
    $cal[19] = "10월 19일: 창의인재2기 (1)\\n";
    $cal[20] = "10월 20일: \\n";
  } if($week==43){
    $cal[21] = "10월 21일: 이공계동아리활동 발표대회\\n";
    $cal[22] = "10월 22일: \\n";
    $cal[23] = "10월 23일: \\n";
    $cal[24] = "10월 24일: STEAM2기 (3)\\n";
    $cal[25] = "10월 25일: \\n";
    $cal[26] = "10월 26일: 창의인재2기 (2)\\n";
    $cal[27] = "10월 27일: \\n";
  } if($week==44){
    $cal[28] = "10월 28일: 진로진학역량발표대회, 수학UCC마감\\n";
    $cal[29] = "10월 29일: 진로진학역량발표대회\\n";
    $cal[30] = "10월 30일: \\n";
    $cal[31] = "10월 31일: STEAM2기 (4)";
    $cal[1] = "11월 1일: 진로탐색 (1)\\n";
    $cal[2] = "11월 2일: 창의인재2기 (3) / 송암스페이스견학\\n";
    $cal[3] = "11월 3일: \\n";
  } if($week==45){
    $cal[4] = "11월 4일: 수학경시대회 (1,2) / 교과협의회\\n";
    $cal[5] = "11월 5일: \\n";
    $cal[6] = "11월 6일: STEAM2기 (5)\\n";
    $cal[7] = "11월 7일: STEAM2기 (6)\\n";
    $cal[8] = "11월 8일: 진로탐색 (2)\\n";
    $cal[9] = "11월 9일: 창의인재2기 (4)\\n";
    $cal[10] = "11월 10일: \\n";
  } if($week==46){
    $cal[11] = "11월 11일: 협력적창의독서발표대회\\n";
    $cal[12] = "11월 12일: \\n";
    $cal[13] = "11월 13일: 수능예비소집일\\n";
    $cal[14] = "11월 14일: ★ 대학수학능력시험 ★\\n";
    $cal[15] = "11월 15일: 과학중점 결원 충원 신청 마감\\n";
    $cal[16] = "11월 16일: 창의인재2기 (5)\\n";
    $cal[17] = "11월 17일: \\n";
  } if($week==47){
    $cal[18] = "11월 18일: 과학경시대회 (1,2)\\n";
    $cal[19] = "11월 19일: 기말고사 (3)\\n";
    $cal[20] = "11월 20일: 기말고사 (3) / 학력평가 (1,2)\\n";
    $cal[21] = "11월 21일: 기말고사 (3)\\n";
    $cal[22] = "11월 22일: 기말고사 (3)\\n";
    $cal[23] = "11월 23일: \\n";
    $cal[24] = "11월 24일: \\n";
  } if($week==48){
    $cal[25] = "11월 25일: 기말고사 (3)\\n";
    $cal[26] = "11월 26일: 기말고사 (3)\\n";
    $cal[27] = "11월 27일: 기말고사 (3)\\n";
    $cal[28] = "11월 28일: \\n";
    $cal[29] = "11월 29일: 봉사활동 소감문 작성 / 동아리 활동 평가\\n";
    $cal[30] = "11월 30일: ";
    $cal[1] = "12월 1일: \\n";
  } if($week==49){
    $cal[2] = "12월 2일: \\n";
    $cal[3] = "12월 3일: \\n";
    $cal[4] = "12월 4일: \\n";
    $cal[5] = "12월 5일: \\n";
    $cal[6] = "12월 6일: \\n";
    $cal[7] = "12월 7일: \\n";
    $cal[8] = "12월 8일: \\n";
  } if($week==50){
    $cal[9] = "12월 9일: \\n";
    $cal[10] = "12월 10일: \\n";
    $cal[11] = "12월 11일: 기말고사 (1,2)\\n";
    $cal[12] = "12월 12일: 기말고사 (1,2)\\n";
    $cal[13] = "12월 13일: 기말고사 (1,2)\\n";
    $cal[14] = "12월 14일: \\n";
    $cal[15] = "12월 15일: \\n";
  } if($week==51){
    $cal[16] = "12월 16일: 기말고사 (1,2)\\n";
    $cal[17] = "12월 17일: 기말고사 (1,2)\\n";
    $cal[18] = "12월 18일: 역사경시대회\\n";
    $cal[19] = "12월 19일: 학년별 탁구제전\\n";
    $cal[20] = "12월 20일: 인포그래픽스대회\\n";
    $cal[21] = "12월 21일: 모의유엔총회\\n";
    $cal[22] = "12월 22일: \\n";
  } if($week==52){
    $cal[23] = "12월 23일: \\n";
    $cal[24] = "12월 24일: \\n";
    $cal[25] = "12월 25일: 성탄절\\n";
    $cal[26] = "12월 26일: \\n";
    $cal[27] = "12월 27일: 방학식\\n";
    $cal[28] = "12월 28일: \\n";
    $cal[29] = "12월 29일: \\n";
  } if($week==1){
    $cal[30] = "12월 30일: \\n";
    $cal[31] = "12월 31일: ";
    $cal[1] = "1월 1일: 새해!\\n";
    $cal[2] = "1월 2일: \\n";
    $cal[3] = "1월 3일: \\n";
    $cal[4] = "1월 4일: \\n";
    $cal[5] = "1월 5일: \\n";
  } if($week==2){
    $cal[6] = "1월 6일: \\n";
    $cal[7] = "1월 7일: \\n";
    $cal[8] = "1월 8일: \\n";
    $cal[9] = "1월 9일: \\n";
    $cal[10] = "1월 10일: \\n";
    $cal[11] = "1월 11일: \\n";
    $cal[12] = "1월 12일: \\n";
  } if($week==3){
    $cal[13] = "1월 13일: \\n";
    $cal[14] = "1월 14일: \\n";
    $cal[15] = "1월 15일: \\n";
    $cal[16] = "1월 16일: \\n";
    $cal[17] = "1월 17일: \\n";
    $cal[18] = "1월 18일: \\n";
    $cal[19] = "1월 19일: \\n";
  } if($week==4){
    $cal[20] = "1월 20일: \\n";
    $cal[21] = "1월 21일: \\n";
    $cal[22] = "1월 22일: \\n";
    $cal[23] = "1월 23일: \\n";
    $cal[24] = "1월 24일: \\n";
    $cal[25] = "1월 25일: \\n";
    $cal[26] = "1월 26일: \\n";
  } if($week==5){
    $cal[27] = "1월 27일: \\n";
    $cal[28] = "1월 28일: \\n";
    $cal[29] = "1월 29일: \\n";
    $cal[30] = "1월 30일: \\n";
    $cal[31] = "1월 31일: ";
    $cal[1] = "2월 1일: \\n";
    $cal[2] = "2월 2일: \\n";
  } if($week==6){
    $cal[3] = "2월 3일: 개학식\\n";
    $cal[4] = "2월 4일: \\n";
    $cal[5] = "2월 5일: 졸업식 (3)\\n";
    $cal[6] = "2월 6일: \\n";
    $cal[7] = "2월 7일: 종업식 (1,2)\\n";
    $cal[8] = "2월 8일: \\n";
    $cal[9] = "2월 9일: \\n";
  } if($week==7){
    $cal[10] = "2월 10일: \\n";
    $cal[11] = "2월 11일: \\n";
    $cal[12] = "2월 12일: \\n";
    $cal[13] = "2월 13일: \\n";
    $cal[14] = "2월 14일: \\n";
    $cal[15] = "2월 15일: \\n";
    $cal[16] = "2월 16일: \\n";
  } if($week==8){
    $cal[17] = "2월 17일: \\n";
    $cal[18] = "2월 18일: \\n";
    $cal[19] = "2월 19일: \\n";
    $cal[20] = "2월 20일: \\n";
    $cal[21] = "2월 21일: \\n";
    $cal[22] = "2월 22일: \\n";
    $cal[23] = "2월 23일: \\n";
  } if($week==9){
    $cal[24] = "2월 24일: \\n";
    $cal[25] = "2월 25일: \\n";
    $cal[26] = "2월 26일: \\n";
    $cal[27] = "2월 27일: \\n";
    $cal[28] = "2월 28일: ";
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