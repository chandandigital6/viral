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

        <form action="{{ route('seo.update',$seo->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Page type:</label>
                        <input type="text" class="form-control" id="type" value="{{$seo->type}}" name="type" placeholder="Enter page type">
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control textarea" id="description" name="description" placeholder="Enter the meta description">{{$seo->description}}</textarea>
                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="description">Description:</label>--}}
                    {{--                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter the meta description">--}}
                    {{--                    </div>--}}
                    <div class="form-group">
                        <label for="canonical">Canonical:</label>
                        <input type="url" class="form-control" id="canonical" value="{{$seo->canonical}}" name="canonical" placeholder="https://example.com">
                    </div>
                    <div class="form-group">
                        <label for="og_locale">OG Locale:</label>
                        <input type="text" class="form-control" id="og_locale" value="{{$seo->og_locale}}" name="og_locale" placeholder="en_US">
                    </div>
                    <div class="form-group">
                        <label for="og_type">OG Type:</label>
                        <input type="text" class="form-control" id="og_type" value="{{$seo->og_type}}" name="og_type" placeholder="website">
                    </div>
                    <div class="form-group">
                        <label for="og_title">OG Title:</label>
                        <input type="text" class="form-control" id="og_title" value="{{$seo->og_title}}" name="og_title" placeholder="SEO Services, Digital Marketing Agency That Drives ROI">
                    </div>
                    <div class="form-group">
                        <label for="og_description">OG Description:</label>
                        <textarea class="form-control textarea" id="og_description"  name="og_description" placeholder="Enter the Open Graph description">{{$seo->og_description}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="og_url">OG URL:</label>
                        <input type="url" class="form-control" id="og_url" value="{{$seo->og_url}}" name="og_url" placeholder="https://example.com">
                    </div>
                    <div class="form-group">
                        <label for="og_site_name">OG Site Name:</label>
                        <input type="text" class="form-control" id="og_site_name" value="{{$seo->og_site_name}}" name="og_site_name" placeholder="Viral Business">
                    </div>
                    <div class="form-group">
                        <label for="article_publisher">Article Publisher:</label>
                        <input type="url" class="form-control" id="article_publisher" value="{{$seo->article_publisher}}" name="article_publisher" placeholder="https://www.facebook.com/viralbusinessin">
                    </div>
                    <div class="form-group">
                        <label for="og_image">OG Image:</label>
                        <input type="url" class="form-control" id="og_image" name="og_image" {{$seo->og_image}}  placeholder="https://example.com/assets/img/logo.png">
                    </div>
                    <div class="form-group">
                        <label for="twitter_label1">Twitter Label 1:</label>
                        <input type="text" class="form-control" id="twitter_label1" name="twitter_label1" value="{{$seo->twitter_label1}}" placeholder="Written by">
                    </div>
                    <div class="form-group">
                        <label for="twitter_data1">Twitter Data 1:</label>
                        <input type="text" class="form-control" id="twitter_data1" name="twitter_data1" value="{{$seo->twitter_data1}}" placeholder="Ankush Goyal">
                    </div>
                    <div class="form-group">
                        <label for="twitter_label2">Twitter Label 2:</label>
                        <input type="text" class="form-control" id="twitter_label2" name="twitter_label2" value="{{$seo->twitter_label2}}" placeholder="Est. reading time">
                    </div>
                    <div class="form-group">
                        <label for="twitter_data2">Twitter Data 2:</label>
                        <input type="text" class="form-control" id="twitter_data2" name="twitter_data2" value="{{$seo->twitter_label2}}" placeholder="12 minutes">
                    </div>
                    <div class="form-group">
                        <label for="">Select Page</label>
                        <select name="page" class="form-control" id="">
                            <option value="">select page</option>
                            @foreach(['about-us', 'blog', 'career', 'client-reviews', 'contact-us', 'content-marketing', 'content-writing', 'conversion-rate-optimization', 'custom-website-design', 'email-marketing-services', 'index', 'jobs', 'local-seo-services', 'meet-talent', 'online-reputation-management', 'ppc-management', 'privacy-policy', 'search-engine-optimization', 'single', 'social-media-brand-management', 'social-media-management', 'social-media-paid-advertising', 'terms-of-service', 'video-production', 'youtube-channel-monetization', 'youtube-video-marketing'] as $page)
                                <option value="{{ $page }}" {{ $seo->page == $page ? 'selected' : '' }}>{{ $page }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


@endsection
