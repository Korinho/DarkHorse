<?php 	
include ("dash_head.php");
include ("dash_header.php");
require_once("Controller/vacancies.controller.php");
require_once("Model/vacancies.model.php");
require_once("Model/route.php");
?>
<?php if(!isset($_GET["id"])){ ?>
<input type="hidden" placeholder=""  name="idR" id="idR" />
<section>
       <div class="block no-padding">
        <div class="container">
        <div class="row no-gape">
				 <?php   include ("dash_sidebar.php"); ?>
				<div class="col-lg-9 column">
                                        <div class="padding-left">
                                                <div class="profile-title">
                                                        <h3>Add Vacancy</h3>
					 	</div>
					 	<div class="profile-form-edit">
						  <form id="save" method="post">
							<div class="row">				 					
						          <div class="col-lg-6">
                                                                <span class="pf-title">Job Title</span>
                                                                <div class="pf-field">
                                                                        <input placeholder="" type="text" name="job" id="job">
        					 		</div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                                <span class="pf-title">Category</span>
                                                                        <select  name="category" id="display" class="selectn" data-fv-field="lang">
                                                                             <option value="">-- Select Category --</option>
                                                                             <option value="IT Consulting">IT Consulting</option>
                                                                             <option value="Sap Consulting">SAP Consulting</option>
                                                                             <option value="Management Consulting">Management Consulting</option>-->
                                                                        </select>
                                                          </div>
					 		  <div class="col-lg-6">
					 			<span class="pf-title">Country</span>
		                                              <!--<div class="dropdown-field">-->
								<select data-placeholder="Please Select Specialism" class="selectn" name="country" id="country">
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
                                                            </select>					 					<!--</div>-->

					 		</div>
							<div class="col-lg-6">
					 		        <span class="pf-title">Language </span>
					 			<select id="language" name="lenguage" id="language" class="selectn" data-fv-field="lang">
                                                                        <option value="en" selected="selected">English</option>
                                                                        <option value="fr">French</option>
                                                                        <!--<option value="es">Spanish</option>-->
                                                                </select>
					 		</div>										
								<div class="col-lg-12">
					 				<span class="pf-title">Short description </span>
					 				<div class="pf-field">
									       <textarea name="short_description" id="short_description" rows="8" cols="80"></textarea>					
									</div>
					 			</div>
							         <div class="col-lg-12">
					 			       <span class="pf-title">About the client </span>
					 			       <div class="pf-field">
									       <textarea name="about" id="about" rows="8" cols="80"></textarea>
                                                                        </div>
					 			</div>	
                                                                <div class="col-lg-12">
					 				<span class="pf-title">Job description/role </span>
					 				<div class="pf-field">
									<textarea name="job_description" id="job_description" rows="8" cols="80"></textarea>					
								</div>
					 			</div>
								<div class="col-lg-12">
					 				<span class="pf-title">Requirements </span>
					 				<div class="pf-field">
									       <textarea name="requirements" id="requirements" rows="8" cols="80"></textarea>
									</div>
					 			</div>
								<div class="col-lg-12">
					 				<span class="pf-title">Qualifications </span>
					 				<div class="pf-field">
										<textarea name="qualifications" id="qualifications" rows="8" cols="80"></textarea>					
									</div>
					 			</div>
								<div class="col-lg-12">
					 				<span class="pf-title">Location </span>
					 				<div class="pf-field">
										<input placeholder="" type="text" name="location" id="location">
									</div>
					 			</div>
								<div class="col-lg-12">
					 				<span class="pf-title">Start date </span>
					 				<div class="pf-field">
										<input placeholder="" type="text" name="start_date" id="start_date">
									</div>
					 			</div>
					 			<div class="col-lg-6">
                                                                        <span class="pf-title">Salary </span>					
                                                                        <div class="pf-field">
										<input placeholder="" type="text" name="salary" id="salary">	
										<input type="hidden" placeholder="" name="id" value="<?php echo $id_usuario; ?>" id="id" />
										<input type="hidden" placeholder=""  name="idR" class="idR" value="<?php echo $_GET['id']; ?>" />
										<input type="hidden" placeholder=""  name="accion" id="accion" value="save" />
					 				</div>
					 			</div>					 				
								<div class="col-lg-6">
					 			       <span class="pf-title">Display on web</span>
					 				<select  name="display" id="display" class="selectn" data-fv-field="lang">
                                                                             <option value="1" selected="selected">Yes</option>
                                                                             <option value="0">No</option>
                                                                            <!--<option value="es">Spanish</option>-->
                        						</select>					 			
                                                                </div>
					 			<div class="col-lg-12" style="margin-bottom:30px">
					 				<!--<button type="button" onclick="save();">Save</button>-->


                                                                        <?php                                                              $registrar = new ctrVacantes();
                                                                                $registrar -> addVacancies();
                                                                         ?>

                                                                        <input type="submit" class="button" value="Registrar">
					 			</div>
										

					 		</div>

					 	</form>

					 </div>
							

					</div>

				</div>

			</div>

	       </div>

	</div>

</section>

<?php }else{

$id=$_GET["id"];

$mostrar = ctrVacantes::ctrMostrarVacante($id);

 ?>


<input type="hidden" placeholder=""  name="idR" id="idR" />
<section>
       <div class="block no-padding">
        <div class="container">
        <div class="row no-gape">
                 <?php   include ("dash_sidebar.php"); ?>
                <div class="col-lg-9 column">
                                        <div class="padding-left">
                                                <div class="profile-title">
                                                        <h3>Edit Vacancy</h3>
                        </div>
                        <div class="profile-form-edit">
                          <form id="save" method="post">
                            <div class="row">                                   
                                  <div class="col-lg-6">
                                                                <span class="pf-title">Job Title</span>
                                                                <div class="pf-field">
                                                                        <input placeholder="" type="text" name="job" id="job" value="<?php echo $mostrar['job']; ?>">
                                    </div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                                <span class="pf-title">Category</span>
                                                                <select  name='category' id='display' class='selectn' data-fv-field='lang'>"
                                                                <?php 
                                                                switch ($mostrar["category"]) {
                                                                    case "IT Consulting":
                                                                        echo "<option value='IT Consulting'>IT Consulting</option>
                                                                             <option value='SAP Consulting'>SAP Consulting</option>
                                                                             <option value='Management Consulting'>Management Consulting</option>";
                                                                        break;
                                                                    case "SAP Consulting":
                                                                        echo "<option value='SAP Consulting'>SAP Consulting</option>
                                                                            <option value='IT Consulting'>IT Consulting</option>    <option value='Management Consulting'>Management Consulting</option>";
                                                                        break;
                                                                    case "Management Consulting":
                                                                        echo "<option value='Management Consulting'>Management Consulting</option>
                                                                        <option value='IT Consulting'>IT Consulting</option>
                                                                             <option value='SAP Consulting'>SAP Consulting</option>";
                                                                }    
                                                                 ?>                        
                                                                </select>
                                                          </div>
                              <div class="col-lg-6">
                                <span class="pf-title">Country</span>
                                                      <!--<div class="dropdown-field">-->
                                <select data-placeholder="Please Select Specialism" class="selectn" name="country" id="country">
                                <option value=""><?php echo $mostrar["country"]; ?></option>
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
                                                            </select>                                       <!--</div>-->

                            </div>
                            <div class="col-lg-6">
                                    <span class="pf-title">Language </span>
                                <select id="language" name="lenguage" id="language" class="selectn" data-fv-field="lang">
                                    <?php 
                                        switch ($mostrar["language"]) {
                                            case "en":
                                                echo "<option value='en'>English</option>
                                                      <option value='fr'>French</option>";
                                                break;
                                            case "fr":
                                                echo "<option value='fr'>French</option>
                                                      <option value='en'>English</option>";
                                                break;
                                        }
                                     ?>            
                                </select>
                            </div>                                      
                                <div class="col-lg-12">
                                    <span class="pf-title">Short description </span>
                                    <div class="pf-field">
                                           <textarea name="short_description" id="short_description" rows="8" cols="80"><?php echo $mostrar['short_description']; ?></textarea>                 
                                    </div>
                                </div>
                                     <div class="col-lg-12">
                                       <span class="pf-title">About the client </span>
                                       <div class="pf-field">
                                           <textarea name="about" id="about" rows="8" cols="80"><?php echo $mostrar["about"]; ?></textarea>
                                                                        </div>
                                </div>  
                                                                <div class="col-lg-12">
                                    <span class="pf-title">Job description/role </span>
                                    <div class="pf-field">
                                    <textarea name="job_description" id="job_description" rows="8" cols="80"><?php echo $mostrar["job_description"]; ?></textarea>                    
                                </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Requirements </span>
                                    <div class="pf-field">
                                           <textarea name="requirements" id="requirements" rows="8" cols="80"><?php echo $mostrar['requirements']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Qualifications </span>
                                    <div class="pf-field">
                                        <textarea name="qualifications" id="qualifications" rows="8" cols="80"><?php echo $mostrar["qualifications"]; ?></textarea>                  
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Location </span>
                                    <div class="pf-field">
                                        <input placeholder="" type="text" name="location" id="location" value="<?php echo $mostrar["location"]; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <span class="pf-title">Start date </span>
                                    <div class="pf-field">
                                        <input placeholder="" type="text" name="start_date" id="start_date" value="<?php echo $mostrar["start_date"]; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                                                        <span class="pf-title">Salary </span>                   
                                                                        <div class="pf-field">
                                        <input placeholder="" type="text" name="salary" id="salary" value="<?php echo $mostrar["salary"]; ?>">    
                                        <input type="hidden" placeholder="" name="id" value="<?php echo $id_usuario; ?>" id="id" />
                                        <input type="hidden" placeholder=""  name="idR" class="idR" value="<?php echo $_GET['id']; ?>" />
                                        <input type="hidden" placeholder=""  name="accion" id="accion" value="save" />
                                    </div>
                                </div>                                  
                                <div class="col-lg-6">
                                  <span class="pf-title">Display on web</span>
                                    <select  name="display" id="display" class="selectn" data-fv-field="lang" >
                                        <?php 
                                            switch ($mostrar["display"]) {
                                                case 1:
                                                   echo "<option value='1'>Yes</option>
                                                         <option value='0'>No</option>";
                                                    break;
                                                case 0:
                                                    echo "<option value='0'>No</option>
                                                          <option value='1'>Yes</option>";                                         
                                                    break;                                               
                                            }
                                         ?>
                                    </select>                               
                                </div>
                                <div class="col-lg-12" style="margin-bottom:30px">
                                    <!--<button type="button" onclick="save();">Save</button>-->
                                     <?php         
                                        $x = (int)$mostrar["id"];                                                  
                                        $editar = new ctrVacantes();
                                        $editar->ctrEditVacante($x);
                                    ?>
                                    <input type="submit" class="button" value="Actualizar">
                                </div>
                                        

                            </div>

                        </form>

                     </div>
                            

                    </div>

                </div>

            </div>

           </div>

    </div>

</section>

<?php } ?>

