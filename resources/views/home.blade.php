@extends('layouts.master')

@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <!--Begin::Dashboard 4-->
    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Quick Stats-->
            <div class="row row-full-height">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-brand">
                        <div class="kt-portlet__body kt-portlet__body--fluid">
                            <div class="kt-widget26">
                                <div class="kt-widget26__content">
                                    <span class="kt-widget26__number">570</span>
                                    <span class="kt-widget26__desc">Total Sales</span>
                                </div>
                                <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                                    <canvas id="kt_chart_quick_stats_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-space-20"></div>
                    <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-danger">
                        <div class="kt-portlet__body kt-portlet__body--fluid">
                            <div class="kt-widget26">
                                <div class="kt-widget26__content">
                                    <span class="kt-widget26__number">640</span>
                                    <span class="kt-widget26__desc">Completed Transactions</span>
                                </div>
                                <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                                    <canvas id="kt_chart_quick_stats_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
                        <div class="kt-portlet__body kt-portlet__body--fluid">
                            <div class="kt-widget26">
                                <div class="kt-widget26__content">
                                    <span class="kt-widget26__number">234+</span>
                                    <span class="kt-widget26__desc">Transactions</span>
                                </div>
                                <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                                    <canvas id="kt_chart_quick_stats_3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-space-20"></div>
                    <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
                        <div class="kt-portlet__body kt-portlet__body--fluid">
                            <div class="kt-widget26">
                                <div class="kt-widget26__content">
                                    <span class="kt-widget26__number">4.4M$</span>
                                    <span class="kt-widget26__desc">Paid Comissions</span>
                                </div>
                                <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                                    <canvas id="kt_chart_quick_stats_4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Order Statistics-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Order Statistics
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
				Export
			</a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>
                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget12">
                        <div class="kt-widget12__content">
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Annual Taxes EMS</span>
                                    <span class="kt-widget12__value">$400,000</span>
                                </div>

                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Finance Review Date</span>
                                    <span class="kt-widget12__value">July 24,2019</span>
                                </div>
                            </div>
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Avarage Revenue</span>
                                    <span class="kt-widget12__value">$60M</span>
                                </div>
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Revenue Margin</span>
                                    <div class="kt-widget12__progress">
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="kt-widget12__stat">
                                40%
                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget12__chart" style="height:250px;">
                            <canvas id="kt_chart_order_statistics"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Order Statistics-->
        </div>
    </div>
    <!--End::Row-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-6 col-lg-12 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Sale Reports-->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Sales Reports
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
					Last Month
					</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
					All Time
					</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--Begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::tab 1 content-->
                        <div class="tab-pane active" id="kt_widget11_tab1_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td style="width:1%">#</td>
                                                <td style="width:40%">Application</td>
                                                <td style="width:14%">Sales</td>
                                                <td style="width:15%">Change</td>
                                                <td style="width:15%">Status</td>
                                                <td style="width:15%" class="kt-align-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" class="kt-widget11__title">Loop</a>
                                                    <span class="kt-widget11__sub">CRM System</span>
                                                </td>
                                                <td>19,200</td>
                                                <td>$63</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <a href="#" class="kt-widget11__title">Selto</a>
                                                    <span class="kt-widget11__sub">Powerful Website Builder</span>
                                                </td>
                                                <td>24,310</td>
                                                <td>$39</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <a href="#" class="kt-widget11__title">Jippo</a>
                                                    <span class="kt-widget11__sub">The Best Selling App</span>
                                                </td>
                                                <td>9,076</td>
                                                <td>$105</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <a href="#" class="kt-widget11__title">Verto</a>
                                                    <span class="kt-widget11__sub">Web Development Tool</span>
                                                </td>
                                                <td>11,094</td>
                                                <td>$16</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                        <!--end::tab 1 content-->

                        <!--begin::tab 2 content-->
                        <div class="tab-pane" id="kt_widget11_tab2_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td style="width:1%">#</td>
                                                <td style="width:40%">Application</td>
                                                <td style="width:14%">Sales</td>
                                                <td style="width:15%">Change</td>
                                                <td style="width:15%">Status</td>
                                                <td style="width:15%" class="kt-align-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Loop</span>
                                                    <span class="kt-widget11__sub">CRM System</span>
                                                </td>
                                                <td>19,200</td>
                                                <td>$63</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>
                                                <td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Selto</span>
                                                    <span class="kt-widget11__sub">Powerful Website Builder</span>
                                                </td>
                                                <td>24,310</td>
                                                <td>$39</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>
                                                <td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Jippo</span>
                                                    <span class="kt-widget11__sub">The Best Selling App</span>
                                                </td>
                                                <td>9,076</td>
                                                <td>$105</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>
                                                <td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Verto</span>
                                                    <span class="kt-widget11__sub">Web Development Tool</span>
                                                </td>
                                                <td>11,094</td>
                                                <td>$16</td>
                                                <td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>
                                                <td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                        <!--end::tab 2 content-->
                        <!--begin::tab 3 content-->
                        <div class="tab-pane" id="kt_widget11_tab3_content">

                        </div>
                        <!--end::tab 3 content-->
                    </div>
                    <!--End::Tab Content-->
                </div>
            </div>
            <!--end:: Widgets/Sale Reports-->
        </div>
        <div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">
            <!--Begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Recent Activities
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--Begin::Timeline 3 -->
                    <div class="kt-timeline-v2">
                        <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">10:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                    <br> incididunt ut labore et dolore magna
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">12:45</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-success"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                    AEOL Meeting With
                                </div>
                                <div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
                                    <a href="#"><img src="{{ asset('public/assets/media/users/100_4.jpg') }}" title=""></a>
                                    <a href="#"><img src="{{ asset('public/assets/media/users/100_13.jpg') }}'" title=""></a>
                                    <a href="#"><img src="{{ asset('public/assets/media/users/100_11.jpg') }}" title=""></a>
                                    <a href="#"><img src="{{ asset('public/assets/media/users/100_14.jpg') }}'" title=""></a>
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">14:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-brand"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">16:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-warning"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                    <br> incididunt ut labore et dolore magna elit enim at minim
                                    <br> veniam quis nostrud
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">17:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-info"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">16:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-brand"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                    <br> incididunt ut labore et dolore magna elit enim at minim
                                    <br> veniam quis nostrud
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">17:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">15:30</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::Timeline 3 -->
                </div>
            </div>
            <!--End::Portlet-->
        </div>

        <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Sales Stats-->
            <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Sales Stats
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Finance</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                            <span class="kt-nav__link-text">Statistics</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Events</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__section">
                                        <span class="kt-nav__section-text">Customers</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Files</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin::Widget 6-->
                    <div class="kt-widget15">
                        <div class="kt-widget15__chart">
                            <canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
                        </div>
                        <div class="kt-widget15__items kt-margin-t-40">
                            <div class="row">
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							63%
							</span>
                                        <span class="kt-widget15__text">
							Sales Grow
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-widget15__chart-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							54%
							</span>
                                        <span class="kt-widget15__text">
							Orders Grow
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							41%
							</span>
                                        <span class="kt-widget15__text">
							Profit Grow
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							79%
							</span>
                                        <span class="kt-widget15__text">
							Member Grow
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="kt-widget15__desc">
                                        * lorem ipsum dolor sit amet consectetuer sediat elit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Widget 6-->
                </div>
            </div>
            <!--end:: Widgets/Sales Stats-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Top Locations-->
            <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Top Locations
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Finance</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                            <span class="kt-nav__link-text">Statistics</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Events</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__section">
                                        <span class="kt-nav__section-text">Customers</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Files</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget15">
                        <div class="kt-widget15__map">
                            <div id="kt_chart_latest_trends_map" style="height:320px;"></div>
                        </div>
                        <div class="kt-widget15__items kt-margin-t-30">
                            <div class="row">
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							63%
							</span>
                                        <span class="kt-widget15__text">
							London
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							54%
							</span>
                                        <span class="kt-widget15__text">
							Glasgow
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							41%
							</span>
                                        <span class="kt-widget15__text">
							Dublin
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="kt-widget15__item">
                                        <span class="kt-widget15__stats">
							79%
							</span>
                                        <span class="kt-widget15__text">
							Edinburgh
							</span>
                                        <div class="kt-space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::widget item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Top Locations-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Trends-->
            <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
	            Trends
	       </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-send"></i>
                                            <span class="kt-nav__link-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                            <span class="kt-nav__link-text">Charts</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                            <span class="kt-nav__link-text">Members</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                    <div class="kt-widget4 kt-widget4--sticky">
                        <div class="kt-widget4__chart">
                            <canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
                        </div>
                        <div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__img kt-widget4__img--logo">
                                    <img src="{{ asset('public/assets/media/client-logos/logo3.png') }}" alt="">
                                </div>
                                <div class="kt-widget4__info">
                                    <a href="#" class="kt-widget4__title">
							Phyton  
						</a>
                                    <span class="kt-widget4__sub">
						A Programming Language
						</span>
                                </div>
                                <span class="kt-widget4__ext">
						<span class="kt-widget4__number kt-font-danger">+$17</span>
                                </span>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__img kt-widget4__img--logo">
                                    <img src="{{ asset('public/assets/media/client-logos/logo1.png') }}" alt="">
                                </div>
                                <div class="kt-widget4__info">
                                    <a href="#" class="kt-widget4__title">
							FlyThemes  
						</a>
                                    <span class="kt-widget4__sub">
						A Let's Fly Fast Again Language
						</span>
                                </div>
                                <span class="kt-widget4__ext">
						<span class="kt-widget4__number kt-font-danger">+$300</span>
                                </span>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__img kt-widget4__img--logo">
                                    <img src="{{ asset('public/assets/media/client-logos/logo2.png') }}" alt="">
                                </div>
                                <div class="kt-widget4__info">
                                    <a href="#" class="kt-widget4__title">
							AirApp  
						</a>
                                    <span class="kt-widget4__sub">
							Awesome App For Project Management
						</span>
                                </div>
                                <span class="kt-widget4__ext">
						<span class="kt-widget4__number kt-font-danger">+$6700</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Trends-->
        </div>
    </div>
    <!--End::Row-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Exclusive Datatable Plugin
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <!--begin: Datatable -->
                    <div class="kt-datatable" id="kt_datatable_latest_orders"></div>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>
    <!--End::Row-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Application Sales-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Application Sales
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
					Last Month
					</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
					All Time
					</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget11_tab1_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td style=" width: 1%;"></td>
                                                <td style=" width: 20%;">Application</td>
                                                <td style=" width: 10%;">Sales</td>
                                                <td style=" width: 20%;">Change</td>
                                                <td style=" width: 10%;">Status</td>
                                                <td style=" width: 10%;" class="kt-align-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Vertex 2.0</span>
                                                    <span class="kt-widget11__sub">Vertex To By Again</span>
                                                </td>
                                                <td>19,200</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                        <canvas id="kt_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Metronic</span>
                                                    <span class="kt-widget11__sub">Powerful Admin Theme</span>
                                                </td>
                                                <td>24,310</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="kt-badge kt-badge--success kt-badge--inline">pending</span>
                                                </td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Apex</span>
                                                    <span class="kt-widget11__sub">The Best Selling App</span>
                                                </td>
                                                <td>9,076</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
                                                </td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Cascades</span>
                                                    <span class="kt-widget11__sub">Design Tool</span>
                                                </td>
                                                <td>11,094</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="kt-badge kt-badge--warning kt-badge--inline">new</span>
                                                </td>
                                                <td class="kt-align-right kt-font-brand kt-font-bold">$8,520</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-label-success btn-sm btn-bold">View All Records</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                        <div class="tab-pane" id="kt_widget11_tab2_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td style=" width: 1%;"></td>
                                                <td style=" width: 20%;">Application</td>
                                                <td style=" width: 10%;">Sales</td>
                                                <td style=" width: 20%;">Change</td>
                                                <td style=" width: 10%;">Status</td>
                                                <td style=" width: 10%;" class="kt-align-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Loop</span>
                                                    <span class="kt-widget11__sub">CRM System</span>
                                                </td>
                                                <td>19,200</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
                                                <td class="kt-align-right kt-font-brand">$34,740</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Selto</span>
                                                    <span class="kt-widget11__sub">Powerful Website Builder</span>
                                                </td>
                                                <td>24,310</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td><span class="kt-badge kt-badge--success kt-badge--inline">new</span></td>
                                                <td class="kt-align-right kt-font-brand">$46,010</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Jippo</span>
                                                    <span class="kt-widget11__sub">The Best Selling App</span>
                                                </td>
                                                <td>9,076</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td><span class="kt-badge kt-badge--brand kt-badge--inline">approved</span></td>
                                                <td class="kt-align-right kt-font-brand">$67,800</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="kt-checkbox kt-checkbox--single">
                                                        <input type="checkbox"><span></span></label>
                                                </td>
                                                <td>
                                                    <span class="kt-widget11__title">Verto</span>
                                                    <span class="kt-widget11__sub">Web Development Tool</span>
                                                </td>
                                                <td>11,094</td>
                                                <td>
                                                    <div class="kt-widget11__chart" style="height:50px; width: 100px">
                                                        <canvas id="kt_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                    </div>
                                                </td>
                                                <td><span class="kt-badge kt-badge--danger kt-badge--inline">pending</span></td>
                                                <td class="kt-align-right kt-font-brand">$18,520</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-outline-brand btn-bold">View All Records</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Application Sales-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Latest Updates-->
            <div class="kt-portlet kt-portlet--height-fluid ">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
				Latest Updates
			</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
				Today
			</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>
                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <!--full height portlet body-->
                <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                    <div class="kt-widget4 kt-widget4--sticky">
                        <div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
						<i class="flaticon2-graphic  kt-font-brand"></i>
					</span>
                                <a href="#" class="kt-widget4__title">
						Metronic Admin Theme
					</a>
                                <span class="kt-widget4__number kt-font-brand">+500</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
						<i class="flaticon2-analytics-2  kt-font-success"></i>
					</span>
                                <a href="#" class="kt-widget4__title">
						Green Maker Team
					</a>
                                <span class="kt-widget4__number kt-font-success">-64</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
						<i class="flaticon2-drop  kt-font-danger"></i>
					</span>
                                <a href="#" class="kt-widget4__title">
						Make Apex Development
					</a>
                                <span class="kt-widget4__number kt-font-danger">+1080</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
						<i class="flaticon2-pie-chart-4 kt-font-warning"></i>
					</span>
                                <a href="#" class="kt-widget4__title">
						A Programming Language
					</a>
                                <span class="kt-widget4__number kt-font-warning">+19</span>
                            </div>
                        </div>
                        <div class="kt-widget4__chart kt-margin-t-15">
                            <canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Latest Updates-->
        </div>
    </div>
    <!--End::Row-->
    <!--End::Dashboard 4-->
</div>
<!-- end:: Content -->
@endsection
