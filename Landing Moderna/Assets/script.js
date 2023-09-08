
let trabajos = document.querySelectorAll('.container-work-content');
let listaTrabajos = document.querySelectorAll('.work-title')

cambiaTrabajo=function (){
    // comprueba si los contenidos estan activos y los desactiva
    trabajos.forEach((item)=>{
        if(item.classList.contains('work-active')){
            item.classList.remove('work-active');
        }
    })
    // comprueba si los titulos estan activos y los desactiva
    listaTrabajos.forEach((item)=>{
        if(item.classList.contains('work-active')){
            item.classList.remove('work-active');
        }
    })
    // selecciona los contenidos que correspondan al titulo y activa ambos
    trabajoDisplay = document.querySelector('.'+this.id);
    trabajoDisplay.classList.add('work-active');
    this.classList.add('work-active');
}
listaTrabajos.forEach((item)=>item.addEventListener('click',cambiaTrabajo));
;