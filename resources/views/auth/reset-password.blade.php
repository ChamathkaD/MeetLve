<x-guest-layout>
    <section
        class="w-full px-8 py-5 sm:py-16 xl:px-8 bg-no-repeat"
           {{-- style="background-image: url( {{ route('img/sign-in-bg.webp') }})"--}}
    >
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center">
                <div class="w-full md:w-3/6 mt-16 md:mt-0">

                    <form action="{{ route('password.update') }}" method="post">
                        @csrf
                        <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div
                            class="
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
							"
                        >
                            <h3 class="text-2xl font-medium mb-4">
                                <i class="bx bx-lock bx-fw"></i>
                                Reset Password
                            </h3>

                            <div class="block mb-2">
                                <x-label for="email" :value="__('Email Address:')" />
                                <x-input type="email" id="email" name="email" :value="old('email', $request->email)"
                                         class=" @error('email')border-red-500@enderror" placeholder="name@email.com" />
                                <x-input-error forError="email" />
                            </div>

                            {{--<label for="email" class="block mb-2">
                                <span class="text-gray-700">Email Address</span>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="old('email', $request->email)"
                                    class="
										block
										w-full
										px-4
										py-3
										mt-1
										border border-gray-200
										focus:outline-none focus:border-pink-400 focus:ring-0
										@error('email')
                                        border-red-500
                                        @enderror
									"
                                    placeholder="name@email.com"
                                />
                                @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </label>--}}

                            <div class="block mb-2">
                                <x-label for="password" :value="__('Password')" />
                                <x-input type="password" name="password" id="password"
                                         class=" @error('password')border-red-500 @enderror" placeholder="Password" />
                                <x-input-error forError="password" />
                            </div>

                          {{--  <label for="password" class="block mb-2">
                                <span class="text-gray-700">Password</span>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="
										block
										w-full
										px-4
										py-3
										mt-1
										border border-gray-200
										focus:outline-none focus:border-pink-400 focus:ring-0
										@error('password')
                                        border-red-500
@enderror
									"
                                    placeholder="Enter Password"
                                />
                                @error('password')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </label>--}}

                            <div class="block mb-2">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />

                            </div>

                            {{--<label for="password_confirmation" class="block mb-2">
                                <span  class="text-gray-700">Confirm Password</span>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    class="
										block
										w-full
										px-4
										py-3
										mt-1
										border border-gray-200
										focus:outline-none focus:border-pink-400 focus:ring-0
									"
                                    placeholder="Re-enter Password"
                                />
                            </label>--}}

                            <div class="block mt-2">
                                <button
                                    type="submit"
                                    class="w-full px-3 py-3 font-medium text-white bg-pink-500"
                                >
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-7 pb-14">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1
                class="
						text-sm
						font-bold
						tracking-wide
						text-center text-gray-800
						uppercase
						mb-7
					"
            >
                Trusted by top-leading companies.
            </h1>
            <div class="grid items-center justify-center grid-cols-12 gap-y-8">
                <div
                    class="
							flex
							items-center
							justify-center
							col-span-6
							sm:col-span-4
							md:col-span-3
							xl:col-span-2
						"
                >
                    <img
                        src="https://cdn.devdojo.com/tails/images/disney-plus.svg"
                        alt="Disney Plus"
                        class="block object-contain h-12"
                    />
                </div>
                <div
                    class="
							flex
							items-center
							justify-center
							col-span-6
							sm:col-span-4
							md:col-span-3
							xl:col-span-2
						"
                >
                    <img
                        src="https://cdn.devdojo.com/tails/images/google.svg"
                        alt="Google"
                        class="block object-contain h-9"
                    />
                </div>
                <div
                    class="
							flex
							items-center
							justify-center
							col-span-6
							sm:col-span-4
							md:col-span-3
							xl:col-span-2
						"
                >
                    <img
                        src="https://cdn.devdojo.com/tails/images/hubspot.svg"
                        alt="Hubspot"
                        class="block object-contain h-9"
                    />
                </div>
                <div
                    class="
							flex
							items-center
							justify-center
							col-span-6
							sm:col-span-4
							md:col-span-3
							xl:col-span-2
						"
                >
                    <img
                        src="https://cdn.devdojo.com/tails/images/youtube.svg"
                        alt="Youtube"
                        class="block object-contain h-7 lg:h-8"
                    />
                </div>
                <div
                    class="
							flex
							items-center
							justify-center
							col-span-6
							sm:col-span-4
							md:col-span-6
							xl:col-span-2
						"
                >
                    <img
                        src="https://cdn.devdojo.com/tails/images/slack.svg"
                        alt="Slack"
                        class="block object-contain h-9"
                    />
                </div>
                <div
                    class="
							flex
							items-center
							justify-center
							col-span-6
							sm:col-span-4
							md:col-span-6
							xl:col-span-2
						"
                >
                    <img
                        src="https://cdn.devdojo.com/tails/images/shopify.svg"
                        alt="Shopify"
                        class="block object-contain h-9"
                    />
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>





