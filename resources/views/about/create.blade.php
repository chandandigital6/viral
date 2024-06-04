@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create about us </div>
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
                        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="heading">Heading:</label>
                                <input type="text" id="heading" name="heading" class="form-control" value="{{ old('heading') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fe_1">Feature 1:</label>
                                <input type="text" id="fe_1" name="fe_1" class="form-control" value="{{ old('fe_1') }}">
                            </div>
                            <div class="form-group">
                                <label for="fe_2">Feature 2:</label>
                                <input type="text" id="fe_2" name="fe_2" class="form-control" value="{{ old('fe_2') }}">
                            </div>
                            <div class="form-group">
                                <label for="fe_3">Feature 3:</label>
                                <input type="text" id="fe_3" name="fe_3" class="form-control" value="{{ old('fe_3') }}">
                            </div>
                            <div class="form-group">
                                <label for="founded">Founded:</label>
                                <textarea id="founded" name="founded" class="form-control textarea">{{ old('founded') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="founded_image">Founded Image:</label>
                                <input type="file" id="founded_image" name="founded_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="g_success">Great Success:</label>
                                <textarea id="g_success" name="g_success" class="form-control textarea">{{ old('g_success') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="g_success_image">Great Success Image:</label>
                                <input type="file" id="g_success_image" name="g_success_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="founded_data_office">Founded Data Office:</label>
                                <textarea id="founded_data_office" name="founded_data_office" class="form-control textarea">{{ old('founded_data_office') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="founded_data_office_image">Founded Data Office Image:</label>
                                <input type="file" id="founded_data_office_image" name="founded_data_office_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="international_award">International Award:</label>
                                <textarea id="international_award" name="international_award" class="form-control textarea">{{ old('international_award') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="international_award_image">International Award Image:</label>
                                <input type="file" id="international_award_image" name="international_award_image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
