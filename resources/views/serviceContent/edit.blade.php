@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Update Content</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('serviceContent.update',$serviceContent->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $serviceContent->title) }}">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading', $serviceContent->heading) }}">
                @error('heading')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="sort_msg">Sort Message</label>
                <textarea class="form-control textarea" id="sort_msg" name="sort_msg">{{ old('sort_msg', $serviceContent->sort_msg) }}</textarea>
                @error('sort_msg')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content_1">Content 1</label>
                <textarea class="form-control textarea" id="content_1" name="content_1">{{ old('content_1', $serviceContent->content_1) }}</textarea>
                @error('content_1')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content_2">Content 2</label>
                <textarea class="form-control textarea" id="content_2" name="content_2">{{ old('content_2', $serviceContent->content_2) }}</textarea>
                @error('content_2')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="service_id">Service</label>
                <select class="form-control" id="service_id" name="service_id">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ $serviceContent->service_id == $service->id ? 'selected' : '' }}>{{ $service->category }}</option>
                    @endforeach
                </select>
                @error('service_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
