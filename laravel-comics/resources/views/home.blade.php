@extends('layouts/main')

@section('head')
    <title>Home</title>
@endsection

{{-- JUMBO --}}
@section('jumbo')
    <div id="jumbotron">
            
        <div class="container">
            <div id="current_series_button">
                <h2 class="my_current_series">CURRENT SERIES</h2>
            </div>
        </div>

    </div>
@endsection

{{-- HOME_CARD --}}
@section('home_card')
    <section class="container">
        <div class="my_home_card_sub_container container">

            <a href="comics" class="my_home_card">
                <img class="my_home_card" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" >
                <h4 class="my_home_card_title">Action Comics</h4>
            </a>
         
        </div>
        <div id="load_more_button">
            Load more
        </div>
    </section>
@endsection


{{-- PREFOOTER --}}
@section('prefooter')

    <section class="my_prefooter_main_container">
        <div class="my_prefooter_container container">

            <a class="my_prefooter_link">
                <div>
                    <img src="{{Vite::asset('/resources/img/buy-comics-digital-comics.png')}}" alt="#">
                </div>

                <p class="my_preffoter_p">Merch</p>
            </a>
            <a class="my_prefooter_link">
                <div>
                    <img src="{{Vite::asset('/resources/img/buy-comics-merchandise.png')}}" alt="#">
                </div>

                <p class="my_preffoter_p">Merch</p>
            </a>
            <a class="my_prefooter_link">
                <div>
                    <img src="{{Vite::asset('/resources/img/buy-comics-subscriptions.png')}}" alt="#">
                </div>

                <p class="my_preffoter_p">Merch</p>
            </a>
            <a class="my_prefooter_link">
                <div>
                    <img src="{{Vite::asset('/resources/img/buy-comics-shop-locator.png')}}" alt="#">
                </div>

                <p class="my_preffoter_p">Merch</p>
            </a>
            <a class="my_prefooter_link">
                <div class="w-100">
                    <img src="{{Vite::asset('/resources/img/buy-dc-power-visa.svg')}}" alt="#">
                </div>

                <p class="my_preffoter_p">Merch</p>
            </a>

        </div>
    </section>

@endsection