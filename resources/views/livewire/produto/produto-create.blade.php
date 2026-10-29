<div class="container-fluid p-0 bg-light" style="min-height: 100vh;">
    <div class="d-flex" style="min-height: 100vh;">
        <div class="bg-white border-end p-3 shadow-sm" style="width: 260px;">
            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="#" class="nav-link active bg-primary-subtle text-primary fw-medium rounded-3">
                        <i class="bi bi-box-seam me-3 fs-5" style="color:rgb(127, 142, 255)"></i><span>CADASTRO</span>
                    </a>
                    <br>
                    <a href="#" class="nav-link active bg-primary-subtle text-primary fw-medium rounded-3">
                        <i class="bi bi-box-seam me-3 fs-5"></i><span>HISTÓRICO</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex-grow-1 d-flex flex-column">

            <nav class="navbar navbar-light bg-white px-4 border-bottom" style="height: 74px;">
                <div class="container-fluid d-flex align-items-center justify-content-between p-0">
                    <div style="width: 350px;">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0 text-muted rounded-start-pill ps-3">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control bg-light border-0 rounded-end-pill py-2"
                                placeholder="Pesquisar...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="position-relative">
                            <i class="bi bi-bell fs-5 text-secondary"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                style="font-size: 10px;">2</span>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="p-4 p-md-5 flex-grow-1">

                <div class="row g-4">

                    <div class="">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                            <h5 class="fw-bold mb-4 text-dark">Cadastrar Novo Produto</h5>

                            <form wire:submit.prevent="cadastrarProduto">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">NOME DO PRODUTO</label>
                                        <input type="text" class="form-control rounded-pill bg-light py-2"
                                            wire:model="nome" placeholder="Ex: Bolinha de brinquedo">
                                        @error('nome')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label class="form-label small fw-bold text-secondary">DESCRIÇÃO</label>
                                        <input type="text" class="form-control rounded-pill bg-light py-2"
                                            wire:model="sku" placeholder="Ex: Para cachorros...">
                                        @error('sku')
                                            <span class="text-danger small ps-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <label class="form-label small fw-bold text-secondary">MARCA</label>
                                    <input type="text" class="form-control rounded-pill bg-light py-2"
                                        wire:model="nome" placeholder="Ex: Chuckit!">
                                    @error('nome')
                                        <span class="text-danger small ps-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <br>
                                <div class="col">
                                    <label class="form-label small fw-bold text-secondary">CATEGORIA</label>
                                    <select class="form-select rounded-pill bg-light py-2" wire:model="cor">
                                        <option value="">Selecione uma categoria...</option>
                                        <option value="cinza">Brinquedo</option>
                                        <option value="branco">Produto de higiene</option>
                                        <option value="preto">Ração</option>
                                        <option value="vermelho">Medicamento</option>
                                        <option value="azul">Acessório</option>
                                    </select>
                                    @error('cor')
                                        <span class="text-danger small ps-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <br>
                            <div class="col">
                                <label class="form-label small fw-bold text-secondary">QUANTIDADE
                                    MÍNIMA</label>
                                <input type="number" class="form-control rounded-pill bg-light py-2"
                                    wire:model="quantidade_minima" placeholder="Ex: 5" min="0">
                                @error('quantidade_minima')
                                    <span class="text-danger small ps-2">{{ $message }}</span>
                                @enderror
                                </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold mt-3 shadow-sm">
                            Salvar Produto
                        </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
