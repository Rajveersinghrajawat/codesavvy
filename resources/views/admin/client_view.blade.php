@include('admin.header');


<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard / Client View</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Testimonials</div>
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
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-items-center">
                                @foreach($testimonials as $key => $testimonial)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $testimonial->client_name }}</td>
                                    <td style="max-width: 300px; word-wrap: break-word; white-space: normal;">
                                        @php
                                        $words = str_word_count($testimonial->massage, 2);
                                        $wordKeys = array_keys($words);
                                        $limitedText = implode(' ', array_slice($words, 0, 8));
                                        @endphp

                                        {{ $limitedText }}
                                        @if (count($words) > 100)
                                        <a href="#" class="read-more" data-fulltext="{{ $testimonial->massage }}">...Read More</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($testimonial->status == 1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm me-2"><i class="fas fa-solid fa-pen"></i></a>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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