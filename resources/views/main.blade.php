@extends('template.layouts.main')

@section('title', '고객 관리자 페이지')

@section('page-title')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Home</div>
                    <h2 class="page-title">이아이넷 정책 / 안내서</h2>
                </div>
                @endsection

                @section('body')
                    @parent
                    <div class="row">
                        {{--                        사업자변경--}}
                        <div class="col card">
                            <div class="card-header">
                                <h3 class="card-title">사업자 변경</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-secondary">
                                    <p>필요서류</p>
                                    <ul>
                                        <li>홈페이지 관리 인수인계 동의서</li>
                                        <li>홈페이지 관리자 변경 신청서(인수자용)</li>
                                        <li>관리비 이체서류 (CMS 신청서)</li>
                                        <br>
                                        <li>사업자 등록증 사본</li>
                                        <li>통장 사본</li>
                                    </ul>

                                    <a href="#" class="btn">
                                        <span class="avatar" style="background-image: url(...)"></span> 경영관리팀: 안혜지
                                        주임 (hjan@einet.co.kr)
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{--                        도메인 구매대행--}}
                        <div class="col card">
                            <div class="card-header">
                                <h3 class="card-title">도메인 구매대행</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-secondary">
                                    <p>관리업체: 가비아(https://www.gabia.com)</p>
                                    <ul>
                                        <li>이용기간 첫 1년 무료제공. 단, 소유권은 이아이넷이 갖게됩니다.</li>
                                        <li>도메인은 기본으로 한글로 구입하며, 영문으로 추가 구입시 추가요금이 발생합니다.</li>
                                        <p>ex) 이아이넷.com /  einet.com </p>
                                        <li>보안 문제가 생긴다는 에러페이지가 나와요! </li>
                                        <p>ssl(보안서버/https) 는 홈페이지 내에서 정보공유 중 보안을 돕습니다. 저희같은 경우, 예약시스템을 따로 사용하기때문에 정보를 보여주기만 하는 저희 홈페이지에는 http를 사용합니다.
                                            간혹 시각적으로 보기 꺼려지신다는 분들에 한해 ssl을 설치하고 있습니다.
                                            이때는 월 5,500원을 추가로 관리비 납부가 필요하게됩니다</p>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col card">
                            <div class="card-header">
                                <h3 class="card-title">CMS 신청서란?</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-secondary">
                                    <ul>
                                        <li>호스팅 서버 임대</li>
                                        <li>간편 유지보수업무(월)</li>
                                        <li>도메인 사용</li>
                                    </ul>
                                    <p>  등등 웹에서 발생되는 비용. 즉, 관리비 출금 신청서 입니다</p>
                                    <p>초기 계약 진행 시 관리비용 : 55,000원(월) 안내 드리오니 참고 부탁드립니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col card">
                            <div class="card-header">
                                <h3 class="card-title">팝업창 디자인 신청</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-secondary">
                                    <p>일반 팝업(무료) 외에 디자인 팝업(유료) 제작을 요청하실 수 있습니다.</p>
                                    <p>'꾸미기' > '유지보수 신청' (홈페이지수정 > 디자인 팝업 요청) </p>

                                    <ul>
                                        <li> 영업일 기준 약 1~2일 소요 </li>
                                        <li> 팝업 디자인이 완료된 이후에는 텍스트 외에는 추가수정 불가</li>
                                        <li>시안 여러개 제공해드리지 않습니다. 희망하시는 느낌을 미리 설명해 주세요</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                @endsection

                @section('scripts')

@endsection
