<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Ykredi Finance | Apply Now</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="Account Application Page" name="description" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/css/default/style.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css"
        rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css"
        rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->


    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=URLROOT?>/ui/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <div id="google_translate_element"></div>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
        }, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
    </script>

</head>

<body class="pace-top bg-white">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(<?=URLROOT?>/ui/img/login-bg/bg.jpg"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Ykredi Finance</b></h4>
                    <p>
                        Open a savings account online today with our easy application processor. Check out what account
                        type are available.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Apply Now
                    <small>Create your Ykredi Finance Account. It’s free! </small>
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <small>

                    </small>
                    <small>
                    </small>
                    <form id="loginForm" action="<?=URLROOT?>/users/apply" method="POST" class="margin-bottom-0"
                        enctype="multipart/form-data">
                        <label class="control-label">Full Name <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12 m-b-15">
                                <input type="text"
                                    class="form-control <?= (!empty($data['fullname_err'])) ? 'is-invalid' : ''; ?>"
                                    id="fullname" name="fullname" value="<?= $data['fullname']; ?>" required=""
                                    placeholder="Enter Your Full Name">
                                <span class="invalid-feedback"><?= $data['fullname_err']; ?></span>
                            </div>

                        </div>
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email"
                                    class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                    id="email" name="email" value="<?= $data['email']; ?>" required=""
                                    placeholder="Enter Your Email address">
                                <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                            </div>
                        </div>

                        <label class="control-label">Gender <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <select id="gender" name="gender"
                                    class="form-control selectpicker <?= (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>">
                                    <option>-- Select Gender --</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <label class="control-label">Date of Birth <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="date"
                                    class="form-control <?= (!empty($data['dob_err'])) ? 'is-invalid' : ''; ?>"
                                    name="dob" placeholder="Select Date" value="<?= $data['dob']; ?>" required>
                                <span class="invalid-feedback"><?= $data['dob_err']; ?></span>

                            </div>
                        </div>

                        <label class="control-label">Country <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <select id="country" name="country" data-size="10"
                                    class="form-control selectpicker <?= (!empty($data['country_err'])) ? 'is-invalid' : ''; ?>"
                                    data-live-search="true" data-style="btn-white" required>

                                    <option value="" selected>Select a Country</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                <span class="invalid-feedback"><?= $data['country_err']; ?></span>
                            </div>
                        </div>

                        <label class="control-label">Address <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">

                                <input type="text"
                                    class="form-control <?= (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
                                    id="address" name="address" value="<?= $data['address']; ?>" required=""
                                    placeholder="Address">
                                <span class="invalid-feedback"><?= $data['address_err']; ?></span>
                            </div>
                        </div>

                        <label class="control-label">Mobile <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="tel"
                                    class="form-control <?= (!empty($data['mobile_err'])) ? 'is-invalid' : ''; ?>"
                                    id="mobile" name="mobile" value="<?= $data['mobile']; ?>" required=""
                                    placeholder="Mobile Number">
                                <span class="invalid-feedback"><?= $data['mobile_err']; ?></span>
                            </div>
                        </div>

                        <label class="control-label">Occupation <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text"
                                    class="form-control <?= (!empty($data['occupation_err'])) ? 'is-invalid' : ''; ?>"
                                    id="occupation" name="occupation" value="<?= $data['occupation']; ?>" required=""
                                    placeholder="Occupation">
                                <span class="invalid-feedback"><?= $data['occupation_err']; ?></span>
                            </div>
                        </div>

                        <label class="control-label">Account Type <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <select id="type" name="type"
                                    class="form-control <?= (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>">
                                    <option>-- Select Account Type --</option>
                                    <option>Savings</option>
                                    <option>Checkings</option>
                                </select>
                                <span class="invalid-feedback"><?= $data['type_err']; ?></span>
                            </div>
                        </div>

                        <label class="control-label">Passport <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="file"
                                    class="form-control <?= (!empty($data['passport_err'])) ? 'is-invalid' : ''; ?>"
                                    id="passport" name="passport" required="">
                                <span class="invalid-feedback"><?= $data['passport_err']; ?></span>
                            </div>
                        </div>
                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" id="password-indicator-visible"
                                    class="form-control m-b-5 <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                    id="password" name="password" value="<?= $data['password']; ?>" required
                                    placeholder="Password">
                                <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                                <a href="#"></a>
                                <div id="passwordStrengthDiv2" class="is0 m-t-5 is80"></div>
                            </div>
                        </div>

                        <div class="checkbox checkbox-css m-b-30">
                            <div class="checkbox checkbox-css m-b-30">
                                <input type="checkbox" checked id="agreement_checkbox" value="" required>
                                <label for="agreement_checkbox">
                                    By clicking Process Application, you agree to our <a
                                        href="../terms-and-conditions.html">Terms</a> and <a
                                        href="../privacy-policy.html">Privacy Policy</a>, including our Cookie Use.
                                </label>
                            </div>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Process Application</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a customer? Click <a href="<?=URLROOT?>/users/login">here</a> to login.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Ykredi Finance. All Rights Reserved 2022 </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->



        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?=URLROOT?>/ui/plugins/jquery/jquery-3.2.1.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <!--[if lt IE 9]>
		<script src="https://ykredifinance-offshore.com/assets/ui/crossbrowserjs/html5shiv.js"></script>
		<script src="https://ykredifinance-offshore.com/assets/ui/crossbrowserjs/respond.min.js"></script>
		<script src="https://ykredifinance-offshore.com/assets/ui/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
        <script src="<?=URLROOT?>/ui/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/js-cookie/js.cookie.js"></script>
        <script src="<?=URLROOT?>/ui/js/theme/default.min.js"></script>
        <script src="<?=URLROOT?>/ui/js/apps.min.js"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/masked-input/masked-input.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/password-indicator/js/password-indicator.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/jquery-tag-it/js/tag-it.min.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-daterangepicker/moment.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/select2/dist/js/select2.min.js"></script>
        <script
            src="<?=URLROOT?>/ui/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
        </script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
        <script src="<?=URLROOT?>/ui/plugins/clipboard/clipboard.min.js"></script>
        <script src="<?=URLROOT?>/ui/js/demo/form-plugins.demo.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script src="<?=URLROOT?>/ui/js/demo/form-plugins.demo.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
        $(document).ready(function() {
            App.init();
            FormPlugins.init();
        });
        </script>
</body>

</html>