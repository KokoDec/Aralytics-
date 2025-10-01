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
    <style>
    /* Page-scoped: only affects this login page */
    @media (min-width: 375px) and (max-width: 425px) {
        /* cancel large left margin from utility and keep content centered-ish */
        .about-content { margin-left: 0 !important; padding-left: 0 !important; }

        /* nudge the heading slightly to the right */
        #about .about-heading {
            transform: translateX(0.6rem) !important; /* small right shift */
            text-align: center !important;
            white-space: normal !important;
        }

        /* nudge paragraph right a little and make it narrower/centered */
        #about .about-desc {
            transform: translateX(0.35rem) !important;
            text-align: center !important;
            max-width: 16rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: 0.95rem !important;
            line-height: 1.25 !important;
        }
    }
    </style>

</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-between">
    <?php include __DIR__ . '/../template/header.html'; ?>
    <!-- Brand label moved to template/header.html; duplicate removed from this page -->
    <!-- Top-right login button with door image -->
    <div class="absolute top-4 right-6">
        <a href="#" id="login-btn" class="inline-flex items-center gap-4 bg-gradient-to-r from-[#0b4bd6] to-[#001f9f] text-white px-5 py-3 rounded-lg shadow-md hover:opacity-95">
            <span class="font-semibold tracking-wider text-lg">LOGIN</span>
            <img src="../img/door.png" alt="door" class="h-7 w-7 object-contain" />
        </a>
    </div>
     
    <!-- Main content here -->
    <main class="flex-grow flex items-center justify-between p-8 gap-8">    
        <!-- Decorative blue circles lower left -->
    <img src="../img/circle-pattern.png" alt="Blue Circles" class="absolute -left-32 bottom-16 z-20 w-96 h-56 object-contain opacity-90" />
        <!-- Left column: hero heading (static, left side) -->
    <div class="w-[40%] max-w-2xl text-left p-0 -translate-y-44 translate-x-0">
            <div class="mt-32 mb-0">
                <h1 class="font-['Jaro',sans-serif] font-normal text-[3.5rem] leading-tight text-[#f57f17] drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)] mb-0">Smarter Reviews for</h1>
                <h2 class="font-['Jaro',sans-serif] font-normal text-[3.5rem] leading-tight text-[#102f8c] drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)] mt-0 mb-0">Smarter Students.</h2>
            </div>
            <p class="mt-2 text-lg text-gray-800 max-w-lg font-[Arial,Helvetica,sans-serif] font-normal">A platform that transforms study materials into interactive, personalized learning experiences.</p>
        </div>
        <!-- Right column: robot (align center to line up with hero heading) -->
        <div class="relative w-[45%] flex items-center justify-end">
            <!-- Speech bubble -->
            <div class="speech-bubble absolute left-[35%] transform -translate-x-1/2 -translate-y-[300%] mb-6 bg-white text-black rounded-md shadow-md text-center px-3 py-2 min-w-[8rem] max-w-[12rem] [@media(min-width:375px)and(max-width:425px)]:-translate-y-[180%]">
                <div class="bubble-title text-sm font-bold uppercase tracking-wide">Hi! I'm ARA</div>
                <div class="bubble-sub text-xs mt-1">your learning buddy!</div>
                <!-- tail (keeps attached when bubble moves) -->
                <span class="speech-tail absolute left-1/2 -translate-x-1/2 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-white bottom-[-8px]"></span>
            </div>
            <img src="../img/robot.png" alt="Robot" class="robot-img max-w-full h-auto w-[45rem] translate-x-[-1rem] translate-y-[10rem]" />
        </div>
    </main>
    <!-- Footer -->
    <div class="absolute left-0 right-0 flex items-center justify-center [clip-path:polygon(100%_42%,_85%_100%,_100%_100%)] [@media(min-width:375px)and(max-width:425px)]:[clip-path:none] bg-[#1C2F8C]" style="top:calc(100% - 80rem); height:80rem; z-index:10; padding:0; overflow:visible;">
            <div class="flex items-center justify-center gap-8 w-full">
