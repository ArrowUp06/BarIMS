<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="addbtn" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <div class="modal-body">
                <div class="text-center">
                    <h3>Add New User</h3>
                    <p>Complete the form below to add new user</p>
                </div>
                
                <div class="d-flex justify-content-center">

                <form action="db/add_new.php" method="POST" style="width:100%">

                <!-- FirstName -->
                    <div class="row">
                        <div class="col">
                            <!-- <label class="form-label"></label> -->
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        </div>

                <!-- LastName -->
                        <div class="col mb-3">
                            <!-- <label class="form-label"></label> -->
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div> 

                <!-- Mobile Number -->
                    <div class="row">
                        <div class="col mb-3">
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                        </div>
                    </div>

                <!-- Email -->
                    <div class="row">
                        <div class="col mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>

                <!-- Password -->
                    <div class="row">
                        <div class="col mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="pass1" onkeyup="return validate()" required>
                        </div>
                    </div>

                <!--Confirm Password -->
                    <div class="row">
                        <div class="col mb-3">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="pass2" required>
                        </div>
                    </div>

                <!-- Birthday -->
                    <div class="row mb-3">
                        <div class="col">
                        <label class="form-label">Birthday</label>
                            <input type="date" class="form-control" name="birthday" required>
                        </div>
                    

                <!-- Gender -->
                        <div class="col">
                        <label class="form-label">Gender</label>
                            <div class="col">
                            <select class="form-control" name="gender">
                                <option value="" disabled="disabled">--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                </div>

            <div class="d-flex justify-content-center">
                <ul>
                    <li id="upper_">Atlease one Uppercase</li>
                    <li id="lower_">Atlease one Lowercase</li>
                    <li id="special_char_">Atlease one Special Symbol</li>
                    <li id="number_">Atlease one Number</li>
                    <li id="length_">Minimum of 6 Characters</li>
                </ul>
            </div>
        </div>

                <div class=" modal-footer d-flex justify-content-center">
                        <button type="submit" onclick="checkPassword()" class="btn btn-success" name="submit">Add New</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src-"script.js"></script>
<script>

//Password Validation
function validate(){
  var pass = document.getElementById('pass1');
  var upper = document.getElementById('upper_');
  var lower = document.getElementById('lower_');
  var num = document.getElementById('number_');
  var length = document.getElementById('length_');
  var sp_char = document.getElementById('special_char_');

    //contain number
    if(pass.value.match(/[0-9]/)) {
    num.style.color = 'green';
    }
    else{
    num.style.color = 'red';
    }

    //contain UpperCase
    if(pass.value.match(/[A-Z]/)) {
    upper.style.color = 'green';
    }
    else{
    upper.style.color = 'red';
    }

    //Contain Lower Case
    if(pass.value.match(/[a-z]/)) {
    lower.style.color = 'green';
    }
    else{
    lower.style.color = 'red';
    }

    //Contain Special Character
    if(pass.value.match(/[\!\@\#\$\%\^\&\*\(\)\.\,\'\;\:\"\'\-\_\=\+]/)) {
    sp_char.style.color = 'green';
    }
    else{
    sp_char.style.color = 'red';
    }

    //Contain Minimum of 6 characters
    if(pass.value.length >= 6){
    length.style.color = 'green';
    }
    else{
    length.style.color = 'red';
    }

}
</script>