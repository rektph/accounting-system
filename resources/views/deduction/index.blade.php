@extends('layouts.app')

@section('content')
<div class="row justify-content-row">
    <div class="col-12">
        @card
            @slot('title')
                Edit Deduction: {{$payslip->employee->name}}
            @endslot
            @slot('header')
                <div>
                    <a href="{{route('payroll.payslip', ['payroll_code' => $payslip->payroll_code, 'employee_id' => $payslip->employee->id])}}"
                        class="btn btn-danger"
                        >
                        Return
                    </a>
                    <a href="{{route('deduction.create', ['payroll_code' => $payslip->payroll_code, 'employee_id' => $payslip->employee->id])}}"
                        class="btn btn-success"
                        >
                        Create
                    </a>
                </div>
            @endslot
            @slot('body')
                @if(!count($payslip->deductions))
                    <h6>No Deduction Found</h6>
                @else
                    <div class="table-responsive">
                        <table id="deduction-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Deduction Name</th>
                                    <th style="width: 20%">Amount</th>
                                    <th style="width: 12%">Type</th>
                                    <th style="width: 18%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payslip->deductions as $deduction)
                                    <tr>
                                        <td class="align-middle">{{$deduction->name}}</td>
                                        <td class="align-middle">{{$deduction->amount}}</td>
                                        <td class="align-middle">{{$deduction->type}}</td>
                                        <td class="align-middle">
                                            <form action="{{route('deduction.destroy', ['deduction' => $deduction->id, 'payroll_code' => $payslip->payroll_code, 'employee_id' => $payslip->employee->id])}}" method="post" id="delete-form">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{route('deduction.edit', ['id' => $deduction->id])}}" role="button" class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endslot
        @endcard
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#deduction-table').DataTable();
    });
</script>
@endsection