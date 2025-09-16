@extends('layout')

@section('title', 'Confirmer et payer')

@section('content')
    <div class="bg-white mt-0.5 p-4 md:p-0">
        <div class="container mx-auto max-w-6xl md:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-16">
                <div class="lg:col-span-3">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">Confirmer et payer</h1>

                    <div class="flex items-center space-x-4 border border-gray-200 rounded-lg p-4 mb-8">
                        <i class="fas fa-chart-line text-red-500 text-2xl"></i>
                        <div>
                            <p class="font-semibold text-gray-800">Date de réservation en forte demande</p>
                            <p class="text-sm text-gray-600">Les réservations sont fréquentes pour ce centre</p>
                        </div>
                    </div>

                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Vos informations personnelles</h2>
                        <div class="space-y-4">
                            <input type="text" placeholder="Nom Prénom"
                                class="w-full p-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                            <input type="email" placeholder="Email"
                                class="w-full p-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                            <input type="tel" placeholder="Numéro de téléphone"
                                class="w-full p-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                        </div>
                    </div>

                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-800 mb-5">Votre test psychotechnique</h2>
                        <div class="space-y-5">
                            <div class="flex items-center">
                                <i class="far fa-calendar-alt text-gray-500 text-xl w-6 text-center"></i>
                                <div class="ml-4">
                                    <p class="font-semibold text-gray-800">Date</p>
                                    <p class="text-gray-600">12 mai 2025</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="far fa-clock text-gray-500 text-xl w-6 text-center"></i>
                                <div class="ml-4">
                                    <p class="font-semibold text-gray-800">Horaire</p>
                                    <p class="text-gray-600">12:30</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 text-xl w-6 text-center"></i>
                                <div class="ml-4">
                                    <p class="font-semibold text-gray-800">Adresse</p>
                                    <p class="text-gray-600">39 Rue Emile Steiner, 27200 Vernon</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Choisissez votre moyen de paiement</h2>
                        <p class="text-xs text-gray-600 font-semibold mb-4"><i class="fas fa-lock text-gray-700"></i> 100%
                            SÉCURISÉ</p>
                        <div class="space-y-3">
                            <label for="cb"
                                class="flex items-center border border-gray-200 rounded-md p-4 cursor-pointer has-[:checked]:border-pink-600 has-[:checked]:ring-1 has-[:checked]:ring-pink-600">
                                <input type="radio" id="cb" name="payment"
                                    class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                                <img src="https://download.logo.wine/logo/Visa_Inc./Visa_Inc.-Logo.wine.png" alt="Cartes bancaires" class="h-6 ml-4 object-contain">
                                <span class="ml-3 flex-grow text-sm font-medium text-gray-700">Carte bancaire</span>
                            </label>
                            <label for="applepay"
                                class="flex items-center border border-gray-200 rounded-md p-4 cursor-pointer has-[:checked]:border-pink-600 has-[:checked]:ring-1 has-[:checked]:ring-pink-600">
                                <input type="radio" id="applepay" name="payment"
                                    class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                                <i class="fab fa-apple-pay text-3xl ml-4"></i>
                                <span class="ml-3 flex-grow text-sm font-medium text-gray-700">Apple Pay</span>
                            </label>
                            <label for="paypal"
                                class="flex items-center border border-gray-200 rounded-md p-4 cursor-pointer has-[:checked]:border-pink-600 has-[:checked]:ring-1 has-[:checked]:ring-pink-600">
                                <input type="radio" id="paypal" name="payment"
                                    class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                                <i class="fab fa-paypal text-2xl ml-4 text-blue-600"></i>
                                <span class="ml-3 flex-grow text-sm font-medium text-gray-700">Paypal</span>
                            </label>
                            <label for="alma"
                                class="flex items-center border border-gray-200 rounded-md p-4 cursor-pointer has-[:checked]:border-pink-600 has-[:checked]:ring-1 has-[:checked]:ring-pink-600">
                                <input type="radio" id="alma" name="payment"
                                    class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                                <img src="https://www.sucyconduites.com/wp-content/docs/alma-getalma-eu-logo-vector.png" alt="Logo Alma" class="h-6 ml-4">
                                <span class="ml-3 flex-grow text-sm font-medium text-gray-700">Alma</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button
                            class="w-full flex justify-center items-center bg-accent-color text-white font-bold py-4 px-4 rounded-md hover:bg-accent-color-dark transition duration-300">
                            Je réserve mon test psychotechnique
                            <i class="fas fa-arrow-right ml-3"></i>
                        </button>
                    </div>

                </div>

                <div class="lg:col-span-2">
                    <div class=" p-6 rounded-lg  border border-gray-200 sticky top-8">
                        <h2 class="text-lg font-bold mb-4 text-[#BF2A6B]">Récapitulatif de votre test psychotechnique</h2>
                        <div class="flex items-center gap-4 mb-4 text-gray-800 flex-row">
                            <p class="text-lg">Total à payer :</p>
                            <p class="font-bold text-xl">130.00€</p>
                        </div>
                        <p class="text-xs text-gray-500 mb-6">
                            En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP.
                            Veuillez consulter notre politique de protection des données.
                        </p>
                        <div class="grid grid-cols-3 gap-4 mt-6 text-center">
                            <div>
                                <div
                                    class="mx-auto w-14 h-14 flex items-center justify-center rounded-full border border-[#0DBC0D]  mb-2">
                                    <i class="fas fa-hand-pointer text-green-600 text-xl"></i>
                                </div>
                                <p class="font-semibold text-sm text-gray-800">Entraînement</p>
                                <p class="text-xs text-gray-600">Gratuit Illimité</p>
                            </div>
                            <div>
                                <div
                                    class="mx-auto w-14 h-14 flex items-center justify-center rounded-full border border-[#0DBC0D]  mb-2">
                                    <i class="far fa-file-alt text-green-600 text-xl"></i>
                                </div>
                                <p class="font-semibold text-sm text-gray-800">Résultats</p>
                                <p class="text-xs text-gray-600">le Jour Même</p>
                            </div>
                            <div>
                                <div
                                    class="mx-auto w-14 h-14 flex items-center justify-center rounded-full border border-[#0DBC0D]  mb-2">
                                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                                </div>
                                <p class="font-semibold text-sm text-gray-800">Annulation</p>
                                <p class="text-xs text-gray-600">Gratuite jusqu'à 48h</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
