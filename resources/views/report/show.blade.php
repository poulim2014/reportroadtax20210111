
@extends('layouts.master')
@section('menu')
@include('sidebar.report')
@endsection
@section('contant')
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Data / Table</li>
        </ul>
    </div>
</div>
<br>
<section class="forms">
    <div class="container-fluid">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form  action="{{route('show')}}" method ="POST">

            @csrf
            <br>
            <div class="container">
                <div class="row">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label for="date" class="col-form-label col-sm-2">Date Of Birth From</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required/>
                            </div>
                            <label for="date" class="col-form-label col-sm-2">Date Of Birth To</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control input-sm" id="toDate" name="toDate" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-form-label col-sm-2">Other</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control input-sm" id="other" name="other" placeholder="Search other..." />


                                <select name="filter_gender" id="filter_gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>


                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn" name="search" title="Search"><img src="https://img.icons8.com/android/24/000000/search.png"/></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </form>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Date Of Brith</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Position</th>
                    <th>Salary</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="id"></td>
                    <td class="name"></td>
                    <td class="sex"></td>
                    <td class="dateOfBirth"></td>
                    <td class="email"></td>
                    <td class="phone"></td>
                    <td class="jobPosition"></td>
                    <td class="salary"></td>

                </tr>

            </tbody>
        </table>
    </div>
</section>

<!-- Modal Update-->
<div class="modal fade" id="update" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-write">
                <h4 class="modal-title">Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <form action="{{route('update')}}" method = "post"><!-- form delete -->
                {{ csrf_field() }}
                <input type ="text"hidden class="col-sm-9 form-control" id="id" name="id" value="" />
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_name"name="name" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sex</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_sex"name="sex" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" id="e_dateOfBirth"name="dateOfBirth" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_email"name="email" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_phone"name="phone" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Job Position</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_jobPosition"name="jobPosition" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Salary</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_salary"name="salary" class="form-control" value="" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                    <button type="submit" id=""name="" class="btn btn-success  waves-light"><i class="icofont icofont-check-circled"></i>Update</button>
                </div>
            </form><!-- form delete end -->
        </div>
    </div>
</div> <!-- End Modal Delete-->
@endsection

