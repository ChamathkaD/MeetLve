<nav x-data="{ open: false }" class="bg-transparent">
    <div class="max-w-screen mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button
                    @click="open = !open"
                    type="button"
                    class="
								inline-flex
								items-center
								justify-center
								p-2
								rounded-md
								text-gray-400
								hover:bg-gray-100
								focus:outline-none
							"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>

                    <svg
                        x-show="!open"
                        class="block h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>

                    <svg
                        x-show="open"
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>

            <div
                class="
							flex-1 flex
							items-center
							justify-center
							sm:items-stretch sm:justify-start
						"
            >
                <div class="flex-shrink-0 flex items-center">
                    <a href="#">
								<span
                                    class="
										mx-auto
										text-xl
										font-black
										leading-none
										text-gray-900
										select-none
									"
                                >Meet<span class="text-pink-500">Love</span>.</span
                                >
                    </a>
                </div>
            </div>

            <div
                class="
							absolute
							inset-y-0
							right-0
							items-center
							pr-2
							sm:static sm:inset-auto sm:ml-6 sm:pr-0 sm:space-x-3
							md:space-x-6
							hidden
							sm:flex
						"
            >
                <div>
                    <label class="flex items-center relative">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4 absolute text-gray-500 ml-2"
                        >
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <input
                            class="
										px-8
										py-2
										bg-gray-100
										border-transparent
										rounded-md
										focus:ring-0 focus:outline-none focus:border-transparent
									"
                            type="search"
                            placeholder="Find Love..."
                        />
                    </label>
                </div>

                <a
                    href="{{ route('register') }}"
                    class="
								text-base
								font-medium
								uppercase
								leading-6
								text-gray-600
								whitespace-nowrap
								transition
								duration-150
								ease-in-out
								hover:text-gray-900
							"
                >
                    <i class="bx bx-user-plus bx-fw"></i>
                    Sign Up
                </a>

                <a
                    href="{{ route('login') }}"
                    class="
								inline-flex
								items-center
								justify-center
								px-4
								py-1.5
								text-base
								font-medium
								uppercase
								leading-6
								text-pink-600
								whitespace-no-wrap
								bg-white
								border border-gray-200
								rounded-md
								shadow-sm
								hover:bg-gray-50
								focus:outline-none focus:shadow-none
							"
                >
                    <i class="bx bx-log-in-circle mr-1"></i>
                    Sign In
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div :class="{'hidden' : !open}" class="sm:hidden" id="mobile-menu">
        <div class="px-5 pt-2 space-y-1">
            <a
                href="#"
                class="
							block
							text-base
							font-medium
							uppercase
							leading-6
							text-gray-600
							whitespace-nowrap
							transition
							duration-150
							ease-in-out
							hover:text-pink-500 hover:bg-gray-100
							py-2
							px-2
							rounded-md
						"
            >
                <i class="bx bx-log-in-circle bx-fw"></i>
                Sign In
            </a>

            <a
                href="#"
                class="
							block
							text-base
							font-medium
							uppercase
							leading-6
							text-gray-600
							whitespace-nowrap
							transition
							duration-150
							ease-in-out
							hover:text-pink-500 hover:bg-gray-100
							py-2
							px-2
							rounded-md
						"
            >
                <i class="bx bx-user-plus bx-fw"></i>
                Sign Up
            </a>

            <div>
                <label class="flex items-center relative">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-4 h-4 absolute text-gray-500 ml-2"
                    >
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input
                        class="
									w-full
									px-8
									py-2
									bg-gray-100
									border-transparent
									rounded-md
									focus:ring-0 focus:outline-none focus:border-transparent
								"
                        type="search"
                        placeholder="Find Love..."
                    />
                </label>
            </div>
        </div>
    </div>
</nav>
