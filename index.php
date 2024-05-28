<?php 
    include 'db.php';
    include 'header.php';
?> 
    <section class="hero">
        <div class="contenido-hero">
            <h2>Formación</h2>
        <div class="informacion">
            <p>Aprende</p>
        </div>
        <a class="boton" href="tutoriales.php">Tutoriales</a>
    </div>
    </section>
    <main class="contenedor sombra">
        <h2>Mi contenido</h2>
    <div class="micontenido">
                    <section class="contenido" >
                        <h3>Información</h3>
                        <div class="icono">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="54" height="54" viewBox="0 0 24 24" stroke-width="1.5" stroke="#03053a" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 9h.01" />
                                <path d="M11 12h1v4h1" />
                              </svg>
                        </div>
                <p>Información actualizada.</p>
            </section>
            <section class="contenido" >
                <h3>Tutoriales</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="54" height="54" viewBox="0 0 24 24" stroke-width="1.5" stroke="#03053a" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                        <path d="M13 8l2 0" />
                        <path d="M13 12l2 0" />
                      </svg>
                </div>
                <p>Tutoriales para mejorar tus habilidades.</p>
            </section>
            <section class="contenido" >
                <h3>Guías</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-guide" width="54" height="54" viewBox="0 0 24 24" stroke-width="1.5" stroke="#03053a" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M7 19h3a2 2 0 0 0 2 -2v-8a2 2 0 0 1 2 -2h7" />
                        <path d="M18 4l3 3l-3 3" />
                      </svg>
                </div>
                <p>Guías por si estás empezando.</p>
            </section>
            </div>homePage
        <section>
            <h2>Contacto</h2>
            <form class="formulario" action="">
                <fieldset>
                    <legend>Cóntactame</legend>
                    <div class="contenedor-campos">
                    <div class="campo">
                        <div>
                            <label for="">Nombre</label>
                            <input class="input-text" type="text" name="nombre" placeholder="Tu nombre">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Teléfono</label>
                            <input class="input-text" type="tel" name="teléfono" placeholder="Tu teléfono">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Correo</label>
                            <input class="input-text" type="email" name="correo" placeholder="Tu correo">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Mensaje</label>
                            <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                </div><!--contenedor campor-->
                </fieldset>
            </form>
        </section>
    </main>
<?php
    include 'footer.php';
?>