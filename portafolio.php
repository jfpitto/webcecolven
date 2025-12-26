<?php 
$archivo = "PORTAFOLIO.pdf"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portafolio</title>

<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #0f1c2e;
        font-family: 'Poppins', Arial, sans-serif;
        overflow: hidden;
    }

    body {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    #visor-container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    iframe {
        width: 95%;
        height: 95%;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        border: none;
    }
</style>
</head>

<body oncontextmenu="return false">
<div id="visor-container">
    <iframe 
        src="pdfjs/web/viewer.html?file=../../<?php echo $archivo; ?>#toolbar=0&navpanes=0&scrollbar=0">
    </iframe>
</div>
</body>
</html>
