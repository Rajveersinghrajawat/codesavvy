@include('admin.header');
<style>
    .pagination>li{
        padding: 0px 10px;
    }
</style>


<div class="container">

    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / FAQ'S Page</h3>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">FAQ'S</div>
                        <a href="add_faq"><button type="button" class="btn btn-primary">Add Services</button></a>
                    </div>
                    <div class="card-body">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">question</th>
                                    <th scope="col">answer</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faqs as $key => $faq)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$faq->question}}</td>
                                    <td>{{$faq->answer}}</td>
                                    <td>
                                        @if($faq->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('codesavvy-admin/update_faq', ['id' => $faq->id]) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        ||
                                        <a href="{{ url('codesavvy-admin/view_faq', ['id' => $faq->id]) }}"> <i class="text-danger fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                         
                        </table>
                        
                           <div class="d-flex justify-center">
                                {{ $faqs->links() }}
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
</div>

@include('admin.footer');