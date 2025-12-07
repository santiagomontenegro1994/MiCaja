<div id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <i class="fas fa-store me-2"></i> <strong>MI CAJA</strong>
    </div>
    
    <div class="list-group list-group-flush mt-3">
        
        <a href="<?= BASE_URL ?>modules/dashboard/index.php" class="list-group-item list-group-item-action">
            <i class="fas fa-tachometer-alt"></i> Inicio
        </a>

        <div class="sidebar-divider">Punto de Venta</div>
        
        <a href="<?= BASE_URL ?>modules/ventas/nueva.php" class="list-group-item list-group-item-action">
            <i class="fas fa-desktop"></i> <strong>Nueva Venta</strong> </a>
        
        <a href="<?= BASE_URL ?>modules/ventas/historial.php" class="list-group-item list-group-item-action">
            <i class="fas fa-history"></i> Historial de Ventas
        </a>
        
        <a href="<?= BASE_URL ?>modules/ventas/facturacion.php" class="list-group-item list-group-item-action">
            <i class="fas fa-file-invoice-dollar"></i> Facturación / AFIP
        </a>

        <div class="sidebar-divider">Inventario</div>
        
        <a href="<?= BASE_URL ?>modules/productos/listado.php" class="list-group-item list-group-item-action">
            <i class="fas fa-boxes"></i> Listado Productos
        </a>
        
        <a href="<?= BASE_URL ?>modules/productos/nuevo.php" class="list-group-item list-group-item-action">
            <i class="fas fa-plus-circle"></i> Nuevo Producto
        </a>
        
        <a href="<?= BASE_URL ?>modules/productos/categorias.php" class="list-group-item list-group-item-action">
            <i class="fas fa-tags"></i> Categorías
        </a>
        
        <a href="<?= BASE_URL ?>modules/productos/ajuste_stock.php" class="list-group-item list-group-item-action">
            <i class="fas fa-clipboard-check"></i> Ajuste de Stock
        </a>

        <div class="sidebar-divider">Comercial</div>
        
        <a href="<?= BASE_URL ?>modules/clientes/listado.php" class="list-group-item list-group-item-action">
            <i class="fas fa-users"></i> Clientes
        </a>
        
        <a href="<?= BASE_URL ?>modules/clientes/cta_corriente.php" class="list-group-item list-group-item-action">
            <i class="fas fa-hand-holding-usd"></i> Cuentas Corrientes
        </a>

        <div class="sidebar-divider">Tesorería</div>
        
        <a href="<?= BASE_URL ?>modules/caja/movimientos.php" class="list-group-item list-group-item-action">
            <i class="fas fa-exchange-alt"></i> Ingresos / Egresos
        </a>
        
        <a href="<?= BASE_URL ?>modules/caja/cierre.php" class="list-group-item list-group-item-action">
            <i class="fas fa-cash-register"></i> Cierre de Caja
        </a>
        
        <a href="<?= BASE_URL ?>modules/caja/historial_cajas.php" class="list-group-item list-group-item-action">
            <i class="fas fa-archive"></i> Listado de Cajas
        </a>

        <div class="sidebar-divider">Sistema</div>
        
        <a href="<?= BASE_URL ?>modules/config/usuarios.php" class="list-group-item list-group-item-action">
            <i class="fas fa-user-shield"></i> Usuarios y Permisos
        </a>
        
        <a href="<?= BASE_URL ?>modules/config/ajustes.php" class="list-group-item list-group-item-action">
            <i class="fas fa-cogs"></i> Ajustes Generales
        </a>
        
        <a href="<?= BASE_URL ?>logout.php" class="list-group-item list-group-item-action text-danger mt-4 mb-3">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
        </a>
    </div>
</div>