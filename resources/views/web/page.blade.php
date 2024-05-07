@extends('web.index')

@section('title', $page->title)

@section('web_content')

    @if(!empty($page->image))
    <!-- Hedaer of Page -->
    <header class="page_header" style="background-image: url({{ asset('img-contents/page-images/'.$page->image)  }});">
        <div class="container">
            <h1 class="text-light text-center"> {{ $page->title }} </h1>
        </div>
    </header>
    @endif

    @if(count($page->sections) > 0)

        @foreach($page->sections as $s => $section)

            @if($section->type == 'imageSlider')
            <!-- image slider -->

                @if($section->image_contents && count($section->image_contents) > 0)
                <!-- header -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($section->image_contents as $s => $imageContent)
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $s }}" class="{{ $s == 0 ? 'active' : '' }}" aria-current="true" aria-label="{{ 'slide'.($s+1) }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($section->image_contents as $s => $imageContent)
                                <div class="carousel-item {{ $s == 0 ? 'active' : '' }}" data-bs-interval="5000">
                                    <img src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" class="d-block w-100" alt="image">
                                    <div class="carousel-caption d-md-block">
                                        @if(!empty($imageContent->title))
                                            <h2>{{ $imageContent->title }}</h2>
                                        @endif

                                        @if(!empty($imageContent->description))
                                            {!! $imageContent->description !!}
                                        @endif

                                        @if(!empty($imageContent->link))
                                            <a class="open_account_btn" href="{{$imageContent->link}}">Open Account</a>
                                        @endif
                                    </div>
                                </div>                                
                            @endforeach
                        </div>
                    </div>
                @endif

            <!-- // image slider -->
                
            @elseif($section->type == 'article')
            <!-- article -->
                
                @if($section->name == 'WHY_US')
                    <!-- Why us Section -->
                    <section class="why_us">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-{{ !empty($section->article->image) ? '6' : '12' }} col-md-{{ !empty($section->article->image) ? '6' : '12' }}">
                                    <div>
                                        <div class="section_title">
                                            <h6 class="">A. K. Khan Securities Ltd.</h6>
                                            <h1 class="">Why Us</h1>
                                        </div>
                                        <p class="text-dark">
                                            {!! $section->article->description !!}
                                        </p>
                                        <a class="site_btn" href="{{ route('open-bo-account','intro') }}">Open Account</a>
                                    </div>
                                </div>
                                @if(!empty($section->article->image))
                                <div class="col-sm-12 col-md-6">
                                    <img class="img-fluid" src="{{ asset('img-contents/content-images/'.$section->article->image) }}" alt="image">
                                </div>
                                @endif
                            </div>
                        </div>
                    </section>
                @endif

                @if($section->name == 'CORPORATE_PROFILE')
                    <section class="profile_company">
                        <div class="container">
                            <div class="section_title text-center p-3 mb-5">
                                <h6 class="">About our</h6>
                                <h1 class="">{{ slugToTitle($section->article->title) }}</h1>
                            </div>  


                            <div class="p-5 mb-5 rounded" style="background-image: url({{ asset('img-contents/content-images/'.$section->article->image)  }});">

                                {!! $section->article->description !!}
                                
                            </div>
                        </div>
                    </section>
                @endif

            <!-- // article -->
                
            @elseif($section->type == 'msWord')
            <!-- ms word -->

            <!-- // ms word -->
                
            @elseif($section->type == 'groupContent')
            <!-- group content -->

                @if(strtolower(getGroupContentType($section->property)) == 'image')
                <!-- image content -->

                    @if($section->name == 'BOARD_OF_DIRECTORS')
                        <!-- Direcotors -->
                        <section class="management" style="background-image: url({{ asset('img-contents/section-images/'.$section->image)  }});">
                            <div class="container">
                                <div class="section_title text-center mb-4">
                                    <!-- <h6 class="text-light">Board</h6> -->
                                    @if(!empty($section->heading))
                                        <h1 class="text-light">{{ $section->heading }}</h1>
                                    @endif
                                </div>

                                @if($section->image_contents && count($section->image_contents) > 0)
                                    <div class="row">
                                        @foreach($section->image_contents as $s => $imageContent)
                                            <div class="col-md-6">
                                                <div class="managment_card">
                                                    <div class="img_thumb">
                                                        <img src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" alt="image">
                                                    </div>
                                                    <div class="content">
                                                        @if(!empty($imageContent->title))
                                                            <h6 class="title">{{ $imageContent->title }}</h6>
                                                        @endif
                                                        @if(!empty($imageContent->caption))
                                                            <h5 class="name">{{ $imageContent->caption }}</h5>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </section>
                    @endif

                    @if($section->name == 'BOARD_OF_DIRECTORS_DETAILS')
                        <!-- Direcotors -->
                        <section class="management_top">
                            <div class="container">

                                @if($section->image_contents && count($section->image_contents) > 0)
                                    @foreach($section->image_contents as $s => $imageContent)
                                        @if($s%2 == 0)
                                            <div class="row profile_card pt-5 pb-5">
                                                <div class="col-3">
                                                    <div class="img_profile">
                                                        <img class="circle img-fluid" src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-9 align-self-center">
                                                    <div class="profile_book">
                                                        @if(!empty($imageContent->title))
                                                        <h3>{{ $imageContent->title }}</h3>
                                                        @endif

                                                        @if(!empty($imageContent->description))
                                                        {!! $imageContent->description !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="row profile_card pt-5 pb-5">
                                                <div class="col-9 align-self-center">
                                                    <div class="profile_book">
                                                        @if(!empty($imageContent->title))
                                                        <h3>{{ $imageContent->title }}</h3>
                                                        @endif

                                                        @if(!empty($imageContent->description))
                                                        {!! $imageContent->description !!}
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="img_profile">
                                                        <img class="circle img-fluid" src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" alt="Image">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                        </section>
                    @endif

                    @if($section->name == 'OUR_MANAGEMENT')
                        <!-- Management -->
                        <section class="directors" style="background-image: url({{ asset('img-contents/section-images/'.$section->image)  }});">
                            <div class="container">
                                <div class="section_title text-center">
                                    <!-- <h6 class="">Board</h6> -->
                                    @if(!empty($section->heading))
                                        <h1>{{ $section->heading }}</h1>
                                    @endif
                                </div>

                                @if($section->image_contents && count($section->image_contents) > 0)
                                    <div class="row">
                                        <div class="col-12 text-center p-5">
                                            @foreach($section->image_contents as $i => $imageContent)
                                                <div class="directors_card">
                                                    <img src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" alt="image">
                                                    <div class="content">
                                                        @if(!empty($imageContent->title))
                                                            <h4>{{ $imageContent->title }}</h4>
                                                        @endif
                                                        @if(!empty($imageContent->caption))
                                                            <h5 class="text-dark">{{ $imageContent->caption }}</h5>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </section>
                    @endif

                    @if($section->name == 'OUR_MANAGEMENT_DETAILS')
                        <!-- Direcotors -->
                        <section class="management_top">
                            <div class="container">

                                @if($section->image_contents && count($section->image_contents) > 0)
                                    @foreach($section->image_contents as $s => $imageContent)
                                        <div class="row profile_card pt-5 pb-5">
                                            <div class="col-3">
                                                <div class="img_profile">
                                                    <img class="circle img-fluid" src="{{ asset('img-contents/content-images/'.$imageContent->image) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9 align-self-center">
                                                <div class="profile_book">
                                                    @if(!empty($imageContent->title))
                                                    <h3>{{ $imageContent->title }}</h3>
                                                    @endif

                                                    @if(!empty($imageContent->description))
                                                    {!! $imageContent->description !!}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </section>
                    @endif

                <!-- // image content -->

                @endif

                @if(strtolower(getGroupContentType($section->property)) == 'text')
                <!-- text-content -->

                    @if($section->name == 'OUR_SERVICES')
                        <!-- service Section -->
                        <section class="services">
                            <div class="container">
                                <div class="section_title text-center">
                                    <!-- <h6>Services</h6> -->
                                    @if(!empty($section->heading))
                                        <h1>{{ $section->heading }}</h1>
                                    @endif
                                </div>

                                @if($section->text_contents && count($section->text_contents) > 0)
                                    <!-- Tab content -->
                                    <div class="services_tab">
                                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">

                                            @foreach($section->text_contents as $t => $textContent)
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link {{ $t == 0 ? 'active' : '' }}" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$t}}" type="button" role="tab" aria-controls="pills-{{$t}}" aria-selected="false">
                                                        @if(!empty($textContent->title_icon))
                                                            {!! $textContent->title_icon !!}
                                                        @endif
                                                        @if(!empty($textContent->title))
                                                            {!! $textContent->title !!}
                                                        @endif
                                                    </button>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <div class="tab-content" id="pills-tabContent">

                                            @foreach($section->text_contents as $t => $textContent)
                                                <div class="tab-pane fade {{ $t == 0 ? 'active show' : '' }}" id="pills-{{$t}}" role="tabpanel" aria-labelledby="pills-{{$t}}-tab">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <img class="img-fluid" src="{{ asset('img-contents/section-images/'.$section->image)  }}" alt="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="section_text m-md-5 mt-4">
                                                                @if(!empty($textContent->title))
                                                                    <h4>{{ $textContent->title }}</h4>
                                                                @endif

                                                                @if(!empty($textContent->description))
                                                                    {!! $textContent->description !!}
                                                                @endif

                                                                @if(!empty($textContent->link))
                                                                    <div class="pt-3">
                                                                        <a class="site_btn" href="{{ $textContent->link }}">Learn More</a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </section>
                    @endif

                    @if($section->name == 'OUR_PRODUCTS')
                        <!-- Products -->
                        <section class="products">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="section_title">
                                            <!-- <h6>Products</h6> -->
                                            @if(!empty($section->heading))
                                                <h1>{{ $section->heading }}</h1>
                                            @endif
                                        </div>

                                        @if(count($section->text_contents) > 0)
                                        <div class="products_accordion">
                                            @foreach($section->text_contents as $t => $textContent)
                                                <div class="accordion_item">
                                                    <div class="icon">
                                                        <img src="{{ asset('img-contents/content-images/'.$textContent->image)  }}" alt="image">
                                                    </div>
                                                    <div class="content">
                                                        @if(!empty($textContent->title))
                                                            <h4>{{ $textContent->title }}</h4>
                                                        @endif

                                                        @if(!empty($textContent->description))
                                                            {!! $textContent->description !!}
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @endif

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <img src="{{ asset('img-contents/section-images/'.$section->image)  }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif

                    @if($section->name == 'EQUITY')
                        @if(count($section->text_contents) > 0)
                            <div class="container pt-5 pb-5">
                                <div class="row">
                                    @foreach($section->text_contents as $t => $textContent)
                                        <div class="col-lg-6 col-md-6 mb-5">
                                            <div class="card">
                                                <div class="card-header bg-white">
                                                    @if(!empty($textContent->image))
                                                    <img src="{{ asset('img-contents/content-images/'.$textContent->image)  }}" alt="" class="img-fluid">
                                                    @endif
                                                    @if(!empty($textContent->title))
                                                        {{ $textContent->title }}
                                                    @endif
                                                </div>
                                                <div class="card-body">
                                                    @if(!empty($textContent->description))
                                                        {!! $textContent->description !!}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endif

                <!-- // text-content -->

                @endif

                @if(strtolower(getGroupContentType($section->property)) == 'video')
                <!-- video -->

                <!-- // video -->

                @endif

                @if(strtolower(getGroupContentType($section->property)) == 'file')
                <!-- file -->

                <!-- // file -->

                @endif

            <!-- // group content -->

            @elseif($section->type == 'dataContent')
                <!-- data content -->

                @if($section->name == 'NOTICE_BOARD')
                    @php
                    $notices = getNotices();
                    @endphp
                    <!-- New Board -->
                    <section class="news">
                        <div class="container">
                            <div class="row">
                                <div class="col-7">
                                    <div class="section_title">
                                        <!-- <h6>News</h6> -->
                                        <h1>Notice Board</h1>
                                    </div>
                                </div>
                                <div class="col-5 justify-content-end d-flex mb-2 align-items-end">
                                    <div class="text-end d-flex justify-content-end">
                                        <a class="site_btn" href="{{ route('page','news') }}">See More ></a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @if(!empty($notices) && count($notices) > 0)
                                    @foreach ($notices as $notice)
                                        <div class="col-md-4">
                                            <div class="news_card">
                                                <img class="news_thumb" src="{{ asset('img-contents/notice-images/'.$notice->image) ?? '' }}" alt="">
                                                <div class="content">
                                                    <small class="date">{{ $notice->updated_at}}</small>
                                                    <h5 class="title">{{$notice->title}}</h5>
                                                    <p class="description">{!! Str::limit( $notice->description, 150) !!}</p>
                                                </div>
                                            </div>
                                        </div>                    
                                    @endforeach
                                @endif
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                        <div class="text-center d-flex justify-content-center">
                                            <a class="site_btn" href="{{ route('page','news') }}">See More ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

                <!-- // data content -->

            @endif


        @endforeach

    @endif

@endsection

@push('scripts')
    <script type="text/javascript">
        const page = {!! json_encode($page) !!};
        
        console.log(page)

        $(document).ready(function(){
            //
        });
    </script>
@endpush