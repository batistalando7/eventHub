
<div class="row">
    {{-- Titulo --}}
    <div class="col-lg-4 mb-4">
        <label for="title" class="form-label">Título (opcional)</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
    </div>

    {{-- Link --}}
    <div class="col-lg-4 mb-4">
        <label for="link" class="form-label">Link (opcional)</label>
        <input type="url" name="link" id="link" class="form-control" placeholder="https://exemplo.com"
            value="{{ old('link') }}">
    </div>

    {{-- Status Ativo --}}
    <div class="col-12 mb-4">
        <input type="checkbox" name="active" id="active" class="form-check-input" value="1" checked>
        <label for="active" class="form-check-label">Ativo</label>
    </div>

    {{-- Posição --}}
    <div class="col-12 mb-4">
        <label for="position" class="form-label">Posição</label>
        <select name="position" id="position" class="form-select" required>
            <option value="">-- Selecione --</option>
            <option value="header" {{ old('position') == 'header' ? 'selected' : '' }}>
                Header</option>
            <option value="sidebar" {{ old('position') == 'sidebar' ? 'selected' : '' }}>
                Sidebar</option>
            <option value="footer" {{ old('position') == 'footer' ? 'selected' : '' }}>
                Footer</option>
            <option value="home" {{ old('position') == 'home' ? 'selected' : '' }}>Home
            </option>
            <option value="custom" {{ old('position') == 'custom' ? 'selected' : '' }}>
                Custom</option>
        </select>
    </div>

    {{-- Imagem --}}
    <div class="col-12 mb-4">
        <label class="form-label">Imagem de Banner</label>
        <input type="file" name="image" class="form-control">
        <small class="text-muted">Formatos suportados: jpg, jpeg, png, gif</small>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
