<header
    class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square ac-transition">
    <div class="flex-center-between grow">
        <!-- Header Left -->
        <div class="menu-hamburger-container flex-center">
            <button type="button" id="app-menu-hamburger"
                    class="menu-hamburger hidden xl:block dk-theme-card-square"></button>
            <button type="button" class="menu-hamburger block xl:hidden dk-theme-card-square"
                    data-drawer-target="app-drawer" data-drawer-show="app-drawer" aria-controls="app-drawer"></button>
        </div>
        <!-- Header Right -->
        <div class="flex items-center gap-5 md:gap-3">
            <div
                class="w-56 md:w-72 leading-none text-sm relative text-gray-900 dark:text-dark-text hidden sm:block">
                    <span class="absolute top-1/2 -translate-y-[40%] left-3.5">
                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                    </span>
                <input type="text" name="header-search" id="header-search" placeholder="Search..."
                       class="form-input border-gray-200 dark:border-dark-border pl-[36px] pr-12 py-4 rounded-full dk-theme-card-square">
                <span
                    class="absolute top-1/2 -translate-y-[40%] right-4 hidden lg:flex lg:items-center lg:gap-0.5 select-none">
                        <i class="ri-command-line text-[12px]"></i><span>+</span><span>k</span>
                    </span>
            </div>
            <!-- Dark Light Button -->
            <button type="button"
                    class="themeMode size-8 hidden md:flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square"
                    onclick="toggleThemeMode()">
                <i class="ri-contrast-2-line text-[22px] group-[.dark]:before:!content-['\f1bf']"></i>
            </button>
            <!-- Settings Button -->
            <button type="button"
                    class="size-8 hidden md:flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square"
                    data-drawer-target="drawer-app-setting" data-drawer-show="drawer-app-setting"
                    data-drawer-placement="right" aria-controls="drawer-app-setting">
                <i class="ri-settings-3-line text-[22px] animate-spin-slow"></i>
            </button>
            <!-- Notification Button -->
            <div class="relative">
                <button type="button" data-popover-target="dropdownNotification" data-popover-trigger="click"
                        data-popover-placement="bottom-end"
                        class="relative size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square">
                    <i class="ri-notification-3-line text-[24px]"></i>
                    <span
                        class="absolute -top-1 -right-1 size-4 rounded-50 flex-center bg-primary-500 leading-none text-xs text-white">0</span>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNotification"
                     class="!-right-full sm:!right-0 z-backdrop invisible w-[250px] sm:w-[320px] bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-dark-card-two dark:divide-dark-border-four dk-theme-card-square">
                    <div
                        class="block px-4 py-2 font-medium text-center text-heading rounded-t-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white dk-theme-card-square">
                        Notifications
                    </div>
                    <div class="divide-y divide-gray-100 dark:divide-dark-border-four">
                        <a href="all-notice.html" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                            <div class="flex-shrink-0">
                                <img class="size-10 rounded-50 dk-theme-card-square"
                                     src="{{ asset('backend/assets/images/user/user-1.png') }}" alt="user">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span
                                        class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                    what's up? All set for the presentation?"</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                            </div>
                        </a>
                        <a href="all-notice.html" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                            <div class="flex-shrink-0">
                                <img class="size-10 rounded-50 dk-theme-card-square"
                                     src="{{ asset('backend/assets/images/user/user-1.png') }}" alt="user">
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span
                                        class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                    what's up? All set for the presentation?"</div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">10 min ago</div>
                            </div>
                        </a>
                    </div>
                    <a href="all-notice.html"
                       class="flex-center py-2 text-sm font-medium text-center text-heading rounded-b-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white dk-theme-card-square">
                        View all
                    </a>
                </div>
            </div>

            <!-- Border -->
            <div class="w-[1px] h-header bg-gray-200 dark:bg-dark-border hidden sm:block"></div>
            <!-- User Profile Button -->
            <div class="relative">
                <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click"
                        data-popover-placement="bottom-end" class="flex items-center">
                    <img src="{{ asset('backend/assets/images/user/profile-img.png') }}" alt="user-img"
                         class="size-9 rounded-50 dk-theme-card-square">
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownProfile"
                     class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four dk-theme-card-square">
                    <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                        <div class="card-title text-lg">Alex Janson</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a href="{{ route('profile.edit') }}"
                               class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Settings</a>
                        </li>
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="py-2">
                        <a href="{{ route('logout') }}"
                           class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                            Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
