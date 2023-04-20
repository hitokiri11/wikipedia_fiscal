<section name="seccion3" >
    <div class="fondoBlack estadisticas_resposive">
        <div class="titulo_section3">
            Conoce LIBERFY
        </div>
        
        <div class="numEstadisticas" id="prof_equipo_resp">
            0
        </div>
        <div class="parrrafoEstadistica">
            profesionales
        </div>
        <hr class="hrEstadisticas">

        <div class="numEstadisticas" id="seguidores_resp">
            0
        </div>
        <div class="parrrafoEstadistica">
            seguidores
        </div>
        <hr class="hrEstadisticas">

        <div class="numEstadisticas" id="cant_clientes_resp">
            0
        </div>
        <div class="parrrafoEstadistica">
            clientes
        </div>
        <hr class="hrEstadisticas">

        <div class="numEstadisticas" id="ctas_impactadas_resp">
            0
        </div>
        <div class="parrrafoEstadistica">
            cuentas impactadas
        </div>
        <hr class="hrEstadisticas">

        <div class="numEstadisticas" id="ahorros_impuestos_resp">
            0
        </div>
        <div class="parrrafoEstadistica">
            ahorrados en impuestos
        </div>
        <hr class="hrEstadisticas">

    </div> 

    <div class="fondoBlack estadisticas_desktop">
        <div class="parte_izq_section3">
            <div class="titulo_section3">
                Conoce LIBERFY
            </div>
        </div>

        <div class="parte_der_section3">
                <div class="izq_inter">
                            <div class="numEstadisticas" id="cant_clientes">
                                0
                            </div>
                            <div class="parrrafoEstadistica">
                                clientes
                            </div>
                            <hr class="hrEstadisticas">

                            <div class="numEstadisticas" id="ctas_impactadas">
                                        0
                            </div>
                            <p class="parrrafoEstadistica">
                                cuentas impactadas
                                <hr class="hrEstadisticas">
                            </p>
                            <div class="numEstadisticas" id="ahorros_impuestos">
                                0
                            </div>
                            <p class="parrrafoEstadistica">
                                ahorrados en impuestos
                                <hr class="hrEstadisticas">
                            </p>
                </div>

                <div class="der_inter">
                            <div class="numEstadisticas" id="prof_equipo">
                                0
                            </div>
                            <p class="parrrafoEstadistica">
                                profesionales
                                <hr class="hrEstadisticas">
                            </p>
                            <div class="numEstadisticas" id="seguidores">
                                0
                            </div>
                            <p class="parrrafoEstadistica">
                                seguidores
                                <hr class="hrEstadisticas">
                            </p>
                </div>
        </div>
    </div>
    
</section> 

<script>
    let cant_clientes   = 0
    let ctas_impactadas = 0 
    let ahorros_imp     = 0
    let pro_team        = 0 
    let seguidores      = 0  

    let sections = document.querySelectorAll('seccion3');
    window.addEventListener('scroll', onScroll);

    function onScroll() {  
        console.log(sections.length)
        for (let i = 0; i < sections.length; i++) { 
            console.log(sections[i])
            let section = sections[i];
        
            if (isSectionVisible(section)) {
                console.log('La sección ' + section.id + ' está visible');
            }
        }
    }
   

    let interval_cliente = setInterval(() => {
            cant_clientes++ 
            document.getElementById("cant_clientes").innerHTML = '+'+cant_clientes 
            document.getElementById("cant_clientes_resp").innerHTML = '+'+cant_clientes
        
            if(cant_clientes == 900) {
                clearInterval(interval_cliente)
            }
    }, 0010);

    let interval_ctas_impactadas = setInterval(() => {
            ctas_impactadas++ 

            document.getElementById("ctas_impactadas").innerHTML = '+'+ctas_impactadas+' K' 
            document.getElementById("ctas_impactadas_resp").innerHTML = '+'+ctas_impactadas+' K'
        
            if(ctas_impactadas == 200) {
                clearInterval(interval_ctas_impactadas)
            }
    }, 0040)

    let interval_ahorros_imp = setInterval(() => {
            ahorros_imp++ 

            document.getElementById("ahorros_impuestos").innerHTML = '+'+ahorros_imp+'M €' 
            document.getElementById("ahorros_impuestos_resp").innerHTML = '+'+ahorros_imp+'M €'
        
            if(ahorros_imp == 5) {
                clearInterval(interval_ahorros_imp)
            }
    }, 1000) 

    let interval_prof_team = setInterval(() => {
            pro_team++ 

            document.getElementById("prof_equipo").innerHTML = '+'+pro_team
            document.getElementById("prof_equipo_resp").innerHTML = '+'+pro_team
        
            if(pro_team == 25) {
                clearInterval(interval_prof_team)
            }
    }, 0500)  

    let interval_seguidores = setInterval(() => {
            seguidores++ 

            document.getElementById("seguidores").innerHTML = '+'+seguidores+' K'
            document.getElementById("seguidores_resp").innerHTML = '+'+seguidores+' K'
        
            if(seguidores == 10) {
                clearInterval(interval_seguidores)
            }
    }, 0700) 

</script>