<div class="col-span-full lg:col-span-8 card">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full md:col-span-6 lg:col-span-3 dk-border-one p-5 mb-0">
            <div class="size-11 flex-center bg-[#F7F3FF] dark:bg-dark-icon rounded-10 mb-4">
                <img src="{{ asset('backend/assets/images/icons/course-overview/progress.svg') }}"
                     alt="icon" class="dark:brightness-[5]">
            </div>
            <p class="text-gray-500 dark:text-dark-text-two font-medium leading-none mb-2">Course in
                progress</p>
            <div class="counter-value text-primary-500 text-[32px] font-semibold leading-none"
                 data-value="9">0</div>
        </div>
        <div class="col-span-full md:col-span-6 lg:col-span-3 dk-border-one p-5 mb-0">
            <div class="size-11 flex-center bg-[#F7F3FF] dark:bg-dark-icon rounded-10 mb-4">
                <img src="{{ asset('backend/assets/images/icons/course-overview/complete.svg') }}"
                     alt="icon" class="dark:brightness-[5]">
            </div>
            <p class="text-gray-500 dark:text-dark-text-two font-medium leading-none mb-2">Completed course
            </p>
            <div class="counter-value text-primary-500 text-[32px] font-semibold leading-none"
                 data-value="7">0</div>
        </div>
        <div class="col-span-full md:col-span-6 lg:col-span-3 dk-border-one p-5 mb-0">
            <div class="size-11 flex-center bg-[#F7F3FF] dark:bg-dark-icon rounded-10 mb-4">
                <img src="{{ asset('backend/assets/images/icons/course-overview/purchase.svg') }}"
                     alt="icon" class="dark:brightness-[5]">
            </div>
            <p class="text-gray-500 dark:text-dark-text-two font-medium leading-none mb-2">Course purchased
            </p>
            <div class="counter-value text-primary-500 text-[32px] font-semibold leading-none"
                 data-value="11">0</div>
        </div>
        <div class="col-span-full md:col-span-6 lg:col-span-3 dk-border-one p-5 mb-0">
            <div class="size-11 flex-center bg-[#F7F3FF] dark:bg-dark-icon rounded-10 mb-4">
                <img src="{{ asset('backend/assets/images/icons/course-overview/certificate.svg') }}"
                     alt="icon" class="dark:brightness-[5]">
            </div>
            <p class="text-gray-500 dark:text-dark-text-two font-medium leading-none mb-2">Certificate</p>
            <div class="counter-value text-primary-500 text-[32px] font-semibold leading-none"
                 data-value="3">0</div>
        </div>
    </div>

    <!-- Student Average Learning Section -->
    <div class="col-span-full 3xl:col-span-8 card mb-0 mt-4 p-5 dk-border-one">
        <div class="flex-center-between">
            <h6 class="card-title">Average Learning</h6>
            <select class="form-input form-select">
                <option value="this-month">This Year</option>
                <option value="last-month">This Month</option>
            </select>
        </div>
        <div id="student-average-learning-chart"></div>
    </div>
</div>
