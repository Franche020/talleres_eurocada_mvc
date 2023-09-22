const selectorPieza = document.querySelectorAll('.selector--pieza');
const formPieza = document.querySelectorAll('.form--pieza');
const formPiezaFaro = document.querySelectorAll('.form--pieza__faro');
const total = document.querySelector('#precio-total');
const todasPiezasPrecio = document.querySelector('#todas-piezas--precio');
const todasPiezas = document.querySelector('#todas-piezas');
const file1 = document.getElementById('file1');
const file2 = document.getElementById('file2');
const file3 = document.getElementById('file3');
const labelFile1 = document.getElementById('label-file1');
const labelFile2 = document.getElementById('label-file2');
const labelFile3 = document.getElementById('label-file3');
let estadoPiezas = [];
const submit = document.getElementById('submit-calc');


// TODO añadir event listener para faros y que se sume al total
// TODO verificar si los faros se marcan tambien al hacer el total
document.addEventListener('DOMContentLoaded', function(){
    iniEstado();
    eventListenersServicios();
})


function iniEstado () {

    formPieza.forEach(element => {
        
    let result = extraeNombre(element);
       if (element.checked === true) {

        let piezaSelector = document.querySelector(`#${result}`);
        piezaSelector.classList.add('selector--marcada');
        sumatorio();
        
    } else {
        let piezaSelector = document.querySelector(`#${result}`);
        piezaSelector.classList.remove('selector--marcada');
        sumatorio();
    }
})
}

function eventListenersServicios () {
    selectorPieza.forEach(element => {
        element.addEventListener('click', (e)=> {
            // Asigno la clase marcada
            if (e.target.classList.contains('selector--marcada')) {
                e.target.classList.remove('selector--marcada');
            } else {
                e.target.classList.add('selector--marcada');
            }
            // Marco o desmarco el checkbox
            let part = e.target.id;
            let ePart = document.querySelector(`input[name="pieza[${part}]"]`);
            if (ePart.checked === true) {
                ePart.checked = false;
                todasPiezas.checked = false;
            } else {
                ePart.checked = true;
            }
            sumatorio();
        })
    });
    formPieza.forEach(element => {
        element.addEventListener('click', (e)=> {

            let result = extraeNombre(e.target)
            
            selectorPieza.forEach(element => {

                if (result === element.id) {

                    if (element.classList.contains('selector--marcada')){
                        element.classList.remove('selector--marcada');
                    } else {
                        element.classList.add('selector--marcada');
                    }
                } 
            }); 

            if (todasPiezas.checked) {
                todasPiezas.checked = false;
            }
            sumatorio();
        })
    })
    formPiezaFaro.forEach(element => {
        element.addEventListener('click' , (e) => {

            sumatorio();
        })
    })
    todasPiezas.addEventListener('click', () => {
        if (todasPiezas.checked) {
            formPieza.forEach(element => {
                element.checked = true;
            });
            iniEstado();
        } else {
            formPieza.forEach(element => {
                element.checked = false;
            })
            iniEstado();
        }
    })

    file1.addEventListener('change' , (e)=> {
        let filename = (e.target.files[0].name);
        labelFile1.textContent = filename;
    })
    file2.addEventListener('change' , (e)=> {
        let filename = (e.target.files[0].name);
        labelFile2.textContent = filename;
    })
    file3.addEventListener('change' , (e)=> {
        let filename = (e.target.files[0].name);
        labelFile3.textContent = filename;
    })
    



}

function sumatorio () {
    var todas = false;
    var precioTotal = 0;
    estadoPiezas = [];
    formPieza.forEach(element => {
        estadoPiezas.push(element.checked);

        //TODO Si todas están marcadas que se sume unicamente esa
        if (element.checked === true){
            precioTotal += Number.parseFloat(element.value);
        }
        total.innerHTML = precioTotal.toFixed(2);
    });
    // And sobre estado de piezas
    todas = estadoPiezas.every(Boolean);

    // Si todas estan marcadas se asigna el precio de coche completo  y se marca todas piezas en caso de que se haga una a una
    if (todas === true) {
        
        precioTotal = Number.parseFloat(todasPiezas.value);
        todasPiezas.checked = true;
    }

    formPiezaFaro.forEach(element => {
        if (element.checked === true){
            precioTotal += Number.parseFloat(element.value);
        }
        total.innerHTML = precioTotal.toFixed(2);
    });

}


function extraeNombre (element) {
    let name = element.name;
    // Expresión regular para extraer dentro de []
    let regexp = /\[([^\]]*)\]/;
    // Ejecutar match sobre la cadena
    let match = name.match(regexp);
    // El resultado se guarda en match[1]
    let result = match[1]
    return result;
}

function enabledSubmit(response) {
    submit.disabled = false
}
