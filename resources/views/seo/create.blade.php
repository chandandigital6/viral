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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Page type:</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Enter page type">
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control textarea" id="description" name="description" placeholder="Enter the meta description"></textarea>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="description">Description:</label>--}}
{{--                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter the meta description">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="canonical">Canonical:</label>
                        <input type="url" class="form-control" id="canonical" name="canonical" placeholder="https://example.com">
                    </div>
                    <div class="form-group">
                        <label for="og_locale">OG Locale:</label>
                        <input type="text" class="form-control" id="og_locale" name="og_locale" placeholder="en_US">
                    </div>
                    <div class="form-group">
                        <label for="og_type">OG Type:</label>
                        <input type="text" class="form-control" id="og_type" name="og_type" placeholder="website">
                    </div>
                    <div class="form-group">
                        <label for="og_title">OG Title:</label>
                        <input type="text" class="form-control" id="og_title" name="og_title" placeholder="SEO Services, Digital Marketing Agency That Drives ROI">
                    </div>
                    <div class="form-group">
                        <label for="og_description">OG Description:</label>
                        <textarea class="form-control textarea" id="og_description" name="og_description" placeholder="Enter the Open Graph description"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="og_url">OG URL:</label>
                        <input type="url" class="form-control" id="og_url" name="og_url" placeholder="https://example.com">
                    </div>
                    <div class="form-group">
                        <label for="og_site_name">OG Site Name:</label>
                        <input type="text" class="form-control" id="og_site_name" name="og_site_name" placeholder="Viral Business">
                    </div>
                    <div class="form-group">
                        <label for="article_publisher">Article Publisher:</label>
                        <input type="url" class="form-control" id="article_publisher" name="article_publisher" placeholder="https://www.facebook.com/viralbusinessin">
                    </div>
                    <div class="form-group">
                        <label for="og_image">OG Image:</label>
                        <input type="url" class="form-control" id="og_image" name="og_image" placeholder="https://example.com/assets/img/logo.png">
                    </div>
                    <div class="form-group">
                        <label for="twitter_label1">Twitter Label 1:</label>
                        <input type="text" class="form-control" id="twitter_label1" name="twitter_label1" placeholder="Written by">
                    </div>
                    <div class="form-group">
                        <label for="twitter_data1">Twitter Data 1:</label>
                        <input type="text" class="form-control" id="twitter_data1" name="twitter_data1" placeholder="Ankush Goyal">
                    </div>
                    <div class="form-group">
                        <label for="twitter_label2">Twitter Label 2:</label>
                        <input type="text" class="form-control" id="twitter_label2" name="twitter_label2" placeholder="Est. reading time">
                    </div>
                    <div class="form-group">
                        <label for="twitter_data2">Twitter Data 2:</label>
                        <input type="text" class="form-control" id="twitter_data2" name="twitter_data2" placeholder="12 minutes">
                    </div>
                    <div class="form-group">
                                        <label for="seo">Select Page</label>
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

                    <div class="form-group">
                        <label for="schema_js">Schema js :</label>
                        <textarea class="form-control textarea" id="schema_js" name="schema_js" placeholder="Enter the meta schema_js"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
{{--            <div class="form-group">--}}
{{--                <label for="type">Page type:</label>--}}
{{--                <input type="text" class="form-control" id="type" name="type" placeholder="enter page type">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="description">OG Description:</label>--}}
{{--                <textarea class="form-control textarea" id="description" name="description" placeholder="Enter  description"></textarea>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="canonical">Canonical:</label>--}}
{{--                <input type="url" class="form-control" id="canonical" name="canonical" placeholder="https://example.com">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_locale">OG Locale:</label>--}}
{{--                <input type="text" class="form-control" id="og_locale" name="og_locale" placeholder="en_US">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_type">OG Type:</label>--}}
{{--                <input type="text" class="form-control" id="og_type" name="og_type" placeholder="website">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_title">OG Title:</label>--}}
{{--                <input type="text" class="form-control" id="og_title" name="og_title" placeholder="SEO Services, Digital Marketing Agency That Drives ROI">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_description">OG Description:</label>--}}
{{--                <textarea class="form-control textarea" id="og_description" name="og_description" placeholder="Enter the Open Graph description"></textarea>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_url">OG URL:</label>--}}
{{--                <input type="url" class="form-control" id="og_url" name="og_url" placeholder="https://example.com">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_site_name">OG Site Name:</label>--}}
{{--                <input type="text" class="form-control" id="og_site_name" name="og_site_name" placeholder="Viral Business">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="article_publisher">Article Publisher:</label>--}}
{{--                <input type="url" class="form-control" id="article_publisher" name="article_publisher" placeholder="https://www.facebook.com/viralbusinessin">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="og_image">OG Image:</label>--}}
{{--                <input type="url" class="form-control" id="og_image" name="og_image" placeholder="https://example.com/assets/img/logo.png">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="twitter_label1">Twitter Label 1:</label>--}}
{{--                <input type="text" class="form-control" id="twitter_label1" name="twitter_label1" placeholder="Written by">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="twitter_data1">Twitter Data 1:</label>--}}
{{--                <input type="text" class="form-control" id="twitter_data1" name="twitter_data1" placeholder="Ankush Goyal">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="twitter_label2">Twitter Label 2:</label>--}}
{{--                <input type="text" class="form-control" id="twitter_label2" name="twitter_label2" placeholder="Est. reading time">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="twitter_data2">Twitter Data 2:</label>--}}
{{--                <input type="text" class="form-control" id="twitter_data2" name="twitter_data2" placeholder="12 minutes">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="author_name">Select Page</label>--}}
{{--                <select name="page" class="form-control" id="">--}}
{{--                    <option value="">select page</option>--}}
{{--                    <option value="about-us">about-us</option>--}}
{{--                    <option value="blog">blog</option>--}}
{{--                    <option value="career">career</option>--}}
{{--                    <option value="client-reviews">client-reviews</option>--}}
{{--                    <option value="contact-us">contact-us</option>--}}
{{--                    <option value="content-marketing">content-marketing</option>--}}
{{--                    <option value="content-writing">content-writing</option>--}}
{{--                    <option value="conversion-rate-optimization">conversion-rate-optimization</option>--}}
{{--                    <option value="custom-website-design">custom-website-design</option>--}}
{{--                    <option value="email-marketing-services">email-marketing-services</option>--}}
{{--                    <option value="index">index</option>--}}
{{--                    <option value="jobs">jobs</option>--}}
{{--                    <option value="local-seo-services">local-seo-services</option>--}}
{{--                    <option value="meet-talent">meet-talent</option>--}}
{{--                    <option value="online-reputation-management">online-reputation-management</option>--}}
{{--                    <option value="ppc-management">ppc-management</option>--}}
{{--                    <option value="privacy-policy">privacy-policy</option>--}}
{{--                    <option value="search-engine-optimization">search-engine-optimization</option>--}}
{{--                    <option value="single">single</option>--}}
{{--                    <option value="social-media-brand-management">social-media-brand-management</option>--}}
{{--                    <option value="social-media-management">social-media-management</option>--}}
{{--                    <option value="social-media-paid-advertising">social-media-paid-advertising</option>--}}
{{--                    <option value="terms-of-service">terms-of-service</option>--}}
{{--                    <option value="video-production">video-production</option>--}}
{{--                    <option value="youtube-channel-monetization">youtube-channel-monetization</option>--}}
{{--                    <option value="youtube-video-marketing">youtube-video-marketing</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
        </form>
    </div>


@endsection
