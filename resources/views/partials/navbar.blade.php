<div class="bg-gray-700">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://consultoriaeco.com.br/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FLogo.33588eb3.webp&w=1080&q=75" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">

            <a href="{{ route('dashboard') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Painel</a>
            <a href="{{ route('finalizar.trabalho') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Finalizar</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Sair</button>
        </form>
      </div>
    </div>
  </div>
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="{{ route('dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Painel</a>
      <a href="{{ route('finalizar.trabalho') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Finalizar</a>
    </div>
  </div>
</div>
