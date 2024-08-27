@extends('layouts.master')
@section('title', 'Fule History ')
@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"> Fule History</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">  Fule History</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn"><a href="{{route('addfule')}}" class="btn btn-light">Add Fule</a></button>
							
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				
				
				<h6 class="mb-0 text-uppercase">  Fule History </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Vehicles name </th>
										<th>Date </th>
										<th>Qty </th>
										<th>Cost </th>
										<th>Meter </th>
										<th>Consumption </th>
										<th>State/Province </th>
										<th>Image </th>

										

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>Edinburgh</td>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>Edinburgh</td>
										<td>Edinburgh</td>
										
									</tr>
									<tr>
										<td>Garrett Winters</td>
										<td>Edinburgh</td>
										<td>Accountant</td>
										<td>Tokyo</td>
                                        <td>Tiger Nixon</td>
                                        <td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>Edinburgh</td>
										
										
									</tr>
									
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection