@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <form>
        <div class="card">
          <div class="card-header card_header bg-dark">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="fab fa-gg-circle"></i>All User Information
              </div>
              <div class="col-md-4 card_header_btn">
                <a href="{{url('dashboard/user/add')}}" class="btn btn-sm btn-secondary chb_btn"><i class="fas fa-th"></i> Add User</a>
              </div>
            </div>
          </div>
          <div class="card-body card_body">
            <div class="row">
                <div class="col-md-12">
                  <table id="allDataTable" class="table table-bordered table-striped table-hover custom_table">
                    <thead class="table-dark">
                      <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Photo</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $data)

                      <tr>
                        <td>{{$data->name}}</td>
                        <td></td>
                        <td>{{$data->email}}</td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="btn-group">
                             <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                         </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
          <div class="card-footer card_footer bg-dark text-left">
            <a href="#" class="btn btn-sm btn-success">Print</a>
            <a href="#" class="btn btn-sm btn-secondary">PDF</a>
            <a href="#" class="btn btn-sm btn-primary">Excel</a>
            <a href="#" class="btn btn-sm btn-warning">CSV</a>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
@endsection
