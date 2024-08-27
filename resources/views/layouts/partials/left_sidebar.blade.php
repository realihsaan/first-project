<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">Dashboard</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-home-alt'></i>
				</div>
				<div class="menu-title">Dashboard</div>
			</a>
			<ul>
				<li> <a href="index.html"><i class='bx bx-radio-circle'></i>eCommerce</a>
				</li>
				<li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Analytics</a>
				</li>
			</ul>
		</li>
		<li class="menu-label">Vehicles</li>
		<!-- <li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Vehicles</div>
					</a>
				</li>  -->
				<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-cart'></i>
				</div>
				<div class="menu-title">Routes</div>
			</a>
			<ul>
				<li> <a href="{{route('goindex')}}"><i class='bx bx-radio-circle'></i>View Routes </a>
				
				</li>
				<li> <a href="{{route('gocreate')}}"><i class='bx bx-radio-circle'></i> Add Routes</a>
				</li>
			
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-cart'></i>
				</div>
				<div class="menu-title">Vehicles</div>
			</a>
			<ul>
				<li> <a href="{{route('indexpage')}}"><i class='bx bx-radio-circle'></i>View Vehicles </a>
				</li>
				<li> <a href="{{route('manageVehicle')}}"><i class='bx bx-radio-circle'></i> Add Vehicle</a>
				</li>
				<!-- <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Manage Vehicle Group</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i> Vehicle Inspection</a>
						</li>
                        <li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i> Vehicle Track</a>
						</li> -->
			</ul>
		</li>




		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
				</div>
				<div class="menu-title">Vehicle Type</div>
			</a>
			<ul>

				<li> <a href="{{route('typeindex')}}"><i class='bx bx-radio-circle'></i>View</a>
				</li>
				<li> <a href="{{route('typecreate')}}"><i class='bx bx-radio-circle'>Create Type</i></a>
				</li>

			</ul>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
				</div>
				<div class="menu-title">Vehicle Track</div>
			</a>
			<ul>
				<li> <a href="{{route('trackerindex')}}"><i class='bx bx-radio-circle'></i>Vehicle Track </a>
				</li>
				
				</li>
				<!--<li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li> -->
				<!-- <li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a> -->
				<!-- </li>
						<li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
						</li> -->
			</ul>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
				</div>
				<div class="menu-title">Fuel</div>
			</a>
			<ul>
				<li> <a href="{{route('addfule')}}"><i class='bx bx-radio-circle'></i>Add Fuel </a>
				</li>
				<li> <a href="{{route('fuleHistory')}}"><i class='bx bx-radio-circle'></i>Fuel History </a>
				</li>
				
				</li>
				<!--<li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li> -->
				<!-- <li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a> -->
				<!-- </li>
						<li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
						</li> -->
			</ul>
		</li>

		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
				</div>
				<div class="menu-title">Tags/Token</div>
			</a>
			<ul>
				<li> <a href="{{route('tagindex')}}"><i class='bx bx-radio-circle'></i>E-Tags </a>
				</li>
				<li> <a href=" {{route('m-index')}} "><i class='bx bx-radio-circle'></i>M-Tags</a>
				</li>
				<li> <a href="{{route('token_index')}}"><i class='bx bx-radio-circle'></i>Token</a>
				</li>
				
			</ul>
		</li>
		<!-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Bookings</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i> New Bookings</a>
						</li>
						<li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Manage Bookings</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Booking Payments </a>
						</li>
                        <li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Booking Quotations </a>
						</li>
                        <li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Booking Calendar </a>
						</li>
					</ul>
				</li> -->
				<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bx bx-lock"></i>
				</div>
				<div class="menu-title">Parts</div>
			</a>
			<ul>
				<li><a class="has-arrow" href="{{route('createpart')}}"><i class='bx bx-radio-circle'></i>Add Parts </a>
					<!-- <ul>
								<li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-basic-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul> -->
				</li>
				<li><a class="has-arrow" href="{{route('partindex')}}"><i class='bx bx-radio-circle'></i>Manage Parts</a>
					<!-- <ul>
								<li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-cover-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul> -->
				</li>
				<!-- <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Manage Parts Category </a> -->
					<!-- <ul>
								<li><a href="auth-header-footer-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul> -->
				<!-- </li> -->
			</ul>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
				</div>
				<div class="menu-title">Reports</div>
			</a>
			<ul>
				<li> <a href="{{route('goindex')}}"><i class='bx bx-radio-circle'></i> Route Report</a>
				</li>
				<li> <a href="{{route('indexpage')}}"><i class='bx bx-radio-circle'></i>Vehical Report</a>
				</li>
				<li> <a href="{{route('typeindex')}}"><i class='bx bx-radio-circle'></i> Vehical Type</a>
				</li>
				<li> <a href="{{route('trackerindex')}}"><i class='bx bx-radio-circle'></i>Vehical Track</a>
				</li>
				<li> <a href="{{route('addfule')}}"><i class='bx bx-radio-circle'></i> Fule Report</a>
				</li>
				<li> <a href="{{route('tagindex')}}"><i class='bx bx-radio-circle'></i>E-Tags Report</a>
				</li>
				<li> <a href="{{route('m-index')}}"><i class='bx bx-radio-circle'></i>M-Tags  Report</a>
				</li>
				<li> <a href="{{route('token_index')}}"><i class='bx bx-radio-circle'></i> Token Report</a>
				</li>
				<li> <a href="{{route('partindex')}}"><i class='bx bx-radio-circle'></i>Parts Report</a>
				</li>
				<!-- <li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Customer Report</a>
				</li>
				<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Vendor Report</a>
				</li>
				<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Yearly Report</a>
				</li>
				<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Driver Payment Report</a>
				</li> -->

			</ul>
		</li>

		<!-- <li class="menu-label">Forms & Tables</li> -->
		<!-- <li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
				</div>
				<div class="menu-title">Fule</div>
			</a>
			<ul>
				<li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Add Fule</a>
				</li>
				<li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i> Fule History</a>
				</li>

				 <li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
						</li> -->
				<!-- <li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
						</li>
						<li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
						</li> 
			</ul>
		</li> -->
		<!-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Vendor</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Add Vendor</a>
						</li>
						<li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i> Manage Vendor</a>
						</li>
					</ul>
				</li> -->
		<!-- <li class="menu-label">Pages</li> -->
		
		<!-- <li>
					<a href="user-profile.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li> -->
		<!-- <li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li> -->
		<!-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Work Orders</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Add Work Order</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Manage Work Order</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Work Order History </a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Mechanics</a>
						</li>
					</ul>
				</li> -->
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bx bx-error"></i>
				</div>
				<div class="menu-title">Notes</div>
			</a>
			<ul>
				<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Manage Notes</a>
				</li>
				<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Create Notes</a>
				</li>
				<!-- <li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Work Order History </a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Mechanics</a>
						</li> -->
			</ul>
		</li>
		<!-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Service Reminders</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Add Work Order</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Manage Work Order</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Work Order History </a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Mechanics</a>
						</li>
					</ul>
				</li> -->
		<!-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Work Orders</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Add Work Order</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>Manage Work Order</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Work Order History </a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Mechanics</a>
						</li>
					</ul>
				</li> -->
		<!-- <li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li> -->
		<!-- <li>
					<a href="pricing-table.html">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li> -->
		<li class="menu-label">Charts & Maps</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bx bx-line-chart"></i>
				</div>
				<div class="menu-title">Charts</div>
			</a>
			<ul>
				<li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
				</li>
				<li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
				</li>
				<li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
				</li>
			</ul>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bx bx-map-alt"></i>
				</div>
				<div class="menu-title">Maps</div>
			</a>
			<ul>
				<li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
				</li>
				<li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
				</li>
			</ul>
		</li>
		<li class="menu-label">Others</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bx bx-menu"></i>
				</div>
				<div class="menu-title">Menu Levels</div>
			</a>
			<ul>
				<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
							<ul>
								<li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
				<div class="parent-icon"><i class="bx bx-folder"></i>
				</div>
				<div class="menu-title">Documentation</div>
			</a>
		</li>
		<li>
			<a href="https://themeforest.net/user/codervent" target="_blank">
				<div class="parent-icon"><i class="bx bx-support"></i>
				</div>
				<div class="menu-title">Support</div>
			</a>
		</li>
	</ul>
	<!--end navigation-->
</div>