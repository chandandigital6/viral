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
                            <div class="row">
                                <!-- Column 1 -->
                                <div class="col-6">
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
                                        <textarea id="description" name="description" class="form-control textarea">{{ old('description') }}</textarea>
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
                                        <label for="founded_title">Founded Title:</label>
                                        <input type="text" id="founded_title" name="founded_title" class="form-control" value="{{ old('founded_title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="founded_date">Founded date:</label>
                                        <input type="datetime-local" id="founded_date" name="founded_date" class="form-control datetimepicker" value="{{ old('founded_date') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="founded">Founded:</label>
                                        <textarea id="founded" name="founded" class="form-control textarea">{{ old('founded') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="founded_image">Founded Image:</label>
                                        <input type="file" id="founded_image" name="founded_image" class="form-control">
                                    </div>
                                </div>

                                <!-- Column 2 -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="g_title">Great Title:</label>
                                        <input type="text" id="g_title" name="g_title" class="form-control" value="{{ old('g_title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="g_date">Great date:</label>
                                        <input type="datetime-local" id="g_date" name="g_date" class="form-control datetimepicker" value="{{ old('g_date') }}">
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
                                        <label for="f_data_title">Founded Data Office Title:</label>
                                        <input type="text" id="f_data_title" name="f_data_title" class="form-control" value="{{ old('f_data_title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="f_date_date">Founded Data Office Date:</label>
                                        <input type="datetime-local" id="f_date_date" name="f_date_date" class="form-control datetimepicker" value="{{ old('f_date_date') }}">
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
                                        <label for="i_data_title">International Award Title:</label>
                                        <input type="text" id="i_data_title" name="i_data_title" class="form-control" value="{{ old('i_data_title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="i_data_date">International Award Date:</label>
                                        <input type="datetime-local" id="i_data_date" name="i_data_date" class="form-control datetimepicker" value="{{ old('i_data_date') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="international_award">International Award:</label>
                                        <textarea id="international_award" name="international_award" class="form-control textarea">{{ old('international_award') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="international_award_image">International Award Image:</label>
                                        <input type="file" id="international_award_image" name="international_award_image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
