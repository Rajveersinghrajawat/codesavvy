@include('admin.header');

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Testimonials Page</h3>
                
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header row justify-content-between">
                        <div class="col-sm-6 card-title">Testimonials</div>
                        <div class="col-sm-6 text-end">
                            <a href="{{ url('/codesavvy-admin/testimonials_view') }}">
                            <button class="btn btn-primary">View</button>
                            </a>
                        </div>
                    </div>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ isset($testimonials) ? url('testimonials.update', $testimonials->id) : url('codesavvy-admin/testimonials') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($testimonials))
                        @method('PUT') 
                        @endif

                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="client_name"
                                value="{{ old('client_name', $testimonials->client_name ?? '') }}"
                                placeholder="Name" required />
                        </div>

                        <div class="form-group">
                            <label for="comment">Massage</label>
                            <textarea class="form-control" name="massage" required>{{ old('massage', $testimonials->massage ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="comment">Image</label>
                            <input type="file" class="form-control" name="image" />
                            @if(isset($testimonials->image))
                            <img src="{{ asset('uploads/' . $testimonials->image) }}" width="150" alt="Current Image">
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-md-1 d-flex align-items-center">
                                    <input type="radio" name="status" value="1"
                                        {{ isset($testimonials) && $testimonials->status == 1 ? 'checked' : '' }} required />
                                    <label class="ms-2">Active</label>
                                </div>
                                <div class="col-md-1 d-flex align-items-center">
                                    <input type="radio" name="status" value="0"
                                        {{ isset($testimonials) && $testimonials->status == 0 ? 'checked' : '' }} required />
                                    <label class="ms-2">Inactive</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mx-auto mb-4">
                            <button type="submit" name="save" class="form-control btn btn-primary">
                                {{ isset($testimonials) ? 'Update' : 'Save' }}
                            </button>
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

@include('admin.footer')