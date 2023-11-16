@extends('template.layouts.main')

@section('title', '회원정보')

@section('header')
@endsection

@section('page-title')
    <div class="col">
        <div class="page-pretitle">기본설정</div>
        <h2 class="page-title">회원정보 수정</h2>
    </div>
@endsection

@section('body')
    @parent

    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="/maintenance">
                            @csrf
                            @method('PATCH')

                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-sm-2">
                                            <label>신청구분</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select">
                                                <option value="1">선택</option>
                                                <option value="2">실시간 예약시스템</option>
                                                <option value="3">홈페이지수정</option>
                                                <option value="4">사진요청(유료)</option>
                                                <option value="5">기타</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select">
                                                <option value="1">선택</option>
                                                <option value="2">디자인 팝업요청(유료)</option>
                                                <option value="3">사진, 영상교체</option>
                                                <option value="4">팝업수정</option>
                                                <option value="5">메뉴수정</option>
                                                <option value="6">디자인 수정(유료)</option>
                                                <option value="7">기능 수정(유료)</option>
                                                <option value="8">텍스트 수정</option>
                                                <option value="9">스크립트 삽입/수정</option>
                                                <option value="10">오류문의</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-sm-2">
                                            <label class="form-label">제목</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title_txt">
                                        </div>
                                    </div>
                                </div>


                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="form-label col-sm-4">팬션명</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="title_txt">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="form-label col-sm-4">작성자</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="writer_name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="form-label col-sm-4">홈페이지 연락처</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="title_txt">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row d-inline-flex">
                                        <div class="col">
                                            <label class="form-label">팬션명</label>
                                            <input type="text" class="form-control" name="title_txt">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">작성자</label>

                                            <input type="text" class="form-control" name="writer_name">
                                            <div class="col">
                                                <label class="form-label">홈페이지 연락처</label>
                                                <input type="text" class="form-control" name="witer_phonenumber">
                                            </div>
                                            <div class="col">
                                                <label class="form-label">이메일</label>
                                                <input type="email" class="form-control" name="writer_email">
                                            </div>
                                            <div class="col">
                                                <label class="form-label">접수형태</label>
                                                <select class="form-select">
                                                    <option value="1">선택</option>
                                                    <option value="2">전화</option>
                                                    <option value="3">게시판</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item mb-3">
                                    <div class="row align-items-center g-4">
                                        <div class="col">
                                                    <textarea class="form-control" id="tinymce-default" name="maintenance-contents" placeholder="내용을 자세히 설명해 주세요"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary"> 수정하기 </a>
                        <a href="#" class="btn btn-danger"> 취소 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
