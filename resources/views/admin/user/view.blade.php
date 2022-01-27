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
                <a href="{{url('dashboard/user')}}" class="btn btn-sm btn-secondary chb_btn"><i class="fas fa-th"></i> All User</a>
              </div>
            </div>
          </div>
          <div class="card-body card_body">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <table class="table table-bordered table-striped table-hover custom_view_table">
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td>Asif Ahamed</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td>01516788837</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>asifshezan7@gmail.com</td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-2"></div>
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
