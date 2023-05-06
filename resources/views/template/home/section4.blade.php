<sectio>
    <div class="asesoria">
            <div class="titulo_asesoria">
            Mira... ¡así de fácil!
            </div>
            <div class="stack_botones" data-aos="fade-down" >
                
                <div class="tarjeta_botones">
                        {{-- <img src="assets/img/home/Group30.png" id="inscribete"  onmouseover="inscribete()"/> --}}
                        <img src="assets/img/home/inscribite.gif"  id="inscribete_gif"  width="58" height="58"    />
                        <div class="texto_botones">
                            Inscríbite
                        </div>
                </div>
                <div class="tarjeta_botones">
                    {{-- <img src="assets/img/home/Group30.png" id="gestor"  onmouseover="gestor()"/> --}}
                    <img src="assets/img/home/gestor.gif"  id="gestor_gif"  width="58" height="58"   />
                    <div class="texto_botones">
                        Conoce a tu gestor
                    </div>
                </div>
                <div class="tarjeta_botones">
                    {{-- <img src="assets/img/home/Group30.png" id="subefacturas"  onmouseover="subefacturas()"/> --}}
                    <img src="assets/img/home/subefacturas.gif"  id="subefacturas_gif"  width="58" height="58"   />
                    <div class="texto_botones">
                       Sub facturas en la App
                    </div>
                </div>
                <div class="tarjeta_botones">
                    {{-- <img src="assets/img/home/Group30.png" id="completa" onmouseover="completa()" /> --}}
                    <img src="assets/img/home/completa.gif"  id="completa_gif"  width="58" height="58"  />
                    <div class="texto_botones">
                       Completa la información
                    </div>
                </div> 

                <div class="tarjeta_botones">
                   {{--  <img src="assets/img/home/Group30.png" id="liberfy" onmouseover="liberfy()" /> --}}
                    <img src="assets/img/home/liberfy.gif"  id="liberfy_gif"  width="58" height="58"   />
                    <div class="texto_botones">
                      Gestión Liberfy
                    </div>
                </div> 
                <div class="tarjeta_botones">
                   {{--  <img src="assets/img/home/Group30.png" id="resultados" onmouseover="resultados()" /> --}}
                    <img src="assets/img/home/resultados.gif"  id="resultados_gif"  width="58" height="58"   />
                    <div class="texto_botones">
                      Encuentra tus resultados
                    </div>
                </div>
                {{-- <button type="button" class="botonAsesoria" >
                    <div class="tit_boton" >Inscribete</div>
                </button>
                <button type="button" class="botonAsesoria" >
                    <div class="tit_boton" >Conoce a tu gestor</div>
                </button> 
                <button type="button" class="botonAsesoria" >
                    <div class="tit_boton" >Sube tus facturas en la App</div>
                </button>
                <button type="button" class="botonAsesoria" >
                    <div class="tit_boton" >Completa la información</div>
                </button>
                <button type="button" class="botonAsesoria" >
                    <div class="tit_boton" >Gestión Liberfy</div>
                </button>
                <button type="button" class="botonAsesoria" >
                    <div class="tit_boton" >Encuentra tus resultados</div>
                </button> --}}
            </div>
            <div class="boton_sectioon">
                <button type="button" class="boton_llamada_asesoria" onclick="agendaLlamada()" >
                    <label class="texto-boton-llamada">Agenda una llamada</label>
                </button>
            </div>

            <div class="titulo_cliente">
                Nuestros Clientes
            </div> 
            <div class="stack_clientes" data-aos="zoom-in">
                    <img src="assets/img/home/clientes/rentaya.png" class="img_clientes" />
                    <img src="assets/img/home/clientes/voflip.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/escribelo.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/inteligentes.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/fba.jpg" class="img_clientes" /> 
                    <img src="assets/img/home/clientes/arrendamos.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/antidoto.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/esic.png" class="img_clientes" />
                    <img src="assets/img/home/clientes/lvlty.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/heroes.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/automatizature.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/esencia.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/fbaacademy.jpg" class="img_clientes" />
                    <img src="assets/img/home/clientes/desanpedro.jpg" class="img_clientes" />
            </div>
    </div>
</sectio>
<script>
    /* inscribete */
    function inscribete() {
        document.getElementById('inscribete').style.display="none";
        document.getElementById('inscribete_gif').style.display="block"; 
        document.getElementById('inscribete_gif').style.marginLeft="auto"
        document.getElementById('inscribete_gif').style.marginRight="auto"
    }

    function inscribeteOut() {
        document.getElementById('inscribete_gif').style.display="none";
        document.getElementById('inscribete').style.display="block"; 
        document.getElementById('inscribete').style.marginLeft="auto"
        document.getElementById('inscribete').style.marginRight="auto"
    }

    /* gestor  */
    function gestor() {
        document.getElementById('gestor').style.display="none";
        document.getElementById('gestor_gif').style.display="block"; 
        document.getElementById('gestor_gif').style.marginLeft="auto"
        document.getElementById('gestor_gif').style.marginRight="auto"
    }

    function gestorOut() {
        document.getElementById('gestor_gif').style.display="none";
        document.getElementById('gestor').style.display="block"; 
        document.getElementById('gestor').style.marginLeft="auto"
        document.getElementById('gestor').style.marginRight="auto"
    }
    /* sube factura */
    function subefacturas() {
        document.getElementById('subefacturas').style.display="none";
        document.getElementById('subefacturas_gif').style.display="block"; 
        document.getElementById('subefacturas_gif').style.marginLeft="auto"
        document.getElementById('subefacturas_gif').style.marginRight="auto"
    }

    function subefacturasOut() {
        document.getElementById('subefacturas_gif').style.display="none";
        document.getElementById('subefacturas').style.display="block"; 
        document.getElementById('subefacturas').style.marginLeft="auto"
        document.getElementById('subefacturas').style.marginRight="auto"
    }

    /* completa información */
    function completa() {
        document.getElementById('completa').style.display="none";
        document.getElementById('completa_gif').style.display="block"; 
        document.getElementById('completa_gif').style.marginLeft="auto"
        document.getElementById('completa_gif').style.marginRight="auto"
    }

    function completaOut() {
        document.getElementById('completa_gif').style.display="none";
        document.getElementById('completa').style.display="block"; 
        document.getElementById('completa').style.marginLeft="auto"
        document.getElementById('completa').style.marginRight="auto"
    }
    
    /* liberfy */
    function liberfy() {
        document.getElementById('liberfy').style.display="none";
        document.getElementById('liberfy_gif').style.display="block"; 
        document.getElementById('liberfy_gif').style.marginLeft="auto"
        document.getElementById('liberfy_gif').style.marginRight="auto"
    }

    function liberfyOut() {
        document.getElementById('liberfy_gif').style.display="none";
        document.getElementById('liberfy').style.display="block"; 
        document.getElementById('liberfy').style.marginLeft="auto"
        document.getElementById('liberfy').style.marginRight="auto"
    } 

    /* resultadps */ 
    function resultados() {
        document.getElementById('resultados').style.display="none";
        document.getElementById('resultados_gif').style.display="block"; 
        document.getElementById('resultados_gif').style.marginLeft="auto"
        document.getElementById('resultados_gif').style.marginRight="auto"
    }

    function resultadosOut() {
        document.getElementById('resultados_gif').style.display="none";
        document.getElementById('resultados').style.display="block"; 
        document.getElementById('resultados').style.marginLeft="auto"
        document.getElementById('resultados').style.marginRight="auto"
    } 
</script>