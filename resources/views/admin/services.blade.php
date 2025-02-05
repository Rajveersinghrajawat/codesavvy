@include('admin.header');


<div class="container">

  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Dashboard / Services Page</h3>
      </div>

    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title">Services</div>
            <a href="add-services"><button type="button" class="btn btn-primary">Add Services</button></a>
          </div>
          <div class="card-body">
            <table class="table mt-3">
              <thead>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Sevice Name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($services as $key => $service)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$service->services_title}}</td>
                  <td>
                    <a href="{{ url('codesavvy-admin/services-update', ['id' => $service->id]) }}">
                      <button class="btn btn-primary">Edit</button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>


<div class="container">

  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Meta Services</div>
          </div>
          <form action="{{ url('/codesavvy-admin/services') }}" method="POST">
            @csrf

            <!-- Meta Information -->
            <div class="row mt-3 ps-3">
              <div class="form-group col-md-5">
                <label for="meta-title">Meta Title</label>
                <input type="text" id="meta-title" class="form-control" name="meta_title" placeholder="Meta Title" />
              </div>
              <div class="form-group col-md-5">
                <label for="focus-keywords">Focus Keywords</label>
                <input type="text" id="focus-keywords" class="form-control" name="focus_keypress" placeholder="Focus keypress" />
              </div>
            </div>

            <div class="form-group mt-3">
              <label for="meta-description">Meta Description</label>
              <textarea id="meta-description" class="form-control" name="meta_description" placeholder="Meta Description" rows="3"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="col-md-2 mx-auto my-4">
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

@include('admin.footer');