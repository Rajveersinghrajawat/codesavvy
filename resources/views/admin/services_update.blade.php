@include('admin.header');

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Update Services</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Services</div>
                    </div>
                    <form action="{{ url('/codesavvy-admin/services-update/' . $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label for="service-name">Service Name</label>
                            <input type="text" id="service-name" class="form-control" name="services_title" value="{{$service->services_title}}" placeholder="Enter service name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="service-description">Service Description</label>
                            <textarea id="service-description" class="form-control" name="services_description" placeholder="Enter service description" rows="5">{{$service->services_description}}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="service-image">Service Image</label>
                            <input type="file" class="form-control" name="services_image" />
                            @if($service->services_image)
                            <img src="{{ asset('uploads/' . $service->services_image) }}" alt="Service Image" width="100" />
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label for="service-image">Service Image 2</label>
                            <input type="file" class="form-control" name="services_image2" />
                            @if($service->services_images2)
                            <img src="{{ asset('uploads/' . $service->services_images2) }}" alt="Service Image 2" width="100" />
                            @endif
                        </div> 

                        <div class="form-group mb-3">
                            <label for="service-name">Service Slug</label>
                            <input type="text" id="services_slug" class="form-control" name="services_slug" value="{{$service->services_slug}}" placeholder="Enter service Slug" />
                        </div>

                         <div class="form-group mb-3">
                            <label for="service-name">Service Heading</label>
                            <input type="text" id="service-name" class="form-control" name="services_heading1" value="{{$service->services_heading1}}" placeholder="Enter service name" />
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="service-description">Service Description</label>
                            <textarea id="editor" class="form-control" name="services_description2" placeholder="Enter service description" rows="5">{{$service->services_description2}}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="service-name">Contact Heading</label>
                            <input type="text" id="service-name" class="form-control" value="{{$service->contact_heading}}" name="contact_heading" placeholder="Enter service name" />
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="service-description">Contact Description</label>
                            <textarea id="editor2" class="form-control" name="contact_description" placeholder="Enter contact description" rows="5">{{$service->contact_description}}</textarea>
                        </div>

                        <!-- Meta Information -->
                        <div class="row mt-3 ps-3">
                            <div class="form-group col-md-5">
                                <label for="meta-title">Meta Title</label>
                                <input type="text" id="meta-title" class="form-control" name="meta_title" value="{{ $service->meta_title }}" placeholder="Meta Title">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="focus-keywords">Focus Keywords</label>
                                <input type="text" id="focus-keywords" class="form-control" name="focus_keypress" value="{{ $service->focus_keypress }}" placeholder="Focus Keywords" >
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="meta-description">Meta Description</label>
                            <textarea id="meta-description" class="form-control" name="meta_description" placeholder="Meta Description" rows="3">{{ $service->meta_description }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-2 mx-auto my-4">
                            <button type="submit" name="save" class="form-control btn btn-primary">Update</button>
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