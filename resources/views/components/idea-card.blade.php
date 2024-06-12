<div class="flex transition duration-100 ease-in bg-white cursor-pointer idea-container rounded-xl hover:shadow-card">
    <div class="px-5 py-8 border-r border-gray-100">
        <div class="text-center">
            <div class="text-2xl font-semibold">12</div>
            <div class="text-gray-500">votes</div>
        </div>

        <div class="mt-8">
            <button
                class="w-20 px-4 py-3 font-bold uppercase transition duration-100 ease-in bg-gray-200 border border-gray-200 shadow hover:border-gray-400 text-xxs rounded-xl">Vote</button>
        </div>
    </div>

    <div class="flex flex-1 px-2 py-6">
        <div class="flex-none">
            <a href="/">
                <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                    alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>

        <div class="w-full mx-4">
            <h4 class="text-xl font-semibold">
                <a wire:navigate href="/idea" class="hover:underline">Title</a>
            </h4>
            <div class="mt-3 text-gray-500 line-clamp-3">
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
                    <div>10 hours ago</div>
                    <div>&bull;</div>
                    <div>Category</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">4 Comments</div>
                </div>

                <div x-data="{ open: false }" class="flex items-center gap-2">
                    <div
                        class="flex items-center justify-center px-4 py-2 font-bold leading-none text-center transition duration-100 ease-in bg-gray-200 rounded-full text-xxs w-28 h-7">
                        Open</div>
                    <button @click="open = ! open"
                        class="relative flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                        <svg class="fill-gray-400" width="24" height="6">
                            <path
                                d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                        </svg>
                        <ul x-cloak x-show="open" @click.outside="open = false"
                            class="absolute py-3 mt-24 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                            <li><a href=""
                                    class="block px-5 py-3 transition duration-100 ease-in hover:bg-gray-100">Mark as
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
