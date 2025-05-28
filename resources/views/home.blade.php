<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen">
        <div class="container mx-auto px-4">
            <div class="flex justify-center mb-3">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="max-w-4xl mx-auto">
                <p class="font-bold text-gray-600 dark:text-gray-300 text-center mb-2">
                    Veuillez sélectionner la fenêtre que vous souhaitez ouvrir.
                </p>
                <p class="text-red-500 dark:text-red-400 text-sm text-center mb-4 px-4">
                    Conformément à la legislation haitienne en vigueur, toute utilisation inappropriée ou violation de
                    cette confidentialité entraînera des sanctions légales. Soyez vigilant(e) et responsable dans
                    l'utilisation de votre accès.
                </p>

                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md mb-8">
                    <div class="text-gray-700 dark:text-gray-300 mb-2 flex items-center gap-1">
                        @auth
                            <span>Bonjour</span>
                            <span class="font-bold">{{ auth()->user()->prenom }} {{ auth()->user()->nom }}</span>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-xs text-blue-600 dark:text-blue-400 underline ml-1">
                                    (déconnexion)
                                </button>
                            </form>
                        @endauth
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">Que souhaitez-vous faire aujourd'hui ?</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
                    <!-- Objective Card -->
                    <div
                        class="group relative bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 ease-in-out transform hover:-translate-y-2">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/30 dark:to-indigo-900/30 opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300">
                        </div>
                        <div class="relative">
                            <div class="mb-4 flex items-center space-x-3">
                                <div class="bg-blue-100 dark:bg-blue-800/40 p-3 rounded-lg">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Programmer un objectif
                                </h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-6 italic">
                                Vous serez redirigé vers la section des objectifs
                            </p>
                            <a href=""
                                class="w-full inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 group-button">
                                <span>Accéder</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Activity Card -->
                    <div
                        class="group relative bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 ease-in-out transform hover:-translate-y-2">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/30 dark:to-emerald-900/30 opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300">
                        </div>
                        <div class="relative">
                            <div class="mb-4 flex items-center space-x-3">
                                <div class="bg-green-100 dark:bg-green-800/40 p-3 rounded-lg">
                                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Programmer une activité
                                </h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-6 italic">
                                Vous serez redirigé vers la section des activités
                            </p>
                            <a href=""
                                class="w-full inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 group-button">
                                <span>Accéder</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Follow-up Card -->
                    <div
                        class="group relative bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 ease-in-out transform hover:-translate-y-2">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-50 to-violet-50 dark:from-purple-900/30 dark:to-violet-900/30 opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300">
                        </div>
                        <div class="relative">
                            <div class="mb-4 flex items-center space-x-3">
                                <div class="bg-purple-100 dark:bg-purple-800/40 p-3 rounded-lg">
                                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Faire des suivis</h3>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-6 italic">
                                Vous serez redirigé vers le tableau de bord
                            </p>
                            <a href=""
                                class="w-full inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-purple-600 to-violet-600 hover:from-purple-700 hover:to-violet-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 group-button">
                                <span>Accéder</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}", 'Succès');
            @endif

            @if (Session::has('error'))
                toastr.error("{{ Session::get('error') }}", 'Erreur');
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}", 'Erreur');
                @endforeach
            @endif
        </script>
    </div>
</body>

</html>
