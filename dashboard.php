
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">100000</span></div>
                                    <div class="stat-heading">Total Donator</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">10000</span></div>
                                    <div class="stat-heading">Total Event</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">RM<span class="count">100000</span></div>
                                    <div class="stat-heading">Total Donation</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Donation Every Month</h4>
                    </div>
                    <div class="card-body">
                        <div id='divplot1'>
                            <!-- Plotly chart will be drawn inside this DIV -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Donator Join Every Month</h4>
                    </div>
                    <div class="card-body">
                        <div id='divplot2'>
                            <!-- Plotly chart will be drawn inside this DIV -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <!-- .animated -->



    <script>

        var data = [
          {
            x: ['Jan', 'Feb', 'Mac'],
            y: [20, 14, 23],
            type: 'bar'
          }
        ];

        Plotly.newPlot('divplot1', data);


        var trace1 = {
          x: [1, 2, 3, 4],
          y: [10, 12, 15, 25],
          type: 'scatter'
        };

        var data2 = [trace1];

        Plotly.newPlot('divplot2', data2);

    </script>