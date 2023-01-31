@extends('layouts/main')

@section('head')
    <title>Comics</title>
@endsection

{{-- JUMBO --}}
@section('jumbo')
    <div id="jumbotron">
    </div>
@endsection

@section('comics')
    <section class="my_comics_bar container-fluid">

        <div class="position-relative container">
            <div class="position-absolute my_comics_card_sub_container">
    
                <a class="my_comics_card">
                    <img class="my_home_card" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" >
                </a>
             
            </div>
        </div>

    </section>

    {{-- info comics --}}
    <section class="container">

        <div class="row">

            <div class="col-8 mt-5">
                <h3>ACTION COMICS #1000: THE DELUX EDITION</h3>

            </div>

            <div class="col-4 d-flex">
                <div class="d-flex flex-column align-items-end">
                    <h6>ADVERTISEMENT</h6>
                    <img src="{{Vite::asset('/resources/img/adv.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </section>
@endsection