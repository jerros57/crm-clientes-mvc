<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="mb-0 text-primary fw-bold">Registrar Nuevo Cliente</h5>
            </div>
            <div class="card-body p-4">
                
                <!-- Contenedor dinámico de alertas generado por JavaScript -->
                <div id="alertBox" class="alert alert-danger d-none" role="alert"></div>

                <form id="formCliente" action="index.php?action=store" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-semibold">Nombre Completo *</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Juan Pérez">
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label fw-semibold">Correo Electrónico *</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="usuario@correo.com">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefono" class="form-label fw-semibold">Teléfono *</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="10 dígitos">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edad" class="form-label fw-semibold">Edad *</label>
                            <input type="number" class="form-control" id="edad" name="edad" placeholder="18 - 100">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="index.php?action=index" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary px-4">Guardar Registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>