=
            </div>
        </div>
    <!-- About section placed below the main content. It uses the requested background color and
         includes bottom padding so the absolute-positioned footer doesn't cover content. -->
    <section id="about" class="bg-[#1a2d83] text-white pt-16 pb-32 mt-12 md:mt-16 min-h-[28rem]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left: existing about copy + small feature blocks -->
                <div>
                        <div class="flex flex-col gap-8 items-start">
                            <!-- Book image -->
                            <div class="relative -translate-x-64">
                                <img src="../img/book.jpg" alt="Book" class="rounded-xl shadow-lg w-96 h-60 object-cover border-4 border-white" />
                            </div>
                            <!-- Reading image -->
                            <div class="relative -translate-x-8 -translate-y-40">
                                <img src="../img/reading.jpg" alt="Reading" class="rounded-xl shadow-lg w-96 h-60 object-cover border-4 border-white" />
                            </div>
                            <!-- Research image -->
                            <div class="relative -translate-x-56 -translate-y-64">
                                <img src="../img/Research.jpg" alt="Research" class="rounded-xl shadow-lg w-96 h-60 object-cover border-4 border-white" />
                            </div>
                        </div>
                </div>

                <!-- Right: hero-like block using Jaro font -->
                <div class="flex items-center justify-center">
                    <div class="w-full md:w-3/4 lg:w-2/3 text-center px-0 flex items-center justify-center md:justify-start lg:justify-start ml-48 about-content">
                        <div class="w-full -translate-y-32">
                            <h3 class="about-heading font-['Jaro',sans-serif] whitespace-nowrap text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-extrabold tracking-wide mb-4 leading-tight mx-auto">MAKE STUDYING <span class="text-[#f57f17]">EASIER</span></h3>
                            <p class="about-desc text-white/90 leading-relaxed text-lg md:text-xl max-w-sm mx-auto text-center translate-x-24">Our AI-powered review platform makes learning smarter and more personalized. Students can upload materials, generate summaries, flashcards, quizzes, and mock exams, and track their progress to focus on weak areas. Accessible on any device, it enables efficient, engaging, and self-paced learning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Contact section below About -->
        <section id="contact" class="bg-[#f5f7fa] text-[#1a2d83] pt-12 pb-40 min-h-[44rem] mt-[-6rem]">
            <div class="relative max-w-4xl mx-auto px-6 flex items-center min-h-[20rem]">
                <!-- Absolutely positioned Contact heading -->
                <h3 class="font-['Jaro',sans-serif] text-3xl md:text-5xl font-extrabold tracking-widest text-center w-full absolute top-0 left-1/2 -translate-x-1/2 z-30" style="margin-top:0;">
                    <span style="color:#1a2d83;">CONTACT</span>
                    <span style="color:#f57f17;">US</span>
                </h3>
                <!-- Left side: Vector 1.png image (absolutely positioned on the left) -->
                <div class="absolute z-20 flex items-center justify-center pointer-events-none" style="left:-33rem; top:-3rem;">
                    <img src="../img/Vector 1.png" alt="Vector" class="w-80 h-80 md:w-[30rem] md:h-[30rem] object-contain" style="transform: scaleX(-1) scaleY(-1);" />
                </div>
                <!-- New: much larger robot 2 image placed to the left of contact area -->
                <div class="absolute z-30 flex items-center gap-3" style="left:-30rem; top:-2rem;">
                    <img src="../img/robot 2.png" alt="Robot 2" class="w-[30rem] h-[30rem] sm:w-[34rem] sm:h-[34rem] md:w-[40rem] md:h-[40rem] lg:w-[48rem] lg:h-[48rem] object-contain" />
                </div>
                <!-- (Removed duplicate smaller contact card) -->
                    <!-- Slightly larger replica contact card placed on the right of the contact area -->
                    <div class="absolute z-30" style="right:-20rem; top:6rem;">
                        <div class="bg-gray-200 border border-gray-300 rounded-2xl shadow-2xl p-10 w-[30rem] sm:w-[32rem] md:w-[36rem] lg:w-[40rem] text-[#1a2d83]">
                            <p class="text-center mb-6 text-base font-medium">Get in touch with us anytime by using the contact details below:</p>
                            <div class="flex items-center gap-6 py-4">
                                <div class="bg-[#2b3566] text-white rounded-full w-20 h-20 flex items-center justify-center text-4xl">📞</div>
                                <div class="flex-1 text-center text-lg font-semibold">09123456782</div>
                            </div>
                            <div class="flex items-center gap-6 py-4 border-t border-gray-300 mt-3 pt-3">
                                <div class="bg-[#2b3566] text-white rounded-full w-20 h-20 flex items-center justify-center text-4xl">✉️</div>
                                <div class="flex-1 text-center text-lg"><a href="mailto:flashlearn.edu@gmail.com" class="underline font-medium">flashlearn.edu@gmail.com</a></div>
                            </div>
                            <div class="flex items-center gap-6 py-4 border-t border-gray-300 mt-3 pt-3">
                                <div class="bg-[#2b3566] text-white rounded-full w-20 h-20 flex items-center justify-center text-4xl">💬</div>
                                <div class="flex-1 text-center text-lg font-medium">flash learn education</div>
                            </div>
                        </div>
                    </div>
                <!-- Add your contact content here, it will not move the heading -->
                <div class="flex-1 mt-8">
                    <!-- Contact content goes here -->
                </div>
            </div>
        </section>
    <footer class="bg-[#071028] text-white py-6 mt-12 rounded-t-2xl shadow-inner">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="text-sm md:text-base">@ 2024 FLASH LEARN</p>
        </div>
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
