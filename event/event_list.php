    
<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">


<!-- Animated -->
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12 col-md-12"> <!-- adjust size here -->
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">List of Event</strong>
                </div>
                <div class="card-body">
                    <table id="table_listdonator" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Person-in-Charge</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Aqiqah di Syria 2020</td>
                                <td>
                                    Peluang untuk laksanakan aqiqah anak anda di Syria terbuka setiap bulan sepanjang 2020. Harga terkini bagi seekor kambing aqiqah adalah RM870.
                                    Kambing tersebut akan disembelih, dipek, dimasak dan siap diagihkan…
                                </td>
                                <td>09 January 2020</td>
                                <td>No 43, Jalan Bola Jaring 13/15, Seksyen 13, 40100 Shah Alam, Selangor.​</td>
                                <td>Rahman (0136459798)</td>
                                <td>
                                    <a href="index.php?syc=31" type="button" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="index.php?syc=3" type="button" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?syc=33" type="button" class="btn btn-success btn-sm"><i class="fa fa-bomb"></i>BLAST!</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Aqiqah4Syria: Disember 2019: Muhammad Fayyadh Mohammad Saifuddin</td>
                                <td>
                                    Aqiqah Muhammad Fayyadh bin Mohammad Saifuddin • Bilangan : Dua ekor kambing• Tempat : Atma, Syria• Tarikh :
                                    Disember 2019• Penerima daging : Fakir miskin dan pelarian di kawasan agihan...
                                </td>
                                <td>08 January 2020</td>
                                <td>No 43, Jalan Bola Jaring 13/15, Seksyen 13, 40100 Shah Alam, Selangor.​</td>
                                <td>Shira (014187987)</td>
                                <td>
                                    <a href="index.php?syc=31" type="button" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="index.php?syc=3" type="button" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?syc=33" type="button" class="btn btn-success btn-sm"><i class="fa fa-bomb"></i>BLAST!</a>
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