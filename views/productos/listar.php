<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Productos - TecnoPeru</title>

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
    
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      overflow: hidden;
    }
    
    .card-header {
      background: linear-gradient(135deg, var(--accent-color), #2e7d32);
      color: var(--text-light);
      border-bottom: none;
      padding: 15px 20px;
    }
    
    .card-body {
      padding: 20px;
    }
    
    .card-footer {
      background-color: rgba(0,0,0,0.02);
      border-top: 1px solid rgba(0,0,0,0.05);
      padding: 15px 20px;
    }
    
    .table {
      margin-bottom: 0;
    }
    
    .table th {
      border-top: none;
      background-color: rgba(10, 18, 50, 0.03);
      font-weight: 600;
      color: var(--primary-color);
    }
    
    .table-hover tbody tr:hover {
      background-color: rgba(26, 35, 126, 0.04);
    }
    
    .table-striped > tbody > tr:nth-of-type(odd) > * {
      background-color: rgba(76, 175, 80, 0.05);
    }
    
    .precio {
      font-weight: 600;
      color: var(--primary-color);
    }
    
    .badge-condicion-nuevo {
      background-color: var(--accent-color);
      color: white;
    }
    
    .badge-condicion-seminuevo {
      background-color: #ff9800;
      color: white;
    }
    
    .badge-garantia {
      background-color: var(--primary-color);
      color: white;
    }
    
    .empty-state {
      padding: 50px 0;
      text-align: center;
      color: #6c757d;
    }
    
    .empty-icon {
      font-size: 5rem;
      margin-bottom: 20px;
      opacity: 0.5;
      color: var(--primary-color);
    }
    
    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
    }
    
    .btn-success {
      background-color: var(--accent-color);
      border-color: var(--accent-color);
    }
    
    .btn-success:hover {
      background-color: #2e7d32;
      border-color: #2e7d32;
    }
    
    .btn-light {
      background-color: var(--text-light);
      color: var(--primary-color);
      border-color: var(--text-light);
    }
    
    .btn-light:hover {
      background-color: var(--light-color);
      color: var(--secondary-color);
      border-color: var(--light-color);
    }
    
    .btn-danger {
      background-color: #d32f2f;
      border-color: #d32f2f;
    }
    
    .btn-danger:hover {
      background-color: #b71c1c;
      border-color: #b71c1c;
    }
    
    .page-icon {
      font-size: 2.5rem;
      color: var(--accent-color);
      margin-bottom: 20px;
    }
    
    .table-actions .btn {
      transition: all 0.2s ease;
    }
    
    .table-actions .btn:hover {
      transform: translateY(-2px);
    }
    
    /* Animaciones */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .fade-in {
      animation: fadeIn 0.5s ease-out forwards;
    }
    
    .footer {
      background-color: var(--dark-color);
      color: var(--text-light);
      padding: 20px 0;
      margin-top: 40px;
    }
    
    /* Filtros */
    .filters {
      background-color: white;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="../dashboard.php">
        <i class="fas fa-microchip me-2"></i>TecnoPeru
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="../dashboard.php"><i class="fas fa-home me-1"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="listar.php"><i class="fas fa-list-alt me-1"></i> Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrar.php"><i class="fas fa-plus-circle me-1"></i> Registrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <!-- Cabecera de página -->
    <div class="text-center mb-4 fade-in">
      <div class="page-icon">
        <i class="fas fa-boxes"></i>
      </div>
      <h2 class="mb-2">Listado de Productos</h2>
      <p class="text-muted">Visualiza y administra todos los productos registrados</p>
    </div>
    
    <!-- Sección de filtros -->
    <div class="filters fade-in">
      <div class="row g-3 align-items-center">
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
            <input type="text" class="form-control border-start-0" id="busqueda" placeholder="Buscar producto...">
          </div>
        </div>
        <div class="col-md-3">
          <select class="form-select" id="filtro-marca">
            <option value="">Todas las marcas</option>
            <option value="Samsung">Samsung</option>
            <option value="Lenovo">Lenovo</option>
            <option value="Epson">Epson</option>
          </select>
        </div>
        <div class="col-md-3">
          <select class="form-select" id="filtro-condicion">
            <option value="">Todas las condiciones</option>
            <option value="Nuevo">Nuevos</option>
            <option value="Semi nuevo">Semi nuevos</option>
          </select>
        </div>
        <div class="col-md-2 text-end">
          <button class="btn btn-primary w-100" id="resetear-filtros">
            <i class="fas fa-sync-alt me-1"></i> Resetear
          </button>
        </div>
      </div>
    </div>

    <div class="card mb-4 fade-in">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col"><strong><i class="fas fa-list-alt me-2"></i>Productos</strong></div>
          <div class="col text-end">
            <a href="registrar.php" class="btn btn-sm btn-light">
              <i class="fas fa-plus-circle me-1"></i>Nuevo Producto
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <!-- Estado vacío (se muestra cuando no hay productos) -->
        <div id="empty-state" class="empty-state d-none">
          <div class="empty-icon">
            <i class="fas fa-box-open"></i>
          </div>
          <h4>No hay productos registrados</h4>
          <p>Comienza registrando tu primer producto</p>
          <a href="registrar.php" class="btn btn-primary">
            <i class="fas fa-plus-circle me-1"></i>Registrar producto
          </a>
        </div>
        
        <!-- Tabla de productos -->
        <div id="tabla-container">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="tabla-productos">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Marca</th>
                  <th>Tipo</th>
                  <th>Descripción</th>
                  <th class="text-center">Precio</th>
                  <th class="text-center">Garantía</th>
                  <th class="text-center">Condición</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <!-- contenido dinámico -->
              </tbody>
            </table>
          </div>
        </div>
      </div> <!-- card body -->
      <div class="card-footer d-flex justify-content-between align-items-center">
        <span class="text-muted" id="contador-productos">0 productos encontrados</span>
        <div class="btn-group">
          <button class="btn btn-sm btn-outline-secondary" disabled>
            <i class="fas fa-file-export me-1"></i> Exportar
          </button>
          <button class="btn btn-sm btn-outline-secondary" disabled>
            <i class="fas fa-print me-1"></i> Imprimir
          </button>
        </div>
      </div>
    </div> <!-- card -->
  </div> <!-- container -->

  <!-- Modal para confirmar eliminación -->
  <div class="modal fade" id="eliminarModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title"><i class="fas fa-exclamation-triangle me-2"></i>Confirmar eliminación</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <i class="fas fa-trash-alt text-danger" style="font-size: 3rem;"></i>
          </div>
          <p class="text-center">¿Está seguro que desea eliminar este producto?</p>
          <p class="text-center text-danger"><strong>Esta acción no se puede deshacer.</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fas fa-times me-1"></i>Cancelar
          </button>
          <button type="button" class="btn btn-danger" id="btn-confirmar-eliminar">
            <i class="fas fa-trash me-1"></i>Eliminar
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal para ver detalles del producto -->
  <div class="modal fade" id="detalleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
          <h5 class="modal-title"><i class="fas fa-info-circle me-2"></i>Detalles del Producto</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3" id="producto-detalle-contenido">
            <!-- El contenido se llenará dinámicamente -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fas fa-times me-1"></i>Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p class="mb-0">&copy; 2025 TecnoPeru - Sistema de gestión de productos</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    
  <script>
    // Referencias a elementos del DOM
    const tabla = document.querySelector("#tabla-productos tbody");
    const emptyState = document.querySelector("#empty-state");
    const tablaContainer = document.querySelector("#tabla-container");
    const contadorProductos = document.querySelector("#contador-productos");
    const eliminarModal = document.getElementById('eliminarModal');
    const detalleModal = document.getElementById('detalleModal');
    const btnConfirmarEliminar = document.getElementById('btn-confirmar-eliminar');
    const busqueda = document.getElementById('busqueda');
    const filtroMarca = document.getElementById('filtro-marca');
    const filtroCondicion = document.getElementById('filtro-condicion');
    const resetearFiltros = document.getElementById('resetear-filtros');
    
    // Variable para almacenar el ID del producto a eliminar
    let productoAEliminar = null;
    
    // Variable para almacenar todos los productos
    let todosLosProductos = [];
    
    // Modales de Bootstrap
    const modalEliminar = new bootstrap.Modal(eliminarModal);
    const modalDetalle = new bootstrap.Modal(detalleModal);
    
    function obtenerDatos() {
      // Obtener datos desde localStorage
      todosLosProductos = JSON.parse(localStorage.getItem('tecnoperu_productos')) || [];
      
      // Aplicar filtros
      mostrarProductosFiltrados();
    }
    
    function mostrarProductosFiltrados() {
      // Aplicar filtros
      let productosFiltrados = todosLosProductos;
      
      // Filtro de búsqueda
      const terminoBusqueda = busqueda.value.toLowerCase().trim();
      if (terminoBusqueda !== '') {
        productosFiltrados = productosFiltrados.filter(producto => 
          producto.descripcion.toLowerCase().includes(terminoBusqueda) ||
          producto.tipo.toLowerCase().includes(terminoBusqueda) ||
          producto.marca.toLowerCase().includes(terminoBusqueda)
        );
      }
      
      // Filtro de marca
      if (filtroMarca.value !== '') {
        productosFiltrados = productosFiltrados.filter(producto => 
          producto.marca === filtroMarca.value
        );
      }
      
      // Filtro de condición
      if (filtroCondicion.value !== '') {
        productosFiltrados = productosFiltrados.filter(producto => 
          producto.condicionTexto === filtroCondicion.value
        );
      }
      
      // Actualizar el contador
      contadorProductos.textContent = `${productosFiltrados.length} productos encontrados`;
      
      // Mostrar estado vacío si no hay productos
      if (productosFiltrados.length === 0) {
        emptyState.classList.remove('d-none');
        tablaContainer.classList.add('d-none');
        return;
      }
      
      // Mostrar la tabla si hay productos
      emptyState.classList.add('d-none');
      tablaContainer.classList.remove('d-none');
      
      // Limpiar la tabla antes de agregar nuevos datos
      tabla.innerHTML = '';
      
      // Ordenar productos por ID (más recientes primero)
      productosFiltrados.sort((a, b) => b.id - a.id);
      
      // Llenar la tabla con los productos
      productosFiltrados.forEach((producto, index) => {
        // Formatear el precio con 2 decimales y el símbolo de soles
        const precioFormateado = `S/ ${producto.precio.toFixed(2)}`;
        
        // Formatear la garantía
        const garantiaTexto = `${producto.garantia} meses`;
        
        // Clase para el badge de condición
        const condicionClase = producto.esnuevo === 'S' ? 'badge-condicion-nuevo' : 'badge-condicion-seminuevo';
        
        // Crear la fila
        tabla.innerHTML += `
          <tr>
            <td class="text-center">${index + 1}</td>
            <td><span class="fw-semibold">${producto.marca}</span></td>
            <td>${producto.tipo}</td>
            <td>${producto.descripcion}</td>
            <td class="text-center precio">${precioFormateado}</td>
            <td class="text-center"><span class="badge badge-garantia">${garantiaTexto}</span></td>
            <td class="text-center"><span class="badge ${condicionClase}">${producto.condicionTexto}</span></td>
            <td class="text-center table-actions">
              <button class="btn btn-sm btn-outline-primary" onclick="verDetalle(${producto.id})">
                <i class="fas fa-eye"></i>
              </button>
              <button class="btn btn-sm btn-danger ms-1" onclick="confirmarEliminar(${producto.id})">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>
        `;
      });
    }
    
    // Función para ver detalles del producto
    function verDetalle(id) {
      const producto = todosLosProductos.find(p => p.id == id);
      if (producto) {
        const detalleContenido = document.getElementById('producto-detalle-contenido');
        
        // Formatear fecha si existe
        let fechaFormateada = 'No disponible';
        if (producto.fecha) {
          const fecha = new Date(producto.fecha);
          fechaFormateada = fecha.toLocaleDateString('es-ES', { 
            day: '2-digit', 
            month: 'long', 
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
          });
        }
        
        detalleContenido.innerHTML = `
          <div class="col-12 mb-3">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 me-3">
                <div style="width: 60px; height: 60px; background-color: ${producto.esnuevo === 'S' ? '#4caf50' : '#ff9800'}; 
                     border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                  <i class="fas ${producto.esnuevo === 'S' ? 'fa-certificate' : 'fa-tag'}" style="font-size: 24px; color: white;"></i>
                </div>
              </div>
              <div>
                <h4 class="mb-0">${producto.descripcion}</h4>
                <p class="text-muted mb-0">${producto.marca} - ${producto.tipo}</p>
              </div>
            </div>
          </div>
          
          <div class="col-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-dollar-sign me-2"></i>Precio</h6>
                <p class="card-text fs-5 fw-bold">S/ ${producto.precio.toFixed(2)}</p>
              </div>
            </div>
          </div>
          
          <div class="col-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-shield-alt me-2"></i>Garantía</h6>
                <p class="card-text fs-5 fw-bold">${producto.garantia} meses</p>
              </div>
            </div>
          </div>
          
          <div class="col-6">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-check-circle me-2"></i>Condición</h6>
                <p class="card-text">
                  <span class="badge ${producto.esnuevo === 'S' ? 'badge-condicion-nuevo' : 'badge-condicion-seminuevo'} fs-6">
                    ${producto.condicionTexto}
                  </span>
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-6">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-calendar-alt me-2"></i>Registrado</h6>
                <p class="card-text small">${fechaFormateada}</p>
              </div>
            </div>
          </div>
        `;
        
        modalDetalle.show();
      }
    }
    
    // Función para confirmar la eliminación
    function confirmarEliminar(id) {
      productoAEliminar = id;
      modalEliminar.show();
    }
    
    // Función para eliminar un producto
    function eliminarProducto(id) {
      todosLosProductos = todosLosProductos.filter(producto => producto.id != id);
      
      // Guardar los productos actualizados
      localStorage.setItem('tecnoperu_productos', JSON.stringify(todosLosProductos));
      
      // Actualizar la tabla
      mostrarProductosFiltrados();
    }
    
    // Event listener para el botón de confirmar eliminación
    btnConfirmarEliminar.addEventListener('click', function() {
      if (productoAEliminar) {
        eliminarProducto(productoAEliminar);
        modalEliminar.hide();
      }
    });
    
    // Event listeners para los filtros
    busqueda.addEventListener('input', mostrarProductosFiltrados);
    filtroMarca.addEventListener('change', mostrarProductosFiltrados);
    filtroCondicion.addEventListener('change', mostrarProductosFiltrados);
    
    // Event listener para el botón de resetear filtros
    resetearFiltros.addEventListener('click', function() {
      busqueda.value = '';
      filtroMarca.value = '';
      filtroCondicion.value = '';
      mostrarProductosFiltrados();
    });
    
    // Exponer las funciones al ámbito global
    window.confirmarEliminar = confirmarEliminar;
    window.verDetalle = verDetalle;
    
    // Cargar los datos cuando se carga la página
    document.addEventListener("DOMContentLoaded", obtenerDatos);
  </script>
</body>

</html>