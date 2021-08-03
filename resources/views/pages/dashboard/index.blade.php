@php $active = 'Dashboard'; @endphp
@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    <div class="card">
        <div class="card-body pt-4">
            <h5 class="card-title">Accounts</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <small>Active accounts we can see on the dashboard</small>
            </h6>  

            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Account
            </button>

            <div class="table-responsivex mt-5">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <td></td>
                            <td class="text-muted fs-6"><small>FULL NAME</small></td>
                            <td class="text-muted fs-6"><small>EMAIL ADDRESS</small></td>
                            <td class="text-muted fs-6"><small>LOCATION</small></td>
                            <td width="5%"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i <= 5; $i++)
                            @php
                                
                            @endphp
                            <tr>
                                <td>{{ $i+ 1}}</td>
                                <td></td>
                                <td>jd2021@gmail.com</td>
                                <td>Philippines</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr> 
                        @endfor
                    </tbody>
                </table>

                <nav aria-label="...">
                    <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
