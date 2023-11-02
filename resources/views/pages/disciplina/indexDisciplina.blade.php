@extends('layouts.default')
@section('content')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('home') }}">Página inicial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lista dos alunos  cadastrados</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-body">
                        @include('layouts.return-messages')
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title mb-5">Lista das disciplinas cadastradas</h4>
                            </div>
                            <div class="col-md-6" style="right">
                                <a href="{{route('disciplina.create')}}" class="btn btn-primary">Criar disciplina</a>
                                
                            </div>
                        </div>
                        <div class="row">                               
                            <div class="col-12 table-responsive">
                                <table class="table table-striped" id="data-table-padrao" tbody-fixed="false">
                                    <thead>                                        
                                        <tr>
                                            <th>titulo</th>
                                            <th>descricao</th>
                                        </tr>                                       
                                    </thead>
                                    <tbody>
                                        @if (isset($disciplinas))
                                            @foreach ($disciplinas as $item)
                                            <tr>
                                                <td><div style="width:125px;">{{$item->titulo}}</div></td>
                                                <td><div style="width:100px;">{{$item->descricao}}</div></td>
                                                <td>
                                                    {{ Form::open(['url' => '/disciplina/update', 'method' => 'get']) }}
                                                        <input type="hidden" id="id" name="id" value="{{$item->id}}">
                                                        <button class="btn btn-primary" type="submit">Editar</button>
                                                    {{{ Form::close() }}}
                                                </td>
                                                <td>
                                                    {{ Form::open(['url' => '/disciplina/delete', 'method' => 'get']) }}
                                                        <input type="hidden" id="id" name="id" value="{{$item->id}}">
                                                        <button class="btn btn-danger" type="submit">Excluir</button>
                                                    {{{ Form::close() }}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>                                      
                            <div class="col-md-12">
                                <div class="form-group text-center mt-5">
                                    <a href="{{ route('home') }}" class="btn btn-light btn-fw">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
    </div>
@stop
@section('pagespecificscripts')
@endsection
