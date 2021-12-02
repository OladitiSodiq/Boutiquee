@extends('layouts.admin')

@section('title' , 'Update PhoonePOS Business Partners')


@section('breadcrumb')

<ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route('staff')}}"> Business Partners</a></li>
    <li class="active">Update {{ ucwords($staff->firstname) }}</li>
  </ol>
@endsection


@section('body')
 <!-- Main content -->
    <section class="content">
        <!-- Add New Identification  -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Update Business Partners</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ route('partner_update', $staff->id) }}" method="post" role="form">
                {!! csrf_field() !!}
                @method('PUT')

                <!-- text input -->
                <div class="form-group col-xs-6 col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}" >
                    <label>Names:</label>
                    <input type="text" class="form-control" placeholder="" required name="name" value="{{ $staff->name }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group col-xs-6 col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}" >
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="" required name="phone" value="{{ $staff->phone }}">
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group col-xs-6 col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}" >
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="" required name="email" value="{{ $staff->email }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label>Business Partner</label>
                    <select class="form-control" name="partner">

                      <option value="Aggregator" {{$staff->partner=="Aggregator"?"selected":""}}>Aggregator </option>
                      <option value="Super Merchant" {{$staff->partner=="Super Merchant"?"selected":""}}>Super Merchant</option>
                      <option value="Franchise" {{$staff->partner=="Franchise"?"selected":""}}>Franchisee</option>
                      <option value="Terminal Super Admin" {{$staff->partner=="Terminal Super Admin"?"selected":""}}>Terminal Super Admin</option>

                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Merchantt ID:</label>
                    <select class="form-control" name="merchantId" required>
                      <option >-- Select --</option>
                      @php
                        $data = DB::table('terminaldetails')->select('merchantId')->distinct()->get();

                      @endphp
                      @foreach($data as $datas)
                      <option value="{{$datas->merchantId}}" {{$staff->merchantId ? 'selected' : ''}}> {{$datas->merchantId}} </option>
                      @endforeach
                    


                    </select>
                  </div>
                  {{-- <div class="form-group col-xs-6 col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}" >
                    <label>Pin</label>
                    <input type="text" class="form-control" placeholder="" required name="password" value="">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div> --}}

                <div class="form-group pull-right">
                  <br><button  type="submit"  class="btn btn-success"> &nbsp; Update &nbsp; </button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
@endsection
