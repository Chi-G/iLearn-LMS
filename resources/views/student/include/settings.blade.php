<div id="drawer-app-setting"
     class="side-canvas font-spline_sans dark:bg-dark-card-two right-0 h-screen translate-x-full duration-300 overflow-y-auto w-80 sm:w-96"
     tabindex="-1">
    <button type="button" data-drawer-hide="drawer-app-setting" aria-controls="drawer-app-setting"
            class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg absolute top-2.5 right-2.5 dk-theme-card-square">
        <i class="ri-close-line text-gray-500 dark:text-dark-text"></i>
    </button>
    <div class="p-6 py-3 border-b border-gray-200 dark:border-dark-border-four">
        <h6 class="text-lg font-medium text-gray-500 dark:text-dark-text">Adjust Configurations</h6>
        <p class="text-sm text-gray-500 dark:text-dark-text mt-1">
            Transform your space to reflect your personality!
        </p>
    </div>
    <!-- Customizatin Options -->
    <div class="p-6 pt-3 divide-y divide-input-border/50 dark:divide-dark-border-four space-y-10">
        <!-- Theme Mode -->
        <div class="pt-3 first:pt-0">
            <h6 class="card-title text-base font-medium">Theme Mode</h6>
            <div class="grid grid-cols-6 gap-4 mt-2">
                <div class="col-span-2">
                    <label
                        class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Light</label>
                    <label for="radioThemeLight"
                           class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                        <i class="ri-sun-line text-inherit text-xl"></i>
                        <input name="radioThemeMode" type="radio" id="radioThemeLight" hidden checked
                               onchange="toggleThemeMode()">
                    </label>
                </div>
                <div class="col-span-2">
                    <label
                        class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Dark</label>
                    <label for="radioThemeDark"
                           class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                        <i class="ri-moon-clear-line text-inherit text-xl"></i>
                        <input name="radioThemeMode" type="radio" id="radioThemeDark" hidden
                               onchange="toggleThemeMode()">
                    </label>
                </div>
            </div>
        </div>
        <!-- Theme Card Style -->
        <div class="pt-3 first:pt-0">
            <h6 class="card-title text-base font-medium">Theme Card Style</h6>
            <div class="grid grid-cols-6 gap-4 mt-2">
                <div class="col-span-2">
                    <label
                        class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Square</label>
                    <label for="radioThemeCardSquare"
                           class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                        <i class="ri-square-line text-inherit text-xl"></i>
                        <input name="radioThemeCardStyle" type="radio" id="radioThemeCardSquare" hidden checked
                               onchange="toggleCardStyle()">
                    </label>
                </div>
                <div class="col-span-2">
                    <label
                        class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Round</label>
                    <label for="radioThemeCardRound"
                           class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                        <i class="ri-rounded-corner text-inherit text-xl"></i>
                        <input name="radioThemeCardStyle" type="radio" id="radioThemeCardRound" hidden
                               onchange="toggleCardStyle()">
                    </label>
                </div>
            </div>
        </div>
        <!-- Theme Width -->
        <div class="pt-3 first:pt-0">
            <h6 class="card-title text-base font-medium">Theme Layout Width</h6>
            <div class="grid grid-cols-6 gap-4 mt-2">
                <div class="col-span-2">
                    <label
                        class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Full
                        Width</label>
                    <label for="radioThemeWidthFluid"
                           class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                        <i class="ri-fullscreen-fill text-inherit text-xl"></i>
                        <input name="radioThemeWidth" type="radio" id="radioThemeWidthFluid" hidden checked
                               onchange="settingThemeWidth()">
                    </label>
                </div>
                <div class="col-span-2">
                    <label
                        class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Container</label>
                    <label for="radioThemeWidthBox"
                           class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                        <i class="ri-exchange-box-line text-inherit text-xl"></i>
                        <input name="radioThemeWidth" type="radio" id="radioThemeWidthBox" hidden
                               onchange="settingThemeWidth()">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset All Customization -->
    <div class="flex-center justify-end p-3 absolute bottom-0 left-0 right-0 z-[1] bg-gray-200 dark:bg-dark-icon">
        <button type="reset" class="btn b-solid btn-danger-solid btn-sm"
                onclick="resetThemeConfig()">Reset</button>
    </div>
</div>
