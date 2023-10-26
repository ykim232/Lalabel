<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="/">
                <img src="{{ asset('assets/img/einet-logo.png') }}" width="110" height="32" alt="Einet"
                     class="navbar-brand-image">
            </a>
        </h1>
 n

        {{-- Left navbar --}}
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                       data-bs-auto-close="false" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M5 12l-2 0l9 -9l9 9l-2 0"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/><path
                            d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/></svg>
                  </span>
                        <span class="nav-link-title">
                    객실관리
                  </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./accordion.html">
                            객실 정보
                        </a>
                        <a class="dropdown-item" href="./blank.html">
                            기간 설정
                        </a>
                        <a class="dropdown-item" href="./blank.html">
                            객실 요금설정
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                       data-bs-auto-close="false" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"/><path d="M12 12l8 -4.5"/><path
                            d="M12 12l0 9"/><path d="M12 12l-8 -4.5"/><path d="M16 5.25l-8 4.5"/></svg>
                  </span>
                        <span class="nav-link-title">
                    꾸미기
                  </span>
                    </a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="./accordion.html">
                            팝업창 관리
                        </a>
                        <a class="dropdown-item" href="./blank.html">
                            배경 이미지
                        </a>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                       data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M9 11l3 3l8 -8"/><path
                            d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"/></svg>
                  </span>
                        <span class="nav-link-title">
                    게시판관리
                  </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./accordion.html">
                            게시판설정
                        </a>
                        <a class="dropdown-item" href="./blank.html">
                            FAQ 카테고리
                        </a>
                        <a class="dropdown-item" href="./blank.html">
                            공지사항
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                       data-bs-auto-close="false" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/></svg>
                  </span>
                        <span class="nav-link-title">
                    기본설정
                  </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="info/userInfo">
                            회원정보
                        </a>
                        <a class="dropdown-item" href="info/siteInfo">
                            펜션정보
                        </a>
                        <a class="dropdown-item" href="info/trafficInfo">
                            교통안내
                        </a>
                        <a class="dropdown-item" href="info/cookie-banner.html">
                            시설정보 수정
                        </a>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                       data-bs-auto-close="false" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"/><path
                            d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"/><path
                            d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"/><path
                            d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"/></svg>
                  </span>
                        <span class="nav-link-title">
                    유지보수신청
                  </span>
                    </a>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" href="./layout-horizontal.html">
                            유지보수 요청
                        </a>
                        <a class="dropdown-item" href="./layout-boxed.html">
                            촬영요청 신청
                        </a>
                        <a class="dropdown-item active" href="./layout-vertical.html">
                            요청기록
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</aside>
