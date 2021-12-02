@extends('layouts.admin')

@section('title', 'Password Update')

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
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Password Update</li>
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
                        <h3 class="box-title">Update your Password</h3>
                    </div>
                    @if (Session::has('error'))
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
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('password_update', Auth::guard('admin')->user()->id) }}" method="POST"
                            role="form">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-xs-6 col-md-6 {{ $errors->has('old') ? ' has-error' : '' }}">
                                <label>Old Password</label>
                                <input type="password" class="form-control"  id="InputPasswordField1"  placeholder="" required name="old"
                                    value="{{ old('old') }}">
                                @if ($errors->has('old'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                            <div class="form-group col-xs-6 col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>New Password</label>
                                <input type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder = "******" name="password" id="InputPasswordField2"
                                    value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                         
                            <div
                                class="form-group col-xs-6 col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control"  id="InputPasswordField" placeholder="" required name="password_confirmation"
                                    value="{{ old('password_confirmation') }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Status -->
                           
                                <div id="message" class="form-group col-xs-6 col-md-6">
                                    <h6>Password must contain the following:</h6>
                                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                    <p id="number" class="invalid">A <b>number</b></p>
                                    <p id="specialchar" class="invalid">A <b>special character</b> symbol </p>
                                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                </div>
                        


                            <div class="form-group pull-right">
                                <br><button type="submit" class="btn btn-success"> &nbsp; Update Password &nbsp; </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
@push('script')
<script> 
    var myInput = document.getElementById("InputPasswordField");
    var myInput1 = document.getElementById("InputPasswordField1");
    var myInput2 = document.getElementById("InputPasswordField2");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var specialchar = document.getElementById('specialchar');
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }
    myInput1.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }
    myInput2.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }


    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }
    myInput1.onblur = function() {
        document.getElementById("message").style.display = "none";
    }
    myInput2.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
        } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
        }

        //validate special characters
        var specialCharacter = /[@$!%*?&,.?:;#'{}|<>]/g;
        if(myInput.value.match(specialCharacter)) {
        specialchar.classList.remove("invalid");
        specialchar.classList.add("valid");
        } else {
        specialchar.classList.remove("valid");
        specialchar.classList.add("invalid");
        }


        // Validate length
        if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        }
    }

    myInput1.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput1.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
        } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput1.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput1.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
        }

        //validate special characters
        var specialCharacter = /[@$!%*?&,.?:;#'{}|<>]/g;
        if(myInput1.value.match(specialCharacter)) {
        specialchar.classList.remove("invalid");
        specialchar.classList.add("valid");
        } else {
        specialchar.classList.remove("valid");
        specialchar.classList.add("invalid");
        }


        // Validate length
        if(myInput1.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        }
    }

    myInput2.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput2.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
        } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput2.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput2.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
        }

        //validate special characters
        var specialCharacter = /[@$!%*?&,.?:;#'{}|<>]/g;
        if(myInput2.value.match(specialCharacter)) {
        specialchar.classList.remove("invalid");
        specialchar.classList.add("valid");
        } else {
        specialchar.classList.remove("valid");
        specialchar.classList.add("invalid");
        }


        // Validate length
        if(myInput2.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        }
    }
</script>
@endpush  
