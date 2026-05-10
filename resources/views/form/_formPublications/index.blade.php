<div class="row">
    <div class="col-lg-12">
        <div class="card stretch stretch-full">
            <div class="card-body lead-status">
                <div class="mb-5 d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold mb-0 me-4">
                        <span class="d-block mb-2">Editar Publicação :</span>
                        <span class="fs-12 fw-normal text-muted text-truncate-1-line">
                            Editando as informações da sua publicação aqui.
                        </span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <label class="form-label">Título da Publicação</label>
                        <input type="text" class="form-control" name="title"
                            value="{{ old('title',$publication->title ?? "") }}" id="title"
                            placeholder="Insira o título da publicação...">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label class="form-label">Data de Publicação</label>
                        <input type="date" class="form-control" name="date"
                            value="{{ old('date',$publication->date ?? date('dd/MM/YY'))   }}" id="date">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="coverImg" class="form-label">Imagem de Capa: </label>
                        <input type="file" class="form-control" name="cover" id="coverImg"
                             placeholder="Carregue a imagem...">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="arquivo" class="form-label">Arquivo: </label>
                        <input type="file" class="form-control" name="file" id="arquivo"
                            placeholder="Carregue o arquivo...">
                    </div>
                </div>
                <div class="col-lg-4 mb-4"> <button type="submit" class="btn btn-danger">
                        Salvar
                        <i class="feather-save ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
