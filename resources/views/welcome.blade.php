@extends('Includes.Header')
@section('MainSector')
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h5>Winter Shop</h5>
                                    <h1>All what you need</h1>
                                    <a href="" class="btn_1">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part pt-4">
        <div class="container-fluid p-lg-0 overflow-hidden">
            <div class="row align-items-center justify-content-between">
                @foreach ($Categories as $Caregoris)
                    <div class='col-lg-4 col-sm-6 mt-3'>
                        <div class='single_feature_post_text'>
                            <img src='img/category/{{}}' style='height: 550px;' alt=''>
                            <div class='hover_text'>
                                <a href='' class='btn_2'>shop for</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@extends('Includes.Footer')
