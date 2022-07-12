<div>
    <livewire:components.header />

    <main class="container mx-auto">
        <section>
            <h2 class="mt-8 text-center text-2xl font-bold">Conheça os projetos desenvolvidos por mim</h2>
        </section>

        <section class="mx-4 mt-8 grid grid-cols-4 gap-4 py-4">
            @for ($i = 0; $i <= 11; $i++)
                <div class="col-span-4 border-2 p-4 md:col-span-2 lg:col-span-1">
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <img src="https://via.placeholder.com/300x100" alt="logo empresa">
                        <h2 class="text-xl font-semibold">Título do Projeto {{ $i + 1 }}</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ducimus
                            earum
                            dolore nam ab sunt
                            reiciendis.</p>
                        <a class="w-full rounded-full bg-red-500 px-4 py-2 text-center uppercase text-white hover:bg-red-400"
                            href="">Visitar</a>
                    </div>
                </div>
            @endfor


        </section>


    </main>

    <livewire:components.footer />
</div>
