@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Create a new jobs</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('jobs.update',$jobs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($jobs)
                    <img src="{{asset('storage/'.$jobs->image)}}" width="100" alt="">
                @endif
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $jobs->title }}">
            </div>

            <div class="form-group">
                <label for="qualification">Qualification:</label>
                <textarea class="form-control textarea" id="qualification" name="qualification">{{ $jobs->qualification }}</textarea>
            </div>

            <div class="form-group">
                <label for="skill">Skill:</label>
                <textarea class="form-control textarea" id="skill" name="skill">{{ $jobs->skill }}</textarea>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $jobs->location }}">
            </div>

            <div class="form-group">
                <label for="info">Info:</label>
                <input type="text" class="form-control" id="info" name="info" value="{{ $jobs->info }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
