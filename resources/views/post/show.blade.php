@extends('layouts.app')

@section('title', 'Cadastrar Post')

@section('content')
    <div class="container">
        @include('layouts.partials.header')

        <div class="centered">
            <div class="title-form">
                <h3>Post {{ $post->title }}</h3>
            </div>

            <div class="body-form">
                <ul class="wrapper">
                    <li class="form-row">
                        <label for="name">Título</label>
                        <input type="text" name="title" id="title" value="{{ $post->title }}" readonly>
                    </li>
                    <li class="form-row">
                        <label for="name">Conteúdo</label>
                        <textarea name="body" id="body" readonly>{{ $post->body }}</textarea>
                    </li>
                    <li class="form-row">
                        <label for="">Categoria</label>
                        <input type="text" name="category" id="category" value="{{ $post->category_name }}" readonly>
                    </li>
                </ul>
            </div>
        </div>

        @include('layouts.partials.footer')
    </div>
@endsection
