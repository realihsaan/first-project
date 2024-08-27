@extends('layouts.master')
@section('title', 'Add Tags')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Tags</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Tags</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn"><a href="{{route('tagindex')}}" class="btn btn-light">View Tags</a></button>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--start stepper one-->

        <h6 class="text-uppercase">Add Tags </h6>
        <hr>
        <div id="stepper1" class="bs-stepper ">
           
            <div class="card ">
                <div class="card-body">
                    <div class="bs-stepper-content">
                        <form onSubmit="return false">
                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                                <h5 class="mb-1">Add Tags</h5>
                                <div class="row g-3">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputUsername" class="form-label"> Vehicle Number  </label>
                                            <input type="text" class="form-control" placeholder="Vehicle Number">
                                          
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputEmail2" class="form-label"> E-Tag Number </label>
                                              <input type="text" class="form-control" placeholder="E-Tag Number    "> 
                                            
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputPassword" class="form-label"> Toll Plaza</label>
											 <input type="text" class="form-control" > 
                                           
                                        </div>
                                    </div>
                                <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">  Amount</label>
                                            <input type="text" class="form-control" placeholder="Amount" >
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Date </label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Time</label>
                                             <input type="time" class="form-control">
                                           
                                        </div>
                                    </div> 
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label for="remarks" class="form-label"> Remarks</label>
                                            <textarea id="remarks"  class="form-control" rows="1"></textarea>
                                            
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="InputCountry" class="form-label">Image</label>
											<input type="file" class="form-control" >
							                

                                        </div>
										
                                      
										<!-- <div class="col-12 col-lg-3">
                                           
											<label for="InputCountry" class="form-label"> Cost/Unit</label>
											<input type="text" class="form-control" placeholder="Unit Price ">
                                        </div> -->
                                    </div> 
								
                                    <!-- <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label"> User</label>
                                            <input type="text" class="form-control">

                                           
                                        </div> -->
                                        <!-- <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Average(Km Per Gallon)</label>
                                            <input type="number" class="form-control">

                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Licence Expiry Date</label>
                                            <input type="date" class="form-control">
                                            
                                        </div> -->
                                    <!-- </div> -->
                                    <!-- <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Initial Mileage(km)</label>
                                            <input type="number" class="form-control">

                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Select Vehicle Group</label>
                                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                                <option selected>---</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Vehicle Image</label>
                                            <input class="form-control" type="file">

                                        </div>
                                    </div> -->
                                    <!-- <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label for="InputCountry" class="form-label">Registration Expiry Date</label>
                                            <input type="date" class="form-control">

                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="InputCountry" class="form-label">Add User defined field</label>
                                            <input type="text" class="form-control" placeholder="Add User defined">
                                            
                                        </div>
                                       
                                    </div> -->
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-3">
                                            <!-- <button class="btn btn-outline-light px-4" onclick="stepper1.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button> -->
                                            <button class="btn btn-light px-4">Add Tags</button>
                                        </div>
                                    </div>

                                </div>

                        </form>
                    </div>

                </div>
            </div>
           
        </div>
 
        <!--end stepper one-->
    </div>
</div>




@endsection