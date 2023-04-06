<x-layout>
    <section class=" bg-gray-50 dark:bg-gray-900 max-w-lg mx-auto mt-24">
        <div class=" flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite    
            </a>
            <div class=" w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="/users" >
                        @csrf
                        {{----------------------------Id No ------------------------}}
                        <div>
                            <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id. No.</label>
                            <input type="number" name="school_id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="18xxxxxxx" value="{{ old('school_id') }}" >

                            @error('school_id')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        {{------------------------------------------------------------------}}
                        {{---------------------------------Name ----------------------------}}
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" value="{{ old('name') }}" >

                            @error('name')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        {{-------------------------------------------------------------------}}
                        {{------------------------Contact------------------------------------}}
                        <div class="md:flex md:items-center mb-6 space-x-4">
                            {{---------------------------------User Contact No.-----------------------}}
                            <div>
                                <label for="Contact_No." class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact No.</label>
                                <input type="number" name="contact_number" id="contact_no" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="09xxxxxxxxx" value="{{ old('contact_number') }}" >

                                @error('contact_number')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-------------------------------------------------------------------}}
                            {{----------------------Guradian Contact No.-------------------------}}
                            <div>
                                <label for="Contact_No." class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guardian Contact No.</label>
                                <input type="number" name="parent_cnumber" id="contact_no" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="09xxxxxxxxx" value="{{ old('parent_cnumber') }}" >

                                @error('parent_cnumber')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            {{-------------------------------------------------------------------}}
                        </div>
                        {{---------------------------Department------------------------------}}
                        <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                        <select id="small" name="department" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{ old('department') }}" selected>Choose a department</option>
                        <option value="option1">CET</option>
                        <option value="option2">TC</option>
                        <option value="option3">CHMTN</option>
                        <option value="option4">SHS</option>
                        </select>
                        
                        @error('department')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                         @enderror
                        
                        {{--------------------------------Email------------------------------}}
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" value="{{ old('email') }}" >

                            @error('email')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        {{-------------------------------------------------------------------}}
                        {{-------------------------------Password----------------------------}}
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >

                            @error('password')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        {{-------------------------------------------------------------------}}
                        {{-----------------------Confirm Password----------------------------}}
                        <div>
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                            <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >

                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        {{-------------------------------------------------------------------}}
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>