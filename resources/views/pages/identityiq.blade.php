@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', 'Client Register')

    {{-- vendor style --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/materialize-stepper/materialize-stepper.min.css') }}">
@endsection
{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/form-wizard.css') }}">
    <style>
        ul.stepper.horizontal .step .step-content .step-actions {
            bottom: initial;
        }

    </style>
@endsection

{{-- page content --}}
@section('content')
    <div class="section section-form-wizard">
        <div class="card">
            <div class="card-content">
                <p class="caption mb-0">
                    CREATE CLIENT ACCOUNT.</p>
            </div>
        </div>

        <!-- Horizontal Stepper -->
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content pb-0">
                        <div class="card-header mb-2">
                            {{-- <h4 class="card-title">Personal Information</h4>
                            --}}
                        </div>

                        <ul class="stepper horizontal" id="horizStepper">
                            <li class="step active">
                                <div class="step-title waves-effect">Step 1</div>
                                <div class="step-content">
                                    <h4 class="card-title">CREATE YOUR ACCOUNT</h4>
                                    <div class="row">
                                        <div class="input-field col m3 s12">
                                            <div class="select-wrapper">
                                                <select tabindex="-1" name="suffix" id="suffix">
                                                    <option value="">Suffix</option>
                                                    <option value="Sr" selected>Sr</option>
                                                    <option value="Jr">Jr</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                </select>
                                            </div>
                                            <label>Title</label>
                                        </div>
                                        <div class="input-field col m3 s12">
                                            <label for="firstName">First Name: <span class="red-text">*</span></label>
                                            <input type="text" id="firstName" name="firstName" class="validate" required
                                                {{-- value="{{ old('firstName') }}"
                                                --}} value="Tes">
                                        </div>
                                        <div class="input-field col m3 s12">
                                            <label for="middleName">Middle Name: <span class="red-text">*</span></label>
                                            <input type="text" id="middleName" class="validate" name="middleName" required
                                                {{-- value="{{ old('middleName') }}"
                                                --}} value="Ting">
                                        </div>
                                        <div class="input-field col m3 s12">
                                            <label for="lastName">Last Name: <span class="red-text">*</span></label>
                                            <input type="text" id="lastName" class="validate" name="lastName" required
                                                {{-- value="{{ old('lastName') }}"
                                                --}} value="Ric">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <label for="email">Email: <span class="red-text">*</span></label>
                                            <input type="email" class="validate" name="email" id="email" required
                                                {{-- value="{{ old('email') }}"
                                                --}} value="jumbaeric@gmail.com">
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <label for="firstName">Username: <span class="red-text">*</span></label>
                                            <input type="text" id="username" name="username" class="validate" required
                                                {{-- value="{{ old('username') }}"
                                                --}} value="jumbaeric@gmail.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <label for="password">Password: <span class="red-text">*</span></label>
                                            <input type="password" class="validate" name="userPassword" id="password"
                                                required value="Testing@123">
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <label for="firstName">Confirm Password: <span class="red-text">*</span></label>
                                            <input type="password" id="password" name="confirmUserPassword" class="validate"
                                                required value="Testing@123">
                                        </div>
                                    </div>
                                    <h4 class="card-title">CURRENT ADDRESS</h4>
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <label for="address">Address: <span class="red-text">*</span></label>
                                            <input type="text" class="validate" name="address" id="address" required
                                                {{-- value="{{ old('address') }}"
                                                --}} value="PO BOX, ADDISON, TX">
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <label for="city">City: <span class="red-text">*</span></label>
                                            <input type="text" id="city" name="city" class="validate" required
                                                {{-- value="{{ old('city') }}"
                                                --}} value="Addison">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <div class="select-wrapper">
                                                <select name="state" id="state" tabindex="-1" placeholder="*State" required>
                                                    <option value="">*Select Your State</option>
                                                    <option selected value="AA">AA</option>
                                                    <option value="AE">AE</option>
                                                    <option value="AK">AK</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AP">AP</option>
                                                    <option value="AR">AR</option>
                                                    <option value="AZ">AZ</option>
                                                    <option value="CA">CA</option>
                                                    <option value="CO">CO</option>
                                                    <option value="CT">CT</option>
                                                    <option value="DC">DC</option>
                                                    <option value="DE">DE</option>
                                                    <option value="FL">FL</option>
                                                    <option value="GA">GA</option>
                                                    <option value="GU">GU</option>
                                                    <option value="HI">HI</option>
                                                    <option value="IA">IA</option>
                                                    <option value="ID">ID</option>
                                                    <option value="IL">IL</option>
                                                    <option value="IN">IN</option>
                                                    <option value="KS">KS</option>
                                                    <option value="KY">KY</option>
                                                    <option value="LA">LA</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MD">MD</option>
                                                    <option value="ME">ME</option>
                                                    <option value="MI">MI</option>
                                                    <option value="MN">MN</option>
                                                    <option value="MO">MO</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="NC">NC</option>
                                                    <option value="ND">ND</option>
                                                    <option value="NE">NE</option>
                                                    <option value="NH">NH</option>
                                                    <option value="NJ">NJ</option>
                                                    <option value="NM">NM</option>
                                                    <option value="NV">NV</option>
                                                    <option value="NY">NY</option>
                                                    <option value="OH">OH</option>
                                                    <option value="OK">OK</option>
                                                    <option value="OR">OR</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RI">RI</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SD">SD</option>
                                                    <option value="TN">TN</option>
                                                    <option value="TX">TX</option>
                                                    <option value="UT">UT</option>
                                                    <option value="VA">VA</option>
                                                    <option value="VI">VI</option>
                                                    <option value="VT">VT</option>
                                                    <option value="WA">WA</option>
                                                    <option value="WI">WI</option>
                                                    <option value="WV">WV</option>
                                                    <option value="WY">WY</option>
                                                </select>
                                            </div>
                                            <label>State</label>
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <label for="zip">Zip: <span class="red-text">*</span></label>
                                            <input type="text" class="validate" name="zip" id="zip" required
                                                {{-- value="{{ old('zip') }}"
                                                --}} value="75001">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <label for="phone">Phone: <span class="red-text">*</span></label>
                                            <input type="number" class="validate" name="phone" id="phone" required
                                                {{-- value="{{ old('phone') }}"
                                                --}} value="3103569261">
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <div class="row">
                                            <div class="col m4 s12 mb-3">
                                                <button class="red btn btn-reset" type="reset">
                                                    <i class="material-icons left">clear</i>Reset
                                                </button>
                                            </div>
                                            <div class="col m4 s12 mb-3">
                                                <button class="btn btn-light previous-step" disabled>
                                                    <i class="material-icons left">arrow_back</i>
                                                    Prev
                                                </button>
                                            </div>
                                            <div class="col m4 s12 mb-3">
                                                <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit" data-feedback="submitPersonalInfo">
                                                    Next
                                                    <i class="material-icons right">arrow_forward</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect">Step 2</div>
                                <div class="step-content">
                                    <h4 class="card-title">BILLING INFORMATION</h4>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <label for="creditCardNumber">Credit Card Number: <span
                                                    class="red-text">*</span></label>
                                            <input type="text" class="validate" id="creditCardNumber"
                                                name="creditCardNumber"
                                                value="{{ old('creditCardNumber')}}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m4 s12">
                                            <div class="select-wrapper">
                                                <select name="ccExpDate" id="ccExpDate" tabindex="25"
                                                    placeholder="*Expiration Month" required>
                                                    <option value="">*Select Expiration Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                            <label>Exp Month</label>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            <div class="select-wrapper">
                                                <select name="ccExpYear" id="ccExpYear" tabindex="26" placeholder="*Year"
                                                    class="error-ctrl" required>
                                                    <option value="">*Select Expiration Year</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                </select>
                                            </div>
                                            <label>Exp Year</label>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            <label for="cvv">CVV: <span class="red-text">*</span></label>
                                            <input type="text" class="validate" id="cvv" name="ccCvv" required>
                                        </div>
                                    </div>
                                    <h4 class="card-title">IDENTITY VERIFICATION</h4>
                                    <div class="row">
                                        <div class="input-field col m4 s12">
                                            <label for="ssn">Social Security Number:</label>
                                            <input type="text" class="validate" id="ssn" name="ssn"
                                                value="{{ old('ssn')}}"
                                                required>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            <label for="confirmSsn">Confirm SSN:</label>
                                            <input type="text" class="validate" id="confirmSsn" name="confirmSsn"
                                                value="{{ old('confirmSsn')}}"
                                                required>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            {{-- <label for="dob">Date of Birth:</label>
                                            --}}
                                            <input type="date" class="validate" id="dob" name="dob"
                                            value="{{ old('dob')}}"
                                            required>
                                        </div>
                                    </div>

                                    <div class="step-actions">
                                        <div class="row">
                                            <div class="col m4 s12 mb-3">
                                                <button class="red btn btn-reset" type="reset">
                                                    <i class="material-icons left">clear</i>Reset
                                                </button>
                                            </div>
                                            <div class="col m4 s12 mb-3">
                                                <button class="btn btn-light previous-step">
                                                    <i class="material-icons left">arrow_back</i>
                                                    Prev
                                                </button>
                                            </div>
                                            <div class="col m4 s12 mb-3">
                                                <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">
                                                    Next
                                                    <i class="material-icons right">arrow_forward</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect">Step 3</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <label for="eventName">Event Name: <span class="red-text">*</span></label>
                                            <input type="text" class="validate" id="eventName" name="eventName" required>
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <select>
                                                <option value="Select" disabled selected>Select Event Type</option>
                                                <option value="Wedding">Wedding</option>
                                                <option value="Party">Party</option>
                                                <option value="FundRaiser">Fund Raiser</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <select>
                                                <option value="Select" disabled selected>Select Event Status</option>
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <select>
                                                <option value="Select" disabled selected>Event Location</option>
                                                <option value="New York">New York</option>
                                                <option value="Queens">Queens</option>
                                                <option value="Washington">Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <label for="Budget">Event Budget: <span class="red-text">*</span></label>
                                            <input type="Number" class="validate" id="Budget" name="Budget">
                                        </div>
                                        <div class="input-field col m6 s12">
                                            <p> <label>Requirments</label></p>
                                            <p> <label>
                                                    <input type="checkbox">
                                                    <span>Staffing</span>
                                                </label></p>
                                            <p><label>
                                                    <input type="checkbox">
                                                    <span>Catering</span>
                                                </label></p>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <div class="row">
                                            <div class="col m6 s12 mb-1">
                                                <button class="red btn mr-1 btn-reset" type="reset">
                                                    <i class="material-icons">clear</i>
                                                    Reset
                                                </button>
                                            </div>
                                            <div class="col m6 s12 mb-1">
                                                <button class="waves-effect waves-dark btn btn-primary"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

{{-- vendor script --}}
@section('vendor-script')
    <script src="{{ asset('vendors/materialize-stepper/materialize-stepper.min.js') }}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{ asset('js/scripts/identityIq.js') }}"></script>
@endsection
