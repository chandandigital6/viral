
@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'Team ')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>We are looking for Talent</h1> </div>
        </div>
        <div class="shape2"><img src="{{asset('asset/img/shape/shape2.png')}}" alt="shape2"></div>
        <div class="shape3"><img src="{{asset('asset/img/shape/shape3.png')}}" alt="shape3"></div>
        <div class="shape5"><img src="{{asset('asset/img/shape/shape5.png')}}" alt="shape5"></div>
        <div class="shape6"><img src="{{asset('asset/img/shape/shape6.png')}}" alt="shape6"></div>
        <div class="shape7"><img src="{{asset('asset/img/shape/shape7.png')}}" alt="shape7"></div>
        <div class="shape8"><img src="{{asset('asset/img/shape/shape8.png')}}" alt="shape8"></div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- End Page Title Area -->


    <section id="secondPart" class="ptb-100">
        <div class="container">
            <div class="row">
                @foreach($joins as $join)


                <div class="col-lg-6">
                    <div class="careersTXT"> <img src="{{asset('storage/'.$join->image)}}" alt="Our culture"> </div>
                </div>
                <div class="col-lg-6">
                    <div class="careersTXT benifitsTitle">
                        <h2 class="sameTXT">{{$join->title}}</h2>
                        <p class="pragrahTXT">{!! $join->msg !!}</p>
                        <p class="pragrahTXT"></p> <a href="{{route('about')}}" class="default-btn">Read More</a> </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="joinTeam">
        <div class="container">
            @foreach($joins as $joinData)


            <div class="row">
                <div class="col-lg-6">
                    <div class="benifitsTitle">
                        <h2><span>{{$joinData->join_title}}</h2>
                     <p>{!! $joinData->team_msg !!}</p>
                     <a href="{{route('team')}}" class="default-btn">Join Team</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="teamVector"> <img src="{{asset('storage/'.$joinData->join_image)}}" alt="Join Our Team"></div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="benifits">
        <div class="container">
            <div class="benifitsTitle">
                <h2>Benefits</h2>
                <p class="pragrahTXT">Excellence is rewarded at Viral Business</p>
            </div>
            <div class="row">
                @foreach($benefits as $data)


                <div class="col-lg-4 PADDcareer">
                    <div class="benifitsPhotos"> <img src="{{asset('storage/'.$data->image)}}" alt="Recognization">
                        <h3 class="sameTXT">{{$data->title}}</h3>
                        <p class="pragrahTXT">{!! $data->msg !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection
