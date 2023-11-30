<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Inicio de Sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form action="" id="form" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="nombre@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </form>
                    </div>
                </div>
                <div role="alert" id="alert">
                    <span id="userAlert"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="init">Ingresar</button>
            </div>
        </div>
    </div>
</div>