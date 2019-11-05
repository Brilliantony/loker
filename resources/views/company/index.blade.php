@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <!--Begin::Dashboard 4-->
    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Quick Stats-->
                <div class="row row-full-height">
                    <div class="col-sm-3 ">
                        <div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-brand">
                            <div class="kt-portlet__body kt-portlet__body--fluid">
                                <div class="kt-widget26">
                                    <h4>Judul Pencarian</h4>
                                    <div class="kt-space-20"></div>
                                    <button disabled="disabled" class="btn btn-primary">Teknik Informatika</button>
                                    <div class="kt-space-20"></div>
                                    <button disabled="disabled" class="btn btn-primary">Hukum</button>
                                    <div class="kt-space-20"></div>
                                    <button disabled="disabled" class="btn btn-primary">DKV</button>
                                    <div class="kt-space-20"></div>
                                    <button disabled="disabled" class="btn btn-primary">Teknik Informatika</button>
                                </div>
                            </div>
                        </div>
                    <div class="kt-space-20"></div>
                    </div>
                    <div class="col-sm-9">
                        <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
                            <div class="kt-portlet__body kt-portlet__body--fluid">
                                <div class="kt-widget26">
                                    <div class="row">
                                        @php
                                            $i=0;
                                            $jumlahData = 3;
                                        @endphp

                                        @foreach ($applicant->all() as $applicants)
                                            @php
                                            if ($i++ % $jumlahData == 0) {
                                                echo "<div class='row margin-bottom-10'>";
                                            }
                                            @endphp

                                            <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <p><b>{{$applicants->name}}</b></p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <img class="card-img-top" src="{{asset('storage/app/public/photo_applicant/'.$applicants->photo)}}" alt="Card image top" width="200" height="200">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$applicants->getmajors->majors_name}}</h4>
                                                        <h4 class="card-subtitle">{{$applicants->level}}</h4>
                                                        <p class="card-text">{{$applicants->address}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            if ($i % $jumlahData == 0 || $i == $applicant->count()) {
                                                echo "</div>";
                                            }
                                            @endphp

                                        @endforeach
                                        
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
                    
                    <!--begin::Nav-->

                    <!--end::Nav-->

            <!--end:: Widgets/Order Statistics-->
        </div>
    </div>
    <!--End::Row-->
    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-6 col-lg-12 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Sale Reports-->

            <!--end:: Widgets/Sale Reports-->
        </div>
        <div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">
            <!--Begin::Portlet-->

            <!--End::Portlet-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Sales Stats-->

            <!--end:: Widgets/Sales Stats-->
                </div>
        <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Top Locations-->

            <!--end:: Widgets/Top Locations-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
            <!--begin:: Widgets/Trends-->

            <!--end:: Widgets/Trends-->
        </div>
            </div>
    <!--End::Row-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-12">

        </div>
    </div>
    <!--End::Row-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Application Sales-->

            <!--end:: Widgets/Application Sales-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Latest Updates-->

            <!--end:: Widgets/Latest Updates-->
                </div>
            </div>
            <!--End::Row-->
            <!--End::Dashboard 4-->
        </div>
        <!-- end:: Content -->
    </div>
</div>
@endsection