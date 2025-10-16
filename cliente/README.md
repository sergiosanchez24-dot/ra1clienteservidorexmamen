# 🧠 EXAMEN: Cliente - Tienda Online

## 🗂️ Contexto
Esta parte del examen corresponde al desarrollo **del lado cliente (frontend)** de una aplicación web que se comunica con un servidor mediante una **API REST en PHP**.  
El cliente está desarrollado con **HTML, JavaScript y Bootstrap**, y su objetivo es **mostrar los datos del servidor de forma dinámica** y permitir la interacción del usuario.

---

## 🎯 Objetivos
- Comprender la estructura de una arquitectura cliente-servidor.
- Usar `fetch()` para obtener datos de una API REST.
- Manipular el **DOM** con JavaScript para mostrar información.
- Aplicar diseño **responsive** con Bootstrap.
- Gestionar el carrito de compra usando **localStorage**.

---

## 🧩 Estructura del cliente

cliente/
├── index.html
├── productos.html
├── producto.html
├── carrito.html
└── js/
├── api.js
├── productos.js
├── producto.js
└── carrito.js


---

## 🧪 Ejercicios propuestos

### 🔹 Ejercicio 1: Mostrar los tres últimos productos en la página de inicio
- Modifica `index.html` y crea un contenedor donde se mostrarán los **3 últimos productos** disponibles.
- Usa `fetch()` para obtener los datos de la API (`api.js` ya incluye las funciones necesarias).
- Muestra los productos con imagen, nombre y precio, dentro de **tarjetas de Bootstrap**.

📍 *Pista:*  
Puedes reutilizar la función `obtenerProductos()` del archivo `api.js` y recorrer el array con `.slice(-3)` para obtener los tres últimos elementos.

---

### 🔹 Ejercicio 2: Mejorar la interfaz del carrito
- Añade un botón en cada producto dentro de `carrito.html` que permita **eliminar ese producto individualmente**.
- Actualiza el total automáticamente tras borrar un producto.

---

### 🔹 Ejercicio 3: Mostrar cantidad de productos en el icono del carrito
- En la barra de navegación (navbar), muestra junto al botón "Carrito" la cantidad de productos añadidos (por ejemplo: `Carrito (3)`).
- Usa el contenido de `localStorage` para contar los productos.

---

### 🔹 Ejercicio 4 (opcional): Filtrar productos por precio o nombre
- Añade en `productos.html` un campo de texto y un botón "Filtrar".
- Al escribir en el campo, solo deben mostrarse los productos que coincidan con el texto buscado o que estén por debajo de un precio determinado.

---

## 🧠 Puntuación orientativa (total 10 puntos)
| Apartado | Descripción | Puntos |
|-----------|--------------|--------|
| Estructura HTML + Bootstrap | Uso adecuado de componentes y estructura responsive | 2 |
| Uso de fetch() y carga dinámica de datos | Llamadas correctas a la API y renderizado dinámico | 3 |
| Manipulación del DOM | Interactividad, eventos, y visualización de datos | 2 |
| Gestión de carrito (localStorage) | Añadir, eliminar y actualizar | 2 |
| Código limpio y funcional | Buenas prácticas, comentarios y legibilidad | 1 |

---

## 🧩 Recomendaciones
- Mantén las funciones en archivos JS separados según su finalidad.
- Usa la consola del navegador (`F12`) para depurar errores.
- Asegúrate de que las rutas (`API_URL`) sean correctas para tu entorno local.
