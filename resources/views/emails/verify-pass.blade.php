<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Login page">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>Verifikasi Akun</title>
    
        <!-- Scripts -->
        {{-- <script src="{{ asset('public/js/app.js') }}" defer></script> --}}
    
        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    
        <!--begin::Page Custom Styles(used by this page) -->
        <link href="{{ asset ('public/assets/css/demo4/pages/login/login-3.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles -->
    
        <!--begin:: Global Mandatory Vendors -->
        <link href="{{ asset ('public/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
        <!--end:: Global Mandatory Vendors -->
    
        <!--begin:: Global Optional Vendors -->
        <link href="{{ asset ('public/assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/quill/dist/quill.snow.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/@yaireo/tagify/dist/tagify.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/dual-listbox/dist/dual-listbox.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/morris.js/morris.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('public/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
        <!--end:: Global Optional Vendors -->
    
        <!--begin::Global Theme Styles(used by all pages) -->
                        
        <link href="{{ asset ('public/assets/css/demo4/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
    
        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{ asset ('public/assets/media/logos/favicon.ico')}}" />
    </head>
        <!-- end::Head -->

<body style="background-image: url({{ asset ('public/assets/media//bg/bg-3.jpg')}});" >
	<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./assets/media//bg/bg-3.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="{{ asset ('public/assets/media/logos/logo-5.png')}}">  	
                        </a>
                    </div>
                  
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Loker Magang</h3>
                        </div>
                            <div class="kt-login__signin">
                                    <div class="kt-login__head">
                                        <div class="kt-login__desc">Verifikasi Akun Anda</div>
                                    </div>
                                    <div id="result-form-konten"></div>
                                    <form class="kt-form"  id="form-konten" method="POST" enctype="multipart/form-data" action="{{ route('verify.password') }}">
                                        @csrf
                                        <div class="input-group">
                                            <input class="form-control" type="password" placeholder="Masukkan Password" name="password" id="pw1">
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control" type="password" placeholder="Konfirmasi Password" name="password" id="pw2">
                                        </div>
                                        <div class="kt-login__actions">
                                        <input type="hidden" id="user_id" name="user_id" value="{{$data->user_id}}">
                                            <button class="btn btn-brand btn-elevate kt-login__btn-primary" onclick="confirmData()">Submit</button>&nbsp;&nbsp;
                                        </div>
                                    </form>
                                
                                
                            </div>	
                        </div>
                    </div>
                </div>	
            </div>
                    
         <!-- end:: Page -->
         <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#366cf3","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin:: Global Mandatory Vendors -->
        <script src="{{ asset ('public/assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <script src="{{ asset ('public/assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js')}}" type="text/javascript')}}"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-switch.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/dropzone.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/quill/dist/quill.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/@yaireo/tagify/dist/tagify.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-notify.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/dual-listbox/dist/dual-listbox.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
        <script src="{{ asset ('public/assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>
        <!--end:: Global Optional Vendors -->

        <script src="{{asset('public/assets/corelib/core.js')}}" type="text/javascript"></script>

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ asset ('public/assets/js/demo4/scripts.bundle.js')}}" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ asset ('public/assets/js/demo4/pages/login/login-general.js')}}" type="text/javascript"></script>
        <!--end::Page Scripts -->                

    <input type='hidden' name='_token' value='{{ csrf_token() }}'>

    <script type="text/javascript">
        function confirmData() {
            var data = new FormData();
            var password=$('#pw1').val();
        
            data.append('password', password);
            modalConfirm("Konfirmasi", "Apakah Anda Yakin ingin Menyimpan Data?", function () {
                ajaxTransfer("{{url('verify/Pass')}}", data, "#modal-output");
            })
            
        }
    </script>

    <script type="text/javascript">

          window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
    </script>
</body>
</html>
