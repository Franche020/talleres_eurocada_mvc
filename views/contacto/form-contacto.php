
        

            <div class="entrada">
                <label for="nombre">Nombre</label>
                <input type="text" name="contacto[nombre]" id="nombre" placeholder="Escribe aquí tu Nombre" required>
            </div>
            <div class="entrada">
                <label for="apellido">Apellido</label>
                <input type="text" name="contacto[apellido]" id="apellido" placeholder="Escribe aquí tu Apellido" required>
            </div>
            <div class="entrada">
                <label for="email">Email</label>
                <input type="email" name="contacto[email]" id="email" placeholder="Escribe aquí tu Email" required>
            </div>
            <div class="entrada">
                <label for="telefono">Teléfono</label>
                <input type="tel" name="contacto[telefono]" id="telefono" placeholder="Escribe aquí tu Teléfono" required>
            </div>
            <div class="entrada radio">
                <label>Tipo de contacto</label>
                <div>
                    <input type="radio" id="contacto_telefono" name="contacto[contacto]" value="telefono"required>
                    <label for="contacto_telefono">Teléfono</label>
                </div>
                <div>
                    <input type="radio" id="contacto_email" name="contacto[contacto]" value="email"required>
                    <label for="contacto_email">Email</label>
                </div>
                <div class="g-recaptcha" data-sitekey="6LccbzUoAAAAAO5fly3GxF-xSO8cEfecKyirozIV" data-callback="enabledSubmit"></div>
                <script>

                        // Detectar scroll en ventana
                        window.addEventListener('scroll', () => {

                        // Obtener posición del div reCAPTCHA
                        const recaptchaPosition = document.querySelector('.g-recaptcha').getBoundingClientRect().top;
                        
                        // Obtener posición actual de scroll
                        const screenPosition = window.innerHeight + window.scrollY;

                        // Si se llegó a la altura del reCAPTCHA
                        if (screenPosition >= recaptchaPosition) {

                            // Cargar script de reCAPTCHA
                            loadRecaptchaScript();

                        }
                        
                        })

                        // Carga el script  
                        function loadRecaptchaScript() {

                        const script = document.createElement('script');
                        script.src = 'https://www.google.com/recaptcha/api.js';
                        script.async = true;
                        script.defer = true;
                        document.head.appendChild(script);
                        
                        }
                    </script>
            </div>