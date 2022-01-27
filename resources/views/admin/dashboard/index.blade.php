@extends('layouts.admin')
@section('content')

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Dashboard</h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
              <div class="dropdown me-2 d-inline-block">
                    <a class="btn btn-light bg-white shadow-sm dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static">
                        <i class="align-middle mt-n1" data-feather="calendar"></i> Today
                        </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <button class="btn btn-primary shadow-sm">
                <i class="align-middle" data-feather="filter">&nbsp;</i>
                </button>
                <button class="btn btn-primary shadow-sm">
                <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-sm-3 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Total Earnings</p>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-sm-3 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Total Earnings</p>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-sm-3 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Total Earnings</p>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-sm-3 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Total Earnings</p>
                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
