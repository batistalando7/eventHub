<div class="row">
    <div class="col-lg-12">
        <div class="card stretch stretch-full">
            <div class="card-body lead-status">
                <div class="mb-5 d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold mb-0 me-4">
                        <span class="d-block mb-2">Editando Video :</span>
                        <span class="fs-12 fw-normal text-muted text-truncate-1-line">
                            Insira as informações do seu Video aqui.
                        </span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <label class="form-label">Título do Video</label>
                        <input type="text" class="form-control" name="title"
                            value="{{ old('title', $video->title ?? '')}}" id="title"
                            placeholder="Insira o título da Video...">
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label class="form-label">Destaque</label>
                        <select class="form-control" name="detach" data-select2-selector="detach">
                            <option value="" disabled selected>{{'-- Selecione o destaque --'?? $video->detach}}
                            </option>
                            <option value="normal"> Normal</option>
                            <option value="destaque"> Destaque</option>
                            <option value="urgente"> Urgente</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="arquivo" class="form-label">Url: </label>
                        <input type="text" class="form-control" name="url" id="arquivo"
                            value="{{ old('url', $video->url ?? '') }}" placeholder="Inserir a URL.">
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <label for="arquivo" class="form-label">description: </label>
                    <textarea class="form-control" name="description" id="arquivo" placeholder="Inserir a description.">{{ old('description', $video->description ?? '')}}</textarea>
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
