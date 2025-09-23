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
<body class="bg-gray-100 min-h-screen flex flex-col justify-between">
    <?php include __DIR__ . '/../template/header.html'; ?>
    <!-- Top-left brand label -->
    <div class="absolute top-4 left-6">
        <div class="brand-label font-['Jaro',sans-serif] font-normal text-[48px] leading-none text-black">ARALYTICS</div>
    </div>
    <!-- Top-right login button with door image -->
    <div class="absolute top-4 right-6">
        <a href="#" id="login-btn" class="inline-flex items-center gap-4 bg-gradient-to-r from-[#0b4bd6] to-[#001f9f] text-white px-5 py-3 rounded-lg shadow-md hover:opacity-95">
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
            <img src="../img/robot.png" alt="Robot" class="robot-img max-w-full h-auto w-[45rem] translate-x-[-2rem] translate-y-[1rem]" />
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

    <!-- Login Modal (Tailwind-only classes) -->
    <div id="login-modal" class="fixed inset-0 z-50 hidden">
        <!-- overlay -->
        <div id="login-overlay" class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <!-- modal box (centered) -->
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="relative modal-box bg-white rounded-2xl shadow-2xl w-full max-w-md mx-auto p-6 z-10">
                <button id="login-close" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-2xl leading-none">&times;</button>
                <!-- Immediate login form (shows when modal opens) -->
                <form id="login-form" action="#" method="post" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="login-email" type="email" name="email" required class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" />
                    </div>
                    <div class="mt-1">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative mt-1">
                            <input id="login-password" type="password" name="password" required class="w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="password" />
                            <div class="absolute inset-y-0 right-3 flex items-center">
                                <button type="button" id="password-toggle" aria-label="Show password" class="text-gray-500 hover:text-gray-800">
                                    <svg id="password-eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <button type="submit" class="w-full bg-gradient-to-r from-[#0b4bd6] to-[#001f9f] text-white px-5 py-3 rounded-lg font-semibold">Login</button>
                        <button id="create-account-btn" type="button" class="block w-full text-center border border-gray-300 rounded-lg py-3 text-gray-700 font-semibold hover:bg-gray-50">Create an account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Register Modal -->
    <div id="register-modal" class="fixed inset-0 z-50 hidden">
        <div id="register-overlay" class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="relative modal-box bg-white rounded-2xl shadow-2xl w-full max-w-md mx-auto p-6 z-10">
                <button id="register-close" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-2xl leading-none">&times;</button>
                <h3 class="text-lg font-semibold mb-4">Create an account</h3>
                <form id="register-form" action="#" method="post" class="space-y-4">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">First name</label>
                            <input id="reg-first" name="first_name" type="text" required class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="First name" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Last name</label>
                            <input id="reg-last" name="last_name" type="text" required class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Last name" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="reg-email" name="email" type="email" required class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="reg-password" name="password" type="password" required class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="password" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Confirm password</label>
                        <input id="reg-confirm" name="confirm_password" type="password" required class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="confirm password" />
                    </div>
                    <div class="space-y-2">
                        <button type="submit" class="w-full bg-gradient-to-r from-[#0b4bd6] to-[#001f9f] text-white px-5 py-3 rounded-lg font-semibold">Register</button>
                        <button id="register-back-login" type="button" class="block w-full text-center border border-gray-300 rounded-lg py-3 text-gray-700 font-semibold hover:bg-gray-50">Back to login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../JS/script.js"></script>
</body>
</html>
