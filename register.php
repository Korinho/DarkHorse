<?php   include("sesion.php");
		include ("head.php");
		echo '<link rel="stylesheet" href="js/tel/css/intlTelInput.css">';
		include ("header.php");
	?>
	<style>
	.account-popup > form .cfield input.error {
    display: inline;
	border: solid 1px#cc0000 !important;
	border-radius:3px;
	}
	.account-popup > form .cfield .dropdown-field select.error {
    display: inline;
	border: solid 1px#cc0000 !important;
	border-radius:3px;
	}
	</style>
	<section>

		<div class="block no-padding  gray">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner2">

							<div class="inner-title2">

								<h3>Register</h3>

								<span>Keep up to date with the latest news</span>

							</div>

							<div class="page-breacrumbs">

								<ul class="breadcrumbs">

									<li><a href="#" title="">Home</a></li>

									<li><a href="#" title="">Pages</a></li>

									<li><a href="#" title="">Register</a></li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section>

		<div class="block remove-bottom">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="account-popup-area signup-popup-box static">

							<div class="account-popup">

								<h3>Register</h3>

								<span style="color:#24324a">Register your CV for actual opportunities worldwide</span><br><span>Register From</span>
									<form id="fsave" style="margin-top:0px">
								<div class="select-user" style="margin-bottom:30px">

									<span id="applicant">Applicant</span>
									<input type="hidden"  name="type" class="check type" value="0">	
									<span id="employer">Employer</span>
									
								</div>

								

									<div class="cfield">

										<input type="text" placeholder="First Name" name="first_name" id="first_name" />

										<i class="la la-user"></i>

									</div>
									<div class="cfield">

										<input type="text" placeholder="Last Name" name="last_name" id="last_name" />

										<i class="la la-user"></i>

									</div>
									<div class="dropdown-field">

										<select data-placeholder="Please Select Specialism" class="chosen" name="country" id="country">
																<option value="">-- Select your country --</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Lland Islands">Lland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua And Barbuda">Antigua And Barbuda</option>
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
                                                                <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Democratic Republic Of The">Congo, The Democratic Republic Of The</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle Of Man">Isle Of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic Of">Korea, Democratic People's Republic Of</option>
                                                                <option value="Korea, Republic Of">Korea, Republic Of</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former Yugoslav Republic Of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                                                                <option value="Moldova, Republic Of">Moldova, Republic Of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                                                <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome And Principe">Sao Tome And Principe</option>
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
                                                                <option value="South Georgia And The South Sandwich Islands">South Georgia And The South Sandwich Islands</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan, Province Of China">Taiwan, Province Of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic Of">Tanzania, United Republic Of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-leste">Timor-leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>									

									</div>
									<div class="cfield">

										<input type="text" placeholder="Phone no." name="phone" class="phone" id="phone" />

										<i class="la la-phone"></i>

									</div>

									

									<div class="cfield">

										<input type="text" placeholder="Email Address" name="email" id="email" />

										<i class="la la-envelope-o"></i>

									</div>
									<div class="cfield">

										<input type="text" placeholder="Confirm Email Address" name="emailc" id="emailc" />

										<i class="la la-envelope-o"></i>

									</div>
									<div class="cfield">

										<input type="password" placeholder="Password" name="pass" id="pass" />

										<i class="la la-key"></i>

									</div>
									<div class="cfield">

										<input type="password" placeholder="Password Confirmation" name="passc" id="passc" />

										<i class="la la-key"></i>

									</div>								
									

									<button type="button" onclick="saveData();">Register Now!</button>

								</form>

								<!--<div class="extra-login">

									<span>Or</span>

									<div class="login-social">

										<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>

										<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>

									</div>

								</div>-->

							</div>

						</div><!-- SIGNUP POPUP -->

					</div>

				</div>

			</div>

		</div>

	</section>


	
	
	<?php include ("footer.php"); 	?>
	 
	  <script src="js/tel/js/intlTelInput.js"></script>
	<script>

	$(document).ready(function(e) {
		$("#applicant").click(function(e){
			$(".type").val("0");			
		
		});
		$("#employer").click(function(e){
			$(".type").val("1");		
		});
		
	});
    $(".phone").intlTelInput({
		separateDialCode: false,
		autoPlaceholder: "off",
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "js/tel/js/utils.js"
    });
	function  saveData(){
		if(valid() == true){
		alert("entre")
		 $.ajax({
		   dataType: "json",
              data: $("#fsave").serialize(), 
              type: "POST",
              context: this,
              url: "scripts/register.php",
              success: function(data){ 
				   console.log(data.sql);
							if(data.res ==  true){
								alert("A confirmation e-Mail has just been sent to your e-Mail account. Please check.")
								 
							}
							else{
								//alerta("error","<strong>error</strong>");
							alert("Error")
							}
			  }
		  });
		}else{
			alert("Rquired fields");

		}
	}
	
	function valid(){
				
				var estado=true;
				var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                var email = $("#email").val();
				var emailc = $("#emailc").val();
				var pass = $("#pass").val();
				var passc = $("#passc").val();
				var country = $("#country").val();
				var phone = $("#phone").val();
                var expresion= /\w+@\w+\.+[a-z]/;
                var expresion2= /^[a-zA-ZáÁéÉíÍóÓúÚñÑüÜ\s]+$/;
                              

				if(first_name == ""){
                    $("#first_name").addClass("error");
                    estado = false;
                }
               if(last_name == ""){
                    $("#last_name").addClass("error");
                    estado = false;
                }
                if(last_name == ""){
                    $("#last_name").addClass("error");
                    estado = false;
                }
                if(country == ""){
		       	$("#country").addClass("error");
		        estado= false;
                }	
				if(phone == ""){
		       	$("#phone").addClass("error");
		        estado= false;
                }	
				if(email.trim() == emailc.trim()){
		       	$("#emailc").addClass("error");
		        estado= false;
                }
				if(pass.trim() == passc.trim()){
		       	$("#passc").addClass("error");
		        estado= false;
                }
				if(email == ""){
		       	$("#email").addClass("error");
		        estado= false;
                }
				if(emailc == ""){
		       	$("#emailc").addClass("error");
		        estado= false;
                }
                else if(!expresion.test(email)){
		       	$("#email").addClass("error");
				estado = false;
				}
				if(pass == ""){
		       	$("#pass").addClass("error");
		        estado= false;
                }	
				if(passc == ""){
		       	$("#passc").addClass("error");
		        estado= false;
                }					
                

				return estado;
			
		}
	</script>
		  
	</body>
</html>