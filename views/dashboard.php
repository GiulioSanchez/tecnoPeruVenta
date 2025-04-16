<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TecnoPeru - Dashboard</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Font Awesome para iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  <style>
    :root {
      --primary-color: #1a237e;      /* Azul oscuro - Color principal */
      --secondary-color: #0d47a1;    /* Azul - Color secundario */
      --accent-color: #4caf50;       /* Verde - Color de acento */
      --dark-color: #0a1232;         /* Color muy oscuro para contraste */
      --light-color: #f5f7ff;        /* Color claro para fondos */
      --text-light: #ffffff;         /* Texto claro */
      --text-dark: #212121;          /* Texto oscuro */
    }
    
    body {
      background-color: var(--light-color);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .navbar {
      background-color: var(--primary-color);
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    
    .navbar-brand {
      font-weight: bold;
      font-size: 1.6rem;
      letter-spacing: 0.5px;
    }
    
    .nav-link {
      font-weight: 500;
    }
    
    .main-content {
      min-height: 85vh;
      padding: 40px 0;
    }
    
    .card-dashboard {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 20px;
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .card-dashboard:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 25px rgba(0,0,0,0.15);
    }
    
    .card-icon {
      font-size: 5rem;
      padding: 20px 0;
      opacity: 0.9;
    }
    
    .primary-card {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: var(--text-light);
    }
    
    .accent-card {
      background: linear-gradient(135deg, var(--accent-color), #2e7d32);
      color: var(--text-light);
    }
    
    .footer {
      background-color: var(--dark-color);
      color: var(--text-light);
      padding: 20px 0;
      margin-top: auto;
    }
    
    .section-title {
      position: relative;
      padding-bottom: 10px;
      margin-bottom: 30px;
      color: var(--primary-color);
      font-weight: 600;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background-color: var(--accent-color);
      border-radius: 3px;
    }
    
    .btn-custom-primary {
      background-color: var(--text-light);
      color: var(--primary-color);
      font-weight: 600;
      border: none;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
    }
    
    .btn-custom-primary:hover {
      background-color: var(--text-light);
      color: var(--secondary-color);
      transform: translateY(-2px);
      box-shadow: 0 5px 12px rgba(0,0,0,0.2);
    }
    
    .stats-box {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.08);
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }
    
    .stats-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.12);
    }
    
    .stats-icon {
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      margin-bottom: 15px;
      background-color: var(--light-color);
      color: var(--primary-color);
      font-size: 1.5rem;
    }
    
    .stats-title {
      font-size: 1.1rem;
      color: var(--text-dark);
      margin-bottom: 8px;
      font-weight: 500;
    }
    
    .stats-number {
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 0;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-microchip me-2"></i>TecnoPeru
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos/listar.php"><i class="fas fa-boxes me-1"></i> Productos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Main Content -->
  <div class="container main-content">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="section-title">Panel de Control</h2>
        <p class="text-muted">Gestión de productos y estadísticas del sistema</p>
      </div>
    </div>
    
    <!-- Stats Row -->
    <div class="row mb-5">
      <div class="col-md-4">
        <div class="stats-box text-center" id="stats-total">
          <div class="stats-icon mx-auto">
            <i class="fas fa-boxes"></i>
          </div>
          <div class="stats-title">Total Productos</div>
          <div class="stats-number">0</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stats-box text-center">
          <div class="stats-icon mx-auto">
            <i class="fas fa-certificate"></i>
          </div>
          <div class="stats-title">Productos Nuevos</div>
          <div class="stats-number" id="stats-nuevos">0</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stats-box text-center">
          <div class="stats-icon mx-auto">
            <i class="fas fa-tags"></i>
          </div>
          <div class="stats-title">Semi-Nuevos</div>
          <div class="stats-number" id="stats-seminuevos">0</div>
        </div>
      </div>
    </div>
    
    <!-- Actions Row -->
    <div class="row justify-content-center">
      <!-- Tarjeta para Registrar Productos -->
      <div class="col-md-5">
        <div class="card card-dashboard text-center">
          <div class="card-body primary-card">
            <div class="card-icon">
              <i class="fas fa-plus-circle"></i>
            </div>
            <h3 class="card-title">Registrar Productos</h3>
            <p class="card-text">Añade nuevos productos al inventario</p>
            <a href="productos/registrar.php" class="btn btn-custom-primary btn-lg mt-3">
              <i class="fas fa-edit me-2"></i>Registrar Ahora
            </a>
          </div>
        </div>
      </div>
      
      <!-- Tarjeta para Listar Productos -->
      <div class="col-md-5">
        <div class="card card-dashboard text-center">
          <div class="card-body accent-card">
            <div class="card-icon">
              <i class="fas fa-list-alt"></i>
            </div>
            <h3 class="card-title">Listar Productos</h3>
            <p class="card-text">Visualiza y administra los productos existentes</p>
            <a href="productos/listar.php" class="btn btn-custom-primary btn-lg mt-3">
              <i class="fas fa-search me-2"></i>Ver Listado
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <footer class="footer text-center mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-start">
          <p class="mb-0">&copy; 2025 TecnoPeru - Sistema de gestión de productos</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="mb-0">Desarrollado con <i class="fas fa-heart text-danger"></i> por TecnoPeru</p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    
  <script>
    // Actualizar estadísticas cuando se carga la página
    document.addEventListener("DOMContentLoaded", function() {
      actualizarEstadisticas();
    });
    
    function actualizarEstadisticas() {
      // Obtener productos del localStorage
      const productos = JSON.parse(localStorage.getItem('tecnoperu_productos')) || [];
      
      // Calcular estadísticas
      const totalProductos = productos.length;
      const productosNuevos = productos.filter(p => p.esnuevo === 'S').length;
      const productosSeminuevos = productos.filter(p => p.esnuevo === 'N').length;
      
      // Actualizar elementos en la UI
      document.getElementById('stats-total').querySelector('.stats-number').textContent = totalProductos;
      document.getElementById('stats-nuevos').textContent = productosNuevos;
      document.getElementById('stats-seminuevos').textContent = productosSeminuevos;
    }
  </script>
</body>
</html>