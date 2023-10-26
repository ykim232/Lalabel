@extends('template.layouts.main')

@section('title', '회원정보')

@section('header')
@endsection

@section('page-title')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <div class="page-pretitle">기본설정</div>
        <h2 class="page-title">펜션정보 수정</h2>
    </div>
@endsection

@section('body')
    @parent

    {{--    <div class="container-xl">--}}
    <form method="GET" action="/siteInfo">
        @csrf
        @method('PATCH')
        <div class="row row-deck row-cards">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="list-group list-group-flush list-group-hoverable">
                                    <div class="list-group-item mb-3">
                                        <h4>결제정보</h4>
                                        <p><small>* 결제 계좌는 적어도 하나는 입력하셔야 합니다.</small></p>

                                        <div class="row align-items-center g-6">
                                            <div class="col">
                                                <label class="form-label">결제방식</label>
                                                <input type="radio" class="form-control" value="deposit"> 무통장결제
                                                <input type="radio" class="form-control" value="random">렌덤통장
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>입금 대기시간 설정</h4>
                                        <span><small>
                                                * 입금 대기 시간 안으로 입금이 되지 않은 예약은 자동으로 예약취소 처리 됩니다.<br>
                                                * 늦은밤에 예약신청하여 무통장입금을 하지 못하는 예약자가 있을수 있으니 넉넉하게 입력하는것이 좋습니다.</small></span>

                                        <div class="row align-items-center g-start-sm-10">
                                            <div class="col">
                                                <label class="form-label">기본대기시간</label>
                                            </div>
                                            <div class="col">
                                                <label class="form-select"></label>시간
                                            </div>
                                        </div>
                                        <div class="row align-items-center g-6">
                                            <div class="col">
                                                <label class="form-label">전날/당일 대기시간</label>
                                            </div>
                                            <div class="col">
                                                <label class="form-select"></label>시간
                                            </div>
                                            <span><small>
                                                * 이용일 전날, 당일 예약인 경우 입금대기 시간을 좀더 단축하시는 것이 좋습니다.</small></span>
                                        </div>
                                        <div class="row align-items-center g-6">
                                            <div class="col">
                                                <label class="form-label">자동취소 사용여부</label>
                                            </div>
                                            <div class="col">
                                                <checkbox class="form-control">사용 </checkbox>
                                                <span><small>
                                                위에 설정한 입금대기시간이 지나게 되면, 예약이 자동취소 처리 되는 기능입니다. 사용하지 않으려면 체크를 해지 하세요.</small></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>팬션 소개글</h4>
                                        <p><small>* 결제 계좌는 적어도 하나는 입력하셔야 합니다.</small></p>

                                        <textarea class="form-control" id="tinymce-default" name="desc-site"></textarea>

                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>예약안내 설정</h4>


                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>예약안내 문구</h4>

                                        <textarea class="form-control" id="tinymce-default" name="desc-site"></textarea>

                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>이용 안내 문구</h4>

                                        <textarea class="form-control" id="tinymce-default" name="desc-site"></textarea>

                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>환불 기준 문구</h4>

                                        <textarea class="form-control" id="tinymce-default" name="desc-site"></textarea>

                                    </div>

                                    <div class="list-group-item mb-3">
                                        <h4>기본 환불 수수료</h4>
                                        <div class="table-responsive">
                                            <table class="table table-vcenter">
                                                <thead>
                                                <tr>
                                                    <td>이용당일</td>
                                                    <td>이용 1일전</td>
                                                    <td>이용 2일전</td>
                                                    <td>이용 3일전</td>
                                                    <td>이용 4일전</td>
                                                    <td>이용 5일전</td>
                                                    <td>이용 6일전</td>
                                                    <td>이용 7일전</td>
                                                    <td>이용 8일전</td>
                                                    <td>이용 9일전</td>
                                                    <td>이용 10일전</td>
                                                </tr>
                                                </thead>
                                                <tr>
                                                    <td>
                                                        <select name="off_charge[]">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="off_charge[]" style="width:74px; padding:2px;">
                                                            <option value='100'>100%</option>
                                                            <option value='95'>95%</option>
                                                            <option value='90'>90%</option>
                                                            <option value='85'>85%</option>
                                                            <option value='80'>80%</option>
                                                            <option value='75'>75%</option>
                                                            <option value='70'>70%</option>
                                                            <option value='65'>65%</option>
                                                            <option value='60'>60%</option>
                                                            <option value='55'>55%</option>
                                                            <option value='50'>50%</option>
                                                            <option value='45'>45%</option>
                                                            <option value='40'>40%</option>
                                                            <option value='35'>35%</option>
                                                            <option value='30'>30%</option>
                                                            <option value='25'>25%</option>
                                                            <option value='20'>20%</option>
                                                            <option value='15'>15%</option>
                                                            <option value='10'>10%</option>
                                                            <option value='5'>5%</option>
                                                            <option value='0'>0%</option>
                                                            <option value=''>없음</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary"> 수정하기 </a>
                    <a href="#" class="btn btn-danger"> 취소 </a>
                </div>
            </div>
        </div>

    </form>

