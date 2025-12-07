</div> 

    <footer class="bg-white text-center py-3 border-top mt-auto">
        <div class="container-fluid">
            <small class="text-muted">
                &copy; <?php echo date('Y'); ?> <strong>Mi Caja POS</strong> - 
                Desarrollado por <span class="text-primary fw-bold">MM-Sistemas</span>
            </small>
        </div>
    </footer>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    window.addEventListener('DOMContentLoaded', event => {
        const sidebarToggle = document.body.querySelector('#menu-toggle');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                // Alternar clase en el body
                document.body.classList.toggle('sb-sidenav-toggled');
                
                // Disparar evento resize para que los gráficos se ajusten
                setTimeout(() => { window.dispatchEvent(new Event('resize')); }, 300);
            });
        }
    });
</script>
</body>
</html>