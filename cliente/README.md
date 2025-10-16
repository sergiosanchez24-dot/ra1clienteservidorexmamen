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


### 🔹 Ejercicio 1: Mejorar la interfaz de productos y productos
- Añade la img en la interfaz, es necesario realizar previamente el ejercicio de servidor: 🔹 Ejercicio 1: Añadir nuevos campos al JSON, img y categoria

---

### 🔹 Ejercicio 2: Mostrar solo tres productos en la pagina de inicio
- Modifica `index.html` y crea un contenedor donde se mostrarán solo **3  productos** disponibles.
- Muestra los productos con imagen, nombre y precio, dentro de **tarjetas de Bootstrap**.

📍 *Pista:*  
Puedes reutilizar el código de productos.js y por medio de un contador + break solo mostrar 3 productos. Copia la función y añadela a un nuevo index.js


---

### 🔹 Ejercicio 3: Mostrar cantidad de productos en la pagina del carrito
- Hay una etiqueta en la página del carrito.html llamada Carrito (), soluciona el código para que  desde carrito.js carge entre paréntesis el total de productos añadido al carrito (por ejemplo: `Carrito (3)`), en el caso de no tener productos debe mostrar Carrito(0)
- Pista, GetElementById


---


## 🧩 Recomendaciones
- Mantén las funciones en archivos JS separados según su finalidad.
- Usa la consola del navegador (`F12`) para depurar errores.
- Asegúrate de que las rutas (`API_URL`) sean correctas para tu entorno local.
