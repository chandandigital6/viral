@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create Service</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="heading">category</label>
                <input type="text" name="category" class="form-control" id="category" value="{{ old('category') }}">
                @error('category')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image">
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="short_description">short_description</label>
                <textarea id="short_description" name="short_description" class="form-control textarea">{{ old('short_description') }}</textarea>

{{--                <input type="text" name="short_description" class="form-control" id="short_description" value="{{ old('short_description') }}">--}}
                @error('short_description')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="service_appointment_title">Service Appointment Title</label>--}}
{{--                <input type="text" name="service_appointment_title" class="form-control" id="service_appointment_title" value="{{ old('service_appointment_title') }}">--}}
{{--                @error('service_appointment_title')--}}
{{--                <small class="text-danger">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="service_appointment_text">Service Appointment Text</label>--}}
{{--                <input type="text" name="service_appointment_text" class="form-control" id="service_appointment_text" value="{{ old('service_appointment_text') }}">--}}
{{--                @error('service_appointment_text')--}}
{{--                <small class="text-danger">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="service_appointment_number">Service Appointment Number</label>--}}
{{--                <input type="text" name="service_appointment_number" class="form-control" id="service_appointment_number" value="{{ old('service_appointment_number') }}">--}}
{{--                @error('service_appointment_number')--}}
{{--                <small class="text-danger">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <button type="submit" class="btn btn-primary">Create Service</button>
        </form>
    </div>


@endsection
