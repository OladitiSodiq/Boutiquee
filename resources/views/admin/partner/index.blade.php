@extends('layouts.admin')

@section('title' , "PhoonePOS Business Partners")

@section('breadcrumb')
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
    }
        /* Styling for the password hinting*/
    /* The message box is hidden by default and shown when the user clicks on the password field */
#message {
    display:none;
  background: #f1f1f1;
  color: #000;
  /* position: relative;
  padding: 10px;
  margin-top: 10px; */

}


#message p {
  margin-left: 20px;
  padding: 4px 40px;
  font-size: 12px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -20px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -20px;
  content: "✖";
}
</style>

<ol class="breadcrumb">
    <li><a href="{{ route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"> Business Partners</li>
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
              <h3 class="box-title">Add a New Business Partner</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ route('partner_create') }}" method="post" role="form">
                {!! csrf_field() !!}

                <!-- text input -->
                <div class="form-group col-xs-6 col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}" >
                    <label>Names:</label>
                    <input type="text" class="form-control" placeholder="" required name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                <div class="form-group col-xs-6 col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}" >
                  <label>Phone:</label>
                  <input type="number" class="form-control" placeholder="" id="phone" required name="phone" value="{{ old('phone') }}" maxlength="11">
                  @if ($errors->has('phone'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="form-group col-xs-6 col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}" >
                  <label>Email:</label>
                  <input type="email" class="form-control" placeholder="" required name="email" value="{{ old('email') }}" >
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group col-md-6">
                  <label>Business Partner Type:</label>
                  <select class="form-control" name="partner" required>
                    <option >-- Select --</option>
                    <option value="Aggregator" {{ (old('partner', "Aggregator")) }}>Aggregator </option>
                    <option value="Super Merchant" {{ (old('partner', "SuperMerchant")) }}>Super Merchant</option>
                    <option value="Franchise" {{ (old('partner', "Franchise")) }}>Franchisee</option>
                    <option value="Terminal Super Admin" {{ (old('partner', "Terminal Super Admin")) }}>Terminal super Admin</option>

                    <option value="Retail Merchants Operator Admin" {{ (old('partner', "Retail Merchants Operator Admin")) }}>Retail Merchants Operator Admin</option>


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
                    <option value="{{$datas->merchantId}}"> {{$datas->merchantId}} </option>
                    @endforeach
                  


                  </select>
                </div>
                <!-- <div class="form-group col-xs-6 col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}" >
                  <label>Merchant Id:</label>
                  <input type="text" class="form-control" placeholder="" id="merchantId"  name="merchantId" value="{{ old('merchantId') }}" maxlength="11">
                  @if ($errors->has('merchantId'))
                      <span class="help-block">
                          <strong>{{ $errors->first('merchantId') }}</strong>
                      </span>
                  @endif
                </div> -->
                <!-- <div class="form-group">
                    <div class="form-group col-xs-6 col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}" >
                    <label>Personal Identification Number (PIN):</label>
                    <input required id="InputPasswordField" {{ ($errors->has('password')) ? 'autofocus' : ''}} name="password"  type="password" class="form-control pl-1"  title="Password must contain 4 digit" placeholder="****">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div id="message">
                    <h6>Password must contain the following:</h6>

                    <p id="number" class="invalid">A <b>number</b></p>

                    <p id="length" class="invalid">Minimum <b>4 characters</b></p>
                </div> -->

                <!-- Status -->


                <div class="form-group pull-right">
                  <br><button  type="submit"  class="btn btn-success"> &nbsp; Add Business Partner &nbsp; </button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- Identification Listing Table -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">

              @if(Session::has('error'))
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong> OOps !</strong> {{ Session::get('error') }}...
              </div>
              @elseif(Session::has('success'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Great !</strong> {{ Session::get('success') }}...
                </div>
              @endif

              <table id="idcard" class="table table-bordered ">
                <thead>
                <tr>
                  <th>SN</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Business Partner</th>
                  <th>Merchant ID</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($staffs as $index => $staff)
                <tr>
                <td>{{$index + 1}}</td>
                <td>{{ $staff->name}}</td>
                <td>{{$staff->email}}</td>
                  <td>

                    {{ $staff->phone}}
                  </td>
                  <td>{{$staff->partner}}</td>
                  <td>{{$staff->merchantId}}</td>
                <td>{{$staff->created_at->diffForHumans()}}</td>
                  <td>
                    <form action="{{ route('partner_delete', $staff->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('partner_show', $staff->id) }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                        <button class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>

                    </form>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection
@push('script')
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
<script>
  $(function () {
    $('#idcard').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>

$(document).ready(function() {
    $("InputPasswordField").attr({
       "max" : 4,        // substitute your own
      //  "min" : 2          // values (or variables) here
    });
});

<script>
    var myInput = document.getElementById("InputPasswordField");

    var number = document.getElementById("number");

    var length = document.getElementById("length");




    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {


        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
        }



        // Validate length
        if(myInput.value.length >= 4) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        }
    }
</script>
@endpush
