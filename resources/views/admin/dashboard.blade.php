@extends('layouts.app')

@section('title')
Dashboard- Admin Panel
@endsection

@section('content')
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Icon Cards-->
        <div class="row">
            <x-dashboard.cards.user-card bg="primary" totalCount="{{ $totalEmployees }}" bodyTitle="Employees"  route="{{ route('admin.employees.index') }}" footerTitle="Employees" />
            <x-dashboard.cards.user-card bg="success" totalCount="{{ $totalPatients }}" bodyTitle="Patients"  route="{{ route('admin.patients.index') }}" footerTitle="Patients" />
            <x-dashboard.cards.user-card bg="info" totalCount="{{ $totalAppointments }}" bodyTitle="Appointments"  route="{{ route('admin.appointments.index') }}" footerTitle="Appointments" /> 
            <x-dashboard.cards.user-card bg="warning" totalCount="{{ $totalEmployees }}" bodyTitle="Earning"  route="{{ route('admin.employees.index') }}" footerTitle="Earning" />
            <x-dashboard.cards.user-card bg="danger" totalCount="{{ $totalEmployees }}" bodyTitle="Cost"  route="{{ route('admin.employees.index') }}" footerTitle="Cost" />
            <x-dashboard.cards.user-card bg="success" totalCount="{{ $totalEmployees }}" bodyTitle="Profit"  route="{{ route('admin.employees.index') }}" footerTitle="Profit" />
        </div>
    </div>
</div>
@endsection