@endsection

@section('scripts')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                fill: {
                    opacity: 1,
                },
                stroke: {
                    width: [2, 1],
                    dashArray: [0, 3],
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "May",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
                },{
                    name: "April",
                    data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 40.0,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Profits",
                    data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 240,
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false,
                    },
                    animations: {
                        enabled: false
                    },
                    stacked: true,
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: 1,
                },
                series: [{
                    name: "Web",
                    data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
                },{
                    name: "Social",
                    data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
                },{
                    name: "Other",
                    data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    padding: {
                        top: -20,
                        right: 0,
                        left: -4,
                        bottom: -4
                    },
                    strokeDashArray: 4,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
                ],
                colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("green", 0.8)],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:on
        document.addEventListener("DOMContentLoaded", function () {
            const map = new jsVectorMap({
                selector: '#map-world',
                map: 'world',
                backgroundColor: 'transparent',
                regionStyle: {
                    initial: {
                        fill: tabler.getColor('body-bg'),
                        stroke: tabler.getColor('border-color'),
                        strokeWidth: 2,
                    }
                },
                zoomOnScroll: false,
                zoomButtons: false,
                // -------- Series --------
                visualizeData: {
                    scale: [tabler.getColor('bg-surface'), tabler.getColor('primary')],
                    values: {
                        "AF": 16,
                        "AL": 11,
                        "DZ": 158,
                        "AO": 85,
                        "AG": 1,
                        "AR": 351,
                        "AM": 8,
                        "AU": 1219,
                        "AT": 366,
                        "AZ": 52,
                        "BS": 7,
                        "BH": 21,
                        "BD": 105,
                        "BB": 3,
                        "BY": 52,
                        "BE": 461,
                        "BZ": 1,
                        "BJ": 6,
                        "BT": 1,
                        "BO": 19,
                        "BA": 16,
                        "BW": 12,
                        "BR": 2023,
                        "BN": 11,
                        "BG": 44,
                        "BF": 8,
                        "BI": 1,
                        "KH": 11,
                        "CM": 21,
                        "CA": 1563,
                        "CV": 1,
                        "CF": 2,
                        "TD": 7,
                        "CL": 199,
                        "CN": 5745,
                        "CO": 283,
                        "KM": 0,
                        "CD": 12,
                        "CG": 11,
                        "CR": 35,
                        "CI": 22,
                        "HR": 59,
                        "CY": 22,
                        "CZ": 195,
                        "DK": 304,
                        "DJ": 1,
                        "DM": 0,
                        "DO": 50,
                        "EC": 61,
                        "EG": 216,
                        "SV": 21,
                        "GQ": 14,
                        "ER": 2,
                        "EE": 19,
                        "ET": 30,
                        "FJ": 3,
                        "FI": 231,
                        "FR": 2555,
                        "GA": 12,
                        "GM": 1,
                        "GE": 11,
                        "DE": 3305,
                        "GH": 18,
                        "GR": 305,
                        "GD": 0,
                        "GT": 40,
                        "GN": 4,
                        "GW": 0,
                        "GY": 2,
                        "HT": 6,
                        "HN": 15,
                        "HK": 226,
                        "HU": 132,
                        "IS": 12,
                        "IN": 1430,
                        "ID": 695,
                        "IR": 337,
                        "IQ": 84,
                        "IE": 204,
                        "IL": 201,
                        "IT": 2036,
                        "JM": 13,
                        "JP": 5390,
                        "JO": 27,
                        "KZ": 129,
                        "KE": 32,
                        "KI": 0,
                        "KR": 986,
                        "KW": 117,
                        "KG": 4,
                        "LA": 6,
                        "LV": 23,
                        "LB": 39,
                        "LS": 1,
                        "LR": 0,
                        "LY": 77,
                        "LT": 35,
                        "LU": 52,
                        "MK": 9,
                        "MG": 8,
                        "MW": 5,
                        "MY": 218,
                        "MV": 1,
                        "ML": 9,
                        "MT": 7,
                        "MR": 3,
                        "MU": 9,
                        "MX": 1004,
                        "MD": 5,
                        "MN": 5,
                        "ME": 3,
                        "MA": 91,
                        "MZ": 10,
                        "MM": 35,
                        "NA": 11,
                        "NP": 15,
                        "NL": 770,
                        "NZ": 138,
                        "NI": 6,
                        "NE": 5,
                        "NG": 206,
                        "NO": 413,
                        "OM": 53,
                        "PK": 174,
                        "PA": 27,
                        "PG": 8,
                        "PY": 17,
                        "PE": 153,
                        "PH": 189,
                        "PL": 438,
                        "PT": 223,
                        "QA": 126,
                        "RO": 158,
                        "RU": 1476,
                        "RW": 5,
                        "WS": 0,
                        "ST": 0,
                        "SA": 434,
                        "SN": 12,
                        "RS": 38,
                        "SC": 0,
                        "SL": 1,
                        "SG": 217,
                        "SK": 86,
                        "SI": 46,
                        "SB": 0,
                        "ZA": 354,
                        "ES": 1374,
                        "LK": 48,
                        "KN": 0,
                        "LC": 1,
                        "VC": 0,
                        "SD": 65,
                        "SR": 3,
                        "SZ": 3,
                        "SE": 444,
                        "CH": 522,
                        "SY": 59,
                        "TW": 426,
                        "TJ": 5,
                        "TZ": 22,
                        "TH": 312,
                        "TL": 0,
                        "TG": 3,
                        "TO": 0,
                        "TT": 21,
                        "TN": 43,
                        "TR": 729,
                        "TM": 0,
                        "UG": 17,
                        "UA": 136,
                        "AE": 239,
                        "GB": 2258,
                        "US": 4624,
                        "UY": 40,
                        "UZ": 37,
                        "VU": 0,
                        "VE": 285,
                        "VN": 101,
                        "YE": 30,
                        "ZM": 15,
                        "ZW": 5
                    },
                },
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
        // @formatter:off
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
                chart: {
                    type: "radialBar",
                    fontFamily: 'inherit',
                    height: 40,
                    width: 40,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            margin: 0,
                            size: '75%'
                        },
                        track: {
                            margin: 0
                        },
                        dataLabels: {
                            show: false
                        }
                    }
                },
                colors: [tabler.getColor("blue")],
                series: [35],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
                chart: {
                    type: "area",
                    fontFamily: 'inherit',
                    height: 192,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .16,
                    type: 'solid'
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Purchases",
                    data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
                }],
                tooltip: {
                    theme: 'dark'
                },
                grid: {
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: [
                    '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                ],
                colors: [tabler.getColor("primary")],
                legend: {
                    show: false,
                },
                point: {
                    show: false
                },
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
                }],
            })).render();
        });
        // @formatter:on
    </script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 24,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                tooltip: {
                    enabled: false,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                },
                series: [{
                    color: tabler.getColor("primary"),
                    data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
                }],
            })).render();
        });
        // @formatter:on
    </script>
@endsection
