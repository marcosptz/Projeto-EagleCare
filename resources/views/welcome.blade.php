@extends('layouts.master')
@section('title','EagleCare')
@section('content')

<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Controle de Meddicações</h1>
          <p class="lead text-muted">Aqui você pode organizar suas medicações e cadastrar pessoas, ainda organizar por horário.</p>
          <p>
            <a href="{{ route('pessoas.create') }}" class="btn btn-primary my-2">Cadastrar pessoas</a>
            <a href="{{ route('horario.create') }}" class="btn btn-secondary my-2">Cadastrar horários</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ URL::to('/imagens/pesquisa.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Pessoas</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('pessoas.index') }}" class="btn btn-outline-secondary  stretched-link">Visualizar</a>
                </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ URL::to('/imagens/pesquisa.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Horários</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('pessoas.index') }}" class="btn btn-outline-secondary  stretched-link">Visualizar</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ URL::to('/imagens/pesquisa.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Agenda</h4>
                    <p class="card-text"></p>
                    <a href="" class="btn btn-outline-secondary  stretched-link">Visualizar</a>
                </div>
              </div>
            </div>

            {{-- <div class="conteudo">
                <div class="card-columns d-flex justify-content-center">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" >
                        <img class="card-img-top" src="{{ URL::to('/imagens/cadastro.png') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Novo Atendimento</h4>
                            <p class="card-text"></p>
                            <a href="" class="btn btn-outline-secondary  stretched-link">Cadastro</a>
                        </div>
                    </div>
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" >
                        <img class="card-img-top" src="{{ URL::to('/imagens/pesquisa.png') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Lista de Atendimentos</h4>
                            <p class="card-text"></p>
                            <a href="" class="btn btn-outline-secondary stretched-link">Lista</a>
                        </div>
                    </div>
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" >
                        <img class="card-img-top" src="{{ URL::to('/imagens/pesquisa.png') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Acompanhamentos</h4>
                            <p class="card-text"></p>
                            <a href=""
                                class="btn btn-outline-secondary stretched-link">Lista</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
      </div>
    </div>
  </main>

  @endsection
