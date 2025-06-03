<div>
    <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
    </a>
    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="text-xs text-blue-600 dark:text-blue-400 underline ml-1">
            (déconnexion)
        </button>
    </form>
</div>
