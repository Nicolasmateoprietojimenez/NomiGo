document.addEventListener("DOMContentLoaded", function() { //esto quiere decir que el evneto esperado es la carga completa de todo el contenido de mi html
  var titulo = document.querySelector(".titulo");
  var tituloOculto = document.getElementById("tituloOculto");
  var audio =document.getElementById("sonidox");

  function mostrarTituloOculto() {
    tituloOculto.classList.add("mostrar");
    titulo.classList.add("mover-derecha");

    setTimeout(function() {
      window.location.href = "loader.html";
    }, 4000);
  }

  function repSonido(){
    audio.volume=0.3;
    audio.play();
  }

  document.addEventListener("click", mostrarTituloOculto);
  document.addEventListener("click", repSonido);
});