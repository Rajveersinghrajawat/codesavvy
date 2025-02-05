@include('admin.header');


<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Home Page</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Home SEO</div>
                    </div>

                    <form action="{{ url('codesavvy-admin/home/update/' . $home->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" value="{{$home->meta_title}}" name="meta_title"
                                placeholder="Meta Title" />
                        </div>

                        <div class="form-group mb-3">
                            <label>Meta Description</label>
                            <textarea class="form-control" name="meta_description" placeholder="Meta Description" rows="5">{{ old('meta_description', $home->meta_description) }}</textarea>
                        </div>


                        <div class="form-group mb-3">
                            <label>Focus Keypress</label>
                            <input type="text" class="form-control" name="focus_keypress" value="{{$home->focus_keypress}}"
                                placeholder="Focus Keypress" />
                        </div>

                        <div class="col-md-2 mx-auto mb-4">
                            <button type="submit" class="form-control btn btn-primary">Update</button>
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