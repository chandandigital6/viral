@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>SEO</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('seo.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="property">Property</label>
                <input type="text" class="form-control" id="property" name="property" value="{{ old('property') }}">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}">
            </div>
            <div class="form-group">
                <label for="author_name">Select Page</label>
                <select name="page" class="form-control" id="">
                    <option value="">select page</option>
                    <option value="about-us">about-us</option>
                    <option value="blog">blog</option>
                    <option value="career">career</option>
                    <option value="client-reviews">client-reviews</option>
                    <option value="contact-us">contact-us</option>
                    <option value="content-marketing">content-marketing</option>
                    <option value="content-writing">content-writing</option>
                    <option value="conversion-rate-optimization">conversion-rate-optimization</option>
                    <option value="custom-website-design">custom-website-design</option>
                    <option value="email-marketing-services">email-marketing-services</option>
                    <option value="index">index</option>
                    <option value="jobs">jobs</option>
                    <option value="local-seo-services">local-seo-services</option>
                    <option value="meet-talent">meet-talent</option>
                    <option value="online-reputation-management">online-reputation-management</option>
                    <option value="ppc-management">ppc-management</option>
                    <option value="privacy-policy">privacy-policy</option>
                    <option value="search-engine-optimization">search-engine-optimization</option>
                    <option value="single">single</option>
                    <option value="social-media-brand-management">social-media-brand-management</option>
                    <option value="social-media-management">social-media-management</option>
                    <option value="social-media-paid-advertising">social-media-paid-advertising</option>
                    <option value="terms-of-service">terms-of-service</option>
                    <option value="video-production">video-production</option>
                    <option value="youtube-channel-monetization">youtube-channel-monetization</option>
                    <option value="youtube-video-marketing">youtube-video-marketing</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
