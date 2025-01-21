<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div class="mt-auto px-2.5 py-6 group-data-[sidebar-size=sm]:px-2">
    <a href="{{ route('logout') }}"
       class="flex-center-between text-gray-500 font-semibold leading-none bg-gray-200 dark:bg-dark-icon dark:text-dark-text rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span class="group-data-[sidebar-size=sm]:hidden block">Logout</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
            <path fill="currentColor" d="M5 5h7V3H3v18h9v-2H5z" />
            <path fill="currentColor" d="m21 12l-4-4v3H9v2h8v3z" />
        </svg>
    </a>
</div>
