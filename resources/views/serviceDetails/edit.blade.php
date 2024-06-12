@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit service  us </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('ServiceDetails.update',$serviceDetails->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="service_id">Service</label>
                                <select name="service_id" id="service_id" class="form-control @error('service_id') is-invalid @enderror">
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ $serviceDetails->service_id == $service->id ? 'selected' : '' }}>{{ $service->category }}</option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Field -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                                @if($serviceDetails->image)
                                    <img src="{{ Storage::url($serviceDetails->image) }}" alt="Image" class="img-thumbnail mt-2" width="150">
                                @endif
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Title Field -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $serviceDetails->title) }}" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description Field -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control textarea @error('description') is-invalid @enderror">{{ old('description', $serviceDetails->description) }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Feature Image and Message Fields -->
                            @for($i = 1; $i <= 5; $i++)
                                <div class="form-group">
                                    <label for="f{{ $i }}_image">Feature {{ $i }} Image</label>
                                    <input type="file" name="f{{ $i }}_image" id="f{{ $i }}_image" class="form-control-file @error('f{{ $i }}_image') is-invalid @enderror">
                                    @if($serviceDetails->{'f'.$i.'_image'})
                                        <img src="{{ Storage::url($serviceDetails->{'f'.$i.'_image'}) }}" alt="Feature {{ $i }} Image" class="img-thumbnail mt-2" width="150">
                                    @endif
                                    @error('f{{ $i }}_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="f{{ $i }}_msg">Feature {{ $i }} Message</label>
                                    <input type="text" name="f{{ $i }}_msg" id="f{{ $i }}_msg" value="{{ old('f'.$i.'_msg', $serviceDetails->{'f'.$i.'_msg'}) }}" class="form-control @error('f{{ $i }}_msg') is-invalid @enderror">
                                    @error('f{{ $i }}_msg')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endfor

                            <!-- Title 1 Field -->
                            <div class="form-group">
                                <label for="title_1">Title 1</label>
                                <input type="text" name="title_1" id="title_1" value="{{ old('title_1', $serviceDetails->title_1) }}" class="form-control @error('title_1') is-invalid @enderror">
                                @error('title_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Heading Field -->
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" value="{{ old('heading', $serviceDetails->heading) }}" class="form-control @error('heading') is-invalid @enderror">
                                @error('heading')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Short Description Field -->
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <input type="text" name="short_description" id="short_description" value="{{ old('short_description', $serviceDetails->short_description) }}" class="form-control @error('short_description') is-invalid @enderror">
                                @error('short_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
