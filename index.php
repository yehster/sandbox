<!DOCTYPE html>
<script src="/sandbox/jquery-1.6.1.min.js" type="text/javascript"></script>
<script>
    
function draw(e)
{
    var x;
    var y;
    if (e.pageX || e.pageY) {
      x = e.pageX;
      y = e.pageY;
    }
    else {
      x = e.clientX + document.body.scrollLeft +
           document.documentElement.scrollLeft;
      y = e.clientY + document.body.scrollTop +
           document.documentElement.scrollTop;
    }
    x -= this.offsetLeft;
    y -= this.offsetTop;
    ctx = $('#testCanvas').get(0).getContext("2d");
//    ctx.fillRect (x, y, 1, 1);
    ctx.lineTo(x,y);
    ctx.stroke();
    $("#info").html("update:"+x+","+y);
}

function startDraw(e)
{
    var x;
    var y;
    if (e.pageX || e.pageY) {
      x = e.pageX;
      y = e.pageY;
    }
    else {
      x = e.clientX + document.body.scrollLeft +
           document.documentElement.scrollLeft;
      y = e.clientY + document.body.scrollTop +
           document.documentElement.scrollTop;
    }
    x -= this.offsetLeft;
    y -= this.offsetTop;

    ctx = $('#testCanvas').get(0).getContext("2d");
    ctx.fillStyle="black";
    ctx.strokeStyle="black";
    ctx.beginPath();
    ctx.moveTo(x,y);
    $("#info").html("yo"+x+","+y);
    $('#testCanvas').live("mousemove",draw);
}

function endDraw(e)
{
    var x;
    var y;
    if (e.pageX || e.pageY) {
      x = e.pageX;
      y = e.pageY;
    }
    else {
      x = e.clientX + document.body.scrollLeft +
           document.documentElement.scrollLeft;
      y = e.clientY + document.body.scrollTop +
           document.documentElement.scrollTop;
    }
    x -= this.offsetLeft;
    y -= this.offsetTop;

    ctx.lineTo(x,y);

    ctx = $('#testCanvas').get(0).getContext("2d");
    $("#info").html("done"+x+","+y);
    $('#testCanvas').die("mousemove");

}
function initialize()
{
    //ctx = document.getElementById('testCanvas').getContext("2d");
    
    

    
    $("#testCanvas").mousedown(startDraw);
    $("#testCanvas").mouseup(endDraw);

}

window.onload=initialize;
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <canvas height="600" width="600" id="testCanvas">
            
        </canvas>
        <text id="info"></text>
    </body>
</html>
