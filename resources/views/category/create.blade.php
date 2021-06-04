@extends('layouts.app')

@section('title', 'Cadastrar Categoria')

@section('content')
    <div class="container">
        @include('layouts.partials.header')

        <div class="centered">
            <div class="title-form">
                <h3>Criar Categoria</h3>
            </div>
            <div class="alerts">
                @include('layouts.partials.alerts')
            </div>

            <div class="body-form">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <ul class="wrapper">
                        <li class="form-row">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name">
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
