@include('admin.header');

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Profile</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Profile</div>
                    </div>
                    <form action="{{ url('codesavvy-admin/profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') 

                        <div class="form-group mb-3">
                            <label for="image">Website Logo</label>
                            <input type="file" class="form-control" name="image" />
                            @if($profile->image)
                            <img src="{{ asset('uploads/' . $profile->image) }}" width="150" alt="Current Image">
                            @endif

                            <div class="form-group mb-3">
                                <label for="admin_name">Admin Name</label>
                                <input type="text" id="admin_name" class="form-control" name="admin_name" value="{{ old('admin_name	', $profile->admin_name) }}" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="admin_email">Admin Email</label>
                                <input type="email" id="admin_email" class="form-control" name="admin_email" value="{{ old('admin_email', $profile->admin_email) }}" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="admin_name">Fackbook Url</label>
                                <input type="url" id="fackbook" class="form-control" name="fackbook" value="{{ old('fackbook	', $profile->fackbook) }}" />
                            </div>


                            <div class="form-group mb-3">
                                <label for="admin_name">Whatsapp</label>
                                <input type="url" id="whatsapp" class="form-control" name="whatsapp" value="{{ old('whatsapp	', $profile->whatsapp) }}" />
                            </div>


                            <div class="form-group mb-3">
                                <label for="admin_name">Instagram</label>
                                <input type="url" id="instagram" class="form-control" name="instagram" value="{{ old('instagram	', $profile->instagram) }}" />
                            </div>


                            <div class="form-group mb-3">
                                <label for="admin_name">Linkedin</label>
                                <input type="url" id="linkedin" class="form-control" name="linkedin" value="{{ old('linkedin	', $profile->linkedin) }}" />
                            </div>

                        


                            <div class="col-md-2 mx-auto my-4">
                                <button type="submit" class="form-control btn btn-primary">Update</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
        <div>
            Distributed by
            <a target="_blank" href="https://codesavvynest.com/">CodeSavvyNest</a>.
        </div>
    </div>
</footer>



@include('admin.footer');{ old('