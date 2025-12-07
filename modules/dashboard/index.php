<?php
// 1. CONFIGURACIÓN Y SEGURIDAD
require_once '../../config/db.php';

// (Opcional) Verificación de sesión
// session_start();
// if (!isset($_SESSION['user_id'])) { header('Location: ' . BASE_URL . 'index.php'); exit; }

// 2. SIMULACIÓN DE DATOS (Reemplazar con tus consultas SQL reales)
$caja_abierta = true; 
$total_ventas_hoy = 45200;
$cantidad_tickets = 12;
$deuda_clientes = 128500;
$stock_bajo = 5; 

$ultimos_movimientos = [
    ['hora' => '10:30', 'tipo' => 'Venta', 'desc' => 'Ticket #0015', 'monto' => 1500, 'icono' => 'fa-shopping-cart', 'color' => 'success'],
    ['hora' => '10:45', 'tipo' => 'Gasto', 'desc' => 'Pago Proveedor', 'monto' => -5000, 'icono' => 'fa-money-bill', 'color' => 'danger'],
    ['hora' => '11:10', 'tipo' => 'Cobro', 'desc' => 'Pago Cta. Cte.', 'monto' => 3200, 'icono' => 'fa-hand-holding-usd', 'color' => 'primary'],
];

// 3. ESTRUCTURA DE LA PÁGINA
// A. Header (Abre HTML y Body)
include '../../includes/header.php';

// B. Sidebar (Menú lateral fijo a la izquierda)
include '../../includes/sidebar.php'; 
?>

<div id="page-content-wrapper">

    <?php include '../../includes/topbar.php'; ?>

    <div class="container-fluid px-4 py-4 flex-grow-1">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="text-dark fw-bold m-0">Panel de Control</h2>
                <p class="text-muted m-0">Resumen general del negocio</p>
            </div>
            
            <?php if($caja_abierta): ?>
                <div class="bg-success text-white px-3 py-2 rounded shadow-sm">
                    <i class="fas fa-cash-register me-2"></i> CAJA ABIERTA
                </div>
            <?php else: ?>
                <div class="bg-danger text-white px-3 py-2 rounded shadow-sm">
                    <i class="fas fa-lock me-2"></i> CAJA CERRADA
                </div>
            <?php endif; ?>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card shadow-sm border-0 border-start border-4 border-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="text-muted mb-1 text-uppercase fw-bold" style="font-size:0.8rem;">Ventas Hoy</p>
                                <h4 class="mb-0 fw-bold text-success">$ <?= number_format($total_ventas_hoy, 0, ',', '.') ?></h4>
                                <small class="text-muted"><?= $cantidad_tickets ?> Tickets</small>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="fas fa-dollar-sign fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card shadow-sm border-0 border-start border-4 border-warning h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="text-muted mb-1 text-uppercase fw-bold" style="font-size:0.8rem;">A cobrar</p>
                                <h4 class="mb-0 fw-bold text-dark">$ <?= number_format($deuda_clientes, 0, ',', '.') ?></h4>
                                <small class="text-warning fw-bold">Ver deudores</small>
                            </div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class="fas fa-user-clock fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card shadow-sm border-0 border-start border-4 border-danger h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="text-muted mb-1 text-uppercase fw-bold" style="font-size:0.8rem;">Stock Crítico</p>
                                <h4 class="mb-0 fw-bold text-danger"><?= $stock_bajo ?></h4>
                                <small class="text-muted">Productos</small>
                            </div>
                            <div class="bg-danger bg-opacity-10 p-3 rounded">
                                <i class="fas fa-box-open fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card shadow-sm border-0 border-start border-4 border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="text-muted mb-1 text-uppercase fw-bold" style="font-size:0.8rem;">Reportes</p>
                                <h4 class="mb-0 fw-bold text-primary">Historial</h4>
                                <small class="text-muted">Ver detalles</small>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="fas fa-chart-line fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-3">Accesos Rápidos</h5>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="<?= BASE_URL ?>modules/ventas/nueva.php" class="btn btn-primary btn-lg flex-grow-1">
                                <i class="fas fa-shopping-cart me-2"></i> Nueva Venta
                            </a>
                            <a href="<?= BASE_URL ?>modules/productos/nuevo.php" class="btn btn-outline-secondary flex-grow-1">
                                <i class="fas fa-plus me-2"></i> Producto
                            </a>
                            <a href="<?= BASE_URL ?>modules/caja/movimientos.php" class="btn btn-outline-secondary flex-grow-1">
                                <i class="fas fa-exchange-alt me-2"></i> Caja
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="mb-0 fw-bold text-dark">Ventas de la Semana</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="ventasChart" height="100"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold text-dark">Últimos Movimientos</h5>
                        <a href="#" class="btn btn-sm btn-light">Ver todo</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <?php foreach($ultimos_movimientos as $mov): ?>
                            <div class="list-group-item d-flex align-items-center p-3 border-bottom-0">
                                <div class="bg-<?= $mov['color'] ?> bg-opacity-10 p-2 rounded-circle me-3" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;">
                                    <i class="fas <?= $mov['icono'] ?> text-<?= $mov['color'] ?>"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fw-bold"><?= $mov['tipo'] ?></h6>
                                    <small class="text-muted"><?= $mov['desc'] ?></small>
                                </div>
                                <div class="text-end">
                                    <span class="d-block fw-bold <?= $mov['monto'] > 0 ? 'text-success' : 'text-danger' ?>">
                                        $ <?= number_format($mov['monto'], 0, ',', '.') ?>
                                    </span>
                                    <small class="text-muted"><?= $mov['hora'] ?></small>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('ventasChart').getContext('2d');
        const ventasChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'],
                datasets: [{
                    label: 'Ventas ($)',
                    data: [12000, 19000, 3000, 5000, 20000, 30000, 45000],
                    borderColor: '#3498db',
                    backgroundColor: 'rgba(52, 152, 219, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // Importante para que se adapte bien
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
    </script>

<?php include '../../includes/footer.php'; ?>