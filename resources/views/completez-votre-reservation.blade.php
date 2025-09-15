@extends('layout')

@section('title', 'Complétez votre réservation')

@section('content')

    <!-- MAIN -->
    <div class="container mx-auto max-w-6xl mb-64 md:mb-40 p-4 md:p-0 ">
        <p class="text-xl font-bold text-gray-800 leading-tight mb-8 pt-8">
            Complétez votre réservation
        </p>

        <!-- Cards -->
        <div class="flex flex-col md:flex-row gap-8 md:gap-[73px]">
            <!-- CARD 1 -->
            <div class="w-full md:w-[500px] bg-white rounded-[37px] shadow-md overflow-hidden">
                <div class="flex flex-col items-center justify-center bg-gray-100 py-6">
                    <p class="text-lg font-bold text-gray-800">Basic</p>
                    <p class="text-sm text-gray-600 mt-2">
                        Votre test psychotechnique simple
                    </p>
                </div>

                <div class="bg-white">
                    <!-- Prix -->
                    <div class="flex flex-col items-center text-center p-6 border-b border-gray-200">
                        <p class="text-4xl font-bold flex items-center">
                            <span class="text-2xl">+</span>0€
                        </p>
                        <button
                            class="bg-[#F2F3F5] shadow-md mt-3 px-6 py-3 rounded-xl flex items-center gap-2 cursor-pointer transition">
                            <div class="h-[15px] w-[15px] bg-white rounded-full"></div>
                            <p class="text-sm text-[#353535] font-bold ">Sélectionne</p>
                        </button>
                    </div>

                    <!-- Features -->
                    <div class="flex flex-col gap-4 max-w-xs mx-auto py-6 px-5">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-hand-pointer text-gray-800 text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-gray-800 text-md"></i>
                            <p class="text-gray-800 text-md">
                                Annulation jusqu'à 48 heures
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="far fa-file-alt text-gray-800 text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 (vert) -->
            <div class="w-full md:w-[500px] bg-white rounded-[37px] shadow-md overflow-hidden border-[#0DBC0D] border-2">
                <div class="flex flex-col items-center justify-center bg-[#0DBC0D] py-6">
                    <p class="text-lg font-bold text-white">Assurance</p>
                    <p class="text-sm text-white mt-2">
                        Votre test psychotechnique simple
                    </p>
                </div>

                <div class="bg-white">
                    <!-- Prix -->
                    <div class="flex flex-col items-center text-center p-6 border-b border-gray-200">
                        <p class="text-4xl font-bold flex items-center">
                            <span class="text-2xl">+</span>40 €
                        </p>
                        <p class="text-xs py-1.5">
                            A peine le prix d'un resto
                        <p>
                            <button
                                class="bg-[#0DBC0D] shadow-md mt-3 px-6 py-3 rounded-xl flex items-center gap-2 cursor-pointer transition">
                                <div class="h-[15px] w-[15px] bg-white rounded-full"></div>
                                <p class="text-sm text-white font-bold ">Sélectionner</p>
                            </button>
                    </div>

                    <!-- Features -->
                    <div class="flex flex-col gap-4 max-w-xs mx-auto py-6 px-5">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-hand-pointer text-[#0DBC0D] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-[#0DBC0D] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Annulation jusqu'à 48 heures
                            </p>

                        </div>
                        <div class="flex items-center gap-2">
                            <i class="far fa-file-alt text-[#0DBC0D] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 (bleu) -->
            <div class="w-full md:w-[500px] bg-white rounded-[37px] shadow-md overflow-hidden border-[#36578A] border-2">
                <div class="flex flex-col items-center justify-center bg-[#36578A] py-6">
                    <p class="text-lg font-bold text-white">Complet</p>
                    <p class="text-sm text-white mt-2">
                        Votre test psychotechnique simple
                    </p>
                </div>

                <div class="bg-white">
                    <!-- Prix -->
                    <div class="flex flex-col items-center text-center p-6 border-b border-gray-200">
                        <p class="text-4xl font-bold flex items-center">
                            <span class="text-2xl">+</span>60€
                        </p>
                        <p class="text-xs py-1.5">
                            A peine le prix d'un resto
                        <p>
                            <button
                                class="bg-[#36578A] shadow-md mt-3 px-6 py-3 rounded-xl flex items-center gap-2 cursor-pointer transition">
                                <div class="h-[15px] w-[15px] bg-white rounded-full"></div>
                                <p class="text-sm text-white font-bold ">Sélectionner</p>
                            </button>
                    </div>

                    <!-- Features -->
                    <div class="flex flex-col gap-4 max-w-xs mx-auto py-6 px-5">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-hand-pointer text-[#36578A] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-[#36578A] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Annulation jusqu'à 48 heures
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="far fa-file-alt text-[#36578A] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER FIXED -->
    <div class="bg-[#353535] shadow-xl border border-[#70707061] fixed bottom-0 w-full">
        <div class="container mx-auto max-w-6xl flex flex-col md:flex-row justify-between items-center gap-6 py-6">
            <!-- Bloc gauche -->
            <div class="bg-gray-100 rounded-2xl flex items-center gap-4 px-6 py-4">
                <i class="fa fa-calendar text-[#BF2A6B] text-xl"></i>
                <div>
                    <p class="text-[#36578a] font-bold text-md mb-1">
                        Test psychotechnique le 28 mars à 14:00
                    </p>
                    <p class="text-[#36578a] text-lg md:text-sm">
                        15 rue de la république Montgeron 91230
                    </p>
                </div>
            </div>

            <!-- Bloc droit -->
            <div class="flex flex-col text-white w-52 gap-3">
                <div class="flex items-center justify-between">
                    <p class="text-md">Total</p>
                    <p class="text-lg md:text-xl font-bold">135€</p>
                </div>
                <a href="/andriamihaja-paiement"
                    class="bg-[#BF2A6B] hover:bg-pink-800 transition rounded-xl flex justify-center items-center text-md gap-2 py-2 text-center">
                    <span>Suivant</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </div>

@endsection
