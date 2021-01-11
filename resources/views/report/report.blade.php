
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

            <form  action="{{route('search')}}" method ="POST">

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


                                    <select name="filter_gender" id="filter_gender" class="form-control">
                                        <option value="">ເລືອກແຂວງ</option>
                                        <option value="Male">ກໍາແພງນະຄອນ</option>
                                        <option value="Female">ບໍ່ແກ້ວ</option>
                                        <option value="Male">ໄຊຍະບູລີ</option>
                                        <option value="Female">ຊຽງຂວາງ</option>
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
                        <th>ທະບຽນ</th>
                        <th>ແຂວງ</th>
                        <th>ວັນທີ</th>
                        <th>ລົດ</th>
                        <th>ແຮງມ້າ</th>
                        <th>ຈຳນວນເງິນ</th>
                        <th>ເລກທິໃບບິນ</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($query as $value)
                    <tr>
                        <td class="id">{{$value->id}}</td>
                        <td class="name">{{$value->name}}</td>
                        <td class="sex">{{$value->sex}}</td>
                        <td class="dateOfBirth">{{$value->date_of_birth}}</td>
                        <td class="email">{{$value->email}}</td>
                        <td class="phone">{{$value->phone}}</td>
                        <td class="jobPosition">{{$value->job_position}}</td>
                        <td class="salary">$ {{$value->salary}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

