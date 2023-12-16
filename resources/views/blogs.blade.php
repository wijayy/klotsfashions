@extends('layouts.main')

@section('container')
    <section id="page-header" style="background-image: url('assets/banner/b19.jpg')">
        <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
    </section>

    <section id="blog">
        @foreach ($blogs as $blog)
            <div class="blog-box">
                <div class="blog-image">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="" />
                </div>
                <div class="blog-details">
                    <h4>{{ $blog->title }}</h4>
                    <p>{{ $blog->excerpt }}</p>
                    <a href="#">Continue reading</a>
                </div>
                <h1>{{ $blog->created_at->format('d/m') }}</h1>
            </div>
        @endforeach
    </section>
@endsection
