<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>TutorVirtual</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<div id="area-cabecalho">
		
		<div id="area-logo">
			<h1>Tutor<span class="branco">Virtual</span></h1>
			
			
		</div>
		<div id="area-menu">
                     <a href="index.php">Home</a>
                     <a href="./grid/manual.html">Manual Interativo</a>
                     <?php
                     session_start();
                     // Verifica se o usuário é um administrador
                     if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === true) {
                          echo '<a href="./grid/dashboard.php">Relatório</a>';
                      }
                     ?>
                     <a href="HTML/Login.html">Login</a>
                </div>

	</div>

	<div id="area-principal">

		<div class="postagem">
			<h2>Tudo sobre nos</h2>
			<span class="data-postagem">postado 22 novembro 2023</span>
			<img width="720px" src="imagens/imagem2.jpg">
			<p>
				"A nossa empresa é especializada no desenvolvimento de páginas web e foi contratada para executar este projeto. Apesar de sua simplicidade, encontramos algumas dificuldades. No entanto, entregamos um produto de qualidade, organizado e de fácil navegação, especialmente para aqueles que enfrentam desafios na elaboração de seus trabalhos acadêmicos."
			</p>
			<a href="">Leia mais</a>
		</div>
		
		
		<div id="rodape">
			Todos Direitos reservados a IMVTech.
	       <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyB_TrRTE4hyzYxXnwglllC00s7tdNOpBRk",
    authDomain: "tutrovirtual.firebaseapp.com",
    projectId: "tutrovirtual",
    storageBucket: "tutrovirtual.appspot.com",
    messagingSenderId: "343352418222",
    appId: "1:343352418222:web:6668c9bb9f2970aa9b323f",
    measurementId: "G-Q97QH1HF75"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
		</div>
	</div>
</body>
</html>