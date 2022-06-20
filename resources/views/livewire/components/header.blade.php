<header class="h-header container mx-auto flex items-center justify-between py-3">
    <h1 class="text-2xl font-bold text-red-600">TIO JOBS</h1>
    <nav>
        <ul class="flex gap-4">
            <li>
                <a href="{{ route('site.home') }}" title="Home"
                    class="p-3 transition-all duration-200 hover:bg-red-400 hover:text-white">Home</a>
            </li>
            <li>
                <a href="{{ route('site.services') }}" title="Serviço"
                    class="p-3 transition-all duration-200 hover:bg-red-400 hover:text-white">Serviços</a>
            </li>
            <li>
                <a href="{{ route('site.projects') }}" title="Projetos"
                    class="p-3 transition-all duration-200 hover:bg-red-400 hover:text-white">Projetos</a>
            </li>
            <li>
                <a href="{{ route('site.contacts') }}" title="Contato"
                    class="p-3 transition-all duration-200 hover:bg-red-400 hover:text-white">Contato</a>
            </li>
        </ul>
    </nav>
</header>
