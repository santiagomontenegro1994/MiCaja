<nav class="navbar navbar-expand-lg navbar-light">
    
    <button class="btn btn-light border-0" id="menu-toggle">
        <i class="fas fa-bars fa-lg"></i>
    </button>
    
    <div class="ms-auto d-flex align-items-center">
        <span class="me-3 fw-bold text-muted d-none d-sm-block">
            <?= isset($_SESSION['usuario_nombre']) ? $_SESSION['usuario_nombre'] : 'Admin'; ?>
        </span>
        
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                <i class="fas fa-user-circle fa-2x text-secondary"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                <li><a class="dropdown-item" href="#">Configuración</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>