    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                
                <div class="card">
                    <div class="card-header">
                        <h4>Donator Details</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted m-b-15"></p>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#addpro" role="tab" aria-controls="pills-profile" aria-selected="false">Donation History</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent" style="border:1px solid grey;padding:10px;">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h4>Basic Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-6"><input disabled type="text" id="name" name="name" placeholder="Enter your name." class="form-control" value="Muhammad Kasim Bin Abu"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birthdate</label></div>
                                        <div class="col-12 col-md-6"><input disabled type="date" id="birthdate" name="birthdate" placeholder="Enter your birthdate." class="form-control" value=""><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact No.</label></div>
                                        <div class="col-12 col-md-6"><input disabled type="text" id="phone" name="phone" placeholder="Enter your phone." class="form-control" value="01364654"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-6"><input disabled type="email" id="email" name="email" placeholder="Enter your email." class="form-control" value="kasim@user.com"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                </form>
                             </div>
                            <div class="tab-pane fade" id="addpro" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h4></h4><br>
                                <table id="table_historydonate" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Details</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>To help Syria Child</td>
                                            <td>20 January 2016</td>
                                            <td>RM 1300</td>
                                        </tr>
                                        <tr>
                                            <td>Sedekah Jariah bulan Ramadhan</td>
                                            <td>20 August 2017</td>
                                            <td>RM 600</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


    <script type="text/javascript">
        $(document).ready(function() {
          $('#table_historydonate').DataTable();
        } );
    </script>