<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Kevin Santos Band Home</title>
    <?php require_once 'header.php'; ?>
</head>

<body>
    <?php require_once 'head.php' ?>
    <div class="contenedor-video">
        <video width="100%" height="100%" autoplay class="video">
            <source src="Video/home.mp4" type="video/mp4">
            Your browser does not support the <code> video</code> tag.
        </video>
    </div>

    <div class="contenedor-biografia espacio-completo">
        <div class="biografia">
            <div class=" biografia-item ">
                <img class="responsive" src="Img/BIOGRAPHY.jpg" alt="" />
            </div>
            <div class="biografia-item">
                <h2>
                    BIOGRAFÍA
                </h2>
                <p style="text-align:left; color: black" class="espacio-medio">
                    Desde Ecuador, uno de los exponentes de la Bomba y la Marimba moderna que
                    con su música y particular sonoridad ha tenido incidencia en sectores culturales
                    aportando al nuevo sonido de la música urbana y músicas del mundo.
                    Cantante, músico, compositor con una variada trayectoria artística desde el año
                    2000 en los cuales ha desarrollado y representado la cultura afro ecuatoriana
                    proveniente del valle del chota y esmeraldas, tanto nacional como
                    internacionalmente.
                    <a href="#" onclick="vermas('mas'); return false;" id="mas">... [leer más]</a>
                </p>
                <p id="desplegar" style="display:none; text-align:left; color: black">
                    Cuando era pequeño tuvo la oportunidad de aprender a tocar
                    instrumentos afro ecuatorianos, en especial la marimba en una forma tradicional,
                    gracias a eso y con más conocimientos musicales en general hasta la actualidad ha
                    participado junto a grandes agrupaciones y artistas como Papá Roncón, Lindberg
                    Valencia, Rosa Huila, Las Tres Marías De Chalguayacu, Tadashi Maeda, Alberto
                    Caleris, Susana Baca, Alex Alvear, Benjamin Vanegas, Grupo Suena Marimba, Grupo
                    Improvisando, Yage Jazz, Karina Clavijo, Grupo Melanina, Karla Kanora, Fausto Miño,
                    Orquesta Sinfónica Nacional, Carlinhos Brown, Hugo Idrobo, Ubuntu, Swing
                    Original Monks, La Tunda, Bocapelo entre otros. Fue director musical del
                    reconocido “Grupo Ochún” del Palenke Afro Ecuatoriano “Casa Ochún” por varios
                    años.
                    <a href="#" onclick="vermas('menos'); return false;" id="menos">... [leer menos]</a>
                </p>
            </div>


        </div>

    </div>

    <div class="contenedor-biografia espacio-completo">
        <div class="biografia">
            <div class=" biografia-item ">
                <h2>
                    Kevin Santos Band
                    <br>
                </h2>
                <p style="text-align:left; color: black ; padding-left:10%">
                    Kevin Santos Band es un proyecto musical que nace en el año 2012, es el
                    resultado de la unión de la cultura Afro Choteña representada por la Bomba
                    del Chota, Afro Esmeraldeña representada por la Marimba del Pacífico y la
                    urbanidad quiteña en donde confluyen muchas expresiones culturales del
                    mundo.

                    La insaciable necesidad de crear música diversa y la gran absorción
                    de saberes le han permitido a Kevin Santos traer una propuesta sonora
                    particular donde en las composiciones e interpretaciones priman los ritmos
                    del género Marimba como Bambuco, Bunde, Andarele, Mapalé, Agua Bajo,
                    Currulao; y del género Bomba como Bomba Sobada, Bomba Rítmica, Bomba
                    Corrida, Correté, Pike. Sonoridades tradicionales que interactúan con
                    elementos de la música Electrónica, Hip Hop, Rock, Pop, Reggae, Reggaetón,
                    Salsa, Funk entre otros géneros musicales que se hacen presentes marcando
                    un nuevo sonido urbano con su música y letras que se pueden apreciar en las
                    distintas producciones y presentaciones en vivo.


                </p>

            </div>
            <div class="biografia-item">
                <img class="responsive" src="Img/KevinSantosBand.jpg" alt="" />
            </div>

        </div>
    </div>
    <?php require_once 'footer.php' ?>
</body>

</html>