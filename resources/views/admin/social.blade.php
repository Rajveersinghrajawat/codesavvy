@include('admin.header');


<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Social Page</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Social Links</div>
                    </div>
                    <form method="post" action="">


                        <div class="form-group mb-3">
                            <label>Fackbook Url</label>
                            <input type="url" class="form-control" name="fackbook _url"
                                placeholder="Fackbook Url" />
                        </div>

                        <div class="form-group mb-3">
                            <label>Whatsapp</label>
                            <input type="url" class="form-control" name="whatsapp_url"
                                placeholder="Whatsapp Url" />
                        </div>

                        <div class="form-group mb-3">
                            <label>Instagram</label>
                            <input type="url" class="form-control" name="instagram_url"
                                placeholder="Instagram Url" />
                        </div>

                        <div class="form-group mb-3">
                            <label>Linkedin</label>
                            <input type="url" class="form-control" name="linkedin_url"
                                placeholder="Linkedin Url" />
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