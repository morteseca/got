@extends('layouts.app')

@section('content')
<section style="display:flex; flex-direction:column; align-items: center">
        <h1>Девиз компании</h1>
        <p>Новинки компании</p>
        @foreach ($a as $b)
        <span>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width:500px; height:300px;" src="{{ $b->img }}" alt="*">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </span>
        @endforeach
        <p><button class="submit"><a href="{{ route('home') }}">Вернуться на главную</a></button></p>
    </section>
@endsection
    