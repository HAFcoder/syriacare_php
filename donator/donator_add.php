    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                
                <div class="card">
                    <div class="card-header">
                        <h4>Register Donator</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted m-b-15"></p>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#addpro" role="tab" aria-controls="pills-profile" aria-selected="false">Additional Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#loginpro" role="tab" aria-controls="pills-profile" aria-selected="false">Login Info</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent" style="border:1px solid grey;padding:10px;">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h4>Basic Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="name" name="name" placeholder="Enter your name." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Number</label></div>
                                        <div class="col-12 col-md-6"><input onkeyup="setusername()" type="text" id="phoneno" name="phoneno" placeholder="Enter your phone." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                </form>
                             </div>
                            <div class="tab-pane fade" id="addpro" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h4>Additional Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-6"><textarea name="address" id="address" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birthdate</label></div>
                                        <div class="col-12 col-md-6"><input type="date" id="birthdate" name="birthdate" placeholder="Enter your birthdate." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-6"><input type="email" id="email" name="email" placeholder="Enter your email." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="loginpro" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <h4>Login Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-6"><input disabled type="text" id="username" name="username" placeholder="Phone number as your username." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-6"><input type="password" id="password" name="password" placeholder="Enter your password." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                </form>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                </div>
                                <div class="col col-md-6">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i> Update
                                    </button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function setusername() {
            
            username = $('#phoneno').val();
            //alert(username);
            $('#username').val(username);
        }
        

    </script>