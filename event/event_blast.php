        
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">


    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-3x fa-bomb"></i> BLAST EVENT !</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted m-b-15"></p>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-home" aria-selected="true">Event Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#addpro" role="tab" aria-controls="pills-profile" aria-selected="false">Blast Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#loginpro" role="tab" aria-controls="pills-profile" aria-selected="false">Send Message</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent" style="border:1px solid grey;padding:10px;">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h4>Event Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Event Name</label></div>
                                        <div class="col-12 col-md-6"><input type="text" disabled id="name" name="name" placeholder="Enter your name." class="form-control" value="Aqiqah di Syria 2020"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Person-in-Charge</label></div>
                                        <div class="col-12 col-md-6"><input disabled type="text" id="phoneno" name="phoneno" placeholder="Enter your phone." class="form-control" value="Rahman (0136978475)"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                </form>
                             </div>
                            <div class="tab-pane fade" id="addpro" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h4>Blast Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message</label></div>
                                        <div class="col-12 col-md-6"><textarea name="message" maxlength="1000" id="message" rows="9" placeholder="Content... * Less than 500 letter *" class="form-control"></textarea></div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="loginpro" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <h4></h4><br>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="sendto" class="form-control-label">Send To </label></div>
                                    <div class="col-12 col-md-6">
                                        <select name="sendto" id="sendto" class="form-control" onchange="sendto_option()">
                                            <option value="">Please select</option>
                                            <option value="all">Send to All Donator</option>
                                            <option value="selected">Send to Selected Donator</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="area_donator" class="row form-group" style="display:none;">
                                    <div class="col col-md-3"></div>
                                    <div class="col-12 col-md-8" style="border:1px grey solid;padding:5px">
                                        <table id="table_listdonator" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Contact No.</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" name="select_all" value="1" id="example-select-all"></td>
                                                    <td>Tiger Nixon</td>
                                                    <td>01632687</td>
                                                    <td>tiger@user.com</td>
                                                    <td>
                                                        <a href="index.php?syc=2" type="button" class="btn btn-primary btn-sm">View Details</a>
                                                        <a href="index.php?syc=3" type="button" class="btn btn-warning btn-sm">Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" name="select_all" value="1" id="example-select-all"></td>
                                                    <td>Garrett Winters</td>
                                                    <td>017965215</td>
                                                    <td>garret@user.com</td>
                                                    <td>
                                                        <a href="index.php?syc=2" type="button" class="btn btn-primary btn-sm">View Details</a>
                                                        <a href="index.php?syc=3" type="button" class="btn btn-warning btn-sm">Edit</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Send Method</label></div>
                                        <div class="col col-md-6">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="sendmethod" class="form-check-label ">
                                                        <input type="checkbox" id="sendmethod" name="sendmethod" value="email" class="form-check-input">Email
                                                    </label>
                                                </div>
                                                <div class="sendmethod">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="sendmethod" name="sendmethod" value="sms" class="form-check-input">SMS
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                </div>
                                <div class="col col-md-6">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-bomb"></i> BLAST!
                                    </button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script>

        $(document).ready(function() {
          $('#table_listdonator').DataTable();
        } );

        function sendto_option() {
            
            sendto = $('#sendto').val();
            
            if(sendto=="selected"){
                $('#area_donator').show();
            }else{
                $('#area_donator').hide();
            }
        }
        

    </script>