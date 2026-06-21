<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fadli Fahrulzani | Portfolio</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-meffa.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Instrument Sans', 'Plus Jakarta Sans', sans-serif;
            background-color: #030206;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        .animation-delay-100 { animation-delay: 100ms; }
        .animation-delay-200 { animation-delay: 200ms; }
        .animation-delay-300 { animation-delay: 300ms; }
        .animation-delay-400 { animation-delay: 400ms; }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #030206; }
        ::-webkit-scrollbar-thumb { background: #4c1d95; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #6d28d9; }

        /* Infinite Marquee Animations */
        @keyframes scrollX {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes scrollXReverse {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
        .animate-scroll {
            animation: scrollX 40s linear infinite;
        }
        .animate-scroll-reverse {
            animation: scrollXReverse 45s linear infinite;
        }
        .hover-pause:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="text-zinc-300 antialiased selection:bg-purple-500 selection:text-white overflow-x-hidden">

    <nav class="sticky top-0 z-50 border-b border-purple-500/10 bg-[#030206]/80 backdrop-blur-xl">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="group flex items-center space-x-2 text-xl font-bold tracking-tight">
                <span class="bg-gradient-to-br from-purple-500 to-indigo-600 text-white w-8 h-8 flex items-center justify-center rounded-lg font-black shadow-lg shadow-purple-500/20 transition-transform duration-300 group-hover:-rotate-6">F</span>
                <span class="text-white transition-all duration-300 group-hover:text-purple-400">Fahrulzani.</span>
            </a>
            <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="#beranda" class="hover:text-purple-400 transition-colors duration-200">Beranda</a>
                <a href="#tentang" class="hover:text-purple-400 transition-colors duration-200">Tentang</a>
                <a href="#keahlian" class="hover:text-purple-400 transition-colors duration-200">Keahlian</a>
                <a href="#proyek" class="hover:text-purple-400 transition-colors duration-200">Proyek</a>
                <a href="#sertifikasi" class="hover:text-purple-400 transition-colors duration-200">Sertifikasi</a>
                <a href="#kontak" class="px-4 py-2 rounded-md bg-purple-500/10 border border-purple-500/20 text-purple-300 hover:bg-purple-500 hover:text-white transition-all duration-300">Hubungi Saya</a>
            </div>
        </div>
    </nav>

    <section id="beranda" class="max-w-6xl mx-auto px-6 pt-24 pb-20 flex items-center min-h-[calc(100vh-4rem)]">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-16 items-center w-full">
            
            <div class="space-y-8 md:col-span-7 order-2 md:order-1 opacity-0 animate-fade-in-up">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-purple-500/30 bg-gradient-to-r from-purple-500/10 to-indigo-500/10 text-xs font-semibold text-purple-300 tracking-wide uppercase">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shadow-[0_0_8px_rgba(52,211,153,0.8)]"></span> Available for Work
                </div>
                
                <div class="space-y-2">
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-tight text-white">
                        Software <span class="bg-gradient-to-r from-purple-400 to-indigo-500 bg-clip-text text-transparent">Engineer.</span>
                    </h1>
                    <h2 class="text-3xl md:text-4xl font-bold text-zinc-400">Full Stack Developer.</h2>
                </div>

                <p class="text-lg leading-relaxed max-w-xl border-l-2 border-purple-500/30 pl-4">
                    Halo, saya <span class="text-white font-semibold">Fadli Fahrulzani</span>. Membangun solusi digital inovatif dan berkualitas tinggi dengan efisiensi alur kerja modern berbasis kecerdasan buatan dan ekosistem framework backend.
                </p>

                <div class="pt-2 flex flex-wrap gap-4 items-center">
                    <a href="#proyek" class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-sm font-semibold hover:from-purple-500 hover:to-indigo-500 transition-all duration-300 shadow-[0_0_20px_rgba(147,51,234,0.3)] hover:shadow-[0_0_25px_rgba(147,51,234,0.5)] transform hover:-translate-y-1">
                        Lihat Portofolio
                    </a>
                    <a href="https://github.com/fadlifahrul24" target="_blank" class="p-3 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-purple-500/50 transition-all duration-300 group">
                        <svg class="w-5 h-5 text-zinc-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/fadli-fahrulzani-8323782a3" target="_blank" class="p-3 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 hover:border-purple-500/50 transition-all duration-300 group">
                        <svg class="w-5 h-5 text-zinc-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <div class="md:col-span-5 flex justify-center md:justify-end order-1 md:order-2 opacity-0 animate-fade-in-up animation-delay-200">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-[2rem] transform translate-x-4 translate-y-4 opacity-40 group-hover:translate-x-6 group-hover:translate-y-6 transition-all duration-500"></div>
                    <div class="absolute inset-0 bg-gradient-to-tl from-purple-500/20 to-transparent rounded-[2rem] blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-[2rem] border border-white/10 overflow-hidden bg-[#0a0a0a] z-10 transition-transform duration-500 group-hover:-translate-y-2 group-hover:-translate-x-2">
                        <img 
                            src="{{ asset('assets/img/avatar.png') }}" 
                            alt="Fadli Fahrulzani" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1555952517-2e8e729e0b44?q=80&w=500&auto=format&fit=crop';"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030206] via-transparent to-transparent opacity-60"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="border-t border-purple-500/10 bg-gradient-to-b from-purple-900/[0.02] to-transparent py-24">
        <div class="max-w-6xl mx-auto px-6 opacity-0 animate-fade-in-up animation-delay-300">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
                
                <div class="md:col-span-7 space-y-6">
                    <h2 class="text-3xl font-bold text-white mb-6">Tentang Saya</h2>
                    <p class="text-lg leading-relaxed">
                        Software Engineer yang berorientasi pada hasil dengan kombinasi unik antara keahlian pengembangan backend yang kuat dan presisi visual frontend. Berbekal pengalaman profesional selama lebih dari 3 tahun di industri produksi digital, saya konsisten menjaga standar ketelitian tinggi dalam membangun antarmuka pengguna yang fungsional, aman, dan estetis.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Fokus utama saya adalah merancang solusi digital yang efisien menggunakan alur kerja pengembangan modern berbasis kecerdasan buatan (AI) untuk mempercepat siklus hidup perangkat lunak. Saya terbiasa bekerja secara produktif di bawah target waktu yang ketat, adaptif terhadap perkembangan teknologi terbaru, serta berkomitmen penuh untuk menghadirkan produk digital yang stabil dan berkinerja tinggi guna mengoptimalkan pengalaman pengguna.
                    </p>
                </div>

                <div class="md:col-span-5 space-y-6 md:pl-10 border-l border-purple-500/20">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center"><span class="w-8 h-[2px] bg-purple-500 mr-3"></span>Pendidikan</h2>
                    
                    <div class="relative pl-6 border-l border-zinc-800 space-y-8">
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 rounded-full bg-[#030206] border-2 border-purple-500"></div>
                            <span class="text-xs font-semibold text-purple-400">Feb 2024 - Sep 2028</span>
                            <h3 class="text-white font-bold mt-1">Universitas Dian Nusantara</h3>
                            <p class="text-sm font-medium text-zinc-300">Teknik Informatika</p>
                            <p class="text-sm text-zinc-500 mt-2">Fokus mendalami pengembangan perangkat lunak (Software Engineering), arsitektur basis data, dan pemrograman full-stack menggunakan Laravel serta Tailwind CSS. Aktif terlibat dalam proyek pengembangan platform solusi digital berbasis web.</p>
                        </div>
                        
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 rounded-full bg-[#030206] border-2 border-zinc-600"></div>
                            <span class="text-xs font-semibold text-zinc-500">Jul 2018 - Jun 2021</span>
                            <h3 class="text-white font-bold mt-1">SMKN 2 Garut</h3>
                            <p class="text-sm font-medium text-zinc-300">Teknik Instalasi Tenaga Listrik</p>
                            <p class="text-sm text-zinc-500 mt-2">Mempelajari dasar-dasar kelistrikan, logika sistem kontrol, dan pemecahan masalah teknis (troubleshooting) yang menjadi pondasi kuat saya dalam memahami logika pemrograman dan arsitektur perangkat lunak saat ini.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="keahlian" class="border-t border-purple-500/10 py-24 overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-6 opacity-0 animate-fade-in-up animation-delay-400 mb-16 relative z-20">
            <h2 class="text-3xl font-bold text-white text-center">Keahlian <span class="text-purple-500">&</span> Teknologi</h2>
        </div>
        
        <div class="relative w-full flex flex-col gap-8 opacity-0 animate-fade-in-up animation-delay-400 max-w-[100vw]">
            <div class="absolute inset-y-0 left-0 w-16 md:w-48 bg-gradient-to-r from-[#030206] to-transparent z-10 pointer-events-none"></div>
            <div class="absolute inset-y-0 right-0 w-16 md:w-48 bg-gradient-to-l from-[#030206] to-transparent z-10 pointer-events-none"></div>

            <div class="flex w-max animate-scroll hover-pause">
                <div class="flex gap-4 px-2 shrink-0">
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-purple-400 uppercase tracking-widest">Backend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#FF2D20] transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M22.015 17.067l-9.141 5.093c-.538.301-1.221.301-1.758 0L1.975 17.067c-.551-.308-.888-.888-.888-1.517V5.378c0-.629.337-1.209.888-1.517L11.116.126c.538-.301 1.221-.301 1.758 0l9.141 3.735c.551.308.888.888.888 1.517v10.171c0 .629-.337 1.209-.888 1.517zM11.666 2.215l-8.083 3.303 8.083 4.298 8.083-4.298-8.083-3.303zm-8.87 5.059v8.431l8.083 4.502v-8.635l-8.083-4.298zm9.653 12.933l8.083-4.502V7.274l-8.083 4.298v8.635z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Laravel</span>
                    </div>
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-purple-400 uppercase tracking-widest">Backend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#777BB4] transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.94 12.33c-.15.46-.57.77-1.05.77h-1.53c-.61 0-1.11-.49-1.11-1.11v-4.5h-.89c-.61 0-1.11-.49-1.11-1.11V7.27c0-.61.49-1.11 1.11-1.11h3.53c1.07 0 1.94.87 1.94 1.94v.89c0 1.07-.87 1.94-1.94 1.94h-1.42v3.39h.89c.61 0 1.11.49 1.11 1.11v.89zm4.24-.89c0 .61-.49 1.11-1.11h-2.1c-.61 0-1.11-.49-1.11-1.11V7.27c0-.61.49-1.11 1.11-1.11h2.1c1.07 0 1.94.87 1.94 1.94v2.5c0 1.07-.87 1.94-1.94 1.94h-1v2.89h1c.61 0 1.11.49 1.11 1.11v.89zm-1.89-6.39v-1.5h-.89v1.5h.89zm-6.24 0v-1.5h-.89v1.5h.89z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">PHP</span>
                    </div>
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-indigo-400 uppercase tracking-widest">Frontend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#38BDF8] transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Tailwind CSS</span>
                    </div>
                    
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-indigo-400 uppercase tracking-widest">Frontend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#7952B3] transition-colors mb-2" viewBox="0 0 448 512" fill="currentColor"><path d="M272.1 204.2c5.6-5.9 8.5-14.1 8.5-24.6 0-11.4-3.2-19.6-9.6-24.7-6.4-5.1-15.6-7.7-27.6-7.7h-36.8v64.6h38c11.3 0 20.6-2.5 27.5-7.6zm-17.7 78.4c7.3-6.2 10.9-15.3 10.9-27.3 0-13-4-22.1-11.9-27.4-7.9-5.3-18.7-8-32.3-8h-44.5v72.8h46.6c11.3-.1 21.7-3.4 31.2-10.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-227.1 52.8c-20.1 0-41.2 0-63.3 0-2.4 0-4.3 1.9-4.3 4.3v237.8c0 2.4 1.9 4.3 4.3 4.3h67.3c27.1 0 48.6-6.4 64.6-19.1 16-12.7 24-30.8 24-54.2 0-14.5-3.8-27.2-11.4-38.1-7.6-10.9-18.1-18.3-31.5-22.2v-1.2c10.8-3.4 19.3-9.5 25.5-18.5 6.2-8.9 9.3-19.6 9.3-32 0-21.3-7.5-38.2-22.6-50.6-15.1-12.5-35.8-18.7-62-18.7z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Bootstrap</span>
                    </div>

                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-indigo-400 uppercase tracking-widest">Frontend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#F7DF1E] transition-colors mb-2" viewBox="0 0 448 512" fill="currentColor"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 31.2 0 50.8 14.3 61.6 35.6l-33.2 20.7c-7.2-12-16.5-19.5-29.5-19.5-14.4 0-23.8 7.5-23.8 19.5 0 13.2 8.7 18.6 26.5 26.1l10.5 4.5c31.8 13.5 54.7 30 54.7 65.1 0 35.1-25.8 57.6-64.6 57.6z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">JavaScript</span>
                    </div>

                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-purple-400 uppercase tracking-widest">Backend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-blue-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">MySQL</span>
                    </div>
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-amber-500 uppercase tracking-widest">Tools</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-orange-500 transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.775 2.774c.645-.215 1.383-.068 1.892.442.736.736.736 1.932 0 2.669-.737.737-1.933.737-2.669 0-.51-.51-.656-1.253-.443-1.896l-2.723-2.723v3.744c.218.221.36.52.36.852 0 .736-.597 1.333-1.333 1.333s-1.333-.597-1.333-1.333c0-.332.142-.631.36-.852v-3.744c-.214-.645-.072-1.386.44-1.898l-2.738-2.738-4.996 4.996c-.603.603-.603 1.582 0 2.188l10.48 10.48c.603.603 1.582.603 2.188 0l10.48-10.48c.605-.604.605-1.583 0-2.188z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Git / GitHub</span>
                    </div>
                </div>
                <div class="flex gap-4 px-2 shrink-0">
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-purple-400 uppercase tracking-widest">Backend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#FF2D20] transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M22.015 17.067l-9.141 5.093c-.538.301-1.221.301-1.758 0L1.975 17.067c-.551-.308-.888-.888-.888-1.517V5.378c0-.629.337-1.209.888-1.517L11.116.126c.538-.301 1.221-.301 1.758 0l9.141 3.735c.551.308.888.888.888 1.517v10.171c0 .629-.337 1.209-.888 1.517zM11.666 2.215l-8.083 3.303 8.083 4.298 8.083-4.298-8.083-3.303zm-8.87 5.059v8.431l8.083 4.502v-8.635l-8.083-4.298zm9.653 12.933l8.083-4.502V7.274l-8.083 4.298v8.635z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Laravel</span>
                    </div>
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-purple-400 uppercase tracking-widest">Backend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#777BB4] transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.94 12.33c-.15.46-.57.77-1.05.77h-1.53c-.61 0-1.11-.49-1.11-1.11v-4.5h-.89c-.61 0-1.11-.49-1.11-1.11V7.27c0-.61.49-1.11 1.11-1.11h3.53c1.07 0 1.94.87 1.94 1.94v.89c0 1.07-.87 1.94-1.94 1.94h-1.42v3.39h.89c.61 0 1.11.49 1.11 1.11v.89zm4.24-.89c0 .61-.49 1.11-1.11h-2.1c-.61 0-1.11-.49-1.11-1.11V7.27c0-.61.49-1.11 1.11-1.11h2.1c1.07 0 1.94.87 1.94 1.94v2.5c0 1.07-.87 1.94-1.94 1.94h-1v2.89h1c.61 0 1.11.49 1.11 1.11v.89zm-1.89-6.39v-1.5h-.89v1.5h.89zm-6.24 0v-1.5h-.89v1.5h.89z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">PHP</span>
                    </div>
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-indigo-400 uppercase tracking-widest">Frontend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#38BDF8] transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Tailwind CSS</span>
                    </div>
                    
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-indigo-400 uppercase tracking-widest">Frontend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#7952B3] transition-colors mb-2" viewBox="0 0 448 512" fill="currentColor"><path d="M272.1 204.2c5.6-5.9 8.5-14.1 8.5-24.6 0-11.4-3.2-19.6-9.6-24.7-6.4-5.1-15.6-7.7-27.6-7.7h-36.8v64.6h38c11.3 0 20.6-2.5 27.5-7.6zm-17.7 78.4c7.3-6.2 10.9-15.3 10.9-27.3 0-13-4-22.1-11.9-27.4-7.9-5.3-18.7-8-32.3-8h-44.5v72.8h46.6c11.3-.1 21.7-3.4 31.2-10.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-227.1 52.8c-20.1 0-41.2 0-63.3 0-2.4 0-4.3 1.9-4.3 4.3v237.8c0 2.4 1.9 4.3 4.3 4.3h67.3c27.1 0 48.6-6.4 64.6-19.1 16-12.7 24-30.8 24-54.2 0-14.5-3.8-27.2-11.4-38.1-7.6-10.9-18.1-18.3-31.5-22.2v-1.2c10.8-3.4 19.3-9.5 25.5-18.5 6.2-8.9 9.3-19.6 9.3-32 0-21.3-7.5-38.2-22.6-50.6-15.1-12.5-35.8-18.7-62-18.7z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Bootstrap</span>
                    </div>

                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-indigo-400 uppercase tracking-widest">Frontend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-[#F7DF1E] transition-colors mb-2" viewBox="0 0 448 512" fill="currentColor"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 31.2 0 50.8 14.3 61.6 35.6l-33.2 20.7c-7.2-12-16.5-19.5-29.5-19.5-14.4 0-23.8 7.5-23.8 19.5 0 13.2 8.7 18.6 26.5 26.1l10.5 4.5c31.8 13.5 54.7 30 54.7 65.1 0 35.1-25.8 57.6-64.6 57.6z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">JavaScript</span>
                    </div>

                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-purple-400 uppercase tracking-widest">Backend</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-blue-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">MySQL</span>
                    </div>
                    <div class="w-[170px] md:w-[190px] shrink-0 flex flex-col items-center justify-center p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/40 hover:bg-purple-500/5 transition-all duration-300 group cursor-default relative pt-8">
                        <span class="absolute top-2 text-[9px] font-bold text-amber-500 uppercase tracking-widest">Tools</span>
                        <svg class="w-11 h-11 text-zinc-500 group-hover:text-orange-500 transition-colors mb-2" viewBox="0 0 24 24" fill="currentColor"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.775 2.774c.645-.215 1.383-.068 1.892.442.736.736.736 1.932 0 2.669-.737.737-1.933.737-2.669 0-.51-.51-.656-1.253-.443-1.896l-2.723-2.723v3.744c.218.221.36.52.36.852 0 .736-.597 1.333-1.333 1.333s-1.333-.597-1.333-1.333c0-.332.142-.631.36-.852v-3.744c-.214-.645-.072-1.386.44-1.898l-2.738-2.738-4.996 4.996c-.603.603-.603 1.582 0 2.188l10.48 10.48c.603.603 1.582.603 2.188 0l10.48-10.48c.605-.604.605-1.583 0-2.188z"/></svg>
                        <span class="text-sm font-semibold text-zinc-300 group-hover:text-white">Git / GitHub</span>
                    </div>
                </div>
            </div>

            <div class="flex w-max animate-scroll-reverse hover-pause mt-4">
                <div class="flex gap-4 px-2 shrink-0">
                    <span class="px-5 py-3 rounded-full bg-purple-500/10 border border-purple-500/20 text-sm font-medium text-purple-300 shrink-0 cursor-default hover:scale-105 hover:bg-purple-500/20 transition-all duration-300 whitespace-nowrap shadow-[0_0_15px_rgba(147,51,234,0.1)]"><b class="text-zinc-500 mr-1.5">[Backend]</b> Filament PHP</span>
                    <span class="px-5 py-3 rounded-full bg-purple-500/10 border border-purple-500/20 text-sm font-medium text-purple-300 shrink-0 cursor-default hover:scale-105 hover:bg-purple-500/20 transition-all duration-300 whitespace-nowrap shadow-[0_0_15px_rgba(147,51,234,0.1)]"><b class="text-zinc-500 mr-1.5">[Backend]</b> SQL (Oracle/MySQL)</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Frontend & UI/UX]</b> Responsive Web Design</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Frontend & UI/UX]</b> Figma</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[AI & Workflow]</b> Cursor AI & Claude</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[AI & Workflow]</b> Prompt Engineering</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[AI & Workflow]</b> Generative AI Chatbots</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Tools & Others]</b> Database Design</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Tools & Others]</b> Time Management</span>
                </div>
                <div class="flex gap-4 px-2 shrink-0">
                    <span class="px-5 py-3 rounded-full bg-purple-500/10 border border-purple-500/20 text-sm font-medium text-purple-300 shrink-0 cursor-default hover:scale-105 hover:bg-purple-500/20 transition-all duration-300 whitespace-nowrap shadow-[0_0_15px_rgba(147,51,234,0.1)]"><b class="text-zinc-500 mr-1.5">[Backend]</b> Filament PHP</span>
                    <span class="px-5 py-3 rounded-full bg-purple-500/10 border border-purple-500/20 text-sm font-medium text-purple-300 shrink-0 cursor-default hover:scale-105 hover:bg-purple-500/20 transition-all duration-300 whitespace-nowrap shadow-[0_0_15px_rgba(147,51,234,0.1)]"><b class="text-zinc-500 mr-1.5">[Backend]</b> SQL (Oracle/MySQL)</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Frontend & UI/UX]</b> Responsive Web Design</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Frontend & UI/UX]</b> Figma</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[AI & Workflow]</b> Cursor AI & Claude</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[AI & Workflow]</b> Prompt Engineering</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[AI & Workflow]</b> Generative AI Chatbots</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Tools & Others]</b> Database Design</span>
                    <span class="px-5 py-3 rounded-full bg-white/5 border border-white/10 text-sm font-medium text-zinc-300 shrink-0 cursor-default hover:scale-105 hover:text-white hover:bg-white/10 transition-all duration-300 whitespace-nowrap"><b class="text-zinc-500 mr-1.5">[Tools & Others]</b> Time Management</span>
                </div>
            </div>
        </div>
    </section>

    <section id="proyek" class="border-t border-purple-500/10 bg-gradient-to-b from-transparent to-purple-900/[0.02] py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12 flex items-center">
                Pengalaman Kerja <span class="mx-3 text-purple-500">&</span> Proyek
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <div class="group relative rounded-3xl bg-[#0a0a0a] border border-white/10 overflow-hidden transition-all duration-500 hover:border-purple-500/50 hover:shadow-[0_0_30px_rgba(147,51,234,0.15)] flex flex-col p-6 md:p-8">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-purple-600/10 blur-3xl rounded-full transform translate-x-1/2 -translate-y-1/2 group-hover:bg-purple-500/20 transition-all duration-500"></div>
                    
                    <div class="relative z-10 flex-grow space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-[11px] font-bold tracking-widest uppercase border border-purple-500/30">Founder & Lead Dev</span>
                            <span class="text-xs font-medium text-zinc-500">Feb 2026 - Sekarang</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-white bg-clip-text text-transparent bg-gradient-to-r from-white to-zinc-400">Meffa Suite Indonesia</h3>
                        <p class="text-sm text-zinc-400 leading-relaxed">
                            Mendirikan dan memimpin pengembangan platform solusi digital mandiri, Meffa Suite. Bertanggung jawab penuh atas siklus hidup pengembangan perangkat lunak (SDLC), mulai dari perancangan arsitektur hingga peluncuran produk.
                        </p>
                        <ul class="space-y-2 mt-4 text-xs text-zinc-300">
                            <li class="flex items-start"><span class="text-purple-500 mr-2">✓</span> <strong>Backend & Architecture:</strong> Merancang arsitektur efisien menggunakan Laravel, Filament PHP, dan MySQL/Oracle SQL.</li>
                            <li class="flex items-start"><span class="text-purple-500 mr-2">✓</span> <strong>Frontend & UI/UX:</strong> UI modern, responsif, dan interaktif menggunakan Tailwind CSS.</li>
                            <li class="flex items-start"><span class="text-purple-500 mr-2">✓</span> <strong>AI Workflow:</strong> Integrasi AI Tools dalam proses koding untuk efisiensi produk.</li>
                        </ul>
                        <a href="https://meffasuite.com" target="_blank" class="inline-flex items-center mt-4 text-purple-400 font-semibold hover:text-purple-300 group-hover:underline underline-offset-4 decoration-2 text-sm">
                            Kunjungi meffasuite.com <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                    
                    <div class="relative h-[250px] mt-8 rounded-2xl border border-white/10 bg-[#08080c] flex items-center justify-center p-4 group/img overflow-hidden shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-500/10 opacity-50 group-hover/img:opacity-100 transition-opacity duration-700"></div>
                        <div class="absolute top-4 right-4 z-20 p-2.5 rounded-xl bg-purple-500/20 backdrop-blur-md border border-purple-500/30 text-purple-300 shadow-[0_0_15px_rgba(147,51,234,0.3)]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <img 
                            src="{{ asset('assets/img/meffa-dashboard.jpeg') }}" 
                            alt="Visualisasi Dasbor Meffa Suite" 
                            class="relative z-10 w-full h-full object-contain rounded-xl opacity-90 group-hover/img:opacity-100 group-hover/img:scale-105 group-hover/img:-translate-y-2 transition-all duration-700 drop-shadow-2xl"
                            onerror="this.onerror=null; this.style.display='none';"
                        />
                    </div>
                </div>

                <div class="group relative rounded-3xl bg-[#0a0a0a] border border-white/10 overflow-hidden transition-all duration-500 hover:border-indigo-500/50 hover:shadow-[0_0_30px_rgba(99,102,241,0.15)] flex flex-col p-6 md:p-8">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/10 blur-3xl rounded-full transform translate-x-1/2 -translate-y-1/2 group-hover:bg-indigo-500/20 transition-all duration-500"></div>
                    
                    <div class="relative z-10 flex-grow space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-[11px] font-bold tracking-widest uppercase border border-indigo-500/30">School Ecosystem</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-white bg-clip-text text-transparent bg-gradient-to-r from-white to-zinc-400">Digitalisasi Ekosistem Sekolah</h3>
                        <p class="text-sm text-zinc-400 leading-relaxed">
                            Merancang dan mengintegrasikan sistem informasi manajemen sekolah terpusat. Mengelola sinkronisasi data antar panel pengguna (Admin, Guru, Siswa) dengan hak akses berbeda secara *real-time*.
                        </p>
                        <ul class="space-y-2 mt-4 text-xs text-zinc-300">
                            <li class="flex items-start"><span class="text-indigo-400 mr-2">✓</span> <strong>Panel Admin:</strong> Manajemen data induk, jadwal, dan operasional.</li>
                            <li class="flex items-start"><span class="text-indigo-400 mr-2">✓</span> <strong>Panel Guru:</strong> Dasbor manajemen nilai, absensi, dan materi ajar.</li>
                            <li class="flex items-start"><span class="text-indigo-400 mr-2">✓</span> <strong>Panel Siswa:</strong> Akses transparan untuk pemantauan akademik sekolah.</li>
                        </ul>
                        <a href="https://github.com/fadlifahrul24/meffa_school" target="_blank" class="inline-flex items-center mt-4 text-indigo-400 font-semibold hover:text-indigo-300 group-hover:underline underline-offset-4 decoration-2 text-sm">
                            Lihat Repositori GitHub 
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                    
                    <div class="relative h-[250px] mt-8 rounded-2xl border border-white/10 bg-[#08080c] flex items-center justify-center p-4 group/img2 overflow-hidden shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-blue-500/10 opacity-50 group-hover/img2:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative z-10 w-full h-full flex flex-col items-center justify-center space-y-4 opacity-90 group-hover/img2:opacity-100 group-hover/img2:scale-105 group-hover/img2:-translate-y-2 transition-all duration-700">
                            <div class="flex items-center justify-center space-x-2 md:space-x-4 text-indigo-400 w-full">
                                <div class="px-3 py-2 rounded-lg bg-white/5 border border-white/10 flex flex-col items-center"><svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg><span class="text-[10px] font-bold">Admin</span></div>
                                <span class="text-zinc-600">⇄</span>
                                <div class="px-3 py-2 rounded-lg bg-indigo-500/20 border border-indigo-500/30 flex flex-col items-center"><svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg><span class="text-[10px] font-bold text-indigo-300">Guru</span></div>
                                <span class="text-zinc-600">⇄</span>
                                <div class="px-3 py-2 rounded-lg bg-white/5 border border-white/10 flex flex-col items-center"><svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg><span class="text-[10px] font-bold">Siswa</span></div>
                            </div>
                            <p class="text-xs text-zinc-500 font-medium text-center">Sinkronisasi Database Terpusat</p>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-3xl bg-[#0a0a0a] border border-white/10 overflow-hidden transition-all duration-500 hover:border-emerald-500/50 hover:shadow-[0_0_30px_rgba(52,211,153,0.15)] flex flex-col p-6 md:p-8">
                    <div class="absolute top-0 left-0 w-64 h-64 bg-emerald-600/10 blur-3xl rounded-full transform -translate-x-1/2 -translate-y-1/2 group-hover:bg-emerald-500/20 transition-all duration-500"></div>
                    
                    <div class="relative z-10 flex-grow space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-[11px] font-bold tracking-widest uppercase border border-emerald-500/30">Analytics & Tracker</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-white bg-clip-text text-transparent bg-gradient-to-r from-white to-zinc-400">Sistem Sales & Marketing</h3>
                        <p class="text-sm text-zinc-400 leading-relaxed">
                            Platform operasional untuk memonitor siklus penjualan perusahaan. Dibangun guna membantu pelacakan prospek pelanggan (leads) dan analisis performa tim marketing secara otomatis dan terstruktur.
                        </p>
                        <ul class="space-y-2 mt-4 text-xs text-zinc-300">
                            <li class="flex items-start"><span class="text-emerald-400 mr-2">✓</span> Visualisasi data pencapaian target penjualan bulanan.</li>
                            <li class="flex items-start"><span class="text-emerald-400 mr-2">✓</span> Sistem manajemen basis data prospek (Leads Management).</li>
                            <li class="flex items-start"><span class="text-emerald-400 mr-2">✓</span> Pelaporan kinerja pemasaran yang cepat dan akurat.</li>
                        </ul>
                        <a href="https://github.com/fadlifahrul24/sales_marketing" target="_blank" class="inline-flex items-center mt-4 text-emerald-400 font-semibold hover:text-emerald-300 group-hover:underline underline-offset-4 decoration-2 text-sm">
                            Lihat Repositori GitHub 
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                    
                    <div class="relative h-[250px] mt-8 rounded-2xl border border-white/10 bg-[#08080c] flex items-center justify-center p-4 group/img3 overflow-hidden shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-teal-500/10 opacity-50 group-hover/img3:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative z-10 w-full h-full flex flex-col items-center justify-center space-y-4 opacity-90 group-hover/img3:opacity-100 group-hover/img3:scale-105 group-hover/img3:-translate-y-2 transition-all duration-700">
                            <div class="p-4 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-400">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                            </div>
                            <p class="text-xs text-zinc-500 font-medium text-center">Visualisasi Kinerja Sales & Leads</p>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-3xl bg-[#0a0a0a] border border-white/10 overflow-hidden transition-all duration-500 hover:border-sky-500/50 hover:shadow-[0_0_30px_rgba(14,165,233,0.15)] flex flex-col p-6 md:p-8">
                    <div class="absolute top-0 left-0 w-64 h-64 bg-sky-600/10 blur-3xl rounded-full transform -translate-x-1/2 -translate-y-1/2 group-hover:bg-sky-500/20 transition-all duration-500"></div>
                    
                    <div class="relative z-10 flex-grow space-y-6">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full bg-sky-500/20 text-sky-300 text-[11px] font-bold tracking-widest uppercase border border-sky-500/30">E-Commerce System</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-white bg-clip-text text-transparent bg-gradient-to-r from-white to-zinc-400">Platform UMKM Digital</h3>
                        <p class="text-sm text-zinc-400 leading-relaxed">
                            Aplikasi e-commerce dan manajemen inventaris yang dirancang khusus untuk memberdayakan Usaha Mikro, Kecil, dan Menengah (UMKM) dalam memperluas jangkauan pasar secara digital.
                        </p>
                        <ul class="space-y-2 mt-4 text-xs text-zinc-300">
                            <li class="flex items-start"><span class="text-sky-400 mr-2">✓</span> Sistem manajemen produk dan katalog etalase daring.</li>
                            <li class="flex items-start"><span class="text-sky-400 mr-2">✓</span> Fitur pelacakan pesanan dan status inventaris secara berkala.</li>
                            <li class="flex items-start"><span class="text-sky-400 mr-2">✓</span> Antarmuka pembeli (buyer) yang sangat responsif dan aman.</li>
                        </ul>
                        <a href="https://github.com/fadlifahrul24/UMKM_digital" target="_blank" class="inline-flex items-center mt-4 text-sky-400 font-semibold hover:text-sky-300 group-hover:underline underline-offset-4 decoration-2 text-sm">
                            Lihat Repositori GitHub 
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                    
                    <div class="relative h-[250px] mt-8 rounded-2xl border border-white/10 bg-[#08080c] flex items-center justify-center p-4 group/img4 overflow-hidden shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-br from-sky-500/10 to-cyan-500/10 opacity-50 group-hover/img4:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative z-10 w-full h-full flex flex-col items-center justify-center space-y-4 opacity-90 group-hover/img4:opacity-100 group-hover/img4:scale-105 group-hover/img4:-translate-y-2 transition-all duration-700">
                            <div class="p-4 rounded-full bg-sky-500/20 border border-sky-500/30 text-sky-400">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </div>
                            <p class="text-xs text-zinc-500 font-medium text-center">Aplikasi Toko Daring & Inventaris</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="sertifikasi" class="border-t border-purple-500/10 py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12 flex items-center">Sertifikasi <span class="mx-3 text-purple-500">&</span> Pelatihan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/30 transition-all duration-300">
                    <span class="text-xs font-semibold text-purple-400 mb-2 block">Dec 2024</span>
                    <h3 class="text-lg font-bold text-white">Database Design and Programming with SQL</h3>
                    <p class="text-sm text-zinc-500 font-medium mt-1">Oracle Academy</p>
                    <p class="text-sm text-zinc-400 mt-3">Sertifikasi resmi yang memvalidasi kompetensi dalam merancang arsitektur basis data, pemodelan data relasional, serta penguasaan tingkat lanjut bahasa pemrograman SQL untuk pengelolaan data skala industri.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/30 transition-all duration-300">
                    <span class="text-xs font-semibold text-purple-400 mb-2 block">Dec 2025</span>
                    <h3 class="text-lg font-bold text-white">Introduction to Networks</h3>
                    <p class="text-sm text-zinc-500 font-medium mt-1">Cisco Networking Academy</p>
                    <p class="text-sm text-zinc-400 mt-3">Sertifikat kompetensi yang memvalidasi pemahaman tentang arsitektur jaringan komputer, IP addressing, protokol komunikasi data, konfigurasi perangkat, serta dasar-dasar keamanan dan routing.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/30 transition-all duration-300">
                    <span class="text-xs font-semibold text-purple-400 mb-2 block">Dec 2024</span>
                    <h3 class="text-lg font-bold text-white">Indonesian Chatbot Championship Challenge (IC3)</h3>
                    <p class="text-sm text-zinc-500 font-medium mt-1">Tema: Generative AI</p>
                    <p class="text-sm text-zinc-400 mt-3">Sertifikat penghargaan atas partisipasi aktif mengikuti rangkaian pelatihan intensif dan kompetisi tingkat nasional dalam merancang serta mengembangkan solusi asisten virtual pintar berbasis teknologi Generative AI.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/5 hover:border-purple-500/30 transition-all duration-300">
                    <span class="text-xs font-semibold text-purple-400 mb-2 block">Dec 2024</span>
                    <h3 class="text-lg font-bold text-white">Online Data Entry Professional Training</h3>
                    <p class="text-sm text-zinc-500 font-medium mt-1">Project Al-Furqan Kota Bekasi</p>
                    <p class="text-sm text-zinc-400 mt-3">Sertifikat kelulusan pelatihan profesional daring yang mencakup manajemen pengelolaan data digital, akurasi input informasi, dan efisiensi pengelolaan basis data dasar.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="organisasi" class="border-t border-purple-500/10 bg-gradient-to-t from-[#010103] to-transparent py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12 text-center">Pengalaman Organisasi <span class="text-purple-500">&</span> Relawan</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="p-6 md:p-8 rounded-2xl border border-white/5 bg-white/[0.01] hover:bg-white/[0.03] hover:border-purple-500/20 transition-all duration-300">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-bold text-white">Head of Communications & Information Division</h3>
                        <span class="text-sm font-medium text-purple-400 bg-purple-500/10 px-3 py-1 rounded-full whitespace-nowrap">Jan 2026 - Sekarang</span>
                    </div>
                    <p class="text-md font-medium text-zinc-400 mb-4">Permikomas Regional 6 DKI Jakarta</p>
                    <p class="text-sm text-zinc-500 leading-relaxed">Bertanggung jawab memimpin divisi komunikasi dan informasi di tingkat regional DKI Jakarta. Mengelola alur penyebaran informasi organisasi, menjaga hubungan antar-anggota wilayah, serta mengkoordinasikan publikasi media digital.</p>
                </div>
                <div class="p-6 md:p-8 rounded-2xl border border-white/5 bg-white/[0.01] hover:bg-white/[0.03] hover:border-purple-500/20 transition-all duration-300">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-bold text-white">Ketua Umum / Chairman</h3>
                        <span class="text-sm font-medium text-purple-400 bg-purple-500/10 px-3 py-1 rounded-full whitespace-nowrap">Jul 2025 - Sekarang</span>
                    </div>
                    <p class="text-md font-medium text-zinc-400 mb-4">Himpunan Mahasiswa Teknik Informatika (HIMTI)</p>
                    <p class="text-sm text-zinc-500 leading-relaxed">Memimpin dan bertanggung jawab penuh atas jalannya organisasi mahasiswa tingkat program studi Teknik Informatika. Mengkoordinasikan berbagai program kerja divisi, membangun relasi internal dan eksternal kampus, serta mengasah keterampilan kepemimpinan serta manajemen tim IT berskala organisasi mahasiswa.</p>
                </div>
                <div class="p-6 md:p-8 rounded-2xl border border-white/5 bg-white/[0.01] hover:bg-white/[0.03] hover:border-purple-500/20 transition-all duration-300">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-2">
                        <h3 class="text-xl font-bold text-white">Head of Spiritual and Mental Development Division</h3>
                        <span class="text-sm font-medium text-zinc-500 bg-white/5 border border-white/10 px-3 py-1 rounded-full whitespace-nowrap">Jan 2020 - Dec 2021</span>
                    </div>
                    <p class="text-md font-medium text-zinc-400 mb-4">Karang Taruna Tunas Karya 06</p>
                    <p class="text-sm text-zinc-500 leading-relaxed">Memimpin divisi pengembangan mental dan spiritual di organisasi kepemudaan tingkat lokal. Menyusun dan menyelenggarakan program kegiatan sosial keagamaan serta pembinaan karakter pemuda di lingkungan masyarakat.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="border-t border-purple-500/20 py-24 bg-[#010103]">
        <div class="max-w-6xl mx-auto px-6 text-center space-y-8">
            <div class="max-w-2xl mx-auto space-y-6">
                <h2 class="text-4xl md:text-5xl font-black tracking-tight text-white">Mari Berkolaborasi.</h2>
                <p class="text-lg text-zinc-400 leading-relaxed">
                    Terbuka untuk mendiskusikan peluang proyek baru, arsitektur sistem, atau peran Full-Stack Engineer di perusahaan Anda.
                </p>
                
                <div class="pt-6 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="mailto:fadlifahrulzani@gmail.com" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 rounded-full bg-white text-black font-bold hover:bg-zinc-200 hover:scale-105 transition-all duration-300 shadow-[0_0_30px_rgba(255,255,255,0.1)]">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Kirim Email
                    </a>
                    
                    <a href="https://wa.me/6285156831914" target="_blank" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 rounded-full bg-[#0a0a0a] border border-purple-500/50 text-white font-bold hover:bg-purple-500/10 hover:border-purple-400 hover:scale-105 transition-all duration-300 shadow-[0_0_30px_rgba(147,51,234,0.1)]">
                        <svg class="w-5 h-5 mr-2 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0C5.385 0 0 5.384 0 12.03c0 2.124.553 4.195 1.604 6.015L.175 23.824l5.922-1.55A12.002 12.002 0 0012.031 24c6.645 0 12.03-5.384 12.03-12.03S18.676 0 12.031 0zm0 21.98c-1.802 0-3.565-.483-5.115-1.398l-.367-.216-3.8.995.998-3.705-.237-.378A9.972 9.972 0 012.02 12.03c0-5.53 4.502-10.033 10.033-10.033s10.033 4.502 10.033 10.033-4.502 10.032-10.033 10.032zm5.513-7.533c-.302-.152-1.79-.886-2.067-.986-.277-.101-.48-.152-.682.151-.202.302-.782.986-.958 1.188-.177.202-.354.227-.656.076-.302-.152-1.278-.471-2.434-1.517-.899-.815-1.505-1.82-1.682-2.124-.177-.302-.019-.465.132-.616.136-.137.302-.353.454-.53.151-.177.202-.302.302-.505.101-.202.05-.378-.025-.53-.076-.151-.682-1.643-.934-2.25-.246-.593-.496-.513-.682-.523-.177-.008-.379-.009-.58-.009-.202 0-.53.076-.808.378-.277.302-1.06 1.036-1.06 2.527s1.085 2.932 1.237 3.134c.151.202 2.138 3.257 5.176 4.566.721.311 1.284.498 1.724.637.725.231 1.385.198 1.905.12.585-.088 1.79-.733 2.042-1.44.252-.708.252-1.314.177-1.44-.076-.126-.278-.202-.581-.353z"/></svg>
                        Chat WhatsApp
                    </a>
                </div>
            </div>
            
            <div class="pt-16 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-6 text-sm text-zinc-500">
                <p>&copy; 2026 Fadli Fahrulzani. Hak Cipta Dilindungi.</p>
                <div class="flex flex-wrap items-center justify-center gap-6">
                    <p class="text-zinc-400 font-medium">+62 851 5683 1914</p>
                    <a href="https://instagram.com/caffadli_24/" target="_blank" class="hover:text-purple-400 transition-colors">Instagram</a>
                    <a href="https://github.com/fadlifahrul24" target="_blank" class="hover:text-purple-400 transition-colors">GitHub</a>
                    <a href="https://www.linkedin.com/in/fadli-fahrulzani-8323782a3" target="_blank" class="hover:text-purple-400 transition-colors">LinkedIn</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>