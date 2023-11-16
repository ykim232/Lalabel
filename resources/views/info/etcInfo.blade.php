@extends('template.layouts.main')

@section('title', '회원정보')

@section('page-title')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">기본설정</div>
                    <h2 class="page-title">기타정보 수정</h2>
                </div>
                @endsection

                @section('body')
                    <div class="row row-deck row-cards">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="GET" action="/etcInfo">
                                        @csrf
                                        @method('PATCH')
{{--                                        <div class="row align-items-center">--}}
{{--                                            <div class="col mb-3">--}}
{{--                                                <label class="form-label">승용차교통 정보 설정</label>--}}
{{--                                                <textarea class="form-control" id="tinymce-default" name="site-name"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row align-items-center">--}}
{{--                                            <div class="col mb-3">--}}
{{--                                                <label class="form-label">대중교통 정보 설정</label>--}}
{{--                                                <textarea class="form-control"  id="tinymce-default" name="site-name"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="btn-list">
                                            <a href="#" class="btn btn-primary"> 저장하기 </a>
                                            <a href="#" class="btn btn-danger"> 취소 </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    @parent

@endsection
