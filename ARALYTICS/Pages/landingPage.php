<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ARALYTICS</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Google Font: Jaro (400) -->
	<link href="https://fonts.googleapis.com/css2?family=Jaro:wght@400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body class="bg-gray-100 min-h-screen">
	<!-- Header -->
	<header class="w-full flex justify-center mt-6">
		<nav class="bg-white/90 backdrop-blur-sm rounded-full shadow-md px-10 py-3 flex items-center gap-12">
			<a href="#" class="text-lg font-extrabold tracking-wider text-gray-800 hover:text-gray-900">HOME</a>
			<a href="#" class="text-lg font-extrabold tracking-wider text-gray-800 hover:text-gray-900">ABOUT</a>
			<a href="#" class="text-lg font-extrabold tracking-wider text-gray-800 hover:text-gray-900">CONTACT</a>
		</nav>
	</header>
	<!-- Brand and Login -->
	<div class="absolute top-4 left-6">
		<div class="font-['Jaro',sans-serif] font-normal text-[48px] leading-none text-black">ARALYTICS</div>
	</div>
	<div class="absolute top-4 right-6 z-20">
		<a href="#" id="login-btn" class="inline-flex items-center gap-4 bg-gradient-to-r from-[#0b4bd6] to-[#001f9f] text-white px-5 py-3 rounded-lg shadow-md hover:opacity-95">
			<span class="font-semibold tracking-wider text-lg">LOGIN</span>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" /></svg>
		</a>
	</div>
	<!-- Main Content -->
	<main class="flex flex-col md:flex-row items-center justify-between p-8 gap-8 min-h-[80vh]">
		<!-- Left: Hero Text -->
		<div class="w-full md:w-[40%] max-w-2xl text-left p-0">
			<h1 class="font-['Jaro',sans-serif] font-normal text-[2.5rem] md:text-[3.5rem] leading-tight text-[#f57f17] drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)]">Smarter Reviews for</h1>
			<h2 class="font-['Jaro',sans-serif] font-normal text-[2.5rem] md:text-[3.5rem] leading-tight text-[#102f8c] drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)]">Smarter Students.</h2>
			<p class="mt-4 text-lg text-gray-800 max-w-lg font-[Arial,Helvetica,sans-serif] font-normal">A platform that transforms study materials into interactive, personalized learning experiences.</p>
			<a href="#" class="inline-block mt-8 px-6 py-3 bg-[#102f8c] text-white font-bold rounded-lg shadow hover:bg-[#0b4bd6] transition">LEARN NOW</a>
		</div>
		<!-- Right: Robot Mascot -->
		<div class="relative w-full md:w-[45%] flex items-center justify-end z-10">
			<!-- Speech bubble -->
			<div class="speech-bubble absolute left-1/3 -translate-x-1/2 -translate-y-[120%] mb-20 bg-white text-black rounded-md shadow-md text-center px-3 py-2 min-w-[8rem] max-w-[12rem]">
				<div class="bubble-title text-sm font-bold uppercase tracking-wide">Hi! I'm ARA</div>
				<div class="bubble-sub text-xs mt-1">your learning buddy!</div>
			</div>
			<!-- Robot image -->
			<img src="../img/robot.png" alt="Robot" class="w-[340px] md:w-[420px] max-w-full h-auto drop-shadow-xl" />
        </div>
	</main>
    <!-- Footer with angled right edge -->
<footer class="relative w-full h-24">
	<div class="absolute inset-0 h-full w-full bg-[#1800c9]"> 
		<svg class="absolute right-0 bottom-0 h-full" width="180" height="96" viewBox="0 0 180 96" fill="none" xmlns="http://www.w3.org/2000/svg">
			<polygon points="0,0 180,0 180,96 120,96" fill="#1800c9" />
		</svg>
	</div>
		<div class="fixed bottom-0 right-0 w-[300px] h-[300px] z-0 pointer-events-none">
			<svg
				viewBox="0 0 300 300"
				xmlns="http://www.w3.org/2000/svg"
				class="w-full h-full"
				preserveAspectRatio="none"
			>
				<path
					d="M300,0 Q150,300 0,300 L300,300 Z"
					fill="#1800c9"
				/>
			</svg>
		</div>
</footer>
</body>
</html>
