    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                
                <div class="card">
                    <div class="card-header">
                        <h4>Add New Event </h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted m-b-15"></p>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-home" aria-selected="true">Event Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#describ" role="tab" aria-controls="pills-profile" aria-selected="false">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent" style="border:1px solid grey;padding:10px;">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h4>Basic Information</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Event Name</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="name" name="name" placeholder="Event name." class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date</label></div>
                                        <div class="col-12 col-md-6"><input type="date" id="date" name="date" class="form-control"><small class="form-text text-muted " hidden>This is a help text</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Person-in-charge</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="personincharge" id="personincharge" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Shira Ahmad (0164879745)</option>
                                                <option value="2">Muhammad Hisyam (019763473)</option>
                                                <option value="3">Razali Karim (013679874)</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                             </div>
                            <div class="tab-pane fade" id="describ" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h4>Description of Event</h4><br>
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"></label></div>
                                        <div class="col-12 col-md-12"><textarea name="address" id="address" rows="50" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                </form>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                </div>
                                <div class="col col-md-6">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i> Submit
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
    <script src="https://cdn.tiny.cloud/1/8ztjm2moxzpiopkeu12s6qazhtdgojjzaqipsxrafuinyb87/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script>

    tinymce.init({
        selector: '#address',
        toolbar_drawer: 'floating',
        plugins: "image",
    });
    
    </script>