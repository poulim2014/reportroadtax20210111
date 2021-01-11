@extends('layouts.master')
@section('menu')
@include('sidebar.employee')
@endsection
@section('contant')

    <!-- Breadcrumb-->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active">Forms / New</li>
            </ul>
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header> 
                <h1 class="h3 display">Forms Employee</h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Information Employee</h4>
                        </div>
                       
                        <div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form id="validateForm" method="POST" action="{{route('form/employee/save')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sex</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="sex" name="sex">
                                            <option disabled selected>Choose sex</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Birth</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="Enter date of birth">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Job Position</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="jobPosition" name="jobPosition">
                                            <option disabled selected>Choose job position</option>
                                            <option value="Web Designer">Web Designer</option>
                                            <option value="Web Developer">Web Developer</option>
                                            <option value="Mobile Developer">Mobile Developer</option>
                                            <option value="Java Developer">Java Developer</option>
                                            <option value="C# Developer">C# Developer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Salary</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-2">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            <from>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection