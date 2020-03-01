    
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">


    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12"> <!-- adjust size here -->
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List of Donator</strong>
                    </div>
                    <div class="card-body">
                        <table id="table_listdonator" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>01632687</td>
                                    <td>tiger@user.com</td>
                                    <td>
                                        <a href="index.php?syc=2" type="button" class="btn btn-primary btn-sm">View Details</a>
                                        <a href="index.php?syc=3" type="button" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                                <tr>
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
          $('#table_listdonator').DataTable();
        } );
    </script>