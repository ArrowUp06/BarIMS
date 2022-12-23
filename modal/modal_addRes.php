<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="addres" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <div class="modal-body">
                <div class="text-center">
                    <h3>Add New Resident</h3>
                    <p>Complete the form below to add new user</p>
                </div>

                <div class="label_info mb-3"><i class='bx bx-info-circle'>&nbsp;</i>PERSONAL INFORMATION</div>

                <form action="" method="POST" style="width:100%">

                <div class="justify-content-center">

                <!-- FirstName -->
                    <div class="row">
                        <div class="col">
                            <label class="fname_">First Name</label>
                            <input type="text" class="form-control form-control-sm" name="firstname" required>
                        </div>

                <!-- Middle Name -->
                        <div class="col mb-3">
                        <label class="mname_">Middle Name</label>
                            <input type="text" class="form-control form-control-sm" name="middlename">
                        </div>
                    
                <!-- LastName -->
                        <div class="col mb-3">
                            <label class="lname_">Last Name</label>
                            <input type="text" class="form-control form-control-sm" name="lastname" required>
                        </div>

                <!-- Extension -->
                        <div class="col mb-3">
                            <label class="ext_">Extension Name</label>
                            <input type="text" class="form-control form-control-sm" name="ext_name">
                        </div>
                    </div>

                <!-- Birthdate -->
                    <div class="row">
                        <div class="col mb-3">
                        <label class="bday_">Birthdate</label>
                            <input type="date" class="form-control form-control-sm" name="birthday" required>
                        </div>

                <!-- Age --> 
                        <div class="col mb-3">
                        <label class="age_">Age</label>
                            <input type="text" class="form-control form-control-sm" name="Age">
                        </div>

                <!-- Birthplace --> 
                        <div class="col mb-3">
                        <label class="bplace_">Birth Place</label>
                            <input type="text" class="form-control form-control-sm" name="pofadds" required>
                        </div>
                    </div>

                <!-- Gender -->
                    <div class="row">
                        <div class="col">
                        <label class="gender_">Gender</label>
                            <select class="form-control form-control-sm" name="gender">
                                <option value="" selected="selected" disabled="disabled" required>--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                <!-- Civil Status --> 
                        <div class="col">
                        <label class="civil_">Civil Status</label>
                            <select class="form-control form-control-sm" name="civil">
                                <option value="" selected="selected" disabled="disabled" required>--Select Status--</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                                <option value="separated">Separated</option>
                                <option value="divorced">Divorced</option>
                            </select>
                        </div>

                <!-- Nationality --> 
                        <div class="col">
                        <label class="nationality_">Nationality</label>
                        <select class="form-control form-control-sm" name="nationality">
                            <option value="" selected="selected" disabled="disabled">--Select Nationality--</option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="antiguans">Antiguans</option>
                            <option value="argentinean">Argentinean</option>
                            <option value="armenian">Armenian</option>
                            <option value="australian">Australian</option>
                            <option value="austrian">Austrian</option>
                            <option value="azerbaijani">Azerbaijani</option>
                            <option value="bahamian">Bahamian</option>
                            <option value="bahraini">Bahraini</option>
                            <option value="bangladeshi">Bangladeshi</option>
                            <option value="barbadian">Barbadian</option>
                            <option value="barbudans">Barbudans</option>
                            <option value="batswana">Batswana</option>
                            <option value="belarusian">Belarusian</option>
                            <option value="belgian">Belgian</option>
                            <option value="belizean">Belizean</option>
                            <option value="beninese">Beninese</option>
                            <option value="bhutanese">Bhutanese</option>
                            <option value="bolivian">Bolivian</option>
                            <option value="bosnian">Bosnian</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="british">British</option>
                            <option value="bruneian">Bruneian</option>
                            <option value="bulgarian">Bulgarian</option>
                            <option value="burkinabe">Burkinabe</option>
                            <option value="burmese">Burmese</option>
                            <option value="burundian">Burundian</option>
                            <option value="cambodian">Cambodian</option>
                            <option value="cameroonian">Cameroonian</option>
                            <option value="canadian">Canadian</option>
                            <option value="cape verdean">Cape Verdean</option>
                            <option value="central african">Central African</option>
                            <option value="chadian">Chadian</option>
                            <option value="chilean">Chilean</option>
                            <option value="chinese">Chinese</option>
                            <option value="colombian">Colombian</option>
                            <option value="comoran">Comoran</option>
                            <option value="congolese">Congolese</option>
                            <option value="costa rican">Costa Rican</option>
                            <option value="croatian">Croatian</option>
                            <option value="cuban">Cuban</option>
                            <option value="cypriot">Cypriot</option>
                            <option value="czech">Czech</option>
                            <option value="danish">Danish</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican">Dominican</option>
                            <option value="dutch">Dutch</option>
                            <option value="east timorese">East Timorese</option>
                            <option value="ecuadorean">Ecuadorean</option>
                            <option value="egyptian">Egyptian</option>
                            <option value="emirian">Emirian</option>
                            <option value="equatorial guinean">Equatorial Guinean</option>
                            <option value="eritrean">Eritrean</option>
                            <option value="estonian">Estonian</option>
                            <option value="ethiopian">Ethiopian</option>
                            <option value="fijian">Fijian</option>
                            <option value="filipino">Filipino</option>
                            <option value="finnish">Finnish</option>
                            <option value="french">French</option>
                            <option value="gabonese">Gabonese</option>
                            <option value="gambian">Gambian</option>
                            <option value="georgian">Georgian</option>
                            <option value="german">German</option>
                            <option value="ghanaian">Ghanaian</option>
                            <option value="greek">Greek</option>
                            <option value="grenadian">Grenadian</option>
                            <option value="guatemalan">Guatemalan</option>
                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                            <option value="guinean">Guinean</option>
                            <option value="guyanese">Guyanese</option>
                            <option value="haitian">Haitian</option>
                            <option value="herzegovinian">Herzegovinian</option>
                            <option value="honduran">Honduran</option>
                            <option value="hungarian">Hungarian</option>
                            <option value="icelander">Icelander</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="ivorian">Ivorian</option>
                            <option value="jamaican">Jamaican</option>
                            <option value="japanese">Japanese</option>
                            <option value="jordanian">Jordanian</option>
                            <option value="kazakhstani">Kazakhstani</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                            <option value="kuwaiti">Kuwaiti</option>
                            <option value="kyrgyz">Kyrgyz</option>
                            <option value="laotian">Laotian</option>
                            <option value="latvian">Latvian</option>
                            <option value="lebanese">Lebanese</option>
                            <option value="liberian">Liberian</option>
                            <option value="libyan">Libyan</option>
                            <option value="liechtensteiner">Liechtensteiner</option>
                            <option value="lithuanian">Lithuanian</option>
                            <option value="luxembourger">Luxembourger</option>
                            <option value="macedonian">Macedonian</option>
                            <option value="malagasy">Malagasy</option>
                            <option value="malawian">Malawian</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="maldivan">Maldivan</option>
                            <option value="malian">Malian</option>
                            <option value="maltese">Maltese</option>
                            <option value="marshallese">Marshallese</option>
                            <option value="mauritanian">Mauritanian</option>
                            <option value="mauritian">Mauritian</option>
                            <option value="mexican">Mexican</option>
                            <option value="micronesian">Micronesian</option>
                            <option value="moldovan">Moldovan</option>
                            <option value="monacan">Monacan</option>
                            <option value="mongolian">Mongolian</option>
                            <option value="moroccan">Moroccan</option>
                            <option value="mosotho">Mosotho</option>
                            <option value="motswana">Motswana</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="namibian">Namibian</option>
                            <option value="nauruan">Nauruan</option>
                            <option value="nepalese">Nepalese</option>
                            <option value="new zealander">New Zealander</option>
                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                            <option value="nicaraguan">Nicaraguan</option>
                            <option value="nigerien">Nigerien</option>
                            <option value="north korean">North Korean</option>
                            <option value="northern irish">Northern Irish</option>
                            <option value="norwegian">Norwegian</option>
                            <option value="omani">Omani</option>
                            <option value="pakistani">Pakistani</option>
                            <option value="palauan">Palauan</option>
                            <option value="panamanian">Panamanian</option>
                            <option value="papua new guinean">Papua New Guinean</option>
                            <option value="paraguayan">Paraguayan</option>
                            <option value="peruvian">Peruvian</option>
                            <option value="polish">Polish</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="qatari">Qatari</option>
                            <option value="romanian">Romanian</option>
                            <option value="russian">Russian</option>
                            <option value="rwandan">Rwandan</option>
                            <option value="saint lucian">Saint Lucian</option>
                            <option value="salvadoran">Salvadoran</option>
                            <option value="samoan">Samoan</option>
                            <option value="san marinese">San Marinese</option>
                            <option value="sao tomean">Sao Tomean</option>
                            <option value="saudi">Saudi</option>
                            <option value="scottish">Scottish</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="serbian">Serbian</option>
                            <option value="seychellois">Seychellois</option>
                            <option value="sierra leonean">Sierra Leonean</option>
                            <option value="singaporean">Singaporean</option>
                            <option value="slovakian">Slovakian</option>
                            <option value="slovenian">Slovenian</option>
                            <option value="solomon islander">Solomon Islander</option>
                            <option value="somali">Somali</option>
                            <option value="south african">South African</option>
                            <option value="south korean">South Korean</option>
                            <option value="spanish">Spanish</option>
                            <option value="sri lankan">Sri Lankan</option>
                            <option value="sudanese">Sudanese</option>
                            <option value="surinamer">Surinamer</option>
                            <option value="swazi">Swazi</option>
                            <option value="swedish">Swedish</option>
                            <option value="swiss">Swiss</option>
                            <option value="syrian">Syrian</option>
                            <option value="taiwanese">Taiwanese</option>
                            <option value="tajik">Tajik</option>
                            <option value="tanzanian">Tanzanian</option>
                            <option value="thai">Thai</option>
                            <option value="togolese">Togolese</option>
                            <option value="tongan">Tongan</option>
                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                            <option value="tunisian">Tunisian</option>
                            <option value="turkish">Turkish</option>
                            <option value="tuvaluan">Tuvaluan</option>
                            <option value="ugandan">Ugandan</option>
                            <option value="ukrainian">Ukrainian</option>
                            <option value="uruguayan">Uruguayan</option>
                            <option value="uzbekistani">Uzbekistani</option>
                            <option value="venezuelan">Venezuelan</option>
                            <option value="vietnamese">Vietnamese</option>
                            <option value="welsh">Welsh</option>
                            <option value="yemenite">Yemenite</option>
                            <option value="zambian">Zambian</option>
                            <option value="zimbabwean">Zimbabwean</option>
                            </select>
                        </div>
                    
                <!-- Religion --> 
                        <div class="col mb-3">
                        <label class="religion_">Religion</label>
                        <select class="form-control form-control-sm" name="religion">
                            <option value="" selected="selected" disabled="disabled">--Select Religion--</option>
                            <option value="African Traditional & Diasporic">African Traditional & Diasporic</option>
                            <option value="Agnostic">Agnostic</option>
                            <option value="Atheist">Atheist</option>
                            <option value="Baha'i">Baha'i</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Cao Dai">Cao Dai</option>
                            <option value="Chinese traditional religion">Chinese traditional religion</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Hinduism">Hinduism</option>
                            <option value="Islam">Islam</option>
                            <option value="Jainism">Jainism</option>
                            <option value="Juche">Juche</option>
                            <option value="Judaism">Judaism</option>
                            <option value="Neo-Paganism">Neo-Paganism</option>
                            <option value="Nonreligious">Nonreligious</option>
                            <option value="Rastafarianism">Rastafarianism</option>
                            <option value="Secular">Secular</option>
                            <option value="Shinto">Shinto</option>
                            <option value="Sikhism">Sikhism</option>
                            <option value="Spiritism">Spiritism</option>
                            <option value="Tenrikyo">Tenrikyo</option>
                            <option value="Unitarian-Universalism">Unitarian-Universalism</option>
                            <option value="Zoroastrianism">Zoroastrianism</option>
                            <option value="primal-indigenous">primal-indigenous</option>
                            <option value="Other">Other</option>
                            </select>
                        </div>

                <!-- Educational Attainment -->
                        <div class="col mb-3">
                            <label class="educ_">Educational Attainment</label>
                            <select class="form-control form-control-sm" name="ed_at">
                                <option value="" selected="selected" disabled="disabled">--Select Educational Attainment--</option>
                                <option value="No formal education">No formal education</option>
                                <option value="Primary education">Primary education</option>
                                <option value="Secondary education">Secondary education or high school</option>
                                <option value="GED">GED</option>
                                <option value="Vocational qualification">Vocational qualification</option>
                                <option value="Bachelor's degree">Bachelor's degree</option>
                                <option value="Master's degree">Master's degree</option>
                                <option value="Doctorate or higher">Doctorate or higher</option>
                            </select>
                        </div>
                    </div>

                <!-- Employment Status -->
                    <div class="row">
                        <div class="col mb-3">
                            <label class="empst_">Employment Status</label>
                            <select class="form-control form-control-sm" name="emp_stat">
                                <option value="" selected="selected" disabled="disabled">--Select Employment Status--</option>
                                <option value="Employed">Employed</option>
                                <option value="Self-employed">Self-employed</option>
                                <option value="Out of work">Out of work</option>
                                <option value="Homemaker">Homemaker</option>
                                <option value="Student">Student</option>
                                <option value="Retired">Retired</option>
                                <option value="Unable to work">Unable to work</option>
                            </select>
                        </div>

                <!-- Present Job -->
                        <div class="col mb-3">
                        <label class="pjob_">Present Job</label>
                            <input type="text" class="form-control form-control-sm" name="pr_job" >
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col mb-3">
                            <label class="empst_">Employment Status</label>
                            <select class="form-control form-control-sm" name="emp_stat">
                                <option value="" selected="selected" disabled="disabled">--Voter?--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                <!-- Present Job -->
                        <div class="col mb-3">
                        <label class="pjob_">Present Job</label>
                            <input type="text" class="form-control form-control-sm" name="pr_job" >
                        </div>
                    </div> 

                </div>

                <div class="label_info mb-3"><i class='bx bxs-contact' >&nbsp;</i>RESIDENT ADDRESS</div>

                <div class="justify-content-center">

                <!-- House No -->
                    <div class="row">
                        <div class="col mb-3">
                            <label class="houseno_">House No./Unit No./Building Name</label>
                            <input type="text" class="form-control form-control-sm" name="chouse" required>
                        </div>

                <!-- Street/Purok -->
                        <div class="col mb-3">
                            <label class="stp_" sty>Street/Purok</label>
                            <input type="text" class="form-control form-control-sm" name="cstreet" required>
                        </div>

                    </div>

                <!-- Barangay -->
                    <div class="row">
                        <div class="col mb-3">
                            <label class="brgy_">Barangay</label>
                            <input type="text" class="form-control form-control-sm" name="cbrgy" required>
                        </div>

                <!-- City/Municipality -->
                        <div class="col mb-3">
                            <label class="city_">City/Municipality</label>
                            <input type="text" class="form-control form-control-sm" name="ccity" required>
                        </div>

                    </div>
                </div>

                <div class="label_info mb-3"><i class='bx bxs-contact' >&nbsp;</i>CONTACT INFORMATION</div>

                <div class="justify-content-center">

                <!-- Mobile Number -->
                    <div class="row">
                        <div class="col mb-3">
                            <label class="mnumber_">Mobile Number</label>
                            <input type="text" class="form-control form-control-sm" name="mobile" required>
                        </div>
                    
                <!-- Email -->
                        <div class="col mb-3">
                            <label class="email_">Email Address</label>
                            <input type="email" class="form-control form-control-sm" name="email" required>
                        </div>
                    </div>
                </div>
            </div>                  
                    
                <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" name="submit">Add New</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            
            </form>
            </div>
        </div>
    </div>
</div>