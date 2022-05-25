<x-app-layout title="Chat">
    <x-slot name="header">
        <img src="{{ asset('/img/nomeUnichat.png')}}" alt="" style="width: 130px;">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-teal-40 overflow-hidden shadow-xl sm:rounded-lg flex " style="min-height: 500px; max-height: 650px;">

                <!--Lista de Usuários-->
                    
            <div class="w-3/12 max-h-450px bg-gradient-to-b from-sky-600 to-sky-800 bg-opacity-25 border-r border-teal-40 overflow-y-scroll" >
                <ul>
                    <li class="p-6 text-lg text-slate-50 leading-7  font-semibold border-b border-sky-600 hover:bg-sky-900 hover:bg-opacity-50 hover:cursor-pointer">
                        <p class="flex items-center">
                            Ciclano
                            <span class="ml-2 w-2 h-2 bg-green-400 rounded-full"></span>
                        </p>        
                                    
                    </li>
                    <li class="p-6 text-lg text-slate-50 leading-7  font-semibold border-b border-sky-600 hover:bg-sky-900 hover:bg-opacity-50 hover:cursor-pointer">
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

                        </div>    
                        
                        <!--form-->

                        <div class="w-full bg-sky-500 bg-opacity-100 p-6 border-t border-sky-500">
                            <form>
                                <div class="flex rounded-md overflow-hidden border border-sky-500">
                                    <input type="text" class="flex-1 px-4 py-2 text-sm border-t border-sky-500 focus:outline-none">
                                    <button type="submit" class="bg-sky-800 border-sky-500 hover:bg-sky-900 text-slate-50 px-4 py-2">Enviar</button>
                                </div>
                            </form>
                        </div>             
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

