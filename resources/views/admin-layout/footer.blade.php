    </div>


        <!-- begin:: Footer -->
        <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
        <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
        {{date('Y')}}&nbsp;&copy;&nbsp;<a href="#" target="_blank" class="kt-link">BarDash</a>
        </div>

        </div>
        </div>
    <!-- end:: Footer -->
            </div>
                </div>
                    </div>


        <!-- end:: Page -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                        ],
                        "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                        ]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ URL::asset('public/assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

        <script src="{{ URL::asset('public/assets/js/jquery.form.js')}}" type="text/javascript"></script>



            <!--begin::Page Vendors(used by this page) -->
        <script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

        <!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ URL::asset('public/assets/js/pages/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Vendors(used by this page) -->
        <script src="{{ URL::asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
        

        <!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ URL::asset('public/assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/js/pages/components/extended/toastr.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                ajaxForm('.ajax-form');
            });
        </script>

        <script>
            function ajaxForm(form, callback) {
                let cb = $(form).data('cb');

                let options = {
                    beforeSubmit: function(arr, form, options) {
                        let inputVal = form.find('[type=submit]').val();
                        $(form).find('[type=submit]').val('Please Wait...').prop('disabled', true).data('val', inputVal);
                    },
                    success: function(res, status, xhr, form) {
                        let input = $(form).find('[type=submit]');
                        // $(form).find('[type=submit]').val(input.data('val')).prop('disabled', false);
                        if (callback !== undefined && typeof callback == 'function') {
                        callback(res, form);
                        }
                        if (window[cb] !== undefined && typeof window[cb] == 'function') {
                        window[cb](res, form);
                        }
                    },
                    error: function(res) {
                        let input = $(form).find('[type=submit]');
                        $(form).find('[type=submit]').val(input.data('val')).prop('disabled', false);
                        if (callback !== undefined && typeof callback == 'function') {
                            callback(res, form);
                        }
                        if (window[cb] !== undefined && typeof window[cb] == 'function') {
                            window[cb](res, form);
                        }
                    }
                };
                $(form).ajaxForm(options);
            }
        </script>
        <script>
            function toastr_msg() {
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };
            }
        </script>
        



        <!--end::Page Scripts -->
        @yield('script-dashboard')



    </body>

    <!-- end::Body -->
</html>