@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>edit benefits</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('serviceBenefits.update',$serviceBenefits->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
                @if($serviceBenefits)
                    <img src="{{asset('storage/'.$serviceBenefits->image)}}" width="100" alt="">
                @endif
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$serviceBenefits->title}}" required>
            </div>

            <div class="form-group">
                <label for="msg">Massage</label>
                <input type="text" class="form-control" name="msg" value="{{$serviceBenefits->msg}}" id="fe_1">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                    <option value="1" {{ old('status', $serviceBenefit->status ?? '1') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $serviceBenefit->status ?? '0') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="service_id">Service</label>
                <select name="service_id" id="service_id" class="form-control @error('service_id') is-invalid @enderror">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ $serviceBenefits->service_id == $service->id ? 'selected' : '' }}>{{ $service->category }}</option>
                    @endforeach
                </select>
                @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
