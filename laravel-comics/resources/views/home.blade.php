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