document.addEventListener('DOMContentLoaded', async () => {
  const contenedor = document.getElementById('contenedor-productos');
  const productos = await obtenerProductos();

  productos.forEach(p => {
    const card = document.createElement('div');
    card.className = "col-md-4";
    card.innerHTML = `
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body text-center">
          <h5 class="card-title">${p.nombre}</h5>
          <p><img id="img" style="width: 34%;" src="https://clientes.oxfamintermon.org/643-large_default/camiseta-hombre-lisa-algorg-blanca-s.jpg"/></p>
          <h6 class="card-subtitle>${p.categoria}</h6>
          <p class="card-text">${p.descripcion}</p>
          <p class="fw-bold">${p.precio.toFixed(2)} €</p>
          <a href="producto.html?id=${p.id}" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
    `;
    contenedor.appendChild(card);
  });
});
