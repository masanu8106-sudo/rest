var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var carta = new Image();
var point = new Image();
carta.src = 'img/картаРФ.png';
point.src = 'img/point.png';
// directory = "<?php echo get_template_directory_uri()?>";
// carta.src = directory+'images/карта.png';
// point.src = directory+'images/point.png';
var x = 20, y = 20;
function drawload(){
    context.drawImage(carta,0,0);
    context.drawImage(point, x,y);
};
carta.onload = drawload;