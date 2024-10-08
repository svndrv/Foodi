$(function () {
    
    listar_platos();
    obtener_filtro_platos();
    
    
});

const obtener_filtro_platos = function(){
    $('#search').on('input', function() {
        let name = $(this).val();
        if(name.length > 0) {
            buscar_platos_por_nombre(name);
        } else {
            listar_platos();
        }
    });
}

const buscar_platos_por_nombre = function(name) {
    $.ajax({
        url: "controller/platos.php",
        method: "POST",
        data: { option: "search", name: name },
        success: function(response) {
            renderizar_platos(response);
        }
    });
}

const listar_platos = function(){
    $.ajax({
        url: "controller/platos.php",
        success: function(response){
            renderizar_platos(response);
        }
    })
}


const renderizar_platos = function(response) {
    const data = JSON.parse(response);
    let html = ``;
    if (data.length > 0) {
        data.map((x) => {
            const { id, name } = x;
            html = 
                html + `<div class="group-card-platos col-lg-3 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <div class="card-platos card shadow-sm" onclick="alerta(${id})">
                                    <img src="img/cat.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <i class="fa-solid fa-utensils"></i>
                                        <h5 class="card-title">${name}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>`;
        });
    } else {
        html =
            html + `<div class="group-card-platos col-lg-3 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <div class="card-platos card shadow-sm" onclick="alerta()">
                                <img src="img/user.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">No-Found</h5>
                                </div>
                            </div>
                        </div>`;
    }
    $("#listar-platos").html(html);
}
























/*----------------------------------------> SIDEBAR*/

const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else{
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});

palanca.addEventListener("click",()=>{
    let body = document.body;
    body.classList.toggle("dark-mode");
    circulo.classList.toggle("prendido");
});

cloud.addEventListener("click",()=>{
    barraLateral.classList.toggle("mini-barra-lateral");
    main.classList.toggle("min-main");
    spans.forEach((span)=>{
        span.classList.toggle("oculto");
    });
});
