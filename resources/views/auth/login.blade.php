<x-guest-layout>
    <section class="w-full px-8 py-5 sm:py-16 xl:px-8 bg-no-repeat bg-cover bg-center" style="background-image: url({{ asset('img/sign-in-bg.webp') }});">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">
                <div class="w-full space-y-5 md:w-7/12 md:pr-16">
                    <p class="font-medium text-pink-500 uppercase">Lorem Idasdlajsd</p>
                    <h2
                        class="
								text-2xl
								font-extrabold
								leading-none
								text-black
								sm:text-3xl
								md:text-5xl
							"
                    >
                        The Fastest Way to Find Your
                        <span class="text-pink-500">Love</span>
                    </h2>
                    <p class="text-xl text-gray-600 md:pr-16">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Cupiditate sequi ipsam praesentium neque, perferendis qui!
                        Reiciendis cum alias autem, aspernatur est nihil temporibus
                    </p>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-5/12">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
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
                            <h3 class="mb-6 text-2xl font-medium">Sign in to your Account</h3>
                            <div class="mb-4">
                                <x-input type="email" id="email" name="email"
                                         class=" @error('email')border-red-500@enderror" placeholder="name@email.com" />
                                <x-input-error forError="email" />
                            </div>


                            <div class="mb-4">
                                <x-input type="password" name="password" id="password"
                                         class=" @error('password')border-red-500 @enderror" placeholder="Password" />
                                <x-input-error forError="password" />
                            </div>


                            <div class="py-2 px-2 flex justify-between">
                                <label class="inline-flex items-center">
                                    <input
                                        type="checkbox"
                                        class="
											rounded
											border-gray-300
											text-pink-600
											shadow-sm
											focus:border-pink-300
											focus:ring
											focus:ring-offset-0
											focus:ring-pink-200
											focus:ring-opacity-50
										"
                                    />
                                    <span class="ml-2 text-gray-800 text-sm cursor-pointer"
                                    >Keep me signed in</span
                                    >
                                </label>

                                @if (Route::has('password.request'))
                                <a
                                    href="{{ route('password.request') }}"
                                    class="
										text-sm text-gray-8100
										hover:text-pink-500 hover:underline
									"
                                >
                                    Forgot Password?
                                </a>
                                @endif
                            </div>

                            <div class="block mt-2">
                                <button
                                    type="submit"
                                    class="w-full px-3 py-4 font-medium text-white bg-pink-500"
                                >
                                    Log Me In
                                </button>
                            </div>
                            <p class="w-full mt-4 text-sm text-center text-gray-500">
                                Don't have an account?
                                <button class="text-pink-500 hover:text-pink-600 underline" href="{{ route('register') }}">
                                    Sign up here
                                </button>
                            </p>

                            <div class="grid grid-cols-12 gap-4 items-center py-4">
                                <div class="col-span-5">
                                    <hr class="border" />
                                </div>
                                <div class="col-span-2 text-center">
                                    <span class="text-gray-400 font-semibold">Or</span>
                                </div>
                                <div class="col-span-5">
                                    <hr class="border" />
                                </div>
                            </div>

                            <div class="space-y-3">
                                <a
                                    href="#"
                                    class="
										justify-center
										flex
										px-4
										py-2
										text-base
										font-medium
										uppercase
										leading-6
										whitespace-no-wrap
										bg-white
										border border-gray-200
										rounded-md
										shadow-sm
										hover:bg-gray-50
										focus:outline-none focus:shadow-none
									"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 mr-2"
                                        viewBox="0 0 48 48"
                                        style="fill: #000000"
                                    >
                                        <path
                                            fill="#3f51b5"
                                            d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"
                                        ></path>
                                        <path
                                            fill="#fff"
                                            d="M29.368,24H26v12h-5V24h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H30v4h-2.287 C26.104,16,26,16.6,26,17.723V20h4L29.368,24z"
                                        ></path>
                                    </svg>
                                    <span>Login with Facebook</span>
                                </a>

                                <a
                                    href="#"
                                    class="
										justify-center
										flex
										px-4
										py-2
										text-base
										font-medium
										uppercase
										leading-6
										whitespace-no-wrap
										bg-white
										border border-gray-200
										rounded-md
										shadow-sm
										hover:bg-gray-50
										focus:outline-none focus:shadow-none
									"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 48 48"
                                        style="fill: #000000"
                                        class="h-6 w-6 mr-2"
                                    >
                                        <path
                                            fill="#fbc02d"
                                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"
                                        ></path>
                                        <path
                                            fill="#e53935"
                                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"
                                        ></path>
                                        <path
                                            fill="#4caf50"
                                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"
                                        ></path>
                                        <path
                                            fill="#1565c0"
                                            d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"
                                        ></path>
                                    </svg>
                                    <span>Login with Google</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div
            class="
					container
					items-center
					max-w-6xl
					px-10
					mx-auto
					sm:px-20
					md:px-32
					lg:px-16
				"
        >
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2
                            class="
									mb-4
									text-3xl
									font-bold
									leading-tight
									tracking-tight
									sm:text-4xl
									font-heading
								"
                        >
                            Jam-packed with all the tools you need to succeed!
                        </h2>
                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                            It's never been easier to build a business of your own. Our
                            tools will help you with the following:
                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <i class="bx bx-heart text-pink-500 bx-md bx-fw"></i>
                                <span class="font-medium text-gray-500"
                                >Faster Processing and Delivery</span
                                >
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <i
                                    class="bx bx-calendar-heart text-yellow-500 bx-md bx-fw"
                                ></i>
                                <span class="font-medium text-gray-500"
                                >Out of the Box Tracking and Monitoring</span
                                >
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <i class="bx bx-badge-check text-green-500 bx-md bx-fw"></i>
                                <span class="font-medium text-gray-500"
                                >100% Protection and Security for Your App</span
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="img/bg_love.svg"
                        alt="feature image"
                    />
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




