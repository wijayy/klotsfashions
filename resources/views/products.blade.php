@extends('layouts.main')

@section('container')
    <section id="page-header" style="background-image: url('/assets/banner/b1.jpg');">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>

    <section id="title">
        <h4>All Products</h4>
    </section>

    <section id="search-bar" class="">
        <form action="/products" method="get">
            <input type="text" name="search" id="search" placeholder="Search a Specific Products"
                value="{{ request('search') }}">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </section>

    <section id="product1" class="section-p1">
        @if ($products->count())
            <div class="pro-container">
                @foreach ($products as $product)
                    <a href="/products/{{ $product->slug }}" class="pro">
                        <img src="{{ asset('storage/' . $product->image->image1) }}" alt="{{ $product->title }}" />
                        <div class="des">
                            <span>{{ $product->category->name }}</span>
                            <h5>{{ $product->title }}</h5>
                            <h4>Rp. {{ $product->price }}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="not-found">
                <h2>404 | Product Not Found</h2>
            </div>
        @endif
        <div class="paginate">
            {{ $products->links() }}
        </div>
    </section>

    {{-- <section id="add-pro">
    <a href="/products/create">
      <i class='bx bx-plus-circle'></i>
    </a>
  </section> --}}
@endsection
