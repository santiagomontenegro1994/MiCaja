<?php
// 1. Configuración y Seguridad
require_once '../../config/db.php'; // Asegúrate de que db.php tenga la constante BASE_URL o inclúyela desde config.php
if (!defined('BASE_URL')) define('BASE_URL', 'http://localhost/MiCaja/'); // Parche por si no está en db.php

session_start();
// (Aquí iría la validación de sesión si la activas)

// 2. Includes de Estructura
include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<style>
    /* Hacemos que el POS ocupe toda la altura disponible */
    .pos-container { height: calc(100vh - 80px); overflow: hidden; }
    .product-list { height: 100%; overflow-y: auto; padding-right: 10px; }
    .ticket-panel { height: 100%; display: flex; flex-direction: column; border-left: 1px solid #ddd; background: #fff; }
    .ticket-items { flex-grow: 1; overflow-y: auto; background-color: #f8f9fa; }
    .ticket-total { background-color: #2c3e50; color: white; padding: 20px; }
    
    /* Tarjeta de Producto */
    .card-product { cursor: pointer; transition: transform 0.2s; border: 1px solid #eee; }
    .card-product:hover { transform: scale(1.03); border-color: #3498db; shadow: 0 5px 15px rgba(0,0,0,0.1); }
    .card-product img { height: 100px; object-fit: contain; padding: 10px; }
</style>

<div id="page-content-wrapper">
    <?php include '../../includes/topbar.php'; ?>

    <div class="container-fluid px-0">
        <div class="row g-0 pos-container">
            
            <div class="col-md-8 col-lg-9 p-3 bg-light">
                
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                            <input type="text" class="form-control border-start-0" id="buscador" placeholder="Escanear código de barras o buscar producto (F1)..." autofocus>
                        </div>
                    </div>
                </div>

                <div class="d-flex mb-3 overflow-auto pb-2">
                    <button class="btn btn-dark me-2 text-nowrap"><i class="fas fa-star me-1"></i> Favoritos</button>
                    <button class="btn btn-outline-secondary me-2 text-nowrap">Bebidas</button>
                    <button class="btn btn-outline-secondary me-2 text-nowrap">Almacén</button>
                    <button class="btn btn-outline-secondary me-2 text-nowrap">Limpieza</button>
                    <button class="btn btn-outline-secondary me-2 text-nowrap">Verdulería</button>
                </div>

                <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-2 product-list" id="lista-productos">
                    
                    <div class="col">
                        <div class="card h-100 card-product shadow-sm" onclick="agregarAlCarrito('Coca Cola 1.5L', 1500)">
                            <div class="card-body text-center p-2">
                                <h6 class="card-title font-weight-bold mb-1">Coca Cola 1.5L</h6>
                                <h5 class="text-primary fw-bold">$ 1.500</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-product shadow-sm" onclick="agregarAlCarrito('Galletitas Oreo', 850)">
                            <div class="card-body text-center p-2">
                                <h6 class="card-title mb-1">Galletitas Oreo</h6>
                                <h5 class="text-primary fw-bold">$ 850</h5>
                            </div>
                        </div>
                    </div>
                    
                    </div>
            </div>

            <div class="col-md-4 col-lg-3 ticket-panel shadow">
                
                <div class="p-3 border-bottom bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="m-0"><i class="fas fa-shopping-cart me-2"></i>Venta Actual</h5>
                        <span class="badge bg-success">Caja Abierta</span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <select class="form-select">
                            <option>Consumidor Final</option>
                            <option>Juan Perez (Cta Cte)</option>
                        </select>
                        <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
                    </div>
                </div>

                <div class="ticket-items p-2">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody id="tabla-carrito">
                            <tr>
                                <td>Coca Cola 1.5L <br> <small class="text-muted">1 x $1.500</small></td>
                                <td class="text-end fw-bold">$ 1.500</td>
                                <td class="text-end"><i class="fas fa-times text-danger cursor-pointer"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="ticket-total">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal:</span>
                        <span>$ 1.500</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h2 class="mb-0">Total:</h2>
                        <h2 class="mb-0 fw-bold">$ 1.500</h2>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg py-3 fw-bold shadow">
                            <i class="fas fa-money-bill-wave me-2"></i> COBRAR (F10)
                        </button>
                        <div class="row g-2">
                            <div class="col">
                                <button class="btn btn-outline-light w-100 btn-sm">Cancelar</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-light w-100 btn-sm">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // Script simple para simular acción (luego lo moveremos a un archivo JS real)
    function agregarAlCarrito(nombre, precio) {
        alert("Añadiendo: " + nombre + " - $" + precio);
        // Aquí programaremos la lógica real de añadir a la tabla
    }
</script>

<?php include '../../includes/footer.php'; ?>