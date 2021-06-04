@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        @include('layouts.partials.header')

        <div class="centered">
            @include('layouts.partials.alerts')
            <section class="cards">
                @foreach ($posts as $post)
                    @if (isset($post->title))
                        <article class="card">
                            <div class="card-content">
                                <h2>{{ $post->title }}</h2>
                                <p>{{ $post->body }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="button-post">
                                    <a href="{{ route('post.show', $post->id) }}">
                                        Acessar
                                    </a>
                                </div>
                            </div>
                            <!-- .card-content -->
                        </article>
                        <!-- .card -->
                    @else
                        @foreach ($post as $postes)
                            <article class="card">
                                <div class="card-content">
                                    <h2>{{ $postes->title }}</h2>
                                    <p>{{ $postes->body }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="button-post">
                                        <a href="{{ route('post.show', $postes->id) }}">
                                            Acessar
                                        </a>
                                    </div>
                                </div>
                                <!-- .card-content -->
                            </article>
                            <!-- .card -->
                        @endforeach
                    @endif

                @endforeach
            </section>
            <!-- .cards -->
        </div>

        @include('layouts.partials.footer')
    </div>
@endsection
