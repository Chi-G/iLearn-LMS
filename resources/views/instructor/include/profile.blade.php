<div class="col-span-full lg:col-span-4 card p-0">
    <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
        <div class="relative w-full h-[150px]">
            <img src="{{ asset('backend/assets/images/profile/cover.png') }}" alt="cover-image"
                 class="w-full h-full">
            <label for="thumbnailsrc"
                   class="file-container bg-primary-500 bg-[url('../../assets/images/profile/profile.html')] bg-no-repeat bg-cover absolute left-1/2 -translate-x-1/2 -bottom-[calc(theme('spacing.ins-pro-img')_/_2)] w-[calc(theme('spacing.ins-pro-img')_+_5px)] h-[theme('spacing.ins-pro-img')] border-2 border-white dark:border-dark-border-two rounded-20 dk-theme-card-square">
                <input type="file" id="thumbnailsrc" hidden class="img-src peer/file">
                <span
                    class="absolute bottom-0 right-0 flex-center size-5 rounded-50 border border-white dark:border-dark-border-two text-primary-500 bg-primary-200 dk-theme-card-square">
                                <i class="ri-camera-line text-inherit text-[12px]"></i>
                            </span>
            </label>
        </div>
        <div class="mt-7 px-6 text-center">
            <div class="py-5">
                <div class="flex-center">
                    <h4 class="text-[22px] leading-none text-heading font-semibold relative">
                        Jonathon Smith
                        <img src="{{ asset('backend/assets/images/icons/verified-icon-green.svg') }}"
                             alt="verified-icon"
                             class="absolute -top-1.5 -right-3.5 hidden [&.verified]:block verified">
                    </h4>
                </div>
                <p class="font-spline_sans leading-[1.62] text-heading dark:!text-dark-text mt-2.5">Don't
                    Care Everybody's Word</p>
                <p class="font-spline_sans text-sm leading-[1.62] text-gray-500 dark:text-dark-text mt-1">
                    UI/IX - Student at Academine</p>
            </div>
            <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left">
                <div class="flex-center-between">
                    <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">About</h6>
                </div>
                <ul
                    class="flex flex-col gap-y-3 *:flex *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4">
                    <li>
                        <i class="ri-home-2-line text-inherit"></i>
                        <div>Lives in <span class="text-heading dark:!text-dark-text">1901
                                            Thornridge</span></div>
                    </li>
                    <li>
                        <i class="ri-briefcase-line text-inherit"></i>
                        <div>Works at <span class="text-heading dark:!text-dark-text">ebay</span></div>
                    </li>
                </ul>
            </div>
            <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left">
                <div class="flex-center-between">
                    <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">Social</h6>
                </div>
                <ul
                    class="flex flex-col gap-y-3 *:flex *:items-center *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4">
                    <li>
                        <i class="ri-facebook-circle-line text-inherit"></i>
                        <a href="#"
                           class="hover:text-heading dark:hover:text-dark-text-two">Facebook</a>
                    </li>
                    <li>
                        <i class="ri-instagram-line text-inherit"></i>
                        <a href="#"
                           class="hover:text-heading dark:hover:text-dark-text-two">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
