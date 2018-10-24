<!-- 
    & becomes &amp;
    < becomes &lt;
    > becomes &gt;
    " becomes &quot;
    ' becomes &#39;
 -->

@extends('layouts/study')

@section('title')
    Recortador
@endsection

@section('styles')
    <link href="{{ asset('css/custom/html.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class='container snes-list'>
        <div class='row snes-game'>
            <div class='col-5'>
                <div class='slider cover-slider'>
                    <div class='item'>
                        <img src='{{asset("img/snes/mario-world-label.jpg")}}'>
                    </div>
                    <div class='item'>
                        <img src='{{asset("img/snes/mario-world-label-back.jpg")}}'>
                    </div>
                </div>
            </div>
            <div class='col-7'>
                <div class='slider screenshots-slider'>
                    <div class='item'>
                        <img src='{{asset("img/snes/mario-print-1.jpg")}}'>
                    </div>
                    <div class='item'>
                        <img src='{{asset("img/snes/mario-print-2.jpg")}}'>
                    </div>
                    <div class='item'>
                        <img src='{{asset("img/snes/mario-print-3.png")}}'>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class='row'>
            <div class='col-6'>
                <div class='slider' id='slider_001'>
                    <div class='item'>
                        <img src='{{asset("img/lol_items/Hextech_Revolver_item_HD.png")}}'>
                    </div>
                    <div class='item'>
                        <img src='{{asset("img/lol_items/Hunters_Potion_item_HD.png")}}'>
                    </div>
                    <div class='item'>
                        <img src='{{asset("img/lol_items/Pox_Arcana_item_HD.png")}}'>
                    </div>
                </div>
            </div>
            <div class='col-6'>
                <div class='slider simple-slick'>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Lost_Chapter_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Lord_Dominiks_Regards_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Phantom_Dancer_item_HD.png")}})'>  </div>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-4'>
                <div class='slider simple-slick'>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Lost_Chapter_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Lord_Dominiks_Regards_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Phantom_Dancer_item_HD.png")}})'>  </div>
                </div>
            </div>
            <div class='col-4'>
                <div class='slider simple-slick'>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Pox_Arcana_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Rapid_Firecannon_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Refillable_Potion_Old.png")}})'>  </div>
                </div>
            </div>
            <div class='col-4'>
                <div class='slider simple-slick'>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Team_Builder_Support_profileicon.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/The_Dark_Seal_item_HD.png")}})'>  </div>
                    <div class='item' style='background-image: url({{asset("img/lol_items/Titanic_Hydra_item_HD.png")}})'>  </div>
                </div>
            </div>
        </div> -->
    </div>
@endsection

@section('jqueries')
    <script>
        $('.snes-game .cover-slider').slick({
            autoplay: true,
            fade: true,
            cssEase: 'linear',
            dots: false,
            arrows:false,

            slidesToShow:1,
            slidesToScroll: 1,
        });
        $('.snes-game .screenshots-slider').slick({
            autoplay: true,
            
            dots: false,
            arrows:false,
            autoplaySpeed: 2000,
            

            slidesToShow:2,
            slidesToScroll: 1,
            variableWidth: true,
            centerMode: true,
            centerPadding: '15px',
            
        });

        $('#slider_000').slick({autoplay: true,});
        $('#slider_001').slick({
            
            adaptiveHeight: true,
            fade: true,
            cssEase: 'linear'
            // dots: true,
            // arrows: true,
        });
        $('#slider_002').slick({
            autoplay: true,
            adaptiveHeight: true,
        });
        $('#slider_003').slick({
            infinite: true,
            autoplay: true,
            adaptiveHeight: true,
            slidesToShow:2,
            slidesToScroll: 1,
            vertical: true,
            verticalSwiping: true,
        });
        $('#slider_004').slick({
            autoplay: true,
        });
        $('.simple-slick').slick({
            
            adaptiveHeight: true,
            fade: true,
            cssEase: 'linear'
            // dots: true,
            // arrows: true,
        });
    </script>
@endsection