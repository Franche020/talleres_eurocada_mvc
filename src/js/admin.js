const file1 = document.getElementById("file1");
const labelFile1 = document.getElementById("label-file1");
const resaltar = document.querySelectorAll(".resaltar");

document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
});

function eventListeners() {
  if (file1) {
    file1.addEventListener("change", (e) => {
      let filename = e.target.files[0].name;
      labelFile1.textContent = filename;
    });
  }
  if (resaltar) {
    resaltar.forEach((element) => {
      element.addEventListener("change", (e) => {
        let formId = e.target.parentElement.id;
        let form = document.getElementById(formId);
        let valorAnterior = e.target.value;
        if (valorAnterior === "1") {
          e.target.value = "0";
        } else {
          e.target.value = "1";
        }

        const formData = new FormData(form);

        postForm(formData, '/administracion/galeria/actualizar').then((data)=>{
            console.log(data);
        })
        

      });
    });
  }
}

async function postForm (formData, url) {
    const response = await fetch(url, {
        method: 'POST',
        body: formData
    });
    
    return response.json;
}
