@extends('layouts.master')
@section('title', 'Add Type')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Types</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Type</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn"><a href="{{route('typeindex')}}" class="btn btn-light">View Types</a></button>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--start stepper one-->

        <h6 class="text-uppercase">Add Types </h6>
        <hr>
        <div id="stepper1" class="bs-stepper ">
           
            <div class="card ">
                <div class="card-body">
                    <div class="bs-stepper-content">
                        <form onSubmit="return false">
                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                                <h5 class="mb-1">Add Types</h5>
                                <div class="row g-3">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputUsername" class="form-label"> Vehicle Types  </label>
                                            <input type="text" class="form-control" placeholder="Vehicle Types">
                                            <!-- <select class="form-select" id="InputCountry" aria-label="Default select example">
                                                <option selected>BMW</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> -->
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputEmail2" class="form-label">Display Name </label>
                                              <input type="text" class="form-control" placeholder=" Display Name    "> 
                                            <!-- <select class="form-select" id="InputCountry" aria-label="Default select example">
                                                <option selected>---</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> -->
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputPassword" class="form-label">    No Of Seats</label>
                                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                                <option selected>---</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label"> Meter Reading</label>
                                            <input type="text" class="form-control" placeholder="MeterReading" >
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Date </label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Time</label>
                                             <input type="time" class="form-control">
                                           
                                        </div>
                                    </div> -->
                                    <!-- <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Place</label>
                                              <input type="text" class="form-control" placeholder=" Place">
							                   
						
                                            
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label">Action</label>
                                           <select class="form-select" id="InputCountry" aria-label="Default select example">
                                                <option value="2">In</option>
                                                <option value="3">Out</option>
                                            </select>

                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="InputCountry" class="form-label"> Remarks</label>
                                            <textarea class="form-control" rows="1"></textarea>
                                        </div>
                                    </div> -->
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
                                            <button class="btn btn-light px-4">Add</button>
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