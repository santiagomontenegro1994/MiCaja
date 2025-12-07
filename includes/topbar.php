<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-3">
    
    <button class="btn btn-outline-secondary" id="menu-toggle">
        <i class="fas fa-bars"></i>
    </button>
    
    <div class="ms-auto d-flex align-items-center">
        <span class="me-3 fw-bold text-muted d-none d-sm-block">
            <?= isset($_SESSION['usuario_nombre']) ? $_SESSION['usuario_nombre'] : 'Usuario'; ?>
        </span>
        
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                <i class="fas fa-user-circle fa-lg"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?= BASE_URL ?>modules/config/perfil.php">Mi Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="<?= BASE_URL ?>logout.php">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>