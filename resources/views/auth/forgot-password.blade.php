<x-guest-layout>
    <section
        class="w-full px-8 py-5 sm:py-16 xl:px-8 bg-no-repeat"
        style="background-image: url('{{ asset('img/sign-in-bg.webp') }}')"
    >
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center">
                <div class="w-full md:w-3/6 mt-16 md:mt-0">
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
                        <h3 class="text-2xl font-medium mb-2">
                            <i class='bx bx-envelope bx-fw'></i>
                            Reset Your Password
                        </h3>

                        <p class="text-gray-400 mb-3">
                            Enter your email address to receive an email with a link to reset your password.
                        </p>

                        <label class="block mb-2">
                            <span class="text-gray-700">Email Address:</span>
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

                        <div class="block mt-2">
                            <button
                                class="w-full px-3 py-3 font-medium text-white bg-pink-500"
                            >
                                Email Password Reset Link
                            </button>
                        </div>

                    </div>
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
