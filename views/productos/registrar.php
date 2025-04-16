<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro de Productos - TecnoPeru</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: var(--text-light);
        border-bottom: none;
        padding: 15px 20px;
      }
      
      .card-body {
        padding: 25px;
      }
      
      .card-footer {
        background-color: rgba(0,0,0,0.02);
        border-top: 1px solid rgba(0,0,0,0.05);
        padding: 15px 25px;
      }
      
      .form-floating .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(26, 35, 126, 0.25);
      }
      
      .form-floating .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(26, 35, 126, 0.25);
      }
      
      .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }
      
      .btn-primary:hover {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
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
      
      .form-label {
        font-weight: 500;
      }
      
      .alert-success {
        background-color: rgba(76, 175, 80, 0.15);
        border-color: rgba(76, 175, 80, 0.3);
        color: #2e7d32;
      }
      
      .page-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
      }
      
      .form-section {
        margin-bottom: 30px;
      }
      
      .form-section-title {
        color: var(--primary-color);
        margin-bottom: 15px;
        font-weight: 600;
        font-size: 1.1rem;
      }
      
      .input-help {
        color: #666;
        font-size: 0.85rem;
        margin-top: 5px;
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
              <a class="nav-link" href="listar.php"><i class="fas fa-list-alt me-1"></i> Listar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="registrar.php"><i class="fas fa-plus-circle me-1"></i> Registrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Cabecera de página -->
      <div class="text-center mb-4 fade-in">
        <div class="page-icon">
          <i class="fas fa-plus-circle"></i>
        </div>
        <h2 class="mb-2">Registro de Producto</h2>
        <p class="text-muted">Completa el formulario para añadir un nuevo producto</p>
      </div>
      
      <form action="" autocomplete="off" id="formulario-registro" class="fade-in">
        <div class="card mb-4">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col"><strong><i class="fas fa-plus-circle me-2"></i>Nuevo producto</strong></div>
              <div class="col text-end">
                <a href="listar.php" class="btn btn-sm btn-light">
                  <i class="fas fa-list me-1"></i>Mostrar lista
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Sección de información básica -->
            <div class="form-section">
              <div class="form-section-title"><i class="fas fa-info-circle me-2"></i>Información básica</div>
              
              <div class="form-floating mb-3">
                <select
                  name="marcas"
                  id="marcas"
                  class="form-select"
                  required
                  autofocus
                >
                  <option value="">Seleccione</option>
                  <option value="1">Samsung</option>
                  <option value="2">Lenovo</option>
                  <option value="3">Epson</option>
                </select>
                <label for="marcas">Marca del producto</label>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="tipo"
                      placeholder="Tipo"
                      required
                    />
                    <label for="tipo">Tipo</label>
                  </div>
                  <div class="input-help">Ej: Laptop, Impresora, Smartphone, etc.</div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="descripcion"
                      placeholder="Descripcion"
                      required
                    />
                    <label for="descripcion">Descripción</label>
                  </div>
                  <div class="input-help">Ingresa un nombre o breve descripción del producto</div>
                </div>
              </div>
            </div>
            
            <!-- Sección de detalles -->
            <div class="form-section">
              <div class="form-section-title"><i class="fas fa-tag me-2"></i>Detalles del producto</div>
              
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control text-end"
                      id="precio"
                      placeholder="Precio"
                      required
                    />
                    <label for="precio">Precio (S/)</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input
                      type="number"
                      value="6"
                      min="0"
                      max="48"
                      step="3"
                      class="form-control text-center"
                      id="garantia"
                      placeholder="Garantia"
                      required
                    />
                    <label for="garantia">Garantía (meses)</label>
                  </div>
                </div>
              </div>

              <div class="form-floating">
                <select
                  name="condicion"
                  id="condicion"
                  class="form-select"
                  required
                >
                  <option value="S" selected>Producto nuevo</option>
                  <option value="N">Semi nuevo</option>
                </select>
                <label for="condicion">Condición del producto</label>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button class="btn btn-primary" type="submit">
              <i class="fas fa-save me-1"></i>Guardar
            </button>
            <button class="btn btn-secondary" type="reset">
              <i class="fas fa-times me-1"></i>Cancelar
            </button>
          </div>
        </div>
      </form>
      
      <!-- Notificación de éxito (oculta por defecto) -->
      <div class="alert alert-success fade-in d-none" id="alerta-exito" role="alert">
        <div class="d-flex align-items-center">
          <div class="me-3">
            <i class="fas fa-check-circle fa-2x"></i>
          </div>
          <div>
            <h5 class="mb-1">¡Producto guardado correctamente!</h5>
            <p class="mb-0">El producto ha sido agregado al inventario.</p>
          </div>
        </div>
        <div class="mt-3 text-end">
          <a href="listar.php" class="btn btn-sm btn-success">
            <i class="fas fa-list me-1"></i>Ver listado
          </a>
          <button class="btn btn-sm btn-outline-success ms-2" onclick="document.getElementById('alerta-exito').classList.add('d-none')">
            <i class="fas fa-times me-1"></i>Cerrar
          </button>
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
      const formulario = document.querySelector("#formulario-registro");
      const marcas = document.querySelector("#marcas");
      const tipo = document.querySelector("#tipo");
      const descripcion = document.querySelector("#descripcion");
      const precio = document.querySelector("#precio");
      const garantia = document.querySelector("#garantia");
      const condicion = document.querySelector("#condicion");
      const alertaExito = document.querySelector("#alerta-exito");
      
      // Función para obtener el nombre de la marca según su ID
      function getNombreMarca(idMarca) {
        const marcasMap = {
          "1": "Samsung",
          "2": "Lenovo",
          "3": "Epson"
        };
        return marcasMap[idMarca] || "Desconocida";
      }
      
      // Función para obtener el texto de condición según su valor
      function getTextoCondicion(condicionValor) {
        return condicionValor === "S" ? "Nuevo" : "Semi nuevo";
      }

      function guardarDato() {
        // Obtener los datos actuales almacenados o inicializar un array vacío
        let productos = JSON.parse(localStorage.getItem('tecnoperu_productos')) || [];
        
        // Generar ID único (timestamp + número aleatorio)
        const nuevoId = Date.now() + Math.floor(Math.random() * 1000);
        
        // Crear el nuevo producto
        const nuevoProducto = {
          id: nuevoId,
          idmarca: marcas.value,
          marca: getNombreMarca(marcas.value),
          tipo: tipo.value,
          descripcion: descripcion.value,
          precio: parseFloat(precio.value),
          garantia: parseInt(garantia.value),
          esnuevo: condicion.value,
          condicionTexto: getTextoCondicion(condicion.value),
          fecha: new Date().toISOString()
        };
        
        // Agregar el nuevo producto al array
        productos.push(nuevoProducto);
        
        // Guardar en localStorage
        localStorage.setItem('tecnoperu_productos', JSON.stringify(productos));
        
        // Mostrar notificación de éxito
        alertaExito.classList.remove('d-none');
        
        // Limpiar el formulario
        formulario.reset();
        
        // Volver a poner el foco en el primer campo
        marcas.focus();
        
        return nuevoProducto;
      }

      formulario.addEventListener("submit", function (e) {
        e.preventDefault();

        // Validar el formulario con un poco más de detalle
        if (marcas.value === "") {
          alert("Por favor, seleccione una marca");
          marcas.focus();
          return;
        }
        
        if (tipo.value.trim() === "") {
          alert("Por favor, ingrese el tipo de producto");
          tipo.focus();
          return;
        }
        
        if (descripcion.value.trim() === "") {
          alert("Por favor, ingrese una descripción");
          descripcion.focus();
          return;
        }
        
        if (precio.value === "" || isNaN(parseFloat(precio.value))) {
          alert("Por favor, ingrese un precio válido");
          precio.focus();
          return;
        }

        if (confirm("¿Desea registrar el producto?")) {
          const productoGuardado = guardarDato();
          console.log("Producto guardado:", productoGuardado);
        }
      });
      
      // Dar formato al campo de precio
      precio.addEventListener("blur", function() {
        if (this.value.trim() !== "" && !isNaN(parseFloat(this.value))) {
          this.value = parseFloat(this.value).toFixed(2);
        }
      });
    </script>
  </body>
</html>