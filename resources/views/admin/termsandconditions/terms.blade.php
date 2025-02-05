@include('admin.header');

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Terms and Conditions</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Terms and Conditions</div>
                    </div>
                    <form class="p-4" action="{{ url('codesavvy-admin/terms-and-conditions') }}" method="POST">
                        @csrf


                            <div class="form-group">
                                <label for="faq-question">Heading</label>
                                <input type="text" name="heading" class="form-control" value="{{$terms->heading}}" placeholder="Enter question" />
                            </div>

                            <div class="form-group">
                                <label for="faq-answer">Description</label>
                                <textarea id="editor" name="description" class="form-control" rows="3" placeholder="Enter answer">{{$terms->description}}</textarea>
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div class="col-md-2 mx-auto mt-4">
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



@include('admin.footer');