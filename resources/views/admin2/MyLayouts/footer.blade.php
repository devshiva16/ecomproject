<footer class="hiddenprint">
                Wizcrew Technologies &copy; {{date('Y')}}
                <div class="footer-links pull-right">
                	<a href="mailto:pankaj@wizcrew.com">Get Support</a>
                </div>
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	<div id="contextMenu" class="dropdown clearfix">
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
		        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
		    </ul>
		</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
	<script src="{{asset('admin2/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/nifty-modal/js/classie.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
	<script src="{{asset('admin2/assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{asset('admin2/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin2/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
	<!--<script src="{{asset('admin2/assets/libs/jquery-icheck/icheck.min.js')}}"></script>-->

	<!-- Demo Specific JS Libraries -->
	<script src="{{asset('admin2/assets/libs/prettify/prettify.js')}}"></script>

	<script src="{{asset('admin2/assets/js/init.js')}}"></script>
		<!-- Page Specific JS Libraries -->
    <script>
        $(document).ready(function () {
            setTimeout(function(){
                $('#success-message').hide();
            }, 4000);

            setTimeout(function(){
                $('#error-message').hide();
            }, 4000);

            $("#change-pass").on("click", function(e){
                if($(this). prop("checked") == true){
                    $('#row-pass').show();
                    $('#row-passc').show();
                    $('#cpass').val('yes');
                }
                else{
                    $('#row-pass').hide();
                    $('#row-passc').hide();
                    $('#cpass').val('no');
                }
            });

        });
    </script>

	@stack('ExtraJs')

