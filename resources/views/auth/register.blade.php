<x-guest-layout>
    <section
        class="w-full px-8 py-5 sm:py-16 xl:px-8 bg-no-repeat bg-center"
        style="background-image: url({{ asset('img/sign-up-bg.webp') }})"
    >
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row">
                <div class="w-full space-y-5 md:w-7/12 md:pr-16 mt-40">
                    <h2
                        class="
								text-2xl
								font-extrabold
								leading-none
								sm:text-3xl
								md:text-5xl
							"
                    >
                        Dating made <span class="text-pink-500">Fun</span>
                        Without the Game.
                    </h2>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-5/12">
                    <form action="{{ route('register') }}" method="post">
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
                            <h3 class="mb-6 text-2xl font-medium">
                                Create Your Account
                            </h3>

                            <label for="gender" class="block mb-4">
                                <span class="text-gray-700">I'm a:</span>
                                <select
                                    class="
										block
										w-full
										mt-1
										border
										px-4
										py-3
										border-gray-200
										focus:ring-0 focus:outline-none focus:border-pink-400
									"
                                >
                                    <option selected disabled>Gender and preferences</option>
                                    <option>a woman interested in men</option>
                                    <option>a man interested in women</option>
                                    <option>a woman interested in women</option>
                                    <option>a man interested in men</option>
                                </select>
                            </label>

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-4">
                                    <label class="block mb-4">
                                        <span class="text-gray-700">Day</span>
                                        <select
                                            class="
												block
												w-full
												mt-1
												border
												px-4
												py-3
												border-gray-200
												focus:ring-0 focus:outline-none focus:border-pink-400
											"
                                        >
                                            <option selected disabled>Day</option>
                                            <option>a woman interested in men</option>
                                            <option>a man interested in women</option>
                                            <option>a woman interested in women</option>
                                            <option>a man interested in men</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-span-4">
                                    <label class="block mb-4">
                                        <span class="text-gray-700">Month</span>
                                        <select
                                            class="
												block
												w-full
												mt-1
												border
												px-4
												py-3
												border-gray-200
												focus:ring-0 focus:outline-none focus:border-pink-400
											"
                                        >
                                            <option selected disabled>Month</option>
                                            <option>a woman interested in men</option>
                                            <option>a man interested in women</option>
                                            <option>a woman interested in women</option>
                                            <option>a man interested in men</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-span-4">
                                    <label class="block mb-4">
                                        <span class="text-gray-700">Year</span>
                                        <select
                                            class="
												block
												w-full
												mt-1
												border
												px-4
												py-3
												border-gray-200
												focus:ring-0 focus:outline-none focus:border-pink-400
											"
                                        >
                                            <option selected disabled>Year</option>
                                            <option>a woman interested in men</option>
                                            <option>a man interested in women</option>
                                            <option>a woman interested in women</option>
                                            <option>a man interested in men</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <label class="block mb-2">
                                <span class="text-gray-700">Email Address</span>
                                <input
                                    type="email"
                                    class="
										block
										w-full
										px-4
										py-3
										mt-1
										border border-gray-200
										focus:outline-none focus:border-pink-400 focus:ring-0
									"
                                    placeholder="name@email.com"
                                />
                            </label>

                            <label class="block mb-2">
                                <span class="text-gray-700">Password</span>
                                <input
                                    type="password"
                                    name="password"
                                    class="
										block
										w-full
										mt-1
										px-4
										py-3
										mb-2
										border border-gray-200
										focus:outline-none focus:border-pink-400 focus:ring-0
									"
                                    placeholder="Password"
                                />
                            </label>

                            <div class="py-2 px-2">
                                <label class="inline-flex items-baseline">
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

                                    <span class="ml-2 text-gray-800 cursor-pointer"
                                    >By clicking, you agree to our <a href="#" class="underline text-gray-600 hover:text-pink-500">Terms of Service</a> (including the mandatory arbitration of disputes) and consent to our <a href="#" class="underline text-gray-600 hover:text-pink-500">Privacy Policy</a></span
                                    >
                                </label>
                            </div>

                            <div class="block mt-2">
                                <button
                                    class="w-full px-3 py-4 font-medium text-white bg-pink-500"
                                >
                                    Sign Up
                                </button>
                            </div>
                            <p class="w-full mt-2 text-sm text-center text-gray-500">
                                Already Registered?
                                <a href="#_" class="text-pink-500 hover:text-pink-600 underline"
                                >Login</a
                                >
                            </p>
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


