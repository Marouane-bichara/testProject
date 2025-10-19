<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marouane Bichara - Full Stack Developer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideRight {
      from { opacity: 0; transform: translateX(-50px); }
      to { opacity: 1; transform: translateX(0); }
    }
    .animate-float { animation: float 3s ease-in-out infinite; }
    .animate-fadeIn { animation: fadeIn 0.8s ease-out forwards; }
    .animate-slideRight { animation: slideRight 0.8s ease-out forwards; }
    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .dark .gradient-text {
      background: linear-gradient(135deg, #a78bfa 0%, #ec4899 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">

  <!-- Navbar -->
  <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl md:text-3xl font-bold gradient-text">MB</h1>
      <div class="hidden md:flex items-center space-x-8">
        <a href="#home" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Home</a>
        <a href="#about" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">About</a>
        <a href="#skills" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Skills</a>
        <a href="#projects" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Projects</a>
        <a href="#contact" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Contact</a>
        <button id="theme-toggle" class="p-2 rounded-full bg-purple-100 dark:bg-gray-800 hover:bg-purple-200 dark:hover:bg-gray-700 transition">
          <i data-feather="sun" class="w-5 h-5 hidden dark:block"></i>
          <i data-feather="moon" class="w-5 h-5 block dark:hidden"></i>
        </button>
      </div>
      <div class="md:hidden flex items-center space-x-4">
        <button id="theme-toggle-mobile" class="p-2 rounded-full bg-purple-100 dark:bg-gray-800">
          <i data-feather="sun" class="w-5 h-5 hidden dark:block"></i>
          <i data-feather="moon" class="w-5 h-5 block dark:hidden"></i>
        </button>
        <button id="menu-btn" class="text-purple-600 dark:text-purple-400 focus:outline-none">
          <i data-feather="menu" class="w-8 h-8"></i>
        </button>
      </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t dark:border-gray-800">
      <div class="flex flex-col space-y-4 py-6 px-6">
        <a href="#home" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Home</a>
        <a href="#about" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">About</a>
        <a href="#skills" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Skills</a>
        <a href="#projects" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Projects</a>
        <a href="#contact" class="hover:text-purple-600 dark:hover:text-purple-400 transition font-medium">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="min-h-screen flex items-center justify-center px-6 pt-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <div class="animate-slideRight">
        <p class="text-purple-600 dark:text-purple-400 font-semibold mb-2">👋 Hello, I'm</p>
        <h1 class="text-5xl md:text-7xl font-bold mb-4 gradient-text">Marouane Bichara</h1>
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 dark:text-gray-300 mb-6">Full-Stack Developer</h2>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
          Crafting scalable microservices & cloud solutions with 4 years of experience in modern web technologies.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#contact" class="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full font-semibold hover:shadow-2xl hover:scale-105 transition-all">
            Get In Touch
          </a>
          <a href="#projects" class="px-8 py-3 border-2 border-purple-600 dark:border-purple-400 text-purple-600 dark:text-purple-400 rounded-full font-semibold hover:bg-purple-600 hover:text-white dark:hover:bg-purple-400 dark:hover:text-gray-900 transition-all">
            View Projects
          </a>
        </div>
        <div class="flex gap-6 mt-8">
          <a href="https://github.com/Marouane-bichara" target="_blank" class="p-3 bg-gray-100 dark:bg-gray-800 rounded-full hover:bg-purple-600 hover:text-white dark:hover:bg-purple-400 transition-all hover:scale-110">
            <i data-feather="github" class="w-6 h-6"></i>
          </a>
          <a href="https://www.linkedin.com/in/marouane-bichara-9152012b3/" target="_blank" class="p-3 bg-gray-100 dark:bg-gray-800 rounded-full hover:bg-purple-600 hover:text-white dark:hover:bg-purple-400 transition-all hover:scale-110">
            <i data-feather="linkedin" class="w-6 h-6"></i>
          </a>
          <a href="#" class="p-3 bg-gray-100 dark:bg-gray-800 rounded-full hover:bg-purple-600 hover:text-white dark:hover:bg-purple-400 transition-all hover:scale-110">
            <i data-feather="download" class="w-6 h-6"></i>
          </a>
        </div>
      </div>
      <div class="animate-float hidden md:block">
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl opacity-30"></div>
          <div class="relative bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl p-8 shadow-2xl">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 space-y-4">
              <div class="flex items-center space-x-3">
                <i data-feather="code" class="w-8 h-8 text-purple-600"></i>
                <span class="text-xl font-semibold">Clean Code</span>
              </div>
              <div class="flex items-center space-x-3">
                <i data-feather="zap" class="w-8 h-8 text-purple-600"></i>
                <span class="text-xl font-semibold">Fast Performance</span>
              </div>
              <div class="flex items-center space-x-3">
                <i data-feather="layers" class="w-8 h-8 text-purple-600"></i>
                <span class="text-xl font-semibold">Scalable Architecture</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 px-6 bg-white dark:bg-gray-800">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text">About Me</h2>
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <div class="flex items-start space-x-4">
            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
              <i data-feather="user" class="w-6 h-6 text-purple-600 dark:text-purple-400"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold mb-2">Who I Am</h3>
              <p class="text-gray-600 dark:text-gray-400">Born in 2003, I'm a passionate Full-Stack Developer with a keen eye for building elegant, scalable solutions that make a difference.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
              <i data-feather="book" class="w-6 h-6 text-purple-600 dark:text-purple-400"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold mb-2">Education</h3>
              <p class="text-gray-600 dark:text-gray-400">Studied at <span class="font-semibold text-purple-600 dark:text-purple-400">YouCode - UM6P</span>, where I honed my skills in modern software development and cloud technologies.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg">
              <i data-feather="briefcase" class="w-6 h-6 text-purple-600 dark:text-purple-400"></i>
            </div>
            <div>
              <h3 class="text-xl font-semibold mb-2">Experience</h3>
              <p class="text-gray-600 dark:text-gray-400"><span class="font-semibold text-purple-600 dark:text-purple-400">4 years</span> of hands-on experience building microservices, cloud applications, and full-stack solutions using cutting-edge technologies.</p>
            </div>
          </div>
        </div>
        <div class="bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl p-1">
          <div class="bg-white dark:bg-gray-900 rounded-3xl p-8">
            <h3 class="text-2xl font-bold mb-6 text-center">What I Do</h3>
            <div class="space-y-4">
              <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                <i data-feather="server" class="w-6 h-6 text-purple-600"></i>
                <span class="font-medium">Microservices Architecture</span>
              </div>
              <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                <i data-feather="cloud" class="w-6 h-6 text-purple-600"></i>
                <span class="font-medium">Cloud Solutions (AWS)</span>
              </div>
              <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                <i data-feather="database" class="w-6 h-6 text-purple-600"></i>
                <span class="font-medium">Backend Development</span>
              </div>
              <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                <i data-feather="monitor" class="w-6 h-6 text-purple-600"></i>
                <span class="font-medium">Frontend Development</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text">Skills & Technologies</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="cloud" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">AWS</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="code" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Angular</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="server" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Spring Boot</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="coffee" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Java</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="box" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Docker</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="database" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">MySQL</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="refresh-cw" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">React.js</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="git-merge" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Git</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="code" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">PHP</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="server" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Laravel</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="feather" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Tailwind CSS</p>
        </div>
        <div class="group bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all hover:-translate-y-2 border border-gray-100 dark:border-gray-700">
          <i data-feather="zap" class="w-10 h-10 text-purple-600 dark:text-purple-400 mx-auto mb-3 group-hover:scale-110 transition-transform"></i>
          <p class="text-center font-semibold">Firebase</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-20 px-6 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text">Featured Projects</h2>
      <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="group bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-2xl hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 h-full">
            <div class="p-4 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mb-4">
              <i data-feather="shopping-cart" class="w-8 h-8 text-purple-600 dark:text-purple-400"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Microservice E-Commerce</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Distributed e-commerce platform with Spring Boot and Angular.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Java</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Spring Boot</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Angular</span>
            </div>
          </div>
        </div>
        <div class="group bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-2xl hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 h-full">
            <div class="p-4 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mb-4">
              <i data-feather="users" class="w-8 h-8 text-purple-600 dark:text-purple-400"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Social Media API</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Highly scalable social media microservices architecture.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Spring Boot</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">AWS Lambda</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">PostgreSQL</span>
            </div>
          </div>
        </div>
        <div class="group bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-2xl hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 h-full">
            <div class="p-4 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mb-4">
              <i data-feather="home" class="w-8 h-8 text-purple-600 dark:text-purple-400"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">IoT Home Automation</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">IoT control platform for smart homes with cloud integration.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">AWS IoT</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Angular</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Node.js</span>
            </div>
          </div>
        </div>
        <div class="group bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-2xl hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 h-full">
            <div class="p-4 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mb-4">
              <i data-feather="credit-card" class="w-8 h-8 text-purple-600 dark:text-purple-400"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Payment Microservice</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Secure payment system with microservices architecture.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Java</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Docker</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">RabbitMQ</span>
            </div>
          </div>
        </div>
        <div class="group bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-2xl hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 h-full">
            <div class="p-4 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mb-4">
              <i data-feather="book-open" class="w-8 h-8 text-purple-600 dark:text-purple-400"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Online Learning Platform</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Microservices-based online learning platform.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Angular</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Spring Boot</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">MySQL</span>
            </div>
          </div>
        </div>
        <div class="group bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-2xl hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 h-full">
            <div class="p-4 bg-purple-100 dark:bg-purple-900/30 rounded-xl w-fit mb-4">
              <i data-feather="monitor" class="w-8 h-8 text-purple-600 dark:text-purple-400"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">Cloud Monitoring Tool</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Real-time cloud service monitoring with alerts.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">AWS CloudWatch</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">Node.js</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm">React</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text">Get In Touch</h2>
      <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-1 rounded-3xl">
        <div class="bg-white dark:bg-gray-900 rounded-3xl p-8 md:p-12">
          <p class="text-center text-lg text-gray-600 dark:text-gray-400 mb-8">
            Have a project in mind or want to collaborate? I'd love to hear from you!
          </p>
          <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold mb-2">Name</label>
                <input type="text" placeholder="Your name" class="w-full p-4 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
              </div>
              <div>
                <label class="block text-sm font-semibold mb-2">Email</label>
                <input type="email" placeholder="your@email.com" class="w-full p-4 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
              </div>
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2">Subject</label>
              <input type="text" placeholder="What's this about?" class="w-full p-4 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 transition">
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2">Message</label>
              <textarea placeholder="Tell me about your project..." rows="6" class="w-full p-4 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 transition"></textarea>
            </div>
            <button type="submit" class="w-full py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all flex items-center justify-center space-x-2">
              <span>Send Message</span>
              <i data-feather="send" class="w-5 h-5"></i>
            </button>
          </form>
          <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700 text-center">
            <p class="text-gray-600 dark:text-gray-400 mb-4">Or reach me directly at:</p>
            <a href="mailto:marouane@example.com" class="text-purple-600 dark:text-purple-400 font-semibold text-lg hover:underline">
              marouanebichara08@gmail.com
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-8 px-6 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
      <p class="text-gray-600 dark:text-gray-400">© 2025 Marouane Bichara. All rights reserved.</p>
      <div class="flex gap-6">
        <a href="https://github.com/Marouane-bichara" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-purple-600 dark:hover:text-purple-400 transition">
          <i data-feather="github" class="w-5 h-5"></i>
        </a>
        <a href="https://www.linkedin.com/in/marouane-bichara-9152012b3/" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-purple-600 dark:hover:text-purple-400 transition">
          <i data-feather="linkedin" class="w-5 h-5"></i>
        </a>
        <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-purple-600 dark:hover:text-purple-400 transition">
          <i data-feather="mail" class="w-5 h-5"></i>
        </a>
      </div>
    </div>
  </footer>

  <script>
    // Initialize feather icons
    feather.replace();

    // Dark mode toggle
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const html = document.documentElement;

    // Check for saved theme preference or default to dark mode
    let currentTheme = 'dark'; // Default to dark
    try {
      currentTheme = localStorage.getItem('theme') || 'dark';
    } catch (e) {
      console.log('localStorage not available');
    }
    
    if (currentTheme === 'dark') {
      html.classList.add('dark');
    }

    function toggleTheme() {
      html.classList.toggle('dark');
      const theme = html.classList.contains('dark') ? 'dark' : 'light';
      try {
        localStorage.setItem('theme', theme);
      } catch (e) {
        console.log('localStorage not available');
      }
      // Re-initialize icons after theme change
      setTimeout(() => feather.replace(), 10);
    }

    themeToggle.addEventListener('click', toggleTheme);
    themeToggleMobile.addEventListener('click', toggleTheme);

    // Mobile menu toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Navbar background on scroll
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 100) {
        nav.classList.add('shadow-xl');
      } else {
        nav.classList.remove('shadow-xl');
      }
    });
  </script>

</body>
</html>