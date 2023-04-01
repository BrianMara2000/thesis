<x-layout>
        <div  class=" container flex flex-col items-center space-y-20 mx-auto my-20">
            {{-- Status --}}
            <div class=" flex flex-col p-5 items-center space-y-10">
                <h1 class=" text-5xl text-center font-bold">
                    Status
                </h1>
                <div class=" flex items-center justify-center w-60 h-60 rounded-full align-middle bg-green-500">
                    <h1 class=" text-5xl font-bold">
                        90 &#8451;
                    </h1>
                </div>
                <div class=" flex flex-col self-start space-y-5">
                    <h2 class=" font-xl  font-bold">
                        Legend:
                    </h2>
                    <div class=" flex flex-row space-x-10 items-center">
                        <div class=" flex flex-row items-center space-x-3">
                            <div class=" h-5 w-5 bg-green-500 rounded-full"></div>
                            <h1 class=" text-lg font-semibold ">
                                Normal
                            </h1>
                        </div>
                        <div class=" flex flex-row items-center space-x-3">
                            <div class=" h-5 w-5 bg-yellow-500 rounded-full"></div>
                            <h1 class=" text-lg font-semibold ">
                                Warning
                            </h1>
                        </div>
                        <div class=" flex flex-row items-center space-x-3">
                            <div class=" h-5 w-5 bg-red-500 rounded-full"></div>
                            <h1 class=" text-lg font-semibold ">
                                Normal
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Buttons and Taglines --}}
            <div class=" flex">
                {{-- Tagline --}}
                {{-- <div class=" relative h-80 py-10">
                    <h1 class=" absolute bottom-10 text-2xl text-center tracking-wider font-bold">
                        We value your Life :
                    </h1>
                </div> --}}
                {{-- Button --}}
                <div class=" flex flex-col items-center space-y-5">
                    <a href="/login">
                        <button class="relative inline-flex items-center p-0.5  overflow-hidden text-sm font-bold text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Mark as Safe
                            </span>
                        </button>
                    </a>
                    <div class=" tracking-wide text-lg font-semibold">
                        You marked yourself SAFE
                    </div>
                </div>

            </div>
            
        </div>
</x-layout>