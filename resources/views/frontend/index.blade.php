@extends('frontend.layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 xl:grid-cols-6 lg:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/img/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font semibold text-sm flex items-center justify-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="" class="block text-block font-semibold text-base mt-8 hover:text-gray-400">Final Fantasy 7 Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>

        </div> <!-- end popular games -->

        <div class="flex flex-col lg:flex-row lg:mt-0 my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="text blue-500 uppercase tracking-wide font-semibold">
                    <div class="recently-reviewed-container space-y-12 mt-8">
                        <div class="game bg-gray-800 shadow-md rounded-lg flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="/img/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                                    <div class="font semibold text-sm flex items-center justify-center h-full">
                                        80%
                                    </div>
                                </div>
                            </div>
                            <div class="ml-12">
                                <a href="#" class="block font-semibold text-lg leading-tight  mt-4 hover:text-gray-400">Final Fantasy 7 Remake</a>
                                <div class="text-gray-400 mt-1">Playstation 4</div>
                                <p class="mt-7 text-gray-400 hidden lg:block">
                                    A spectacular reimagining of one of the most visionary games ever, FINAL FANTASY VII REMAKE rebuilds and expands the legendary RPG for today. The first entry in a multi-part saga, delivering a level of depth inconceivable for the original. Mind-blowing story, unforgettable characters, epic battles and technical excellence collide.
                                </p>
                            </div>
                        </div>
                        <!-- end game --><div class="game bg-gray-800 shadow-md rounded-lg flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="/img/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                                    <div class="font semibold text-sm flex items-center justify-center h-full">
                                        80%
                                    </div>
                                </div>
                            </div>
                            <div class="ml-12">
                                <a href="#" class="block font-semibold text-lg leading-tight  mt-4 hover:text-gray-400">Final Fantasy 7 Remake</a>
                                <div class="text-gray-400 mt-1">Playstation 4</div>
                                <p class="mt-7 text-gray-400 hidden lg:block">
                                    A spectacular reimagining of one of the most visionary games ever, FINAL FANTASY VII REMAKE rebuilds and expands the legendary RPG for today. The first entry in a multi-part saga, delivering a level of depth inconceivable for the original. Mind-blowing story, unforgettable characters, epic battles and technical excellence collide.
                                </p>
                            </div>
                        </div> <!-- end game -->
                        <div class="game bg-gray-800 shadow-md rounded-lg flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="/img/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-400 rounded-full" style="right:-20px; bottom: -20px">
                                    <div class="font semibold text-sm flex items-center justify-center h-full">
                                        80%
                                    </div>
                                </div>
                            </div>
                            <div class="ml-12">
                                <a href="#" class="block font-semibold text-lg leading-tight  mt-4 hover:text-gray-400">Final Fantasy 7 Remake</a>
                                <div class="text-gray-400 mt-1">Playstation 4</div>
                                <p class="mt-7 text-gray-400 hidden lg:block">
                                    A spectacular reimagining of one of the most visionary games ever, FINAL FANTASY VII REMAKE rebuilds and expands the legendary RPG for today. The first entry in a multi-part saga, delivering a level of depth inconceivable for the original. Mind-blowing story, unforgettable characters, epic battles and technical excellence collide.
                                </p>
                            </div>
                        </div> <!-- end game -->
                    </div>
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticapated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-16">Up Coming</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/img/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end container -->

@endsection
