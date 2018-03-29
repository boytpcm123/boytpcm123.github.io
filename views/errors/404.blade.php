@extends('frontend.layouts.master')

@section('body_class') page-404 @endsection

@section('content')
    <section class="section-404">
        <div class="section-404__inner">
            <h1>404</h1>
            <h2 class="animate" data-anim-type="fadeInUp" data-anim-delay="200">Page not found</h2>
            <p class="animate" data-anim-type="fadeInUp" data-anim-delay="300">The page you were looking for appears to have been moved, deleted or does not exist. You could go back to <a href="javascript: history.back(1)" title="where you were">where you were</a> or head straight to our <a href="/" title="where you were">home page</a></p>
        </div>
    </section>
@endsection