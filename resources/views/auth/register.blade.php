<x-guest-layout>
    <section class="w-full px-8 py-5 sm:py-16 xl:px-8 bg-no-repeat bg-center"
        style="background-image: url({{ asset('img/sign-up-bg.webp') }})">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row">
                <div class="w-full space-y-5 md:w-7/12 md:pr-16 mt-40">
                    <h2 class="
								text-2xl
								font-extrabold
								leading-none
								sm:text-3xl
								md:text-5xl
							">
                        Dating made <span class="text-pink-500">Fun</span>
                        Without the Game.
                    </h2>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-5/12">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="
								relative
								z-10
								h-auto
								p-8
								py-10
								overflow-hidden
								bg-white
								shadow
								lg:shadow-2xl
								px-7
								rounded-3xl
							">
                            <h3 class="mb-6 text-2xl font-medium">
                                Create Your Account
                            </h3>

                            <div class="mb-4">
                                <x-label for="gender" :value="__('I am a:')" />
                                <x-select id="gender" name="gender" class="@error('gender')border-red-500 @enderror">
                                    <option selected disabled>Gender and preferences</option>
                                    <option value="a woman interested in men">a woman interested in men</option>
                                    <option value="a man interested in women">a man interested in women</option>
                                    <option value="a woman interested in women">a woman interested in women</option>
                                    <option value="a man interested in men">a man interested in men</option>
                                </x-select>
                                <x-input-error forError="gender" />
                            </div>

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-4">
                                    <div class="mb-4">
                                        <x-label for="day" :value="__('Day')" />
                                        <x-select id="day" name="day" class="@error('day')border-red-500 @enderror">
                                            <option selected disabled>Day</option>
                                            <option value="1">1</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                        </x-select>
                                        <x-input-error forError="day" />
                                    </div>
                                </div>
                                <div class="col-span-4">
                                    <div class="mb-4">
                                        <x-label for="month" :value="__('Month')" />
                                        <x-select id="month" name="month" class="@error('month')border-red-500 @enderror">
                                            <option selected disabled>Month</option>
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                        </x-select>
                                        <x-input-error forError="month" />

                                    </div>
                                </div>
                                <div class="col-span-4">
                                    <div class="mb-4">
                                        <x-label for="year" :value="__('Year')" />
                                        <x-select id="year" name="year" class="@error('year')border-red-500
                                        @enderror">
                                            <option selected disabled>Year</option>
                                            <option value="1995">1995</option>
                                            <option value="2000">2000</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                        </x-select>
                                        <x-input-error forError="year" />

                                    </div>
                                </div>
                            </div>


                            <div class="mb-4">
                                <x-label for="email" :value="__('Email')" />
                                <x-input type="email" id="email" name="email"
                                    class=" @error('email')border-red-500@enderror" placeholder="name@email.com" />
                                <x-input-error forError="email" />
                            </div>

                            <div class="mb-4">
                                <x-label for="password" :value="__('Password')" />
                                <x-input type="password" name="password" id="password"
                                    class=" @error('password')border-red-500 @enderror" placeholder="Password" />
                                <x-input-error forError="password" />
                            </div>

                            <div class="mb-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />

                            </div>

                            <div class="py-2 px-2 inline-flex items-baseline">
                                <input type="checkbox" name="privacy_Policy" id="privacy_Policy" value="1" class="
										rounded
										border-gray-300
										text-pink-600
										shadow-sm
										focus:border-pink-300
										focus:ring
										focus:ring-offset-0
										focus:ring-pink-200
										focus:ring-opacity-50
									" />
                                <label for="privacy_Policy" class="ml-2 text-gray-800 cursor-pointer">
                                    By clicking, you agree to our <a href="#"
                                        class="underline text-gray-600 hover:text-pink-500">Terms of Service</a>
                                    (including the mandatory arbitration of disputes) and consent to our <a href="#"
                                        class="underline text-gray-600 hover:text-pink-500">Privacy Policy</a>
                                </label>
                            </div>
                            <x-input-error forError="privacy_Policy" />

                            <div class="block mt-2">
                                <button type="submit" class="w-full px-3 py-4 font-medium text-white bg-pink-500">
                                    Sign Up
                                </button>
                            </div>
                            <p class="w-full mt-2 text-sm text-center text-gray-500">
                                Already Registered?
                                <a href="{{ route('login') }}"
                                    class="text-pink-500 hover:text-pink-600 underline">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



</x-guest-layout>
