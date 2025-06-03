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

    <div class="mx-auto py-8 px-4">
        <!-- Header -->
        <header class="text-left mb-10 bg-white rounded-xl p-6 shadow-lg">
            <h1 class="text-3xl font-bold text-secondary mb-2">
                Programmer un chantier
            </h1>
        </header>

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-lg">
            <form action="#" method="POST" class="grid grid-cols-2">
                @csrf
                <div>
                    <div class="p-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Quel chantier ?</label>
                            <div class="mb-4">
                                <div class="md:col-span-1 mb-4">
                                    <input type="text" id="chantier-code" name="chantier_code" placeholder="Chant-01"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">
                                </div>
                                <div class="md:col-span-4 mb-2">
                                    <textarea id="chantier" name="chantier" placeholder="Description"
                                        class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary"></textarea>
                                </div>
                                <div class="text-right">
                                    <x-primary-button>
                                        {{ __('Ajouter') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
