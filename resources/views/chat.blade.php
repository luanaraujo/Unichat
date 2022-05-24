<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles
<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif                
                    <!--Lista de usuários-->
                    <div
                        class="w-3/12 max-h-full bg-gradient-to-b from-sky-600 to-sky-800 bg-opacity-25 border-r border-sky-600 overflow-y-scroll">
                        <ul>
                            <li
                                class="p-6 text-lg text-slate-50 leading-7  font-semibold border-b border-sky-600 hover:bg-sky-900 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    Ciclano
                                    <span class="ml-2 w-2 h-2 bg-green-400 rounded-full"></span>
                                </p>
                            </li>
                            <li
                                class="p-6 text-lg text-slate-50 leading-7  font-semibold border-b border-sky-600 hover:bg-sky-900 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    Fulano
                                    <span class="ml-2 w-2 h-2 bg-green-500 rounded-full"></span>
                                </p>
                            </li>
                        </ul>

                    </div>

                    <!--Caixa de mensagens-->
                    <div class="w-9/12 bg-teal-40 flex flex-col justify-between">

                        <!--mensagens-->
                       
                        <div class="w-full p-6 flex flex-col overflow-y-scroll">
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    Olá!
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:00</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    Oi!
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:04</span>
                            </div>

                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    Tudo bem?
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:06</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    Tudo bem e vc?
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:08</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    Terminou o trabalho?
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:08</span>
                            </div>

                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    de matemática
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:08</span>
                            </div>

                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    Terminei sim
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:06</span>
                            </div>

                             <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    e vc?
                                </p>
                                <span class="block mt-1 text-xs text-stone-600">19/05/2022 21:06</span>
                            </div>

                        </div>    

                        

                        <!--form-->
                        <div class="w-full bg-sky-500 bg-opacity-100 p-6 border-t border-sky-700">
                        <form>
                            <div class="flex rounded-md overflow-hidden border border-sky-600">
                                <input type="text" class="flex-1 px-4 py-2 text-sm focus:outline-none">
                                <button type="submit" class="bg-sky-800 hover:bg-sky-900 text-slate-50 px-4 py-2">Enviar</button>
                            </div>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </AppLayout>
</body>
</template>



</script>
