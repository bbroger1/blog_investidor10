@extends('layouts.app')

@section('title', 'Cadastrar Post')

@section('content')
    <div class="container">
        @include('layouts.partials.header')

        <div class="centered">
            <div class="title-form">
                <h3>Cadastrar Notícia</h3>
            </div>
            <div class="alerts">
                @include('layouts.partials.alerts')
            </div>

            <div class="body-form">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <ul class="wrapper">
                        <li class="form-row">
                            <label for="name">Título</label>
                            <input type="text" name="title" id="title">
                        </li>
                        <li class="form-row">
                            <label for="name">Contéudo</label>
                            <textarea name="body" id="body"></textarea>
                        </li>
                        <li class="form-row">
                            <label for="">Categoria</label>
                            <select name="category_id" class="form-control">
                                <option value="" selected>Selecione</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li class="form-row">
                            <button type="submit">Salvar</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        @include('layouts.partials.footer')
    </div>
@endsection
