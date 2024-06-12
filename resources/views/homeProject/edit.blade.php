@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create </div>
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
                        <form action="{{ route('homeProject.update',$homeProject->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if($homeProject)
                                    <img src="{{asset('storage/'.$homeProject->image)}}" alt="" width="100">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $homeProject->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{ $homeProject->heading }}">
                            </div>
                            <div class="mb-3">
                                <label for="msg" class="form-label">Message</label>
                                <textarea class="form-control textarea" id="msg" name="msg" rows="3">{{ $homeProject->msg}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
