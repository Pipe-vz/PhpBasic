<!DOCTYPE html>
<html>
    <!-- 
            Desarrollador: Felipe velasquez Zapata
            Programa de formacion: Desarrollo Web con PHP
            Nombre de Evidencia: Taller “Uso de formularios para transferencia”
    -->
    <head>
        <title>Uso de formularios para transferencia</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <section>
            <div>
                <h1>Actividad de aprendizaje 4</h1><hr />
                <!-- Se crea una formulario con diferentes geometrías para
                calculo de áreas, con radio-Buton para escoger geometría,
                campos tipo numero para ingresar magnitudes y un boton para 
                realizar las operaciones deseadas.los datos se envian a una página
                distinta en la cual se procesan, el método usado es POST 
                y el argumento action tiene el valor "recibeDatos.php"
                que es la página que va a recibir y procesar los datos del
                formulario-->
                <form method="post" action="recibeDatos.php">
                    <h3>C&aacute;lculo de &Aacute;reas para diferente figuras geometricas</h3>

                    <p>A continuación se debe seleccionar alguna de las
                        diferentes figuras geometricas, a las cuales se les realizara
                        el calculo de area con base a los datos ingresados por el usuario.</p><br />
                    <p>
                        <label> Figura Geometrica</label><br /><br />
                        <label>
                            <input type="radio" name="figuraGeometrica" 
                                   value="cuadrado"> 
                            Cuadrado
                        </label>
                        <label>
                            <input type="radio" name="figuraGeometrica" 
                                   value="rectangulo"> 
                            Rect&aacute;ngulo
                        </label>
                        <label>
                            <input type="radio" name="figuraGeometrica" 
                                   value="triangulo"> 
                            Tri&aacute;ngulo
                        </label>
                        <label>
                            <input type="radio" name="figuraGeometrica" 
                                   value="circulo"> 
                            Circulo
                        </label>
                    </p>
                    <p> 
                        <label>
                            Base [mm]
                            <input type="number" name="base"
                                   placeholder="Base en mm"
                                   min="1"  > 
                        </label>
                    </p>
                    <p> 
                        <label>
                            Altura [mm]
                            <input type="number" name="altura"
                                   placeholder="Altura en mm" min="1"> 
                        </label>
                    </p>
                    <p> 
                        <label>
                            Radio [mm]
                            <input type="number" name="radio"
                                   placeholder="Radio en mm" min="1"> 
                            (Solo aplica para el Circulo)
                        </label>
                    </p>
                    <p>
                        <input type="submit" >
                    </p>
                </form>
            </div>
        </section>
    </body>
</html>