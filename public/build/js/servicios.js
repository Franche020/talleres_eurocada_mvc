const selectorPieza=document.querySelectorAll(".selector--pieza"),formPieza=document.querySelectorAll(".form--pieza"),total=document.querySelector("#precio-total"),todasPiezasPrecio=document.querySelector("#todas-piezas--precio"),todasPiezas=document.querySelector("#todas-piezas"),file1=document.getElementById("file1"),file2=document.getElementById("file2"),file3=document.getElementById("file3"),labelFile1=document.getElementById("label-file1"),labelFile2=document.getElementById("label-file2"),labelFile3=document.getElementById("label-file3");function iniEstado(){formPieza.forEach(e=>{let t=extraeNombre(e);if(!0===e.checked){document.querySelector("#"+t).classList.add("selector--marcada"),sumatorio()}else{document.querySelector("#"+t).classList.remove("selector--marcada"),sumatorio()}})}function eventListenersServicios(){selectorPieza.forEach(e=>{e.addEventListener("click",e=>{e.target.classList.contains("selector--marcada")?e.target.classList.remove("selector--marcada"):e.target.classList.add("selector--marcada");let t=e.target.id,a=document.querySelector(`input[name="pieza[${t}]"]`);!0===a.checked?a.checked=!1:a.checked=!0,sumatorio()})}),formPieza.forEach(e=>{e.addEventListener("click",e=>{let t=extraeNombre(e.target);selectorPieza.forEach(e=>{t===e.id&&(e.classList.contains("selector--marcada")?e.classList.remove("selector--marcada"):e.classList.add("selector--marcada"))}),todasPiezas.checked&&(todasPiezas.checked=!1),sumatorio()})}),todasPiezas.addEventListener("click",()=>{todasPiezas.checked?(formPieza.forEach(e=>{e.checked=!0}),iniEstado()):(formPieza.forEach(e=>{e.checked=!1}),iniEstado())}),file1.addEventListener("change",e=>{let t=e.target.files[0].name;labelFile1.textContent=t}),file2.addEventListener("change",e=>{let t=e.target.files[0].name;labelFile2.textContent=t}),file3.addEventListener("change",e=>{let t=e.target.files[0].name;labelFile3.textContent=t})}function sumatorio(){var e=0;formPieza.forEach(t=>{!0===t.checked&&(e+=Number.parseFloat(t.value)),total.innerHTML=e.toFixed(2)})}function sumarTodasPiezas(){let e=0;formPieza.forEach(t=>{e+=Number.parseFloat(t.value)}),todasPiezasPrecio.innerHTML=e.toFixed(2)+"€"}function extraeNombre(e){return e.name.match(/\[([^\]]*)\]/)[1]}document.addEventListener("DOMContentLoaded",(function(){iniEstado(),sumarTodasPiezas(),eventListenersServicios()}));