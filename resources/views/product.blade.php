@extends('layouts.main')

@section('container')
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="{{ asset('storage/' . $product->image->image1) }}" alt="" width="100%" id="mainImg" />
            <div class="small-img-group">
                @for ($i = 1; $i < 6; $i++)
                    @if ($product->image['image' . $i] != null)
                        <div class="small-img-col">
                            <img src="{{ asset('storage/' . $product->image['image' . $i]) }}" alt=""
                                class="small-img" />
                        </div>
                    @endif
                @endfor
                <div class="small-img-col">
                    <img src="{{ asset('storage/' . $product->category->size->image) }}" alt="" class="small-img" />
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>{{ $product->category->name }}</h6>
            <h4>{{ $product->title }}</h4>
            <h2>Rp. {{ $product->price }}</h2>
            <h4>Product Details</h4>
            <span>{{ $product->desc }}</span>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/js/product.js"></script>
@endsection
