@include('admin.header');

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / About Page</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">About Us</div>
                    </div>
                    <form action="{{ url('codesavvy-admin/about/update/' . $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label>About Heading</label>
                            <input type="text" class="form-control" name="about_heading" value="{{ old('about_heading', $about->about_heading) }}" placeholder="About Heading" required />
                        </div>

                        <div class="form-group">
                            <label for="comment">Massage</label>
                            <textarea class="form-control" id="editor" name="massage" required>{{ old('massage', $about->massage) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="comment">About Image</label>
                            <input type="file" class="form-control" name="image" />
                            @if($about->image)
                            <img src="{{ asset('uploads/' . $about->image) }}" width="150" alt="Current Image">
                            @endif
                        </div>

                        <div class="row ps-4">
                            <div class="form-group col-6 col-sm-4">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title', $about->meta_title) }}" placeholder="Meta Title" />
                            </div>

                            <div class="form-group col-6 col-sm-4">
                                <label>Focus Keypress</label>
                                <input type="text" class="form-control" name="focus_keypress" value="{{ old('focus_keypress', $about->focus_keypress) }}" placeholder="Focus Keypress" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea class="form-control" name="meta_description" placeholder="Meta Description" rows="5">{{ old('meta_description', $about->meta_description) }}</textarea>
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