@include('admin.header');


            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard / Map Page</h3>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Map</div>
                                </div>
                                <form method="post" action="">


                                    <div class="form-group mb-3">
                                        <label>Map Url</label>
                                        <input type="url" class="form-control" name="map_url"
                                            placeholder="Map Url" />
                                    </div>

                                    <div class="col-md-2 mx-auto mb-4">
                                        <button type="submit" class="form-control btn btn-primary">Submit</button>
                                    </div>

                                </form>
                            </div>  
                        </div>
                    </div>

                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">

                    <div>
                        Distributed by
                        <a target="_blank" href="https://codesavvynest.com/">CodeSavvyNest</a>.
                    </div>
                </div>
            </footer>
        </div>


    </div>
    
   @include('admin.footer');