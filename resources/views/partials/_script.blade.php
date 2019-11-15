<!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#366cf3",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
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
    <script src="{{ asset ('public/assets/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-switch.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/dropzone.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/quill/dist/quill.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/@yaireo/tagify/dist/tagify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/bootstrap-notify.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/dual-listbox/dist/dual-listbox.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>
    <!--end:: Global Optional Vendors -->
    <script src="{{asset('public/assets/corelib/core.js')}}" type="text/javascript"></script>
    <!--begin::Global Theme Bundle(used by all pages) -->

    <script src="{{ asset ('public/assets/js/demo4/scripts.bundle.js') }}" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="{{ asset ('public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
    <script src="{{ asset ('public/assets/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset ('public/assets/js/demo4/pages/dashboard.js') }}" type="text/javascript"></script>
    <!--end::Page Scripts -->

    {{-- begin::select2 search wilayah --}}
    <script type="text/javascript">
        $('.itemProvinsi').select2({
        placeholder: 'Pilih Provinsi',
        ajax: {
          delay: 250,
          url: "{{url('search-provinsi')}}",
          dataType: 'json',
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.kode,
                    }
                })
            };
          },
          cache: true
        }
      });
    </script>

    <script type="text/javascript">
        var kode=$('#itemProvinsi').val();
        $('.itemKota').select2({
        placeholder: 'Pilih Kota',
        ajax: {
        delay: 250,
        url: "{{url('search-kota')}}",
        dataType: 'json',
        processResults: function (data, kode) {
            return {
            results:  $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.kode,
                    }
                })
            };
        },
        cache: true
        }
    });
    </script>
    {{-- End::select2 search wilayah --}}

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function confirmData() {
        
            var data = new FormData();
            var judul=$('#judul').val();
            var level=$("#level").val();
            var jurusan=$('#jurusan').val();
            var gender=$('#gender').val();
            var itemProvinsi=$('#itemProvinsi').val();
            var itemKota=$('#itemKota').val();

            data.append('judul', judul);
            data.append('level',level);
            data.append('jurusan',jurusan);
            data.append('gender',gender);
            data.append('itemProvinsi',itemProvinsi);
            data.append('itemKota',itemKota);
            // modalConfirm("Konfirmasi", "Apakah Anda Yakin ingin Menyimpan Data?", function () {
                ajaxTransfer("{{url('company/posting')}}", data, "#results");
            // })
            
        }

    </script>

    <script>
        $(document).ready(function(){
            $('input:checkbox').click(function() {
                $('input:checkbox').not(this).prop('checked', false);
            });
        });
    </script>

    <script>
        function filter(post_id){
            var data=new FormData();
            data.append('post_id',post_id);
            ajaxTransfer("{{url('applicant-filter')}}", data, "#results");
        }
    </script>

    <script>
        function editData(){
            var data = new FormData();
            var company_name=$('#company_name').val();
            var company_logo = $("#company_logo").val();
            var company_telp=$('#company_telp').val();
            var company_email=$('#company_email').val();
            var company_address=$('#company_address').val();

            data.append('company_name', company_name);
            data.append('company_logo',company_logo);
            data.append('company_telp',company_telp);
            data.append('company_email',company_email);
            data.append('company_address',company_address);

            ajaxTransfer("{{url('company/edit')}}", data, "#results");
        }
    </script>