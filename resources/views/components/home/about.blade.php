<!-- ====== About Section Start -->
<section
    class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-white dark:bg-dark"
>
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center justify-between -mx-4">
            <div class="w-full px-4 lg:w-6/12">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{asset('images/image-1.jpg')}}"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4">
                            <img
                                src="{{asset('images/image-2.jpg')}}"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                        </div>
                        <x-about-dots/>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="mt-10 lg:mt-0">
                    <blockquote class="text-md text-gray-400 italic py-2 px-3 border-l-4 border-r-amber-50">
                        Everything is achievable with hard work
                    </blockquote>
                    <h2
                        class="mb-5 text-3xl font-bold text-dark dark:text-white sm:text-[40px]/[48px]"
                    >
                        About Me
                    </h2>
                    <p class="mb-5 text-base text-body-color dark:text-dark-6">
                        I am a full-stack web developer with a passion for creating
                        beautiful and functional websites. I have experience in
                        developing web applications using Laravel, Vue.js, and Tailwind
                        CSS.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== About Section End -->
