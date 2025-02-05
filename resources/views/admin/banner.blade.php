@include('admin.header');


            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard / Banner Page</h3>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Banner</div>
                                </div>
                                <form method="post" action="{{url('codesavvy-admin/banner')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Baneer Heading</label>
                                        <input type="text" class="form-control" name="banner_heading"
                                            placeholder="Baneer Heading" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Banner Short Heading</label>
                                       
                                        <input type="text" class="form-control" name="banner_short_heading" placeholder="Banner Short Heading" />
                                   
                                    </div>


                                    <div class="form-group mb-3">
                                        <label>Banner Images</label>
                                        <input type="file" class="form-control" name="banner_image"
                                            />
                                    </div>

                                    <div class="form-group mb-3">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-md-1 d-flex align-items-center">
                                    <input type="radio" name="status" value="1" />
                                        
                                    <label class="ms-2">Active</label>
                                </div>
                                <div class="col-md-1 d-flex align-items-center">
                                    <input type="radio" name="status" value="0" required />
                                    <label class="ms-2">Inactive</label>
                                </div>
                            </div>
                        </div>

                                    <div class="col-md-2 mx-auto mb-4">
                                        <button type="submit" name="save" class="form-control btn btn-primary">Submit</button>
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