@extends('layouts.main')

@section('container')
    <section id="hero" style="background-image: url('assets/hero.png');">
        <h4>Trade-in-offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On all products</h1>
        <p>save with mode coupons & up to 70% off!</p>
        <button style="    background-image: url('assets/button.png');">Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="feature-box">
            <img src="/assets/features/f1.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f2.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f3.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f4.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f5.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="/assets/features/f6.png" alt="" />
            <h6>Free Shipping</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Improve your style with Klots Fashions</p>
        @if ($recomendations->count())
            <div class="pro-container">
                @foreach ($recomendations as $recomendation)
                    <a href="/products/{{ $recomendation->slug }}" class="pro">
                        <img src="{{ asset('storage/' . $recomendation->image->image1) }}"
                            alt="{{ $recomendation->title }}" />
                        <div class="des">
                            <span>{{ $recomendation->category->name }}</span>
                            <h5>{{ $recomendation->title }}</h5>
                            <h4>Rp. {{ $recomendation->price }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="not-found">
                <h2>404 | Product Not Found</h2>
            </div>
        @endif
    </section>


    <section id="banner" class="section-m1" style="background-image: url('assets/banner/b2.jpg');">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> | All T-Shirts & Accesories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Colections New Modern Design</p>
        @if ($newA->count())
            <div class="pro-container">
                @foreach ($newA as $new)
                    <a href="/products/{{ $new->slug }}" class="pro">
                        <img src="{{ asset('storage/' . $new->image->image1) }}" alt="{{ $new->title }}" />
                        <div class="des">
                            <span>{{ $new->category->name }}</span>
                            <h5>{{ $new->title }}</h5>
                            <h4>Rp. {{ $new->price }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="not-found">
                <h2>404 | Product Not Found</h2>
            </div>
        @endif
    </section>
@endsection
