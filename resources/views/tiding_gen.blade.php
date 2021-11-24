@extends('layouts.main-layout')
@section('title', 'Новости')
@section('content')
<article id="main">
    <header>
        <h2>Новости</h2>
        <p>{{ $Info->title }}</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">


            <div class="sim-slider">
                <ul class="sim-slider-list">
                    <li><img src="http://pvbk.spb.ru/inc/slider/imgs/no-image.gif" alt="screen"></li> <!-- это экран -->
                    <li class="sim-slider-element"><img src="http://pvbk.spb.ru/inc/slider/imgs/planet0.jpg" alt="0"></li>
                </ul>
                <div class="sim-slider-arrow-left"></div>
                <div class="sim-slider-arrow-right"></div>
                <div class="sim-slider-dots"></div>
            </div>

            <h3>16.03.2018</h3>

            <p>{{ $Info->description_max }}</p>

            <hr />

        </div>
    </section>
</article>
