<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Hackeado</title>
<style>
    body {
        margin: 0;
        background: black;
        overflow: hidden;
        font-family: monospace;
        color: #00ff00;
    }

    canvas {
        position: absolute;
        top: 0;
        left: 0;
    }

    .img-glitch {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 260px;
        animation: glitchCrazy 0.1s infinite;
    }

    .img-glitch::before,
    .img-glitch::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("assets/img/dd.png");
        background-size: cover;
        opacity: 0.7;
    }

    .img-glitch::before {
        left: 3px;
        animation: glitchTop 0.1s infinite;
    }

    .img-glitch::after {
        left: -3px;
        animation: glitchBottom 0.1s infinite;
    }

    @keyframes glitchCrazy {
        0% { transform: translate(-50%, -50%) skew(0deg); }
        20% { transform: translate(-48%, -52%) skew(10deg); }
        40% { transform: translate(-52%, -48%) skew(-10deg); }
        60% { transform: translate(-49%, -51%) skew(5deg); }
        80% { transform: translate(-51%, -49%) skew(-5deg); }
        100% { transform: translate(-50%, -50%) skew(0deg); }
    }

    @keyframes glitchTop {
        0% { clip-path: inset(0 0 80% 0); }
        50% { clip-path: inset(10% 0 60% 0); }
        100% { clip-path: inset(0 0 80% 0); }
    }

    @keyframes glitchBottom {
        0% { clip-path: inset(60% 0 0 0); }
        50% { clip-path: inset(40% 0 10% 0); }
        100% { clip-path: inset(60% 0 0 0); }
    }

    .glitch {
        position: absolute;
        bottom: 50px;
        width: 100%;
        text-align: center;
        font-size: 40px;
        font-weight: bold;
        animation: glitchText 0.2s infinite;
    }

    @keyframes glitchText {
        0% { text-shadow: 3px 3px red; }
        25% { text-shadow: -3px -3px blue; }
        50% { text-shadow: 3px -3px lime; }
        75% { text-shadow: -3px 3px red; }
        100% { text-shadow: 3px 3px blue; }
    }
</style>
</head>

<body>

<canvas id="matrix"></canvas>

<img src="assets/img/gh.png" class="img-glitch">

<div class="glitch">
     vØ¢ë ƒØ¡ hÅçk€ådØ   HAHAHAHAHHA
</div>

<div style="position:absolute; top:70%; left:50%; transform:translate(-50%,-50%); z-index:9999; text-align:center;">

    <div id="virusText" style="margin-bottom:10px; font-size:18px;">
        Instalação de vírus: 0%
    </div>

    <div style="width:300px; height:20px; border:1px solid #00ff00;">
        <div id="progresso" style="height:100%; width:0%; background:#00ff00;"></div>
    </div>

</div>

<script>
    let resposta = confirm("⚠️ SISTEMA COMPROMETIDO ⚠️ Deseja continuar?");
    if (!resposta) {
        window.location.href = "forms.php";
    }

    const canvas = document.getElementById("matrix");
    const ctx = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const letters = "01#$%&@!<>/\\[]{}+=-*ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const fontSize = 14;
    const columns = canvas.width / fontSize;

    const drops = [];
    for (let x = 0; x < columns; x++) {
        drops[x] = 1;
    }

    let particles = [];

    function createExplosion() {
        for (let i = 0; i < 50; i++) {
            particles.push({
                x: canvas.width / 2,
                y: canvas.height / 2,
                life: 100
            });
        }
    }

    function draw() {
        ctx.fillStyle = "rgba(0, 0, 0, 0.08)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.fillStyle = "#0F0";
        ctx.font = fontSize + "px monospace";

        for (let i = 0; i < drops.length; i++) {
            const text = letters.charAt(Math.floor(Math.random() * letters.length));
            ctx.fillText(text, i * fontSize, drops[i] * fontSize);

            if (drops[i] * fontSize > canvas.height && Math.random() > 0.97) {
                drops[i] = 0;
            }
            drops[i]++;
        }

        particles.forEach((p, index) => {
            ctx.fillText(p.char, p.x, p.y);
            p.x += p.speedX;
            p.y += p.speedY;
            p.life--;

            if (p.life <= 0) {
                particles.splice(index, 1);
            }
        });
    }

    setInterval(createExplosion, 500);
    setInterval(draw, 30);

    const palavras = ["HACKED", "ERROR", "SYSTEM FAIL", "ACCESS DENIED", "666","67", "FEIJAO COM FARINHA", "INDIA", "ACCESS DENIED", "AAAAA"];

    function criarDVD() {
        const el = document.createElement("div");
        el.innerText = palavras[Math.floor(Math.random() * palavras.length)];

        el.style.position = "absolute";
        el.style.color = "#00ff00";
        el.style.fontSize = "18px";

        let x = Math.random() * (window.innerWidth - 100);
        let y = Math.random() * (window.innerHeight - 30);
        let vx = (Math.random() * 4) + 2;
        let vy = (Math.random() * 4) + 2;

        document.body.appendChild(el);

        function mover() {
            x += vx;
            y += vy;

            if (x <= 0 || x >= window.innerWidth - 100) vx *= -1;
            if (y <= 0 || y >= window.innerHeight - 30) vy *= -1;

            el.style.left = x + "px";
            el.style.top = y + "px";

            requestAnimationFrame(mover);
        }

        mover();
    }

    for (let i = 0; i < 10; i++) {
        criarDVD();
    }

    // PROGRESSO
    let progresso = 0;
    const barra = document.getElementById("progresso");
    const texto = document.getElementById("virusText");

    function atualizarProgresso() {
        if (progresso < 100) {
            progresso += Math.random() * 5;
            if (progresso > 100) progresso = 100;

            barra.style.width = progresso + "%";
            texto.innerText = "Instalação de vírus: " + Math.floor(progresso) + "%";
        } else {
            baixarArquivo();
            clearInterval(loop);
        }
    }

    let loop = setInterval(atualizarProgresso, 200);
</script>

</body>
</html>