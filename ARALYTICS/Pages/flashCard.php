
<!-- Google Font: Jaro (400) -->
<link href="https://fonts.googleapis.com/css2?family=Jaro:wght@400&display=swap" rel="stylesheet">
<?php include '../template/navbar.html'; ?>

<!-- Flashcard UI -->
<body class="bg-gradient-to-b from-gray-100 to-orange-100 overflow-x-hidden">
<header class="w-full px-4 pt-6 md:px-8 md:pt-8" style="margin-left:6rem">
    <div class="w-full max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-2">
            <h1 class="text-4xl font-black tracking-wide text-[#242D59] font-['Jaro',sans-serif]">ARALYTICS</h1>
            <a href="#" class="text-xs text-[#242D59] font-bold flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" /></svg>
                BACK
            </a>
        </div>
        <h2 class="text-3xl font-bold text-orange-500 mb-4 font-['Jaro',sans-serif]">FLASHCARDS</h2>
    </div>
</header>
<div class="flex flex-col items-center justify-center min-h-[80vh]" style="margin-left:6rem">
    <div class="w-full max-w-3xl px-4 pt-6 md:px-8 md:pt-8">
        <div class="flex flex-col items-center">
            <span class="text-sm text-gray-500 mb-2">CREATE YOUR OWN FLASHCARD</span>
            <div class="flex flex-col w-full items-center">
                <!-- Desktop: PREV and NEXT beside card -->
                <div class="hidden md:flex w-full items-center justify-center gap-8">
                    <button class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#242D59]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                        <span class="text-xs text-gray-400">PREV</span>
                    </button>
                    <div class="bg-white rounded-lg shadow-lg p-8 sm:p-12 md:p-16 w-full max-w-xl flex flex-col items-center relative">
                        <span class="absolute top-4 right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.286 7.03a1 1 0 00.95.69h7.386c.969 0 1.371 1.24.588 1.81l-5.974 4.342a1 1 0 00-.364 1.118l2.286 7.03c.3.921-.755 1.688-1.54 1.118l-5.974-4.342a1 1 0 00-1.176 0l-5.974 4.342c-.784.57-1.838-.197-1.54-1.118l2.286-7.03a1 1 0 00-.364-1.118L2.174 12.457c-.783-.57-.38-1.81.588-1.81h7.386a1 1 0 00.95-.69l2.286-7.03z" /></svg>
                        </span>
                        <span class="text-4xl md:text-5xl font-bold text-[#242D59] mt-12 mb-12 font-['Jaro',sans-serif]">WHAT IS ARALYTICS</span>
                    </div>
                    <button class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#242D59]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        <span class="text-xs text-gray-400">NEXT</span>
                    </button>
                </div>
                <!-- Mobile: PREV/NEXT below card -->
                <div class="flex md:hidden w-full justify-between mt-4 px-8">
                    <button class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#242D59]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                        <span class="text-xs text-gray-400">PREV</span>
                    </button>
                    <div class="bg-white rounded-lg shadow-lg p-8 sm:p-12 md:p-16 w-full max-w-xl flex flex-col items-center relative">
                        <span class="absolute top-4 right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.286 7.03a1 1 0 00.95.69h7.386c.969 0 1.371 1.24.588 1.81l-5.974 4.342a1 1 0 00-.364 1.118l2.286 7.03c.3.921-.755 1.688-1.54 1.118l-5.974-4.342a1 1 0 00-1.176 0l-5.974 4.342c-.784.57-1.838-.197-1.54-1.118l2.286-7.03a1 1 0 00-.364-1.118L2.174 12.457c-.783-.57-.38-1.81.588-1.81h7.386a1 1 0 00.95-.69l2.286-7.03z" /></svg>
                        </span>
                        <span class="text-4xl md:text-5xl font-bold text-[#242D59] mt-12 mb-12 font-['Jaro',sans-serif]">WHAT IS ARALYTICS</span>
                    </div>
                    <button class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#242D59]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        <span class="text-xs text-gray-400">NEXT</span>
                    </button>
                </div>
            </div>
            <div class="w-full flex justify-center mt-8">
                <div class="bg-[#242D59] rounded-lg px-4 py-2 flex items-center gap-4 w-full max-w-md">
                    <div class="flex items-center gap-2 text-white text-xs">
                        <span>1%</span>
                        <div class="w-24 h-2 bg-gray-300 rounded-full overflow-hidden">
                            <div class="h-2 bg-orange-500" style="width: 1%"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-white text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" /></svg>
                        <span>1 Min</span>
                    </div>
                    <div class="flex items-center gap-2 text-white text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" /></svg>
                        <span>120 Mins Left</span>
                    </div>
                    <button class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>