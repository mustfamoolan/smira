<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سميرة | إبداع باللون الوردي</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', 'Outfit', sans-serif;
            background-color: #fffafa;
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(255, 133, 161, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 90% 90%, rgba(251, 207, 232, 0.15) 0%, transparent 50%);
            color: #4a1d1f;
            overflow-x: hidden;
        }

        .gradient-text {
            background: linear-gradient(135deg, #ff85a1 0%, #ff4d91 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-glow {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 133, 161, 0.1) 0%, transparent 70%);
            filter: blur(60px);
            z-index: -1;
        }

        .glass-nav {
            background: rgba(255, 250, 250, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 133, 161, 0.1);
        }

        .project-card {
            background: white;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 133, 161, 0.1);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(255, 133, 161, 0.15);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
        }
        
        .float-anim {
            animation: float 5s ease-in-out infinite;
        }

        .soft-shadow {
            box-shadow: 0 10px 30px rgba(255, 133, 161, 0.1);
        }
    </style>
</head>
<body class="selection:bg-primary/20">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
            <div class="text-3xl font-display italic font-bold gradient-text tracking-tighter">سميرة</div>
            
            <div class="hidden md:flex gap-10 text-sm font-bold">
                <a href="#" class="text-primary transition-colors">الرئيسية</a>
                <a href="#projects" class="text-on-background/50 hover:text-primary transition-colors">أعمالي</a>
                <a href="#skills" class="text-on-background/50 hover:text-primary transition-colors">مهاراتي</a>
                <a href="#contact" class="text-on-background/50 hover:text-primary transition-colors">تواصل</a>
            </div>

            <button class="px-7 py-2.5 rounded-full bg-primary text-white shadow-lg shadow-primary/20 hover:scale-105 transition-all text-sm font-bold">
                ابدئي الآن
            </button>
        </div>
    </nav>

    <main class="relative">
        <!-- Hero Section -->
        <section class="min-h-screen flex items-center pt-24 overflow-hidden relative">
            <div class="hero-glow top-0 right-[-150px]"></div>
            <div class="hero-glow bottom-[-100px] left-[-150px]"></div>

            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center w-full">
                <div class="space-y-10 z-10 text-center lg:text-right">
                    <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white border border-primary/20 text-primary text-xs font-black tracking-widest uppercase soft-shadow">
                        <span class="w-2.5 h-2.5 rounded-full bg-primary animate-ping"></span>
                        مرحباً بكِ في عالمي الوردي
                    </div>
                    
                    <h1 class="text-6xl lg:text-[5.5rem] font-display font-bold leading-[1.05] text-[#3d1a1c]">
                        أصمم <span class="gradient-text italic">بأناقة</span> <br> 
                        وأبرمج <span class="text-primary italic">بذكاء</span>
                    </h1>
                    
                    <p class="text-xl text-on-background/70 leading-relaxed max-w-xl mx-auto lg:mr-0">
                        أنا سميرة، مطورة برمجيات أحول الأفكار إلى تجارب رقمية تنبض بالحياة والجمال. أهتم بأدق التفاصيل لنصنع معاً شيئاً مذهلاً.
                    </p>

                    <div class="flex flex-wrap gap-6 justify-center lg:justify-start pt-4">
                        <a href="#projects" class="px-10 py-4.5 rounded-2xl bg-gradient-to-r from-primary to-accent text-white font-bold shadow-xl shadow-primary/30 hover:translate-y-[-4px] transition-all flex items-center gap-3">
                            مشاهدة أعمالي
                            <span class="material-symbols-outlined font-bold">arrow_left_alt</span>
                        </a>
                        <a href="#contact" class="px-10 py-4.5 rounded-2xl bg-white border border-primary/10 hover:border-primary/30 transition-all font-bold soft-shadow">
                            تحدثي معي
                        </a>
                    </div>
                </div>

                <div class="relative flex justify-center items-center">
                    <div class="relative w-full aspect-square max-w-lg">
                        <!-- Floral/Abstract Decorations -->
                        <div class="absolute -top-12 -left-12 w-48 h-48 bg-primary/10 rounded-full blur-3xl opacity-60 float-anim"></div>
                        <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-secondary/20 rounded-full blur-3xl opacity-60" style="animation-delay: 2s"></div>
                        
                        <!-- Main Image Frame -->
                        <div class="relative z-10 w-full h-full rounded-[40px] overflow-hidden border-[12px] border-white shadow-2xl float-anim">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop" 
                                 alt="سميرة" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
                        </div>

                        <!-- Floating Badges -->
                        <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl z-20 shadow-2xl border border-primary/5">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined font-bold">favorite</span>
                                </div>
                                <div>
                                    <div class="text-xl font-black text-primary">+١٠٠</div>
                                    <div class="text-[10px] font-bold text-on-background/40 uppercase tracking-widest">عميلة سعيدة</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="py-40 relative">
            <!-- Decorative Elements -->
            <div class="absolute top-1/4 left-0 w-96 h-96 bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
            <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-secondary/5 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center space-y-4 mb-24">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-primary/5 text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-4">معرض الإبداع</div>
                    <h2 class="text-5xl md:text-6xl font-display font-bold text-[#3d1a1c]">أعمال <span class="gradient-text italic underline decoration-primary/20 underline-offset-8">تنبض</span> بالجمال</h2>
                    <p class="text-on-background/50 max-w-lg mx-auto">مجموعة مختارة من المشاريع التي تجمع بين دقة التنفيذ ورقّي التصميم.</p>
                </div>

                <!-- Bento Grid Layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:grid-rows-3">
                    
                    <!-- Project 1: Featured Large -->
                    <div class="lg:col-span-2 lg:row-span-2 group relative overflow-hidden rounded-[3rem] bg-white border border-primary/10 hover:border-primary/30 transition-all duration-700 soft-shadow">
                        <div class="aspect-[4/5] lg:aspect-auto h-full relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#3d1a1c]/90 via-[#3d1a1c]/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
                            
                            <div class="absolute inset-0 p-10 flex flex-col justify-end translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <div class="flex gap-2 mb-4 translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-100">
                                    <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-white text-[10px] font-bold">موقع إلكتروني</span>
                                    <span class="px-3 py-1 rounded-full bg-primary text-white text-[10px] font-bold">الأكثر تميزاً</span>
                                </div>
                                <h3 class="text-3xl font-bold text-white mb-2">متجر الأوركيد للزهور</h3>
                                <p class="text-white/70 text-sm max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">أول منصة عربية تدمج بين الذكاء الاصطناعي وتنسيق الزهور الطبيعية.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1512428559083-a401c338917e?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-primary uppercase mb-2 tracking-widest">UI/UX</div>
                            <h3 class="text-xl font-bold">تطبيق "جمالكِ"</h3>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1493421416290-99a87242ad2d?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-secondary uppercase mb-2 tracking-widest">تطوير خاص</div>
                            <h3 class="text-xl font-bold">منصة المدربات</h3>
                        </div>
                    </div>

                    <!-- Project 4: Wide -->
                    <div class="lg:col-span-2 group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-[2/1] relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1490114538077-0a7f8cb49891?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-transparent"></div>
                            <div class="absolute inset-0 p-8 flex items-center">
                                <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl max-w-[200px] border border-primary/5">
                                    <div class="text-[10px] font-bold text-primary mb-1 uppercase tracking-widest">جديد</div>
                                    <h3 class="text-lg font-bold">تطبيق "يومياتي"</h3>
                                    <p class="text-[10px] text-on-background/60 mt-1">تنظيم ذكي للوقت.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a18b5ce3377?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-accent uppercase mb-2 tracking-widest">E-Commerce</div>
                            <h3 class="text-xl font-bold">مجوهرات ياقوت</h3>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1506368249639-73a05d6f6488?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-secondary uppercase mb-2 tracking-widest">App Design</div>
                            <h3 class="text-xl font-bold">وصفات جدتي</h3>
                        </div>
                    </div>

                    <!-- Project 7 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1518310383802-640c2de311b2?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-primary uppercase mb-2 tracking-widest">Fitness</div>
                            <h3 class="text-xl font-bold">منصة "لياقة"</h3>
                        </div>
                    </div>

                    <!-- Project 8 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-accent uppercase mb-2 tracking-widest">Reading</div>
                            <h3 class="text-xl font-bold">مكتبة "قراءة"</h3>
                        </div>
                    </div>

                    <!-- Project 9 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1473448912268-2022ce9509d8?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-secondary uppercase mb-2 tracking-widest">Handmade</div>
                            <h3 class="text-xl font-bold">متجر "شموع"</h3>
                        </div>
                    </div>

                    <!-- Project 10 -->
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white border border-primary/10 soft-shadow">
                        <div class="aspect-square relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-6">
                            <div class="text-[10px] font-black text-primary uppercase mb-2 tracking-widest">Travel</div>
                            <h3 class="text-xl font-bold">تطبيق "رحلتي"</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-40 bg-white/60 relative overflow-hidden">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/5 rounded-full blur-[150px] pointer-events-none"></div>
            
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center space-y-4 mb-24">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-primary/5 text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-4">قوتي التقنية</div>
                    <h2 class="text-5xl md:text-6xl font-display font-bold text-[#3d1a1c]">مهاراتي <span class="gradient-text italic">والأدوات</span></h2>
                    <p class="text-on-background/50 max-w-lg mx-auto">أستخدم أحدث التقنيات لبناء حلول برمجية متكاملة وقابلة للتوسع.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    <!-- Web Development -->
                    <div class="glass-panel p-10 rounded-[3rem] border-primary/10 space-y-8 hover:translate-y-[-10px] transition-all duration-500 shadow-xl shadow-primary/5">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-3xl font-bold">language</span>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold">تطوير الويب</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Laravel (PHP)
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> HTML5 / CSS3 / JS
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Tailwind CSS
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mobile Development -->
                    <div class="glass-panel p-10 rounded-[3rem] border-secondary/10 space-y-8 hover:translate-y-[-10px] transition-all duration-500 shadow-xl shadow-secondary/5">
                        <div class="w-16 h-16 bg-secondary/20 rounded-2xl flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined text-3xl font-bold">smartphone</span>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold">تطوير الموبايل</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Flutter (Dart)
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Firebase Integration
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Cross-platform Apps
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Desktop & Windows -->
                    <div class="glass-panel p-10 rounded-[3rem] border-accent/10 space-y-8 hover:translate-y-[-10px] transition-all duration-500 shadow-xl shadow-accent/5">
                        <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center text-accent">
                            <span class="material-symbols-outlined text-3xl font-bold">desktop_windows</span>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold">أنظمة ويندوز</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent"></span> C# .NET Desktop
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Electron JS
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-accent"></span> Python Scripting
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Cloud & Infrastructure -->
                    <div class="glass-panel p-10 rounded-[3rem] border-primary/10 space-y-8 hover:translate-y-[-10px] transition-all duration-500 shadow-xl shadow-primary/5">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-3xl font-bold">cloud_done</span>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold">السيرفرات والبيانات</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> MySQL / Databases
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Docker Containers
                                </li>
                                <li class="flex items-center gap-3 text-sm font-semibold text-on-background/70">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Shared / VPS / Cloud
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section id="contact" class="py-40">
            <div class="max-w-4xl mx-auto px-6">
                <div class="bg-gradient-to-br from-primary/20 to-secondary/20 rounded-[3.5rem] p-16 md:p-24 text-center space-y-10 relative overflow-hidden border-2 border-white shadow-2xl">
                    <div class="space-y-4">
                        <h2 class="text-5xl md:text-6xl font-display font-bold text-[#3d1a1c]">لنصنع شيئاً <span class="gradient-text italic">ساحراً</span></h2>
                        <p class="text-on-background/70 text-xl font-medium">
                            أنا هنا لمساعدتكِ في تحقيق رؤيتكِ الرقمية بأفضل صورة ممكنة.
                        </p>
                    </div>
                    
                    <div class="pt-4">
                        <a href="mailto:hello@samira.com" class="inline-block px-14 py-5 rounded-full bg-primary text-white font-black text-xl shadow-2xl shadow-primary/40 hover:scale-110 transition-transform active:scale-95">
                            ابدئي مشروعكِ الآن
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-16 text-center">
        <div class="text-sm font-black text-primary tracking-[0.2em] uppercase mb-4">سميرة &copy; ٢٠٢٦</div>
        <div class="text-xs text-on-background/30 italic">صُمم بكل حب ليناسب ذوقكِ الرفيع</div>
    </footer>

</body>
</html>
