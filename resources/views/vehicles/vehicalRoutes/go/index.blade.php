@extends('layouts.master')
@section('title', 'Vehicles Routes ')
@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Vehicles Routes</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"> Vehicles Route</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn"><a href="{{route('gocreate')}}" class="btn btn-light">Add Route</a></button>
							
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				
				
				<h6 class="mb-0 text-uppercase"> Vehicles Routes </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Vehicles </th>
										<th>Driver</th>
										<th> Meter</th>
										<th>Vehicles No</th>
										<th> Date</th>
										<th>Time </th>
										<th>Place </th>
										<th>Remarks</th>
										<th>User Name </th>
										<th>Vehicle Status </th>


									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
										<td>$320,800</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
									</tr>
									<tr>
										<td>Garrett Winters</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$320,800</td>
										<td>$170,750</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
										<td>$170,750</td>
									</tr>
									
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection