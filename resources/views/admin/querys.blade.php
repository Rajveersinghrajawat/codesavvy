@include('admin.header');


<div class="container">
  <div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Dashboard / Querys Page</h3>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title">Querys</div>
            @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
          </div>
          <div class="card-body">
            <table class="table mt-3 text-center">
              <thead>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Custmor Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Services</th>
                  <th scope="col">Massage</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contact as $key=>$query)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$query->name}}</td>
                  <td>{{$query->email}}</td>
                  <td>{{$query->phone_number}}</td>
                  <td>{{$query->service}}</td>
                  <td>{{$query->massage}}</td>
                  <td>
                    <form action="{{ url('codesavvy-admin/querys', $query->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this query?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
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