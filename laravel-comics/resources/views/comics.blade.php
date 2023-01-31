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
    <section class="container p-0">

        <div class="row mt-5 d-flex">

            <div class="col-8 d-flex flex-column gap-3">
                <h3 class="m-0">ACTION COMICS #1000: THE DELUX EDITION</h3>

                <div class="d-flex">
                    <div class="col-8 d-flex justify-content-between align-items-center text-light p-2 px-3 bg-success border border-dark">
                        <span>U.S. Price:</span>
                        <span>Aviable</span>
                    </div>
                    <div class="col-4 p-2 bg-success text-center border border-start-0 border-dark">
                        <select class="text-light btn">
                            <option data="" type="">
                                Chack Aviability
                            </option>
                        </select>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae odio accusamus nisi saepe, aperiam, fuga architecto modi praesentium tempora esse repellendus officiis eaque culpa vero dolorum sed nemo non?
                    </p>
                </div>
            </div>

            <div class="col-4 d-flex justify-content-end">
                <div class="d-flex flex-column align-items-end">
                    <h6>ADVERTISEMENT</h6>
                    <img src="{{Vite::asset('/resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
            
        </div>

        
    </section>

    <section class="my_comics_deep container-fluid bg-light">
        <div class="container d-flex gap-3">
            <div class="col-6">
                <h3>Talent</h3>
                <hr>
                <div class="d-flex">
                    <span class="w-100">Art By:</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit omnis nisi accusamus voluptate labore nostrum quod aliquid, amet consequuntur maiores provident sint accusantium eum, temporibus aperiam delectus eveniet mollitia ab.</p>
                </div>
                <hr>
                <div class="d-flex">
                    <span class="w-100">Written By:</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit omnis nisi accusamus voluptate labore nostrum quod aliquid, amet consequuntur maiores provident sint accusantium eum, temporibus aperiam delectus eveniet mollitia ab.</p>
                </div>
            </div>
            
            <div class="col-6">
                <h3>Specs</h3>
                <hr>
                <div class="d-flex">
                    <span class="w-100">Series:</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit omnis nisi accusamus voluptate labore nostrum quod aliquid, amet consequuntur maiores provident sint accusantium eum, temporibus aperiam delectus eveniet mollitia ab.</p>
                </div>                
                <hr>
                <div class="d-flex">
                    <span class="w-50">U.S. Price:</span>
                    <p>$19.99</p>
                </div>                
                <hr>
                <div class="d-flex">
                    <span class="w-50">On Sale Date:</span>
                    <p>13/05/2023</p>
                </div>
            </div>
        </div>
    </section>
@endsection