<div class="account-popup-area experience-popup-box">
        <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Add new experience</h3>
        <form id="saveEx">
               <div class="cfield">
                  <input type="text" placeholder="Star Year " name="star" id="star" class="clear" />                  
               </div>
		<div class="cfield">
                  <input type="text" placeholder="End Year "  name="end" id="end" class="clear" />                 
               </div>
               <div class="cfield">
                  <input type="text" placeholder="Employer name"name="name" id="name" class="clear"  />                  
               </div>
		<div class="cfield">
                  <input type="text" placeholder="Description" name="description" id="description" class="clear"  />                  
               </div>
               <div class="">
                  <textarea placeholder="Qualification (optional) " name="qualification" id="qualification" class="clear" /></textarea>               
               </div>
		<input type="hidden" placeholder="Description" name="idS" id="idS" class="clear" />
               <button type="button" onclick="saveEx();"><i class="la la-plus"></i> Add to experience</button>
        </form>            
        </div>
      </div>
	  <div class="account-popup-area education-popup-box">
         <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Add new education</h3>
            
            <form id="saveEd">
               <div class="cfield">
                  <input type="text" placeholder="Star Year " name="star" id="estar" class="clear" />
                  
               </div>
			   <div class="cfield">
                  <input type="text" placeholder="End Year " name="end" id="eend" class="clear"  />
                 
               </div>
               <div class="cfield">
                  <input type="text" placeholder="Place name " name="name" id="ename" class="clear" />
                  
               </div>
			    <div class="cfield">
                  <input type="text" placeholder="Description (optional) " name="description" id="edescription" class="clear" />
                  
               </div>
               <div class="cfield">
                  <textarea placeholder="Degree obtained (optional) " name="qualification" id="equalification" class="clear"  /></textarea>
                  
               </div>
				<input type="hidden" placeholder="Description" name="idS" id="idSe" class="clear" />
               <button type="button" onclick="saveEd();"><i class="la la-plus"></i> Add to Education</button>
            </form>
            
         </div>
      </div>
	   <div class="account-popup-area other-popup-box">
         <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Add new other</h3>
            
            <form id="saveO">
               
               <div class="cfield">
                  <input type="text" placeholder="Other qualification " name="name" id="oname" class="clear"  />
                  
               </div>
			    <div class="cfield">
                  <input type="text" placeholder="Description (optional) " name="description" id="odescription" class="clear" />
                  
               </div>
               <div class="cfield">
                  <textarea placeholder="Degree obtained (optional) " name="qualification" id="oqualification"  class="clear" /></textarea>
                  
               </div>
				<input type="hidden" placeholder="Description" name="idS" id="idSo" class="clear" />
               <button type="button" onclick="saveO();"><i class="la la-plus"></i> Add to Other</button>
            </form>
            
         </div>
      </div>

	<?php   include ("dash_footer.php"); ?>
	<script src="panel/assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
	<script type="text/javascript" src="panel/assets/js/ckeditor/config.js"></script>
	<link rel="stylesheet" type="text/css" href="panel/assets/js/ckeditor/skins/moono/editor.css">
	<script type="text/javascript" src="panel/assets/js/ckeditor/lang/es.js">
	</script><script type="text/javascript" src="panel/assets/js/ckeditor/styles.js"></script>	
</body>

</html>

