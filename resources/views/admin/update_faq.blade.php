@include('admin.header');

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Add Faq's</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FAQ'S</div>
                    </div>
                    <form class="p-4" action="{{ url('codesavvy-admin/update_faq/' . $faqs->id) }}" method="POST">
                        @csrf

                        <!-- FAQ Section -->
                        <div class="faq-section">
                            <div class="form-group mb-3">
                                <label>Services</label>
                                <select class="form-control" name="services_id">
                                    <option value="0" {{ $faqs->services_id == 0 ? 'selected' : '' }}>-- Select Default --</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ $faqs->services_id == $service->id ? 'selected' : '' }}>
                                        {{ $service->services_title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="faq-question">Question</label>
                                <input type="text" name="question" value="{{$faqs->question}}" class="form-control" placeholder="Enter question" />
                            </div>

                            <div class="form-group">
                                <label for="faq-answer">Answer</label>
                                <textarea id="faq-answer" name="answer" class="form-control" rows="3" placeholder="Enter answer">{{$faqs->answer}}</textarea>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Status</label>
                            <div class="row">
                                <!-- Active -->
                                <div class="col-md-1 col-12 d-flex align-items-center">
                                    <input type="radio" name="status" value="1"
                                        {{ $faqs->status == 1 ? 'checked' : '' }} />
                                    <label class="ms-2">Active</label>
                                </div>

                                <!-- Inactive -->
                                <div class="col-md-1 col-12 d-flex align-items-center">
                                    <input type="radio" name="status" value="0"
                                        {{ $faqs->status == 0 ? 'checked' : '' }} />
                                    <label class="ms-2">Inactive</label>
                                </div>
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div class="col-md-2 mx-auto mt-4">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
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