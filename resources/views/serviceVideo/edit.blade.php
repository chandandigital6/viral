@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>edit service video</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('serviceVideo.update',$serviceVideo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image', $serviceVideo->image) }}">
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $serviceVideo->url) }}">
                @error('url')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $serviceVideo->title) }}">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="sort_msg">Sort Message</label>
                <textarea class="form-control textarea" id="sort_msg" name="sort_msg">{{ old('sort_msg', $serviceVideo->sort_msg) }}</textarea>
                @error('sort_msg')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="f1_msg">Feature 1 Message</label>
                <input type="text" class="form-control" id="f1_msg" name="f1_msg" value="{{ old('f1_msg', $serviceVideo->f1_msg) }}">
                @error('f1_msg')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="f1_icon">Feature 1 Icon</label>
                <input type="text" class="form-control" id="f1_icon" name="f1_icon" value="{{ old('f1_icon', $serviceVideo->f1_icon) }}">
                @error('f1_icon')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="f2_msg">Feature 2 Message</label>
                <input type="text" class="form-control" id="f2_msg" name="f2_msg" value="{{ old('f2_msg', $serviceVideo->f2_msg) }}">
                @error('f2_msg')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="f2_icon">Feature 2 Icon</label>
                <input type="text" class="form-control" id="f2_icon" name="f2_icon" value="{{ old('f2_icon', $serviceVideo->f2_icon) }}">
                @error('f2_icon')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="f3_msg">Feature 3 Message</label>
                <input type="text" class="form-control" id="f3_msg" name="f3_msg" value="{{ old('f3_msg', $serviceVideo->f3_msg) }}">
                @error('f3_msg')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="f3_icon">Feature 3 Icon</label>
                <input type="text" class="form-control" id="f3_icon" name="f3_icon" value="{{ old('f3_icon', $serviceVideo->f3_icon) }}">
                @error('f3_icon')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="service_id">Service</label>
                <select class="form-control" id="service_id" name="service_id">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ $serviceVideo->service_id == $service->id ? 'selected' : '' }}>{{ $service->category }}</option>
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
