@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container justify-content-center"> 
        <div class="row" style="margin-top: 50px;margin-left: 20px;">
            <div class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div id="columnchart_values" style="width:1050px; height: 700px;"></div>
                    </div>
                    <div class="carousel-item">
                        <div style=" border-radius: 20px;" id="columnchart_material" style="width: 1050px; height: 700px;"></div>
                    </div>
                    <div class="carousel-item">
                        <div id="columnchart_canes" style="width:1050px; height: 700px;"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
