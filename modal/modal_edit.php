<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="edituser" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                        <div class="text-center mb-3 mt-3">
                            <h4>Update User Information</h4>
                            <p>Click update after changing any information</p>
                        </div>

                        <div class="d-flex justify-content-center">

                        <form action="db/edit.php" method="POST" style="width:100%; margin: 10px 20px">

                            <!-- FirstName -->
                                <div class="row">
                                    <div class="col">
                                        <label class="fs-6">First Name</label>
                                   <input type="hidden"class="form-control" name="id" id="id" required>
                                        <input type="text" class="form-control" name="firstname" id="firstname" required>
                                    </div>

                            <!-- LastName -->
                                    <div class="col">
                                        <label class="fs-6">Last Name</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname" required>
                                    </div>
                                </div> 

                            <!-- Mobile Number -->
                                <div class="row">
                                    <div class="col">
                                        <label class="fs-6">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" required>
                                    </div>
                                </div>

                            <!-- Email --> 
                                <div class="row">
                                    <div class="col">
                                        <label class="fs-6">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="row">
                                    <div class="col">
                                        <input type="hidden" class="form-control" name="password" id="password" required>
                                    </div>
                                </div>

                            <!-- Birthday -->
                            <div class="row mb-3">
                                <div class="col">
                                <label class="form-label">Birthday</label>
                                    <input type="date" class="form-control" name="birthday" id="birthday" required>
                                </div>
                            

                        <!-- Gender -->
                                <div class="col">
                                <label class="form-label">Gender</label>
                                    <div class="col">
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="" required>--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                    </div>
                                </div>
                            </div>                   
                        </div>

                
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" name="update">Update</button>

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div> 
            </div>
            </form>
        </div>
    </div>
</div>