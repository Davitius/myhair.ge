@extends('layouts.main')

@section('content')

    <main>

        {{-- ========== კარუსელი ========== --}}
        <div class="Header_Logo">
            <div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                            aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                            class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                            class="active"
                            aria-current="true"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="" src="{{asset('img/carousel1.jpg')}}" style="width: 100%">
                        <div class="container">
                            <div class="carousel-caption text-start">

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="{{asset('img/carousel2.jpg')}}" style="width: 100%">

                        <div class="container">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="" src="{{asset('img/carousel3.jpg')}}" style="width: 100%">

                        <div class="container">
                            <div class="carousel-caption text-end">

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        {{-- ========== ქალაქის ასარჩევი ========== --}}
        <div class="container">
            <div class="city mx-auto mb-3">
                <select class="city" id="city" name="city" onchange="getSelectValue();">
                    <option value="">აირჩიეთ ქალაქი.</option>
                    @foreach($citys as $citi)
                    <option value="{{$citi->city}}">{{$citi->city}}</option>
                    @endforeach
                </select>
            </div>
        </div><!-- /.container -->


        {{-- ========== სლაიდერი მენიუ ========== --}}
        <div class="container mb-5">
            <div class="SliderMenuDiv">
                <input type="radio" name="dot" id="one">
                <input type="radio" name="dot" id="two">
                <div class="main-card">
                    <div class="cards">
                    @for($m1 = 1; $m1 <= 6; $m1++)
                            <?php
                            if ($m1 == 1){$name1 = 'თმის შეჭრა, შეღებვა, ვარცხნილობა'; $src1 = asset('img/servicemenu/cuttinghair.jpg');}
                            if ($m1 == 2){$name1 = 'წვერის გაპარსვა'; $src1 = asset('img/servicemenu/shave.jpg');}
                            if ($m1 == 3){$name1 = 'მაკიაჟი'; $src1 = asset('img/servicemenu/makeup.jpg');}
                            if ($m1 == 4){$name1 = 'მანიკური'; $src1 = asset('img/servicemenu/manicure.jpg');}
                            if ($m1 == 5){$name1 = 'პედიკური'; $src1 = asset('img/servicemenu/pedicure.jpg');}
                            if ($m1 == 6){$name1 = 'წარბები და წამწამები'; $src1 = asset('img/servicemenu/lashes_brows.jpg');}
                            ?>
                            <div class="card">
                                <form method="get" action="{{route('menusearch')}}">
                                    <div class="content">
                                        <button class="contentBtn" type="submit">
                                            <div class="img">
                                                <img src="{{$src1}}"
                                                     alt="{{$name1}}">
                                            </div>
                                        </button>
                                        <div class="details">
                                            <div class="name">{{$name1}}</div>
                                        </div>
                                        <input type="text" id="location{{$m1}}" name="location" hidden>
                                        <input type="text" id="MenuSearch" name="MenuSearch"
                                               value="{{$name1}}" hidden>
                                    </div>
                                </form>
                            </div>
                    @endfor
                    </div><!-- /.cards -->
                    <div class="cards">
                        @for($m2 = 7; $m2 <= 12; $m2++)
                            <?php
                            if ($m2 == 7){$name2 = 'ტატუირება'; $src2 = asset('img/servicemenu/tattooing.jpg');}
                            if ($m2 == 8){$name2 = 'სპა'; $src2 = asset('img/servicemenu/spa.jpg');}
                            if ($m2 == 9){$name2 = 'ეპილაცია'; $src2 = asset('img/servicemenu/epilation.jpg');}
                            if ($m2 == 10){$name2 = 'კანის მოვლა'; $src2 = asset('img/servicemenu/skincare.jpg');}
                            if ($m2 == 11){$name2 = 'სადღესასწაულო მაკიაჟი, ვარცხნილობა'; $src2 = asset('img/servicemenu/festivehairstyle.jpg');}
                            if ($m2 == 12){$name2 = 'სოლარიუმი'; $src2 = asset('img/servicemenu/solarium.jpg');}
                            ?>
                            <div class="card">
                                <form method="get" action="{{route('menusearch')}}">
                                    <div class="content">
                                        <button class="contentBtn" type="submit">
                                            <div class="img">
                                                <img src="{{$src2}}"
                                                     alt="{{$name2}}">
                                            </div>
                                        </button>
                                        <div class="details">
                                            <div class="name">{{$name2}}</div>
                                        </div>
                                        <input type="text" id="location{{$m2}}" name="location" hidden>
                                        <input type="text" id="MenuSearch" name="MenuSearch"
                                               value="{{$name2}}" hidden>
                                    </div>
                                </form>
                            </div>
                        @endfor
                    </div><!-- /.cards -->
                </div><!-- /.min-card -->
                <div class="button" style="display: flex; justify-content: center; margin-top: 1em">
                    <label for="one" class=" active one"></label>
                    <label for="two" class="two"></label>
                </div>
            </div><!-- /.SliderMenuDiv -->
        </div><!-- /.container -->


        {{-- ========== სვაიპერი "ჩვენ გირჩევთ" ========= --}}
        <div class="col-md-10 mx-auto recomended pt-5 pb-3 mb-5">
            {{--            <hr class="featurette-divider">--}}
            <h2 class="GeoArtText">ჩვენ გირჩევთ:</h2>
            <div class="mainswiper">
                <div class="swiper mySwiper container">
                    <div class="swiper-wrapper content">


                        @foreach($BestUsers as $best)
                            <div class="swiper-slide card-swiper">
                                <div class="card-content">
                                    <div class="image">
                                        <?php $massId = 0; ?>
                                        @if($best->photo != '')
                                            <a class="" href="{{route('SalonStaff', [$best->id, $massId])}}">
                                                <img class="Staffimg" alt="პერსონალის ფოტო"
                                                     src="../../storage/{{$best->photo}}">
                                                <a/>
                                                @else
                                                    <a class="" href="{{route('SalonStaff', [$best->id, $massId])}}">
                                                        <img class="Staffimg" alt="პერსონალის ფოტო"
                                                             src="{{asset('img/barberdefault.jpg')}}">
                                                    </a>
                                        @endif
                                    </div>
                                    <div class="media-icons">
                                        {{--                                        <i class="fab fa-facebook"></i>--}}
                                        {{--                                        <i class="fab fa-twitter"></i>--}}
                                        {{--                                        <i class="fab fa-github"></i>--}}
                                    </div>
                                    <div class="name-profession">
                                        <span class="name">{{$best->firstname}} {{$best->lastname}}</span>
                                        <span class="profession">{{$best->role}}</span>
                                    </div>
                                    <div class="BestRating1">
                                        <div class="text-center mx-auto SalonRatingDiv">
                                            <?php $a = 0; $b = 0.7; ?>
                                            @for($s = 1; $s < 6; $s++)
                                                @if($best->rating <= $a)
                                                    <i class="fa-regular fa-star"></i>
                                                @else
                                                    @if ($best->rating > $a && $best->rating <= $b)
                                                        <i class="fa-solid fa-star-half-stroke"></i>
                                                    @endif
                                                    @if ($best->rating > $b)
                                                        <i class="fa-solid fa-star"></i>
                                                    @endif
                                                @endif
                                                <?php $a += 1; $b += 1; ?>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
                {{--                <div class="swiper-button-next"></div>--}}
                {{--                <div class="swiper-button-prev"></div>--}}
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- საიტის სერვისი -->
        <div class="marketing col-md-10 mx-auto">
            {{--            <hr class="featurette-divider">--}}
            <div class="featurette1">
                <div class="col-md-7">
                    <h3 class="">მოძებნე საუკეთესო სტილისტი ან სალონი. </h3>
                    <p class="lead"></p>
                </div>
                <div class="col-md-5">
                    <img class="frontimg" src="{{asset('img/frontimg1.PNG')}}">
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="featurette2">
                <div class="col-md-7">
                    <h3 class="">დაჯავშნე სპეციალისტთან ვიზიტი შენთვის სასურველ
                        დროს. </h3>
                    <p class="lead"></p>
                </div>
                <div class="col-md-5">
                    <img class="frontimg" src="{{asset('img/frontimg2.PNG')}}">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="featurette3">
                <div class="col-md-7">
                    <h3 class="">მიიღე მაღალი ხარისხის სერვისი. </h3>
                    <p class="lead"></p>
                </div>
                <div class="col-md-5">
                    <img class="frontimg" src="{{asset('img/frontimg3.PNG')}}">
                </div>
            </div>
        </div><!-- /.container -->
        <script>
            $('.container').hide();
            $('.container').show(2000);
        </script>

    </main>
@endsection
