<x-app-layout>
    <div class="flex items-center">
        <svg class="w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>

        <a wire:navigate href="/" class="font-semibold ">Back</a>
    </div>

    <div class="flex mt-6 bg-white idea-container rounded-xl ">

        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="/">
                    <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                        alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="/idea" class="hover:underline">Title</a>
                </h4>
                <div class="mt-3 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam corporis culpa autem
                    cumque mollitia repellat minus, veniam eum, eligendi itaque! Ipsum sit repellendus laborum
                    pariatur excepturi voluptatem vel accusamus et recusandae, maxime placeat iusto perferendis
                    voluptate molestiae voluptatibus modi quos harum quo fugit? Unde repellendus dolorum officia
                    quia maiores ut debitis perferendis? Aspernatur optio expedita at quam quidem non laboriosam,
                    deserunt quas amet. Molestiae magnam velit ipsa id accusamus, veritatis distinctio natus
                    possimus est nobis sunt sequi eos itaque. At voluptates ipsa quia error atque rerum soluta
                    laudantium consequuntur reprehenderit omnis, ab quisquam obcaecati explicabo, culpa velit,
                    minima enim?
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                        <div class="text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">4 Comments</div>
                    </div>

                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center justify-center px-4 py-2 font-bold leading-none text-center transition duration-100 ease-in bg-gray-200 rounded-full text-xxs w-28 h-7">
                            Open</div>
                        <button
                            class="flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                            <svg class="fill-gray-400" width="24" height="6">
                                <path
                                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                            </svg>

                            <ul
                                class="absolute hidden py-3 mt-24 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li><a href=""
                                        class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Mark
                                        as
                                        spam</a></li>
                                <li><a href=""
                                        class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Delete
                                        post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between mt-6 buttons-container">
        <div class="flex items-center ml-6 space-x-4">
            <button type="button"
                class="flex items-center justify-center w-32 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-blueHover rounded-xl hover:border-gray-400">
                <span class="ml-1">Reply</span>
            </button>

            <button type="button"
                class="flex items-center justify-center px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">

                <span>Set Status</span>
                <svg class="w-5 ml-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>

            </button>
        </div>

        <div class="flex items-center space-x-3">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
                <div class="text-xl font-semibold leading-snug">12</div>
                <div class="text-sm leading-none text-gray-400">votes</div>
            </div>


            <div>
                <button
                    class="w-32 px-4 py-3 text-xs font-bold uppercase transition duration-100 ease-in bg-gray-200 border border-gray-200 shadow hover:border-gray-400 rounded-xl">Vote</button>
            </div>
        </div>

    </div>

    <div class="relative pt-4 my-8 mt-1 space-y-6 comments-container ml-22">
        <div class="relative flex bg-white comment-container rounded-xl ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="/">
                        <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <div class="text-gray-500 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam corporis culpa autem
                        cumque mollitia repellat minus, veniam eum, eligendi itaque! Ipsum sit repellendus laborum
                        pariatur excepturi voluptatem vel accusamus et recusandae, maxime placeat iusto perferendis
                        voluptate molestiae voluptatibus modi quos harum quo fugit? Unde repellendus dolorum officia
                        quia maiores ut debitis perferendis? Aspernatur optio expedita at quam quidem non laboriosam,
                        deserunt quas amet. Molestiae magnam velit ipsa id accusamus, veritatis distinctio natus
                        possimus est nobis sunt sequi eos itaque. At voluptates ipsa quia error atque rerum soluta
                        laudantium consequuntur reprehenderit omnis, ab quisquam obcaecati explicabo, culpa velit,
                        minima enim?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                            <div class="text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center gap-2">

                            <button
                                class="flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg class="fill-gray-400" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                </svg>

                                <ul
                                    class="absolute hidden py-3 mt-24 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                    <li><a href=""
                                            class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Mark
                                            as
                                            spam</a></li>
                                    <li><a href=""
                                            class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Delete
                                            post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative flex mt-6 bg-white comment-container is-admin rounded-xl ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="/">
                        <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <div class="text-gray-500 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam corporis culpa autem
                        cumque mollitia repellat minus, veniam eum, eligendi itaque! Ipsum sit repellendus laborum
                        pariatur excepturi voluptatem vel accusamus et recusandae, maxime placeat iusto perferendis
                        voluptate molestiae voluptatibus modi quos harum quo fugit? Unde repellendus dolorum officia
                        quia maiores ut debitis perferendis? Aspernatur optio expedita at quam quidem non laboriosam,
                        deserunt quas amet. Molestiae magnam velit ipsa id accusamus, veritatis distinctio natus
                        possimus est nobis sunt sequi eos itaque. At voluptates ipsa quia error atque rerum soluta
                        laudantium consequuntur reprehenderit omnis, ab quisquam obcaecati explicabo, culpa velit,
                        minima enim?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                            <div class="text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center gap-2">

                            <button
                                class="flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg class="fill-gray-400" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                </svg>

                                <ul
                                    class="absolute hidden py-3 mt-24 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                    <li><a href=""
                                            class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Mark
                                            as
                                            spam</a></li>
                                    <li><a href=""
                                            class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Delete
                                            post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative flex mt-6 bg-white comment-container rounded-xl ">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="/">
                        <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <div class="text-gray-500 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam corporis culpa autem
                        cumque mollitia repellat minus, veniam eum, eligendi itaque! Ipsum sit repellendus laborum
                        pariatur excepturi voluptatem vel accusamus et recusandae, maxime placeat iusto perferendis
                        voluptate molestiae voluptatibus modi quos harum quo fugit? Unde repellendus dolorum officia
                        quia maiores ut debitis perferendis? Aspernatur optio expedita at quam quidem non laboriosam,
                        deserunt quas amet. Molestiae magnam velit ipsa id accusamus, veritatis distinctio natus
                        possimus est nobis sunt sequi eos itaque. At voluptates ipsa quia error atque rerum soluta
                        laudantium consequuntur reprehenderit omnis, ab quisquam obcaecati explicabo, culpa velit,
                        minima enim?
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                            <div class="text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>

                        <div class="flex items-center gap-2">

                            <button
                                class="flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg class="fill-gray-400" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                </svg>

                                <ul
                                    class="absolute hidden py-3 mt-24 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                    <li><a href=""
                                            class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Mark
                                            as
                                            spam</a></li>
                                    <li><a href=""
                                            class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Delete
                                            post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
