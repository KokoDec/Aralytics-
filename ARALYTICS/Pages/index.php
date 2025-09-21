<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARALYTICS Footer Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font: Jaro (400) -->
    <link href="https://fonts.googleapis.com/css2?family=Jaro:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-between">
    <!-- Top-left brand label -->
    <div class="absolute top-4 left-6">
        <div class="brand-label font-['Jaro',sans-serif] font-normal text-[48px] leading-none text-black">ARALYTICS</div>
    </div>
    <!-- Top-right login button with door image -->
    <div class="absolute top-4 right-6">
        <a href="#" class="inline-flex items-center gap-4 bg-gradient-to-r from-[#0b4bd6] to-[#001f9f] text-white px-5 py-3 rounded-lg shadow-md hover:opacity-95">
            <span class="font-semibold tracking-wider text-lg">LOGIN</span>
            <img src="../img/door.png" alt="door" class="h-7 w-7 object-contain" />
        </a>
    </div>
     
    <!-- Main content here -->
    <main class="flex-grow flex items-center justify-between p-8 gap-8">
        <!-- Left column: hero heading (static, left side) -->
    <div class="w-[40%] max-w-2xl text-left p-0 -translate-y-44">
            <h1 class="font-['Jaro',sans-serif] font-normal text-[3.5rem] leading-tight text-[#f57f17] drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)]">Smarter Reviews for</h1>
            <h2 class="font-['Jaro',sans-serif] font-normal text-[3.5rem] leading-tight text-[#102f8c] drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)]">Smarter Students.</h2>
            <p class="mt-4 text-lg text-gray-800 max-w-lg font-[Arial,Helvetica,sans-serif] font-normal">A platform that transforms study materials into interactive, personalized learning experiences.</p>
        </div>
        <!-- Right column: robot (align center to line up with hero heading) -->
        <div class="relative w-[45%] flex items-center justify-end">
            <!-- Speech bubble -->
            <div class="speech-bubble absolute left-[35%] transform -translate-x-1/2 -translate-y-[420%] mb-6 bg-white text-black rounded-md shadow-md text-center px-3 py-2 min-w-[8rem] max-w-[12rem] [@media(min-width:375px)and(max-width:425px)]:-translate-y-[180%]">
                <div class="bubble-title text-sm font-bold uppercase tracking-wide">Hi! I'm ARA</div>
                <div class="bubble-sub text-xs mt-1">your learning buddy!</div>
                <!-- tail (keeps attached when bubble moves) -->
                <span class="speech-tail absolute left-1/2 -translate-x-1/2 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-white bottom-[-8px]"></span>
            </div>
            <img src="../img/robot.png" alt="Robot" class="robot-img max-w-full h-auto w-[40rem] scale-x-[-1] translate-x-[-2rem]" />
        </div>
    </main>
    <!-- Footer -->
    <div class="absolute left-0 right-0 flex items-center justify-center [clip-path:polygon(100%_42%,_85%_100%,_100%_100%)] [@media(min-width:375px)and(max-width:425px)]:[clip-path:none] bg-[#1C2F8C]" style="top:calc(100% - 80rem); height:80rem; z-index:10; padding:0; overflow:visible;">
            <div class="flex items-center justify-center gap-8 w-full">
=
            </div>
        </div>
    <footer class="absolute left-0 right-0 bottom-0 bg-[#1C2F8C] text-white py-0 h-40 overflow-visible">
          
    </footer>
</body>
</html>
