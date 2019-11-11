<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="{{url('/company')}}">
            <img alt="Logo" src="{{ asset('public/assets/media/logos/logo-4-sm.png') }}" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
                <div class="kt-container ">
                    <!-- begin:: Brand -->
                    <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                        <a class="kt-header__brand-logo" href="{{url('/company')}}">
                            <img alt="Logo" src="{{ asset('public/assets/media/logos/fingerspot1.png') }}" class="kt-header__brand-logo-default" />
                            <img alt="Logo" src="{{ asset('public/assets/media/logos/fingerspot1.png') }}" class="kt-header__brand-logo-sticky" />
                        </a>
                    </div>
                    <!-- end:: Brand -->
                    <!-- begin: Header Menu -->
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <!-- end: Header Menu -->
                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar kt-grid__item">
                        <!--begin: Search -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper">
                                    <h5 class="kt-header__topbar-username">Sisa Kuota Anda : 100</h5>
                                </div>
                        </div>
                        <!--end: Search -->

                        <!--begin: Cart -->
                            <div class="kt-header__topbar-item dropdown">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                    <span class="kt-header__topbar-icon">
				                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"/>
                                                    <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" id="Path-30" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" id="Combined-Shape" fill="#000000"/>
                                             </g>
                                        </svg>				<!--<i class="flaticon2-shopping-cart-1"></i>-->
			                        </span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <form>
                                        <!-- begin:: Mycart -->
                                        <div class="kt-mycart">
                                            <div class="kt-mycart__head kt-head" style="background-image: url({{asset('public/assets/media/misc/bg-1.jpg')}});">
                                                <h4>Chart Pelamar Magang</h4>
                                            </div>
                                            <div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245" data-mobile-height="200">
                                                <div class="kt-mycart__item">
                                                    <div class="kt-mycart__container">
                                                        <div class="kt-mycart__info">
                                                            <a href="#" class="kt-mycart__title">Brilly</a>
                                                            <span class="kt-mycart__desc">Teknik Informatika </span>
                                                        </div>

                                                        <a href="#" class="kt-mycart__pic">
                                                            <img src="https://www.sportsnet.ca/wp-content/uploads/2019/04/Soccer-Barcelona-Messi-celebrates-after-scoring-1040x572.jpg" title="">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="kt-mycart__item">
                                                    <div class="kt-mycart__container">
                                                        <div class="kt-mycart__info">
                                                            <a href="#" class="kt-mycart__title">Syahna</a>
                                                            <span class="kt-mycart__desc">Hukum</span>
                                                        </div>

                                                        <a href="#" class="kt-mycart__pic">
                                                            <img src="https://www.sportsnet.ca/wp-content/uploads/2019/04/Soccer-Barcelona-Messi-celebrates-after-scoring-1040x572.jpg" title="">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="kt-mycart__item">
                                                    <div class="kt-mycart__container">
                                                        <div class="kt-mycart__info">
                                                            <a href="#" class="kt-mycart__title">Farhan</a>
                                                            <span class="kt-mycart__desc">DKV</span>
                                                        </div>
                                                        <a href="#" class="kt-mycart__pic">
                                                            <img src="https://www.sportsnet.ca/wp-content/uploads/2019/04/Soccer-Barcelona-Messi-celebrates-after-scoring-1040x572.jpg" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end:: Mycart -->
                                    </form>
                                </div>
                            </div>
                            <!--end: Cart-->

                            <!--begin: User bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                    <span class="kt-header__topbar-welcome">Hi,</span>
                                    <span class="kt-header__topbar-username">{{session()->get('activeUser')->getCompany->company_name}}</span>
                                    <span class="kt-header__topbar-icon"><b>S</b></span>
                                    <img alt="Pic" src="{{ asset('public/assets/media/users/300_21.jpg') }}" class="kt-hidden" />
                                </div>
                                
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <!--begin: Head -->

                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class="kt-notification">
                                        <a href="{{url('/company/profil')}}" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    My Profile
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    Account settings and more
                                                </div>
                                            </div>
                                        </a>
                                        <a href="demo4/custom/apps/user/profile-2.html" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    History
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    My Activity
                                                </div>
                                            </div>
                                        </a>
                                        <div class="kt-notification__custom kt-space-between">
                                            <a href="{{url('logout')}}" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                </div>
                <!-- end:: Header -->
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                    <div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                        