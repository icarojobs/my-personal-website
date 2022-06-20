<div>
    <livewire:components.header />

    <main class="h-4/5">
        <section class="bg-gradient-to-r from-slate-400 to-slate-200 py-6">
            <div class="container mx-auto flex justify-between">
                <div class="flex w-1/2 flex-col justify-center">
                    <h2 class="mb-3 text-4xl font-bold text-white">Tio Jobs</h2>
                    <p class="text-lg text-white">
                        Perfil empreendedor. Gosto de facilitar tanto o meu trabalho, quanto
                        o da equipe. Procuro sempre soluções eficazes e inovadoras.
                    </p>
                    <a href="#"
                        class="mt-4 w-1/3 -skew-x-6 bg-red-600 px-4 py-2 text-center text-xl text-white transition-all duration-200 hover:-translate-y-2 hover:bg-red-700">ME
                        CONTRATE</a>
                </div>
                <div class="relative">
                    <img src="https://via.placeholder.com/720x300" alt="Banner Home" />
                    <div class="absolute bottom-0 right-0 flex flex-col gap-y-6 pr-8 pb-8">
                        <a href="#seuinstagram"
                            class="rounded-md bg-gradient-to-tl from-indigo-500 via-purple-500 to-pink-500 p-2 transition-all hover:-translate-y-2"><i
                                data-feather="instagram" class="h-8 w-8 text-white"></i>
                        </a>
                        <a href="#seulinkedin" class="rounded-md bg-blue-600 p-2 transition-all hover:-translate-y-2"><i
                                data-feather="linkedin" class="h-8 w-8 text-white"></i>
                        </a>
                        <a href="#seuyoutube" class="rounded-md bg-red-600 p-2 transition-all hover:-translate-y-2"><i
                                data-feather="youtube" class="h-8 w-8 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto mt-2 flex justify-between py-3">
            <a href="http://google.com.br" title="Empresa 01"
                class="roundend-md border-4 border-white duration-200 hover:scale-110 hover:border-red-500 hover:transition-all">
                <img src="https://via.placeholder.com/200x100" alt="Logo empresa 01" />
            </a>
            <a href="http://google.com.br" title="Empresa 01"
                class="roundend-md border-4 border-white duration-200 hover:scale-110 hover:border-red-500 hover:transition-all">
                <img src="https://via.placeholder.com/200x100" alt="Logo empresa 02" />
            </a>
            <a href="http://google.com.br" title="Empresa 01"
                class="roundend-md border-4 border-white duration-200 hover:scale-110 hover:border-red-500 hover:transition-all">
                <img src="https://via.placeholder.com/200x100" alt="Logo empresa 03" />
            </a>
            <a href="http://google.com.br" title="Empresa 01"
                class="roundend-md border-4 border-white duration-200 hover:scale-110 hover:border-red-500 hover:transition-all">
                <img src="https://via.placeholder.com/200x100" alt="Logo empresa 04" />
            </a>

        </section>

        <section class="w-full">
            <div class="container mx-auto flex gap-4 py-7">
                <div class="flex w-1/4 flex-col justify-center rounded-br-3xl rounded-tl-3xl bg-red-500">
                    <h2 class="my-2 text-center text-5xl text-white">5+</h2>
                    <p class="text-center text-xl text-white">Experiência de Trabalho</p>
                </div>
                <div class="w-3/4">
                    <div class="flex w-full justify-between gap-2">
                        <div class="flex w-1/3 flex-col items-center rounded-md border-2 border-red-500 p-6">
                            <i data-feather="database" class="h-8 w-8 text-red-500"></i>
                            <h3 class="mt-3 text-lg font-bold text-red-500">Desenvolvedor Backend</h3>
                        </div>
                        <div class="flex w-1/3 flex-col items-center rounded-md border-2 border-red-500 p-6">
                            <i data-feather="code" class="h-8 w-8 text-red-500"></i>
                            <h3 class="mt-3 text-lg font-bold text-red-500">Desenvolvedor Frontend</h3>
                        </div>
                        <div class="flex w-1/3 flex-col items-center rounded-md border-2 border-red-500 p-6">
                            <i data-feather="layout" class="h-8 w-8 text-red-500"></i>
                            <h3 class="mt-3 text-lg font-bold text-red-500">Especialista em Prototipagem</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <livewire:components.footer />
</div>
