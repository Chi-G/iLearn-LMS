<html>
<title>Instructor Dashboard</title>

<body>
    <h1>Instructor Dashboard</h1>

    <form id="logout-form" action="{{ route('instructor.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="py-2">
        <a href="{{ route('instructor.logout') }}"
            class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
            Out
        </a>
    </div>
</body>

</html>
