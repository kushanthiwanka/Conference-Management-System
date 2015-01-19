<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script language="JavaScript">

</script>

<title>Review Details Form</title>

</head>

<body>

<div class="container">
        <div class="row text-center pad-top ">
            
        </div>

            <div class="row  pad-top">
               
                <div class="" style="position: absolute; width: 75%; left: 160px; top: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center pad-top">
                        <strong>   Personal Info </strong>  
                            </div>
                            
                            <div class="panel-body">
                                <form action="act.php" method="post" name="registration" onsubmit="return CheckForm();" role="form">
<br/>
    
                                        <div class="form-group input-group">
                                            <!--<table>
                                                <tr>
                                                    <td style="width: 210px;"><b >Title</b></td>
                                                    <td>
                                                        <select id="a" name="title" style="width: 140px;">
                                                            <option>Rev.</option>
                                                            <option>Mr.</option>
                                                            <option>Mrs.</option>
                                                            <option>Ms.</option>
                                                            <option>Dr.</option>
                                                            <option>Prof.</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
											-->
                                        </div>
<hr>
                                        <div class="form-group input-group">
                                            
											<div class="field">
											<label for="name_first">First/Given Name:</label>
											<input name="name_first" id="name_first" size="60" maxlength="60" value="" />
											</div>
                                            
                                        </div>
                                        
                                        <div class="form-group input-group">
                                            
                                            <div class="field">
											<label for="name_last">Last/Family Name:</label>
											<input name="name_last" id="name_last" size="60" maxlength="40" value="" />
											</div>
                                            
                                        </div>
										
										<div class="field"><label for="email">Email:</label><input name="email" id="email" size="60" maxlength="250" value="" /></div>
										<div class="field"><label for="organization">Organization:</label><input name="organization" id="organization" size="60" maxlength="" value="" /></div>
										<div class="field"><label for="country">Country:</label><select name="country" id="country" ><option value=""></option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic Of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte D'ivoire</option><option value="HR">Croatia</option><option value="CW">Curaçao</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island And Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic Of</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (French Part)</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Saint Maarten (Dutch Part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></div>
										<div class="field"><label for="telephone">Telephone:</label><input name="telephone" id="telephone" size="60" maxlength="" value="" /></div>
										<div class="field"><label for="url">Web Site:</label><input name="url" id="url" size="60" maxlength="" value="" placeholder="http://"/></div>
										
										<!--
										<div class="form-group input-group">
                                            <table>
                                                <tr>
                                                    <td style="width: 210px;"><b>Register_as*</b></td>
                                                    <td><b><input  type="radio" name="Register_as" value="A">Author
                                                    <br/>
                                                    <input  type="radio" name="Register_as" value="R">Reviewer</b></td>
                                                </tr>
                                            </table>
                                        </div>
										
<hr>
                                        <div class="form-group input-group">
                                            <table>
                                                <tr>
                                                    <td style="width: 210px;"><b>Please Select Your Country*</b></td>
	<td><select  name="country">
		<option>America</option>
		 <option>Australia</option>
		 <option>Austria</option>
		 <option>Bahrain</option>
		 <option>Bangladesh</option>
		 <option>Brazil</option>
		 <option>Canada</option>
		 <option>China</option>
		 <option>Cuba</option>
		 <option>Cyprus</option>
		 <option>Czech Republic</option>
		 <option>Denmark</option>
		 <option>El Salvador</option>
		 <option>Finland</option>
		 <option>France</option>
		 <option>Germany</option>
		 <option>Hong Kong</option>
		 <option>Iceland</option>
		 <option>India</option>
		 <option>Indonesia</option>
		 <option>Iran</option>
		 <option>Iraq</option>
		 <option>Ireland</option>
		 <option>Israel</option>
		 <option>Italy</option>
		 <option>Jamaica</option>
		 <option>Japan</option>
		 <option>Jordan</option>
		 <option>Korea, North</option>
		 <option>Korea, South</option>
		 <option>Kuwait</option>
		 <option>Lebanon</option>
		 <option>Malaysia</option>
		 <option>Maldives</option>
		 <option>New Zealand</option>
		 <option>Netherlands</option>
		 <option>Nepal</option>
		 <option>Oman</option>
		 <option>Pakistan</option>
		 <option>Philippines</option>
		 <option>Poland</option>
		 <option>Portugal</option>
		 <option>Qatar</option>
		 <option>Russia</option>
		 <option>Saudi Arabia</option>
		 <option>Singapore</option>
		 <option>Sri Lanka</option>
		 <option>Switzerland</option>
		 <option>Thailand </option>
		 <option>United Kingdom</option>
		 <option>Vietnam</option>
		 <option>Yemen</option>
		 <option>Zimbabwe</option>
		 </select>
	 </td>
</tr>

                                            </table>
                                        </div>
                                        <div class="form-group input-group">
                                            
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"  ></i></span>
                                            <input type="text" name="postal_address" class="form-control" placeholder="Postal Address" />
                                            
                                        </div>

                                        <div class="form-group input-group">
                                            
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-road"  ></i></span>
                                            <input type="text" name="postal_code"  value="" class="form-control" placeholder="Postal Code*" />
                                            
                                        </div>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" name="email_address" class="form-control" placeholder="Your Email" />
                                        </div>
                                        
                                        
									
									-->
									<fieldset id="fs_topics"><legend>Topic Areas</legend><div class="fieldsetnote note">To help match submissions to reviewers, please select the area(s) most applicable to your submission</div><div class="field"><label>Topic Areas:</label><fieldset class="checkbox"><label><input type="checkbox" name="topics[]" id="topics1" value="1"  />Classic Papers</label><br /><label><input type="checkbox" name="topics[]" id="topics2" value="2"  />Programming</label><br /><label><input type="checkbox" name="topics[]" id="topics3" value="3"  />RFC</label><br /><label><input type="checkbox" name="topics[]" id="topics4" value="4"  />Computer Science</label><br /><label><input type="checkbox" name="topics[]" id="topics5" value="5"  />Networking</label><br /><label><input type="checkbox" name="topics[]" id="topics6" value="6"  />Humo(u)r</label><br /></fieldset></div>
									</fieldset>
									<fieldset id="fs_comments"><legend>Comments</legend><div class="field"><label for="comments">Comments to Chair:</label><textarea name="comments" id="comments" cols="60" rows="5" maxlength="" ></textarea></div>
									</fieldset>
									<fieldset id="fs_passwords"><legend>Account</legend><div class="field"><label for="username">Username:</label><input name="username" id="username" size="60" maxlength="30" value="" />
									
									<div class="fieldnote note">5-30 characters: letters, numbers, @, period (.), hyphen (-)</div></div>
									<div class="field"><label for="password1">Password:</label><input name="password1" id="password1" type="password" size="60" value="" /><div class="fieldnote note">8 or more characters (any)</div></div>
									<div class="field"><label for="password2">Re-enter Password:</label><input name="password2" id="password2" type="password" size="60" value="" /></div>
									</fieldset>
									<p><input type="submit" name="submit" value="Submit Form - DISABLED" disabled class="submit" /></p>
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
        </div>
        
    </div>
<!-- /.container -->
</body>
</html>                                  		