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
                            <h1>SEO</h1>
                            <a href="{{ route('seo.create') }}" class="btn btn-light">Create SEO</a>
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
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Property</th>
                                    <th>Content</th>
                                    <th>Page</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($seoes as $seo)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $seo->name }}</td>
                                        <td>{{$seo->property}}</td>
                                        <td>{{$seo->content}}</td>
                                        <td>{{$seo->page}}</td>
                                        <td>
                                            <a href="{{ route('seo.edit', $seo->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('seo.delete', $seo->id) }}" class="btn btn-danger">Delete</a>
                                            <!-- Add delete button if needed -->

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Records Not found </td>
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
