<div class="col-span-full card">
    <div class="flex-center-between">
        <h6 class="card-title">My Course</h6>
    </div>
    <!-- Course Table -->
    <div class="overflow-x-auto scrollbar-table mt-5">
        <table
            class="table-auto w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium leading-none">
            <thead>
            <tr>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square">
                    Course title</th>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square">
                    Course type</th>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square">
                    Purchase date</th>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square">
                    Validity</th>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square">
                    Price</th>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square">
                    Progress</th>
                <th
                    class="px-3.5 py-4 bg-[#F4F4F4] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg dk-theme-card-square w-10">
                    Action</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
            <tr>
                <td class="flex items-center gap-2 px-3.5 py-4">
                    <div class="size-15 rounded-50 overflow-hidden dk-theme-card-square">
                        <img src="{{ asset('backend/assets/images/admin/top-course/top-course-1.png') }}"
                             alt="thumb">
                    </div>
                    <div>
                        <h6
                            class="text-lg leading-none text-heading dark:!text-dark-text font-semibold mb-1.5 line-clamp-1">
                            Advanced JavaScript Techniques...
                        </h6>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                                <i class="ri-star-fill !text-[10px] !text-[#FFA305]"></i>
                                <span class="text-xs font-semibold leading-none">4.5</span>
                            </div>
                            <p class="font-normal text-xs text-gray-900">Author - Jane Howard</p>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">Paid</td>
                <td class="px-3.5 py-4">10 Mar 2024</td>
                <td class="px-3.5 py-4">10 Mar 2026</td>
                <td class="px-3.5 py-4">$09</td>
                <td class="px-3.5 py-4">
                    <div class="w-[136px] bg-primary-200 rounded-full h-1">
                        <div data-value="75"
                             class="bg-primary-500 h-1 rounded-full animate-progress relative"
                             style="width: 75%;">
                            <div
                                class="absolute -top-5 right-0 inline-block px-2 py-0.5 text-[10px] text-white bg-primary-500 rounded after:absolute after:border-4 after:-bottom-2 after:left-[calc(50%_-_4px)] after:border-transparent after:border-t-primary-500">
                                75%
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">View course</a>
                </td>
            </tr>
            <tr>
                <td class="flex items-center gap-2 px-3.5 py-4">
                    <div class="size-15 rounded-50 overflow-hidden dk-theme-card-square">
                        <img src="{{ asset('backend/assets/images/admin/top-course/top-course-2.png') }}"
                             alt="thumb">
                    </div>
                    <div>
                        <h6
                            class="text-lg leading-none text-heading dark:!text-dark-text font-semibold mb-1.5 line-clamp-1">
                            Python for Data Science
                        </h6>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                                <i class="ri-star-fill !text-[10px] !text-[#FFA305]"></i>
                                <span class="text-xs font-semibold leading-none">4.7</span>
                            </div>
                            <p class="font-normal text-xs text-gray-900">Author - John Doe</p>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">Paid</td>
                <td class="px-3.5 py-4">15 Apr 2024</td>
                <td class="px-3.5 py-4">15 Apr 2026</td>
                <td class="px-3.5 py-4">$19</td>
                <td class="px-3.5 py-4">
                    <div class="w-[136px] bg-primary-200 rounded-full h-1">
                        <div data-value="85"
                             class="bg-primary-500 h-1 rounded-full animate-progress relative"
                             style="width: 85%;">
                            <div
                                class="absolute -top-5 right-0 inline-block px-2 py-0.5 text-[10px] text-white bg-primary-500 rounded after:absolute after:border-4 after:-bottom-2 after:left-[calc(50%_-_4px)] after:border-transparent after:border-t-primary-500">
                                85%
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">View course</a>
                </td>
            </tr>
            <tr>
                <td class="flex items-center gap-2 px-3.5 py-4">
                    <div class="size-15 rounded-50 overflow-hidden dk-theme-card-square">
                        <img src="{{ asset('backend/assets/images/admin/top-course/top-course-3.png') }}"
                             alt="thumb">
                    </div>
                    <div>
                        <h6
                            class="text-lg leading-none text-heading dark:!text-dark-text font-semibold mb-1.5 line-clamp-1">
                            Introduction to Machine Learning
                        </h6>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                                <i class="ri-star-fill !text-[10px] !text-[#FFA305]"></i>
                                <span class="text-xs font-semibold leading-none">4.8</span>
                            </div>
                            <p class="font-normal text-xs text-gray-900">Author - Emily Clark</p>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">Paid</td>
                <td class="px-3.5 py-4">20 May 2024</td>
                <td class="px-3.5 py-4">20 May 2026</td>
                <td class="px-3.5 py-4">$49</td>
                <td class="px-3.5 py-4">
                    <div class="w-[136px] bg-primary-200 rounded-full h-1">
                        <div data-value="90"
                             class="bg-primary-500 h-1 rounded-full animate-progress relative"
                             style="width: 90%;">
                            <div
                                class="absolute -top-5 right-0 inline-block px-2 py-0.5 text-[10px] text-white bg-primary-500 rounded after:absolute after:border-4 after:-bottom-2 after:left-[calc(50%_-_4px)] after:border-transparent after:border-t-primary-500">
                                90%
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">View course</a>
                </td>
            </tr>
            <tr>
                <td class="flex items-center gap-2 px-3.5 py-4">
                    <div class="size-15 rounded-50 overflow-hidden dk-theme-card-square">
                        <img src="{{ asset('backend/assets/images/admin/top-course/top-course-3.png') }}"
                             alt="thumb">
                    </div>
                    <div>
                        <h6
                            class="text-lg leading-none text-heading dark:!text-dark-text font-semibold mb-1.5 line-clamp-1">
                            Web Development Bootcamp
                        </h6>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                                <i class="ri-star-fill !text-[10px] !text-[#FFA305]"></i>
                                <span class="text-xs font-semibold leading-none">4.6</span>
                            </div>
                            <p class="font-normal text-xs text-gray-900">Author - Michael Brown</p>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">Paid</td>
                <td class="px-3.5 py-4">25 Jun 2024</td>
                <td class="px-3.5 py-4">25 Jun 2026</td>
                <td class="px-3.5 py-4">$39</td>
                <td class="px-3.5 py-4">
                    <div class="w-[136px] bg-primary-200 rounded-full h-1">
                        <div data-value="65"
                             class="bg-primary-500 h-1 rounded-full animate-progress relative"
                             style="width: 65%;">
                            <div
                                class="absolute -top-5 right-0 inline-block px-2 py-0.5 text-[10px] text-white bg-primary-500 rounded after:absolute after:border-4 after:-bottom-2 after:left-[calc(50%_-_4px)] after:border-transparent after:border-t-primary-500">
                                65%
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">View course</a>
                </td>
            </tr>
            <tr>
                <td class="flex items-center gap-2 px-3.5 py-4">
                    <div class="size-15 rounded-50 overflow-hidden dk-theme-card-square">
                        <img src="{{ asset('backend/assets/images/admin/top-course/top-course-3.png') }}"
                             alt="thumb">
                    </div>
                    <div>
                        <h6
                            class="text-lg leading-none text-heading dark:!text-dark-text font-semibold mb-1.5 line-clamp-1">
                            Digital Marketing Essentials
                        </h6>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                                <i class="ri-star-fill !text-[10px] !text-[#FFA305]"></i>
                                <span class="text-xs font-semibold leading-none">4.4</span>
                            </div>
                            <p class="font-normal text-xs text-gray-900">Author - Sarah Lee</p>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">Free</td>
                <td class="px-3.5 py-4">30 Jul 2024</td>
                <td class="px-3.5 py-4">Life time</td>
                <td class="px-3.5 py-4">$24</td>
                <td class="px-3.5 py-4">
                    <div class="w-[136px] bg-primary-200 rounded-full h-1">
                        <div data-value="80"
                             class="bg-primary-500 h-1 rounded-full animate-progress relative"
                             style="width: 80%;">
                            <div
                                class="absolute -top-5 right-0 inline-block px-2 py-0.5 text-[10px] text-white bg-primary-500 rounded after:absolute after:border-4 after:-bottom-2 after:left-[calc(50%_-_4px)] after:border-transparent after:border-t-primary-500">
                                80%
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-3.5 py-4">
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">View course</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="flex-center-between border-t-[0.5px] border-gray-200 dark:border-dark-border pt-4">
        <div class="leading-none text-xs font-semibold text-gray-900">Showing 4 of 20 entries</div>
        <ul class="flex items-center gap-1 5 *:text-xs *:text-gray-900">
            <li>
                <a href="#"
                   class="size-6 border-[0.5px] border-gray-900/50 rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white">01</a>
            </li>
            <li>
                <a href="#"
                   class="size-6 border-[0.5px] border-gray-900/50 rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white">02</a>
            </li>
            <li>
                <a href="#"
                   class="size-6 border-[0.5px] border-gray-900/50 rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white">03</a>
            </li>
            <li>
                <a href="#"
                   class="size-6 border-[0.5px] border-transparent hover:border-gray-900/50 rounded-[5px] flex-center bg-primary-500 hover:bg-transparent text-white hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                         viewBox="0 0 12 10" fill="none">
                        <path d="M10.9593 5L1 5" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round" />
                        <path d="M6.94254 1L10.9595 4.99967L6.94254 9" stroke="currentColor"
                              stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>
