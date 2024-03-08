<section id="calculator" class="container">

    <div class="tilte-section">
        <h4 class="title">Cotiza tu web</h4>
        <div id="percent" class="section-progress-bar">
            <div id="progress-bar">
                <div id="progress"></div>
            </div>
            <span id="progress-bar-percent">0%</span>
        </div>
    </div>

    <form id="form" action="../calculator.php" method="post">

        <div id="step1" class="container">
            <div class="section-form">
                <label for="sections">Cantidad de secciones</label>
                <select name="sections" id="sections" onchange="updateSectionsResult()">
                    <option value="2000">4</option>
                    <option value="2500">5</option>
                    <option value="3000">6</option>
                    <option value="3500">7</option>
                    <option value="4000">8</option>
                    <option value="4500">9</option>
                    <option value="5000">10</option>
                    <option value="5500">11</option>
                    <option value="6000">12</option>
                </select>
            </div>
            <p class="form-subtitle">Por ejemplo: Inicio, Quiénes somos, Servicio 1, Servicio 2, Contacto, etc.
            </p>
            <p class="form-price" id="sections-result"></p>

            <div class="section-form">

                <label for="sections">Cantidad de imágenes</label>
                <select name="images" id="images" onchange="updatedImagesResult()">
                    <option value="0">0-20</option>
                    <option value="200">21-30</option>
                    <option value="300">31-40</option>
                    <option value="400">41-50</option>
                </select>
            </div>
            <p class="form-subtitle">Imágenes de tu negocio, productos o servicios.
            </p>
            <p class="form-price" id="images-result"></p>

            <div class="next">
                <button type="button" onclick="nextStep()">Siguiente</button>
            </div>

        </div>


        <div id="step2" class="hidden container">
            <div class="section-form">
                <label for="wordpress">¿Quieres actualizar el contenido por tu cuenta?</label>
                <select name="wordpress" id="wordpress" onchange="updatedWordpress()">
                    <option value="0">No</option>
                    <option value="800">Si</option>
                </select>
            </div>
            <p class="form-subtitle">Se instala Wordpress.org y recibes una guía gratuita para que edites tu contenido.
            </p>
            <p id="wordpress-result" class="form-price"></p>

            <div class="section-form">
                <label for="contact-form">¿Quieres un formulario de contacto?</label>
                <select name="contact-form" id="contact-form" onchange="updateForm()">
                    <option value="0">No</option>
                    <option value="400">Si</option>
                </select>
            </div>
            <p class="form-subtitle">La web incluye botónes de contacto al correo electrónico y redes sociales.</p>
            <p id="total-contactos" class="form-price"></p>

            <div class="next">
                <button type="button" onclick="nextStep()">Siguiente</button>
            </div>
            <!-- <p id="total-result"></p> -->

        </div>

        <div id="step3" class="hidden container">
            <div class="section-form">
                <label for="dominio">¿Ya tienes un dominio para tu página web?</label>
                <select name="dominio" id="dominio" onchange="updateDominio()">
                    <option value="0">Ya tengo un dominio</option>
                    <option value="0">No, quiero comprarlo yo (recomendado)</option>
                    <option value="289">No, quiero un dominio.com anual</option>
                    <option value="279">No, quiero un dominio .com.mx anual</option>
                    <option value="721">No, quiero un dominio .mx anual</option>
                </select>
            </div>
            <p class="form-subtitle">El dominio es la dirección con la cual la gente podrá entrar a tu página web.
            </p>
            <p id="total-dominio" class="form-price"></p>

            <div class="section-form">
                <label for="host">¿Ya tienes un hospedaje para tu página web?</label>
                <select name="host" id="host" onchange="updateHost()">
                    <option value="0">Ya tengo mi hospedaje web</option>
                    <option value="0">No, quiero comprarlo yo (recomendado)</option>
                    <option value="791">No, quiero un hospedaje anual</option>
                </select>
                <div>
                    <p class="form-subtitle">El hospedaje web es donde se guardará tu página web para verse en Internet.
                    </p>
                    <p class="form-price" id="total-host"></p>
                </div>
            </div>

            <div class="next">
                <button type="button" onclick="nextStep()">Siguiente</button>
            </div>
            <!-- <p id="total-result"></p> -->

        </div>

        <div id="step4" class="hidden container">


            <div class="section-form">
                <label for="english">¿Quieres tu página en inglés?</label>
                <select name="english" id="english" onchange="updateEnglish()">
                    <option value="0">No</option>
                    <option value="3200">Si</option>
                </select>
            </div>
            <p class="form-subtitle">La traducción del texto debe ser proporcionada por ti.
            </p>
            <p class="form-price" id="total-english"></p>

            <div class="section-form">
                <label for="functions">¿Necesitas alguna otra funcionalidad?</label>
                <textarea class="funcions-textarea" name="functions" id="functions" placeholder="Comentanos" cols="30" rows="6"></textarea>
            </div>

            <div class="next">
                <button type="button" onclick="nextStep()">Siguiente</button>
            </div>
            <!-- <p id="total-result"></p> -->

        </div>

        <div id="step5" class="hidden">

            <div class="form-submit">
                <input class="input-form" type="text" name="name" placeholder="Nombre" id="name" required />

                <input type="text" name="email" placeholder="Correo" id="email" required />

                <textarea name="message" id="message" placeholder="Mensaje" cols="30" rows="10"></textarea>
                <div  class="btn-submit">
                    <input type="submit" value="ENVIAR">
                </div>
            </div>

        </div>

            <div id="success-message" style="display: none; color: green;">¡El formulario se ha enviado correctamente!</div>
            <div id="error-message" style="display: none; color: red;">Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.</div>
    </form>

    <div>
        <p id="total-result"></p>
    </div>


</section>

<script src="../assets/js/calculator.js"></script>