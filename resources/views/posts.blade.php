@extends('layouts.layout') 

@section('content')

        <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
    <!--<div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Todas</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Programación</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Desarrollo web</a>
                </nav>
            </div>
        </div>-->

        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <p class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Todas las Categorias</p>
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25em;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Accion</small>
                                <h5 class="card-title my-2">NVIDIA ANUNCIA MÁS JUEGOS CON DLSS EN GDC</h5>
                                <div class="d-card-text">
                                Entre los anuncios realizados en GDC, NVIDIA ha presentado tres nuevos videojuegos que serán compatibles con la tecnología
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Level Up</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25em;">
                            <img class="card-img-top" src="{{asset('images/4.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Accion</small>
                                <h5 class="card-title my-2">KIRBY Y LA TIERRA OLVIDADA LLEGA ESTE VIERNES A NINTENDO SWITCH</h5>
                                <div class="d-card-text">
                                La última aventura de la bola rosa más icónica de los videojuegos llega este viernes a Nintendo Switch. En Kirby y la tierra olvidada
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Level Up</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25em;">
                            <img class="card-img-top" src="{{asset('images/5.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Arcade</small>
                                <h5 class="card-title my-2">KIRBY Y LA TIERRA OLVIDADA LLEGA ESTE VIERNES A NINTENDO SWITCH</h5>
                                <div class="d-card-text">
                                La última aventura de la bola rosa más icónica de los videojuegos llega este viernes a Nintendo Switch. En Kirby y la tierra olvidada
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Level Up</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25em;">
                            <img class="card-img-top" src="{{asset('images/6.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Arcade</small>
                                <h5 class="card-title my-2">DODGEBALL ACADEMIA YA ESTÁ DISPONIBLE EN FORMATO FÍSICO</h5>
                                <div class="d-card-text">
                                En un mundo en el que el Dodgeball lo es todo, acompaña a Otto en la academia y aun mas de lo que se llevara en distintos lugares
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Level Up</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 25em;">
                            <img class="card-img-top" src="{{asset('images/7.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Deportes</small>
                                <h5 class="card-title my-2">SOULDIERS: LLEGA A PC Y CONSOLAS EL 19 DE MAYO</h5>
                                <div class="d-card-text">
                                    El estudio independiente español Retro Forge Games, en colaboración con la publisher Dear Villagers (The Forgotten City,
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Level Up</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

@endsection