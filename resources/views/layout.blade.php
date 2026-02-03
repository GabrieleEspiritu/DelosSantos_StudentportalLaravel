<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <!-- Meta tags for character encoding and mobile responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title - @yield('title') allows each page to set its own title -->
    <title>@yield('title', 'Student Portal')</title>
    
    <!-- Load the Quicksand font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS - utility framework for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js - lightweight JavaScript framework for interactive features -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Configure Tailwind CSS - customize colors, fonts, and dark mode -->
    <script>
        tailwind.config = {
            darkMode: 'class', // Enable dark mode by adding 'dark' class to HTML
            theme: {
                extend: {
                    colors: {
                        primary: '#ec4899', // Pink color for main buttons and links
                        primaryHover: '#db2777', // Darker pink for hover effects
                        darkBg: '#111827', // Dark background color
                        darkCard: '#1f2937', // Dark card/container color
                    },
                    fontFamily: { 'sans': ['Quicksand', 'sans-serif'] } // Use Quicksand font throughout
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-darkBg dark:text-gray-200 transition-colors duration-300 font-sans flex flex-col min-h-screen"
      x-data="{ darkMode: localStorage.getItem('theme') === 'dark', toggle() { this.darkMode = !this.darkMode; localStorage.setItem('theme', this.darkMode ? 'dark' : 'light'); if(this.darkMode) document.documentElement.classList.add('dark'); else document.documentElement.classList.remove('dark'); } }"
      x-init="$watch('darkMode', val => val ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark')); if(darkMode) document.documentElement.classList.add('dark');">
    <!-- Alpine.js: Manages dark mode toggle - saves user preference to localStorage -->
    <!-- Navigation bar - sticky stays at top while scrolling -->
    <nav class="bg-white dark:bg-darkCard shadow-md border-b border-pink-100 dark:border-gray-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <!-- Logo - clickable link to home page -->
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-primary dark:text-pink-400">Student<span class="text-gray-700 dark:text-white">Portal</span></a>
                </div>
                <!-- Navigation menu links -->
                <div class="flex items-center space-x-6">
                    <!-- Home link -->
                    <a href="{{ route('home') }}" class="hover:text-primary dark:hover:text-pink-400 font-medium transition">Home</a>
                    <!-- Students list link -->
                    <a href="{{ route('students.index') }}" class="hover:text-primary dark:hover:text-pink-400 font-medium transition">Students</a>
                    <!-- Create new student link -->
                    <a href="{{ route('students.create') }}" class="hover:text-primary dark:hover:text-pink-400 font-medium transition">Add Student</a>
                    <!-- Dark mode toggle button -->
                    <button @click="toggle()" class="p-2 bg-pink-50 dark:bg-gray-700 rounded-full text-primary dark:text-pink-400">
                        <span x-show="!darkMode">☀️</span><span x-show="darkMode">🌙</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content area - each page fills this with @yield('content') -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer - displayed at the bottom of every page -->
    <footer class="bg-white dark:bg-darkCard border-t border-pink-100 dark:border-gray-700 py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Student Portal System.
    </footer>
</body>
</html>