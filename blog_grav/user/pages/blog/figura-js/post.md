---
title: 'Figura JS'
date: '03-06-2019 17:30'
metadata:
    'Graficación y Animación': gya
    Blog: blog
    Grav: grav
    JS: javascript
taxonomy:
    tag:
        - blog
        - gya
        - grav
        - js
        - figura
        - tarea
layout: post
description: 'Figura realizada con JavaScript'
markdown_extra: true
---

Figura planteada como actividad de clases en la explicación de javascript, realizada con el fin de comprender el lenguaje de programación.

<div><label for="valor"><strong>Ingrese un número:</strong></label><br><input type="text"id="valor"style="width:150px"onkeyup="myFunction()"><br><br><p><code id="figura"class="fig"></code></p></div><script type="text/javascript">function myFunction(){var max=document.getElementById("valor").value;var dato=parseInt(max);if(Number.isInteger(dato)){var filas,columnas;var cadena="";for (filas=0;filas<max;filas++){for(columnas=0;columnas<=filas;columnas++){cadena=cadena+"*";}cadena=cadena+"<br>";}for (filas=0;filas<max;filas++){for(columnas=0;columnas<max;columnas++){if(columnas<=filas){cadena=cadena+"&nbsp";}else{cadena=cadena+"*";}}cadena=cadena+"<br>";}document.getElementById("figura").innerHTML=cadena;}else{if(!(max=="")){alert("El dato ingresado no es un numero entero");document.getElementById("valor").value=" ";}else{document.getElementById("figura").innerHTML=" ";}}}</script>