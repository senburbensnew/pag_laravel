@extends('layouts.app')
@section('content')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1d4ed8',
                        accent: '#93c5fd',
                        background: '#f0f9ff'
                    }
                }
            }
        }
    </script>

    <div class="max-w-4xl mx-auto py-8 px-4">
        <!-- Header -->
        <header class="text-left mb-10">
            <h1 class="text-3xl font-bold text-secondary mb-2">
                {{-- <i class="fas fa-bullseye mr-2"></i> --}}
                Programmer un objectif
            </h1>
            <p class="text-gray-600">Bonjour ! <br />Vous êtes invité.e à programmer votre objectif. Suivez les instructions
                !</p>
        </header>

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <form action="#" method="POST">
                @csrf

                <!-- Section 1: Chantier Selection -->
                <div class="p-6 border-b">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-primary w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3">
                            1</div>
                        <h2 class="text-xl font-semibold text-gray-800">1. Choisissez le chantier de travail qui correspond
                            a
                            l'activite a mettre en oeuvre</h2>
                    </div>

                    <div class="ml-11">
                        <p class="text-gray-600 mb-4">Quel chantier ?</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 items-center">
                            <select class="rounded-lg border border-gray-300 p-2">
                                <option disabled selected>Choisir un chantier</option>
                            </select>
                            <span class="text-blue-500 rounded-lg px-4 py-2">
                                <a href="#">Ajouter</a>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- Section 2: Objective Definition -->
                <div class="p-6 border-b">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-primary w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3">
                            2</div>
                        <h2 class="text-xl font-semibold text-gray-800">2. Saisissez l'objectif que vous voulez poursuivre
                            pour
                            contribuer a la realisation de ce chantier</h2>
                    </div>

                    <div class="ml-11">
                        <label class="block text-gray-700 mb-2">Quel objectif ?</label>
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-4">
                            <div class="md:col-span-1">
                                <input type="text" id="objective-code" name="objective_code" value="Obj-01"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                            </div>
                            <div class="md:col-span-4">
                                <input type="text" id="objective" name="objective"
                                    placeholder="Décrivez votre objectif..."
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Timeline -->
                <div class="p-6 border-b">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-primary w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3">
                            3</div>
                        <h2 class="text-xl font-semibold text-gray-800">3. Quand souhaitez-vous le réaliser ?</h2>
                    </div>

                    <div class="ml-11">
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-lightbulb text-yellow-400 text-xl"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        Conseil : Soyez le plus raisonnable que possible.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 mb-2">Date début</label>
                                <input type="date" name="start_date"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Date fin</label>
                                <input type="date" name="end_date"
                                    class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Expected Results -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-primary w-8 h-8 rounded-full flex items-center justify-center text-white font-bold mr-3">
                            4</div>
                        <h2 class="text-xl font-semibold text-gray-800">4. Quels sont les résultats attendus ?</h2>
                    </div>

                    <div class="ml-11">
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-info-circle text-blue-400 text-xl"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-blue-700">
                                        Conseil : Un résultat, en termes pratiques, est une indication claire que l'objectif
                                        fixé a été atteint, permettant ainsi d'évaluer le succès d'une activité et de mieux
                                        planifier les étapes suivantes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4 mb-6">
                            <p class="text-sm font-medium text-gray-700 mb-2">Exemple :</p>
                            <p class="text-sm text-gray-600">Pour un objectif de former des jeunes entrepreneurs, le
                                résultat pourrait être : 20 jeunes entrepreneurs ont complété le programme de formation et
                                lancé leur entreprise.</p>
                        </div>

                        <!-- Result 1 -->
                        <div class="mb-6">
                            <h3 class="font-medium text-lg text-gray-800 mb-3">Résultat 1</h3>
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                                <div class="md:col-span-1">
                                    <input type="text" name="result_codes[]" value="Res-01"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                                </div>
                                <div class="md:col-span-4">
                                    <textarea name="results[]" rows="2" placeholder="Décrivez le résultat attendu..."
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Result 2 -->
                        <div class="mb-6">
                            <h3 class="font-medium text-lg text-gray-800 mb-3">Résultat 2</h3>
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                                <div class="md:col-span-1">
                                    <input type="text" name="result_codes[]" value="Res-02"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                                </div>
                                <div class="md:col-span-4">
                                    <textarea name="results[]" rows="2" placeholder="Décrivez le résultat attendu..."
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Result 3 -->
                        <div class="mb-8">
                            <h3 class="font-medium text-lg text-gray-800 mb-3">Résultat 3</h3>
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                                <div class="md:col-span-1">
                                    <input type="text" name="result_codes[]"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary"
                                        placeholder="Code">
                                </div>
                                <div class="md:col-span-4">
                                    <textarea name="results[]" rows="2" placeholder="Décrivez le résultat attendu..."
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="flex justify-center mt-10">
                            <button type="submit"
                                class="flex items-center bg-primary hover:bg-secondary text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                                <i class="fas fa-save mr-2"></i>Sauvegarder
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Set default dates for the form
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const nextMonth = new Date();
            nextMonth.setMonth(today.getMonth() + 1);

            const formatDate = (date) => {
                return date.toISOString().split('T')[0];
            };

            document.querySelector('input[name="start_date"]').value = formatDate(today);
            document.querySelector('input[name="end_date"]').value = formatDate(nextMonth);
        });
    </script>
@endsection
