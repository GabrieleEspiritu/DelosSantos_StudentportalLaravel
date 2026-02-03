<!DOCTYPE html> <html lang="en" class="light"> <head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>@yield('title', 'Student Portal')</title> <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet"> <script src="https://cdn.tailwindcss.com"></script> <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> <script>
        tailwind.config = { // Configures Tailwind specific settings.
            darkMode: 'class', // Tells Tailwind to look for a 'class="dark"' on the HTML tag.
            theme: { // Opens theme customization.
                extend: { // Allows us to add new colors without removing default ones.
                    colors: { // Defines our custom color palette.
                        primary: '#ec4899', // Adds a custom pink color named 'primary'.
                        primaryHover: '#db2777', // Adds a darker pink for hover states.
                        darkBg: '#111827', // Adds a dark color for background.
                        darkCard: '#1f2937', // Adds a dark gray for cards.
                    },
                    fontFamily: { 'sans': ['Quicksand', 'sans-serif'] } // Sets Quicksand as the default font.
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-darkBg dark:text-gray-200 transition-colors duration-300 font-sans flex flex-col min-h-screen"
      x-data="{ darkMode: localStorage.getItem('theme') === 'dark', toggle() { this.darkMode = !this.darkMode; localStorage.setItem('theme', this.darkMode ? 'dark' : 'light'); if(this.darkMode) document.documentElement.classList.add('dark'); else document.documentElement.classList.remove('dark'); } }"
      x-init="$watch('darkMode', val => val ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark')); if(darkMode) document.documentElement.classList.add('dark');">

    <nav class="bg-white dark:bg-darkCard shadow-md border-b border-pink-100 dark:border-gray-700 sticky top-0 z-50"> <div class="max-w-7xl mx-auto px-4"> <div class="flex justify-between h-16"> <div class="flex items-center"> <a href="{{ route('home') }}" class="text-2xl font-bold text-primary dark:text-pink-400">Student<span class="text-gray-700 dark:text-white">Portal</span></a> </div>
                <div class="flex items-center space-x-6"> <a href="{{ route('home') }}" class="hover:text-primary dark:hover:text-pink-400 font-medium transition">Home</a> <a href="{{ route('students.index') }}" class="hover:text-primary dark:hover:text-pink-400 font-medium transition">Students</a> <a href="{{ route('students.create') }}" class="hover:text-primary dark:hover:text-pink-400 font-medium transition">Add Student</a> <button @click="toggle()" class="p-2 bg-pink-50 dark:bg-gray-700 rounded-full text-primary dark:text-pink-400"> <span x-show="!darkMode">☀️</span> <span x-show="darkMode">🌙</span> </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8"> @yield('content') </main>

    <footer class="bg-white dark:bg-darkCard border-t border-pink-100 dark:border-gray-700 py-6 text-center text-sm text-gray-500"> &copy; {{ date('Y') }} Student Portal System. </footer>
</body>
</html>