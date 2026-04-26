<!DOCTYPE html>
<html class="dark" dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سميرة - مطورة برمجيات</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-base">
    <!-- Top Navigation Bar -->
    <nav class="fixed top-0 w-full z-50 bg-slate-900/60 backdrop-blur-md border-b border-white/10 shadow-[0_8px_32px_0_rgba(225,29,72,0.1)]">
        <div class="flex flex-row-reverse justify-between items-center px-6 py-4 w-full max-w-7xl mx-auto">
            <div class="text-2xl font-bold bg-gradient-to-r from-rose-500 to-purple-500 bg-clip-text text-transparent font-display-lg">سميرة</div>
            <div class="hidden md:flex flex-row-reverse items-center gap-8 font-sans text-sm font-medium">
                <a class="text-rose-500 border-b-2 border-rose-500 pb-1" href="#">الرئيسية</a>
                <a class="text-slate-400 hover:text-rose-300 transition-colors" href="#projects">المشاريع</a>
                <a class="text-slate-400 hover:text-rose-300 transition-colors" href="#skills">المهارات</a>
                <a class="text-slate-400 hover:text-rose-300 transition-colors" href="#journey">السيرة الذاتية</a>
                <a class="text-slate-400 hover:text-rose-300 transition-colors" href="#contact">اتصل بي</a>
            </div>
            <button class="bg-primary-container text-on-primary-container px-6 py-2 rounded-full font-code-label scale-95 active:scale-90 transition-transform">تواصل معي</button>
        </div>
    </nav>

    <main class="pt-24 space-y-32">
        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 order-2 md:order-1">
                <div class="space-y-4">
                    <h1 class="font-display-lg text-display-lg bg-gradient-to-l from-on-background to-rose-400 bg-clip-text text-transparent leading-tight">
                        أهلاً، أنا سميرة - مطورة برمجيات شغوفة ببناء حلول رقمية مبتكرة.
                    </h1>
                    <p class="text-on-surface-variant text-lg leading-relaxed max-w-xl">
                        أنا مهندسة برمجيات متخصصة في تطوير تطبيقات الويب المتكاملة (Full-Stack). أجمع بين دقة الهندسة وجمال التصميم لتقديم تجارب مستخدم استثنائية. أؤمن بأن الكود هو وسيلة لحل مشكلات حقيقية وتحسين حياة الناس.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-gradient-to-r from-primary-container to-secondary-container text-white px-8 py-4 rounded-xl font-code-label flex items-center gap-2 soft-tech-glow">
                        <span class="material-symbols-outlined">visibility</span>
                        عرض المشاريع
                    </button>
                    <button class="border border-outline text-on-background px-8 py-4 rounded-xl font-code-label flex items-center gap-2 hover:bg-white/5 transition-all">
                        <span class="material-symbols-outlined">download</span>
                        تحميل السيرة الذاتية
                    </button>
                </div>
            </div>
            <div class="relative order-1 md:order-2 flex justify-center">
                <div class="w-80 h-80 md:w-96 md:h-96 rounded-full overflow-hidden border-4 border-rose-500/20 relative z-10">
                    <img alt="Samira - Software Developer" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8SMuSFjUXW4SeB_cEzsHm4OhAHZNyrXT__x6OjNRyVdgPd4ZrwslacNG9GR51NKHSwISxIZbb5X9cgfLFg2w3Uy0S_MulnPH0U5QpeK1XCy2BZjgIWY9alp2peshp8vU0iJOHYEBj5OK4ReLFIrpkFw0QkPmra92lZ7Lu5KzOBvlPLR-hLmC5-B7flEbwnED02LMjq2vb2XzffsjRjzGxcnMmgZwq5zJ_9IrzaBCxUX03azB8kiHb-tWztJQra7g2iLrexILXcLCu">
                </div>
                <div class="absolute inset-0 bg-rose-500/10 blur-[100px] -z-0"></div>
                <div class="absolute -top-4 -right-4 bg-surface-container-high p-4 rounded-2xl glass-card flex items-center gap-3">
                    <span class="material-symbols-outlined text-rose-400">code</span>
                    <span class="text-sm font-code-label text-on-background">5+ سنوات خبرة</span>
                </div>
            </div>
        </section>

        <!-- Featured Projects - Bento Grid -->
        <section class="max-w-7xl mx-auto px-6" id="projects">
            <div class="text-center mb-16">
                <h2 class="font-headline-md text-headline-md text-on-background mb-4">مشاريع مختارة</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-rose-500 to-purple-500 mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Large Project 1 -->
                <div class="md:col-span-8 group glass-card rounded-3xl overflow-hidden relative soft-tech-glow">
                    <div class="aspect-video overflow-hidden">
                        <img alt="E-commerce Project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUygZcol4ENY7HaXh9hXI6mzLZLGZvi0g3KTxbHmTLBvRHVfPffkVLUzPXHXf72UQDH71n8waI5UpHOz6I8oTS9ealqQs_FA3REwkuFWMrJSMzEwhyd172YRzyHeGlBNl9eMa6kv40i18KgZIKFdiLM42MOT0moJhrgB6Vq0bfZOkHFJ_mEqrvuxnj20CCd41NEWf2RBzK-Pc-eT4JAIDKB39aV5VEXb3z45jX9sJcXCU8WOZlp4yUJd9ZFJy9Ji7-pvIFbwX6FPoe">
                    </div>
                    <div class="p-8 space-y-4">
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-rose-500/10 text-rose-400 text-xs rounded-full border border-rose-500/20 font-code-label">React</span>
                            <span class="px-3 py-1 bg-purple-500/10 text-purple-400 text-xs rounded-full border border-purple-500/20 font-code-label">Node.js</span>
                            <span class="px-3 py-1 bg-blue-500/10 text-blue-400 text-xs rounded-full border border-blue-500/20 font-code-label">PostgreSQL</span>
                        </div>
                        <h3 class="text-2xl font-bold text-on-background">منصة تجارة إلكترونية متطورة</h3>
                        <p class="text-on-surface-variant leading-relaxed">حل متكامل للتجارة الإلكترونية مع نظام دفع آمن، لوحة تحكم متقدمة، وتتبع مباشر للشحنات.</p>
                        <a class="inline-flex items-center gap-2 text-rose-400 font-medium hover:underline" href="#">مشاهدة التفاصيل <span class="material-symbols-outlined">arrow_back</span></a>
                    </div>
                </div>
                <!-- Small Project 1 -->
                <div class="md:col-span-4 glass-card rounded-3xl overflow-hidden soft-tech-glow flex flex-col">
                    <div class="h-48 overflow-hidden">
                        <img alt="Task Management App" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOK-fSCP1OhnBGTXVSWx-VP6dWFgZUDZK7E8renSLFlNrqjpEddeVp0W6I3ClyvlTptlfAPEYHpTfhNq2L3DEw3XEcrJAUwFzKY9wh2gG5P_zgVhutFepXu3E1a7_CzxZMWC9UHYWfjx-bBvF0CKak45iRfj17JQ-j8DBq4jKAtAZOmaOeg1m-PZYQZMQejwi1jLJR8v7oTFzCOVuFCuhuc4gAS4YP692vFIAvN_TgAOZtZY-mLs5LopCVDDzR8asUsL9L5ARKESoF">
                    </div>
                    <div class="p-6 space-y-3 flex-grow">
                        <span class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-xs rounded-full font-code-label">Flutter</span>
                        <h3 class="text-xl font-bold text-on-background">تطبيق إدارة المهام</h3>
                        <p class="text-sm text-on-surface-variant">تطبيق جوال يركز على الإنتاجية مع مزامنة سحابية وإشعارات ذكية.</p>
                    </div>
                </div>
                <!-- Small Project 2 -->
                <div class="md:col-span-4 glass-card rounded-3xl overflow-hidden soft-tech-glow flex flex-col">
                    <div class="h-48 overflow-hidden">
                        <img alt="Data Analysis Tool" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlinCpYXA3DhAMTVkxA7Ql-37yAVpcKzaV7005e5QeJROeQx6NwR2NyHOIVV3I9jXeJ2UGzgN8izKT_Q6GPfaY8p1f38WzolCC_QxZvDL5OH0lt8hKahZVvJA0CKNes5_y_8_rGV4epbXUBIdNpVoCCOUiQLWUEHJR8BOQAUs9TWHOVAG3J__ND1Vf2VhRPoU1o4dNbLA2eDfDiDY-rEfwjaoUZyNjUqM1F7k-FuyFbEin-i_wuqyaKGFx3dh12_iaWG_s7nROpJhn">
                    </div>
                    <div class="p-6 space-y-3 flex-grow">
                        <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-xs rounded-full font-code-label">Python</span>
                        <h3 class="text-xl font-bold text-on-background">أداة تحليل البيانات</h3>
                        <p class="text-sm text-on-surface-variant">محرك متقدم لتحويل البيانات الضخمة إلى رؤى بصرية تفاعلية.</p>
                    </div>
                </div>
                <!-- Large Project 2 -->
                <div class="md:col-span-8 group glass-card rounded-3xl overflow-hidden relative soft-tech-glow flex flex-col md:flex-row">
                    <div class="md:w-1/2 overflow-hidden">
                        <img alt="AI Chatbot" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAf_PjF38B8x8P0Qbt1ofpLRTaLFzk1thN8ZeOtn2fCY9F1kebqVXWKI584exq-sgHC4aXMLf27JE71beQQej2FM1sJufsPstPTGYd2_WQym6z6y7wgE5_jrlKccdtaHV0-upGBBxjJKfggjnjC3Ja3ZM43vNGj8sIlWxz3C290l7MxU1qOd6O7IfE5tswEhX1BV-6WQwo-Rk_1fqV__gY8VoYGqg7m6r61rx9lb5KNSUC3dGixO-9lmumh_YpMsWxDins_OdjYNUel">
                    </div>
                    <div class="md:w-1/2 p-8 space-y-4 flex flex-col justify-center">
                        <span class="inline-block w-fit px-3 py-1 bg-primary-container text-on-primary-container text-xs rounded-full font-code-label">AI & NLP</span>
                        <h3 class="text-2xl font-bold text-on-background">مساعد ذكي باللغة العربية</h3>
                        <p class="text-on-surface-variant leading-relaxed">بوت محادثة مدعوم بالذكاء الاصطناعي لفهم اللهجات العربية وتقديم استجابات دقيقة.</p>
                        <a class="inline-flex items-center gap-2 text-rose-400 font-medium hover:underline" href="#">مشاهدة الكود <span class="material-symbols-outlined">open_in_new</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="bg-surface-container py-24" id="skills">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="font-headline-md text-headline-md text-on-background mb-4">المهارات والتقنيات</h2>
                    <p class="text-on-surface-variant">أدواتي التي أستخدمها لتحويل الأفكار إلى واقع رقمي</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Frontend -->
                    <div class="p-8 rounded-3xl border border-rose-500/10 bg-slate-900/40 text-center space-y-6">
                        <div class="w-16 h-16 bg-rose-500/10 rounded-2xl flex items-center justify-center mx-auto text-rose-400">
                            <span class="material-symbols-outlined text-3xl">terminal</span>
                        </div>
                        <h3 class="font-bold text-xl text-on-background">Frontend</h3>
                        <ul class="space-y-3 text-on-surface-variant font-code-label">
                            <li>React / Next.js</li>
                            <li>Tailwind CSS</li>
                            <li>TypeScript</li>
                            <li>Framer Motion</li>
                        </ul>
                    </div>
                    <!-- Backend -->
                    <div class="p-8 rounded-3xl border border-purple-500/10 bg-slate-900/40 text-center space-y-6">
                        <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mx-auto text-purple-400">
                            <span class="material-symbols-outlined text-3xl">database</span>
                        </div>
                        <h3 class="font-bold text-xl text-on-background">Backend</h3>
                        <ul class="space-y-3 text-on-surface-variant font-code-label">
                            <li>Node.js / Express</li>
                            <li>Python / Django</li>
                            <li>PostgreSQL / MongoDB</li>
                            <li>REST & GraphQL</li>
                        </ul>
                    </div>
                    <!-- Tools -->
                    <div class="p-8 rounded-3xl border border-rose-500/10 bg-slate-900/40 text-center space-y-6">
                        <div class="w-16 h-16 bg-rose-500/10 rounded-2xl flex items-center justify-center mx-auto text-rose-400">
                            <span class="material-symbols-outlined text-3xl">build</span>
                        </div>
                        <h3 class="font-bold text-xl text-on-background">Tools</h3>
                        <ul class="space-y-3 text-on-surface-variant font-code-label">
                            <li>Git / GitHub</li>
                            <li>Docker / Kubernetes</li>
                            <li>AWS / Vercel</li>
                            <li>Jest / Cypress</li>
                        </ul>
                    </div>
                    <!-- UI/UX -->
                    <div class="p-8 rounded-3xl border border-purple-500/10 bg-slate-900/40 text-center space-y-6">
                        <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mx-auto text-purple-400">
                            <span class="material-symbols-outlined text-3xl">draw</span>
                        </div>
                        <h3 class="font-bold text-xl text-on-background">UI/UX Design</h3>
                        <ul class="space-y-3 text-on-surface-variant font-code-label">
                            <li>Figma</li>
                            <li>Adobe XD</li>
                            <li>Responsive Design</li>
                            <li>Design Systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Career Journey (Timeline) -->
        <section class="max-w-4xl mx-auto px-6" id="journey">
            <div class="text-center mb-16">
                <h2 class="font-headline-md text-headline-md text-on-background mb-4">مسيرتي المهنية</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-rose-500 to-purple-500 mx-auto rounded-full"></div>
            </div>
            <div class="relative border-r-2 border-rose-500/20 pr-8 space-y-12">
                <!-- 2022-Present -->
                <div class="relative">
                    <div class="absolute -right-[41px] top-0 w-5 h-5 bg-rose-500 rounded-full border-4 border-background shadow-[0_0_15px_rgba(225,29,72,0.5)]"></div>
                    <div class="space-y-2">
                        <span class="font-code-label text-rose-400">٢٠٢٢ - الآن</span>
                        <h3 class="text-xl font-bold text-on-background">قائدة فريق تقني (Tech Lead) - شركة نخلة للحلول</h3>
                        <p class="text-on-surface-variant">قيادة فريق من ٨ مطورين لبناء منصات حكومية ذكية، الإشراف على بنية النظام الكلية، وتطوير معايير جودة الكود.</p>
                    </div>
                </div>
                <!-- 2020-2022 -->
                <div class="relative">
                    <div class="absolute -right-[41px] top-0 w-5 h-5 bg-purple-500 rounded-full border-4 border-background"></div>
                    <div class="space-y-2">
                        <span class="font-code-label text-purple-400">٢٠٢٠ - ٢٠٢٢</span>
                        <h3 class="text-xl font-bold text-on-background">مطورة أولى (Senior Developer) - تيك بغداد</h3>
                        <p class="text-on-surface-variant">تطوير تطبيقات جوال متكاملة وتوجيه المطورين المبتدئين. تحسين أداء التطبيقات بنسبة ٤٠٪ من خلال إعادة هيكلة الكود.</p>
                    </div>
                </div>
                <!-- 2018-2020 -->
                <div class="relative">
                    <div class="absolute -right-[41px] top-0 w-5 h-5 bg-rose-500 rounded-full border-4 border-background"></div>
                    <div class="space-y-2">
                        <span class="font-code-label text-rose-400">٢٠١٨ - ٢٠٢٠</span>
                        <h3 class="text-xl font-bold text-on-background">مطورة جونيور (Junior Developer) - ستارت أب إبداع</h3>
                        <p class="text-on-surface-variant">بداية الرحلة في عالم البرمجة، التركيز على تطوير واجهات المواقع باستخدام React وتعلم أسس تطوير الواجهات الخلفية.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logos / Partners -->
        <section class="max-w-7xl mx-auto px-6 py-12 border-y border-white/5 overflow-hidden">
            <div class="flex flex-wrap justify-center items-center gap-16 opacity-40 grayscale hover:grayscale-0 transition-all">
                <span class="font-display-lg text-3xl font-extrabold text-on-background">ZAIN</span>
                <span class="font-display-lg text-3xl font-extrabold text-on-background">ASIACELL</span>
                <span class="font-display-lg text-3xl font-extrabold text-on-background">QI CARD</span>
                <span class="font-display-lg text-3xl font-extrabold text-on-background">MISWAK</span>
                <span class="font-display-lg text-3xl font-extrabold text-on-background">Baly</span>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="max-w-4xl mx-auto px-6 mb-32" id="contact">
            <div class="glass-card rounded-[2rem] p-8 md:p-12">
                <div class="text-center mb-12">
                    <h2 class="font-headline-md text-headline-md text-on-background mb-4">دعنا نتحدث</h2>
                    <p class="text-on-surface-variant">هل لديك مشروع في ذهنك؟ أنا هنا لمساعدتك في تحقيقه.</p>
                </div>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-code-label text-on-background pr-2">الاسم الكامل</label>
                            <input class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 outline-none transition-all text-on-background" placeholder="سميرة علي" type="text">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-code-label text-on-background pr-2">البريد الإلكتروني</label>
                            <input class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 outline-none transition-all text-on-background" placeholder="samira@example.com" type="email">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-code-label text-on-background pr-2">الموضوع</label>
                        <input class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 outline-none transition-all text-on-background" placeholder="استشارة تقنية" type="text">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-code-label text-on-background pr-2">الرسالة</label>
                        <textarea class="w-full bg-slate-950/50 border border-white/10 rounded-xl px-4 py-3 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 outline-none transition-all text-on-background" placeholder="اكتب رسالتك هنا..." rows="5"></textarea>
                    </div>
                    <button class="w-full bg-gradient-to-r from-rose-500 to-purple-600 text-white font-bold py-4 rounded-xl soft-tech-glow flex items-center justify-center gap-2">
                        إرسال الرسالة
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-rose-900/20 w-full mt-auto">
        <div class="flex flex-col md:flex-row-reverse justify-between items-center px-8 py-12 gap-6 w-full max-w-7xl mx-auto">
            <div class="flex gap-6">
                <a class="text-slate-600 hover:text-rose-500 transition-colors" href="#">LinkedIn</a>
                <a class="text-slate-600 hover:text-rose-500 transition-colors" href="#">GitHub</a>
                <a class="text-slate-600 hover:text-rose-500 transition-colors" href="#">Twitter</a>
            </div>
            <div class="font-sans text-xs text-slate-500">
                © ٢٠٢٤ سميرة. جميع الحقوق محفوظة. صُنع بشغف.
            </div>
        </div>
    </footer>
</body>
</html>
