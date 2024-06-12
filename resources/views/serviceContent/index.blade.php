@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Benefits Plans</h1>
                            <a href="{{ route('serviceContent.create') }}" class="btn btn-light">Create ServiceContent</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Massage</th>
                                    <th>Part 1</th>
                                    <th>Part 2</th>
{{--                                    <th>Image</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($serviceContentData as $serviceContent)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $serviceContent->service->category }}</td>
                                        <td>{{ $serviceContent->title }}</td>
                                        <td>{!! $serviceContent->sort_msg !!}</td>
                                        <td>{!! $serviceContent->content_1 !!}</td>
                                        <td>{!! $serviceContent->content_2!!}</td>
{{--                                        <td>{{ $serviceContent->status ? 'Active' : 'Inactive' }}</td>--}}
{{--                                        <td><img src="{{ asset('storage/'.$serviceContent->image) }}" alt="{{ $serviceContent->title }}" style="max-width: 100px;"></td>--}}
                                        <td>
                                            <a href="{{ route('serviceContent.edit', $serviceContent->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('serviceContent.delete', $serviceContent->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->
                                            <a href="{{ route('serviceContent.duplicate', $serviceContent->id) }}" class="btn btn-warning">Duplicate</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No posts found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
