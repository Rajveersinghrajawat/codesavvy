@include('admin.header')

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Add Invoice Details</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add Invoice Details</div>
                    </div>
                    <form action="{{ url('/codesavvy-admin/invoice') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row m-2">
                            <div class="form-group col-md-5 mb-3">
                                <label for="service-name">Customer Name</label>
                                <input type="text" id="customer-name" class="form-control" name="customer_name" placeholder="Enter customer name" />
                            </div>

                            <div class="form-group col-md-5 mb-3">
                                <label for="service-name">Customer Number</label>
                                <input type="tel" id="customer-number" class="form-control" name="customer_number" placeholder="+91 8569321573" />
                            </div>

                        </div>

                        <div class="row m-2">
                            <div class="form-group col-md-5 mb-3">
                                <label for="service-name">Customer email</label>
                                <input type="email" id="customer-email" class="form-control" name="customer_email" placeholder="abc@gmail.com" />
                            </div>

                            <div class="form-group col-md-5 mb-3">
                                <label>Services</label>
                                <select class="form-control" name="services_name">
                                    <option value="0">-- Select Default --</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service->services_title }}">{{ $service->services_title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="row m-2">
                            <div class="form-group col-md-5 mb-3">
                                <label>Payment Status</label>
                                <select class="form-control" name="payment_status" required>
                                    <option value="" selected disabled>-- Select Payment Status --</option>
                                    <option value="Due">Due</option>
                                    <option value="On_Hold">On Hold</option>
                                    <option value="Completed">Completed</option>
                                </select>

                            </div>

                            <div class="form-group col-md-5 mb-3">
                                <label>Payment Amount</label>
                                <input type="text" id="payment-amount" class="form-control" name="payment_amount" />
                            </div>

                        </div>

                        <div class="form-group  mb-3">
                            <label>GST</label>
                            <input type="text" id="gst-tax" class="form-control" name="gst_tax" placeholder="9%" />
                        </div>

                        <div class="form-group  mb-3">
                            <label>Customer Address</label>
                            <textarea id="customer-address" class="form-control" name="customer_address"></textarea>
                        </div>



                        <!-- Submit Button -->
                        <div class="col-md-2 mx-auto my-4">
                            <button type="submit" name="save" class="form-control btn btn-primary">Genrate Invoice</button>
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


@include('admin.footer')