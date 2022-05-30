﻿
<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>

    Considere el siguiente problema:

    Escriba un programa corto donde se tenga un array de enteros como parámetro de entrada y otro como resultado de salida.
    Se necesita calcular las siguientes operaciones.
    
    Clasifica :
    Números positivos.
    Números negativos.
    Números igual a 0.
    
    Calcula el número de elementos de cada clasificación, dividido por el número del array.
    Represente el número de cada operación con un redondeo de 4 decimales.
    Devuelva un array de salida con cada operación en el siguiente orden [Npositivos, Nnegativos, Nzero]
    
    Se atiente al siguiente ejemplo:
    
    Array: [1, 2 ,-8, -2, 0, 9]
    
    Números positivos = 1, 2, 9
    Números negativos = -8, -2
    Números igual a 0 = 0
    
    Resultado: [(Npositivios/Array.size), (Nnegativos/Array.size), (Nzero/Array.size)]


    En la carpeta 'src/Numbers.php' se encuentra el fichero con la definición de nuestro método vacío.
    En la carpeta 'test/NumbersTest.php' se encuentra el fichero con la suite de test.

    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    A continuación se muestran los resultado que se tienen que obtener tras desarrollar el algoritmo.
    
    [Suite Tests]

    PHPUnit 7.3.2 by Sebastian Bergmann and contributors.

    Runtime:       PHP 7.3.27
    Configuration: ./101-tj-php/phpunit.xml

    Time: 00:00.037, Memory: 6.30 MB

    OK (10 tests, 10 assertions)
    Process finished with exit code 0



## Referencias

* [Tutorial - Testing Automatizado](https://github.com/GeeksHubsAcademy/2020-js-vanilla-testing-FFFF/blob/master/README.md)