@extends('layouts.plugins')

@section('content')
{{--    <!-- Page Wrapper -->--}}
{{--    <div class="">--}}
{{--        <div class="page-wrapper">--}}
{{--            <!-- Page Content -->--}}
{{--            <div class="content container-fluid" id="app">--}}
{{--                <!-- Page Header -->--}}
{{--                <div class="page-header">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col" style="margin-left: -222px;">--}}
{{--                            <h3 class="page-title">Payslip</h3>--}}
{{--                            <ul class="breadcrumb">--}}
{{--                                <li class="breadcrumb-item"><a href="{{ url('admin/payroll') }}">Dashboard</a></li>--}}
{{--                                <li class="breadcrumb-item active">Payslip</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto float-right ml-auto">--}}
{{--                            <div class="btn-group btn-group-sm">--}}
{{--                                <button class="btn btn-white">CSV</button>--}}
{{--                                <button class="btn btn-white"><a href=""@click.prevent="printme" target="_blank">PDF</a></button>--}}
{{--                                <button class="btn btn-white"><i class="fa fa-print fa-lg"></i><a href="" @click.prevent="printme" target="_blank"> Print</a></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row" style="margin-left: -240px;">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h4 class="payslip-title">Payslip for the month of {{ \Carbon\Carbon::now()->format('M') }}   {{ \Carbon\Carbon::now()->year }}  </h4>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6 m-b-20">--}}
{{--                                            <!--Profile Picture-->--}}
{{--                                            @if(!empty($users->avatar))--}}
{{--                                                <img src="{{ URL::to('/assets/images/'. $users->avatar) }}" class="inv-logo" alt="{{ $users->name }}">--}}
{{--                                            @endif--}}
{{--                                            <ul class="list-unstyled mb-0">--}}
{{--                                                <li>{{ $users->name }}</li>--}}
{{--                                                <li>{{ $users->address }}</li>--}}
{{--                                                <li>{{ $users->country }}</li>--}}
{{--                                                <li>tq</li>--}}
{{--                                                <li>tq</li>--}}
{{--                                                <li>tq</li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6 m-b-20">--}}
{{--                                            <div class="invoice-details">--}}
{{--                                                <h3 class="text-uppercase">Payslip #49029</h3>--}}
{{--                                                <ul class="list-unstyled">--}}
{{--                                                    <li>Salary Month: <span>{{ \Carbon\Carbon::now()->format('M') }}  , {{ \Carbon\Carbon::now()->year }}  </span></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-12 m-b-20">--}}
{{--                                            <ul class="list-unstyled">--}}
{{--                                                <li><h5 class="mb-0"><strong>{{ $users->name }}</strong></h5></li>--}}
{{--                                                <li><span>{{ $users->position }}</span></li>--}}
{{--                                                <li>Employee ID: {{ $users->user_id }}</li>--}}
{{--                                                <li>Joining Date: {{ $users->join_date }}</li>--}}
{{--                                                <li><h5 class="mb-0"><strong>Name</strong></h5></li>--}}
{{--                                                <li><span>Position</span></li>--}}
{{--                                                <li>Employee ID: ID</li>--}}
{{--                                                <li>Joining Date: Date</li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div>--}}
{{--                                                <h4 class="m-b-10"><strong>Earnings</strong></h4>--}}
{{--                                                <table class="table table-bordered">--}}
{{--                                                    <tbody>--}}
{{--                                                    --}}{{--<?php--}}
{{--                                                    $a =  (int)$users->basic;--}}
{{--                                                    $b =  (int)$users->hra;--}}
{{--                                                    $c =  (int)$users->conveyance;--}}
{{--                                                    $e =  (int)$users->allowance;--}}
{{--                                                    $Total_Earnings   = $a + $b + $c + $e;--}}
{{--                                                    ?>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Basic Salary</strong> <span class="float-right">${{ $users->basic }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-right">${{ $users->hra }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Conveyance</strong> <span class="float-right">${{ $users->conveyance }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Other Allowance</strong> <span class="float-right">${{ $users->allowance }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Total Earnings</strong> <span class="float-right"><strong>$ <?php echo $Total_Earnings ?></strong></span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Basic Salary</strong> <span class="float-right">$ Basic</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-right">$ HRA</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Conveyance</strong> <span class="float-right">$ Convetance</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Other Allowance</strong> <span class="float-right">$ Allowance</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Total Earnings</strong> <span class="float-right"><strong>$ Dont Know</strong></span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div>--}}
{{--                                                <h4 class="m-b-10"><strong>Deductions</strong></h4>--}}
{{--                                                <table class="table table-bordered">--}}
{{--                                                    <tbody>--}}
{{--                                                    --}}{{--<?php--}}
{{--                                                    $a =  (int)$users->tds;--}}
{{--                                                    $b =  (int)$users->prof_tax;--}}
{{--                                                    $c =  (int)$users->esi;--}}
{{--                                                    $e =  (int)$users->labour_welfare;--}}
{{--                                                    $Total_Deductions   = $a + $b + $c + $e;--}}
{{--                                                    ?>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="float-right">${{ $users->tds }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Provident Fund</strong> <span class="float-right">${{ $users->prof_tax }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>ESI</strong> <span class="float-right">${{ $users->esi }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Loan</strong> <span class="float-right">${{ $users->labour_welfare }}</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Total Deductions</strong> <span class="float-right"><strong>$<?php echo $Total_Deductions;?></strong></span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="float-right">$Tax</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Provident Fund</strong> <span class="float-right">$Prof Tax</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>ESI</strong> <span class="float-right">$Esi</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Loan</strong> <span class="float-right">$Welfare</span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td><strong>Total Deductions</strong> <span class="float-right"><strong>$walao</strong></span></td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-12" >--}}
{{--                                            <p><strong>Net Salary: $salary</strong> (Fifty nine thousand six hundred and ninety eight only.)</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Page Content -->--}}
{{--            </div>--}}
{{--            <!-- /Page Wrapper -->--}}
{{--        </div>--}}

<div class="content-wrapper">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center lh-1 mb-2">
                <h6 class="fw-bold">Payslip</h6> <span class="fw-normal">Payment slip for the month of June 2021</span>
            </div>
            <div class="d-flex justify-content-end"> <span>Working Branch:ROHINI</span> </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">EMP Code</span> <small class="ms-3">39124</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">Ashok</small> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">101523065714</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">NOD</span> <small class="ms-3">28</small> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">ESI No.</span> <small class="ms-3"></small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">SBI</small> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Designation</span> <small class="ms-3">Marketing Staff (MK)</small> </div>
                        </div>
                        <div class="col-md-6">
                            <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******0701</small> </div>
                        </div>
                    </div>
                </div>
                <table class="mt-4 table table-bordered">
                    <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Earnings</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Deductions</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Basic</th>
                        <td>16250.00</td>
                        <td>PF</td>
                        <td>1800.00</td>
                    </tr>
                    <tr>
                        <th scope="row">DA</th>
                        <td>550.00</td>
                        <td>ESI</td>
                        <td>142.00</td>
                    </tr>
                    <tr>
                        <th scope="row">HRA</th>
                        <td>1650.00 </td>
                        <td>TDS</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <th scope="row">WA</th>
                        <td>120.00 </td>
                        <td>LOP</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <th scope="row">CA</th>
                        <td>0.00 </td>
                        <td>PT</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <th scope="row">CCA</th>
                        <td>0.00 </td>
                        <td>SPL. Deduction</td>
                        <td>500.00</td>
                    </tr>
                    <tr>
                        <th scope="row">MA</th>
                        <td>3000.00</td>
                        <td>EWF</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Sales Incentive</th>
                        <td>0.00</td>
                        <td>CD</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Leave Encashment</th>
                        <td>0.00</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Holiday Wages</th>
                        <td>500.00</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Special Allowance</th>
                        <td>100.00</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Bonus</th>
                        <td>1400.00</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <th scope="row">Individual Incentive</th>
                        <td>2400.00</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr class="border-top">
                        <th scope="row">Total Earning</th>
                        <td>25970.00</td>
                        <td>Total Deductions</td>
                        <td>2442.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : 24528.00</span> </div>
                <div class="border col-md-8">
                    <div class="d-flex flex-column"> <span>In Words</span> <span>Twenty Five thousand nine hundred seventy only</span> </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="d-flex flex-column mt-2"> <span class="fw-bolder">For Kalyan Jewellers</span> <span class="mt-4">Authorised Signatory</span> </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection