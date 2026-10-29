<div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <div class="card shadow-sm border-0 p-3 p-md-5 rounded-5 bg-white">
                    <div class="text-center mb-4">
                        <i class="bi bi-person-square" style="font-size: 4rem; color: rgb(223, 225, 229);"></i>

                        <h1 class="fw-bold mb-2">LOGIN</h1>

                        <p class="text-muted small">
                            Preencha os campos abaixo para acessar seu perfil
                        </p>
                    </div>
                    <form wire:submit.prevent="login">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold text-secondary">E-MAIL</label>
                                <input type="email" class="form-control rounded-pill border-light-subtle" id="email" wire:model='email'
                                placeholder="seu@email.com" style="background-color: #fcfcfc;">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label small fw-bold text-secondary">SENHA</label>
                                <input type="password" class="form-control rounded-pill border-light-subtle" id="senha" wire:model='password'
                                placeholder="123456" style="background-color: #fcfcfc;">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 shadow-sm fw-bold">
                            Entrar
                        </button>
                    </form>

                    <p class="text-center text-muted mt-4 mb-0 small">
                        &copy; 2026 SOE - Sistema de Organização Educacional
                    </p>

                </div>

            </div>
        </div>
    </div>
</div>
