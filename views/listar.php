<?php require_once __DIR__ . '/layout/header.php'; ?>

<?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Cliente registrado con éxito en la base de datos.
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-primary fw-bold">Listado de Clientes Registrados</h5>
        <a href="index.php?action=create" class="btn btn-sm btn-primary">+ Registrar Cliente</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-3">ID</th>
                        <th>Nombre Completo</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($clientes)): ?>
                        <?php foreach ($clientes as $c): ?>
                            <tr>
                                <td class="ps-3 fw-semibold"><?php echo $c['id']; ?></td>
                                <td><?php echo htmlspecialchars($c['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($c['correo']); ?></td>
                                <td><?php echo htmlspecialchars($c['telefono']); ?></td>
                                <td><?php echo $c['edad']; ?> años</td>
                                <td><?php echo date('d/m/Y H:i:s', strtotime($c['fecha_registro'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No existen registros en la base de datos actualmente.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>