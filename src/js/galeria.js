const imagen = document.createElement("picture");
const overlay = document.createElement("DIV");
const body = document.querySelector("body");
const botones = document.createElement("DIV");
const cerrarModal = document.createElement("SVG");
const siguienteModal = document.createElement("SVG");
const anteriorModal = document.createElement("SVG");
const imagenes = document.querySelectorAll(".galeria--imagen");
let imagenActual = null;

document.addEventListener("DOMContentLoaded", function () {
  listenerGalerias();
});

function listenerGalerias() { //* FUNCIONA
  imagenes.forEach((element) => {
    element.addEventListener("click", (e) => {
      let arrayNombreImg = e.target.src.split("miniaturas/thumb_");
      let nombreImg = arrayNombreImg[1].slice(0, 32);

      imagenActual = listarImagenes().arrObImagenes.findIndex(objeto=>objeto.nombre === nombreImg);
      ampliarImagen(imagenActual);

    });
  });

  // Detectar click en botón
  cerrarModal.onclick = function () {
    ocultarImagen();
    imagenActual = null;
  };

  // Detectar click en imagen
  imagen.onclick = function () {
    ocultarImagen();
  };

  // anterior y sigiente
  anteriorModal.onclick = function () {
    cambiarImagen(true);
  };
  siguienteModal.onclick = function () {
    cambiarImagen(false);
  };
  //TODO Añadir deslizar
}

function ampliarImagen(index) { //* FUNCIONA
  // Obtener el numero de imagenes de la galeria
  numeroImagenes = listarImagenes().numeroImagenes;

  // Mostrar la imagen
  mostrarImagen(index);
}

// eliminación de elementos creados
function ocultarImagen() { //* FUNCIONA
  overlay.remove();
  body.classList.remove("fijar-body");
}

function cambiarImagen(anterior) { 
    // Las imagenes no se muestran por ID si no por el UNIQID

  if (anterior === true) {
    ocultarImagen();
    console.log(imagenActual);
    imagenActual--;
    if (imagenActual+1 < 1) {
      imagenActual = numeroImagenes-1;
    }
    console.log(imagenActual);

    mostrarImagen(imagenActual);
  } else {
    ocultarImagen();
    imagenActual++;
    if (imagenActual+1 > numeroImagenes) {
      imagenActual = 0;
    }
    mostrarImagen(imagenActual);
  }
}

function mostrarImagen(index) { //* FUNCIONA
    nombreImg = listarImagenes().arrObImagenes[index].nombre
  imagen.innerHTML = `
          <picture>
          <source srcset="fotos/${nombreImg}.webp" type="image/webp">                
          <img src="fotos/${nombreImg}.jpg" alt="Imagen talleres Eurocada, taller chapa y pintura Torres de la Alameda Madrid">
          </picture>`;
  // Overlay con la imagen

  overlay.classList.add("overlay");
  overlay.appendChild(imagen);
  // body para asignar el overlay

  body.appendChild(overlay);
  body.classList.add("fijar-body");
  // Botón para cerrar ventana modal y los botones siguiente y anterior

  cerrarModal.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="18" y1="6" x2="6" y2="18" />
          <line x1="6" y1="6" x2="18" y2="18" />
          </svg>`;

  siguienteModal.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M5 12l14 0" />
          <path d="M13 18l6 -6" />
          <path d="M13 6l6 6" />
          </svg>`;

  anteriorModal.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M5 12l14 0" />
          <path d="M5 12l6 6" />
          <path d="M5 12l6 -6" />
          </svg>`;

  botones.classList.add("botones");
  overlay.appendChild(botones);
  anteriorModal.classList.add("anterior", "boton--gallery");
  botones.appendChild(anteriorModal);
  cerrarModal.classList.add("cerrar", "boton--gallery");
  botones.appendChild(cerrarModal);
  siguienteModal.classList.add("sigiente", "boton--gallery");
  botones.appendChild(siguienteModal);
}

function listarImagenes() { //* FUNCIONA
  // Esta funcion retorna en un objeto el numero de imagenes y un array de objetos con la id y el nombre unico de cada imagen sin extensiones
  let numeroImagenes = 0;
  let arrObImagenes = [];

  const listado = {
    numeroImagenes,
    arrObImagenes,
  };

  imagenes.forEach((element) => {
    numeroImagenes++;

    id = element.childNodes[1].id.split("img")[1];
    arrayNombreImg = element.childNodes[1].src.split("miniaturas/thumb_");
    uniqId = arrayNombreImg[1].slice(0, 32);

    let imagenObj = {
      id: id,
      nombre: uniqId,
    };
    arrObImagenes.push(imagenObj);
  });

  listado.numeroImagenes = numeroImagenes;
  listado.arrObImagenes = arrObImagenes;

  return listado;
}
