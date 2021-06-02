@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Curso</h5>
                            <p class="card-text">Gerenciamento dos Cursos</p>
                            <a href="{{url('cursos')}}" class="btn btn-primary">Clique Aqui</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Professore</h5>
                            <p class="card-text">Gerenciamento dos Professores</p>
                            <a href="{{url('professores')}}" class="btn btn-primary">Clique Aqui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
