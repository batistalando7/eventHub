@extends('layouts._admin.main')

@section('content')
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body lead-status">
                            <div class="mb-5 d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 me-4">
                                    <span class="d-block mb-2">Lead Status :</span>
                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">Typically refers to adding
                                        a
                                        new
                                        potential customer or sales prospect</span>
                                </h5>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Create Invoice</a>
                            </div>
                            <form action="{{ route('relatorio.noticia') }}" method="GET">
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label" for="form_reports">Estado da Notícia</label>
                                        <select class="form-control" name="form_reports" id="form_reports">
                                            <option value="">--- Seleciona o Tipo de Relatório ---</option>
                                            <option value="todas">Toda Notícia</option>
                                            <option value="publicado" data-bg="bg-success">Notícias Publicadas</option>
                                            <option value="arquivado" data-bg="bg-secondary">Notícias Arquivadas</option>
                                            <option value="rascunho" data-bg="bg-primary">Notícias em Rascunho</option>
                                            <option value="premium" data-bg="bg-warning">Notícias Premium</option>
                                            <option value="destaque" data-bg="bg-warning">Notícias em Destaques</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Botão de Enviar --}}
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger"> Gerar Relatório
                                        {{-- <i class="feather-save ms-2"></i> --}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
