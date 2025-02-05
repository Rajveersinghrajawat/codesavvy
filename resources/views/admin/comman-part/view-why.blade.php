@include('admin.header')
<style>
    .pagination>li{
        padding: 0px 10px;
    }
</style>

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Why Session Page</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Why Session</div>
                        <a href="why"><button type="button" class="btn btn-primary">Add Why Session</button></a>
                    </div>
                    <div class="card-body">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($whychooseus as $key => $why)
                                <tr>    
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $why->heading }}</td>
                                    <td>{{ $why->description }}</td>
                                    <td>
                                        @if($why->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{{ url('codesavvy-admin/update-why', ['id' => $why->id]) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        ||
                                        <a href="{{ url('codesavvy-admin/view-why', ['id' => $why->id]) }}"> <i class="text-danger fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-center">
                                {{ $whychooseus->links() }}
                            </div>
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

@include('admin.footer')
