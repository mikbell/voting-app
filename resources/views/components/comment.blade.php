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

                <div x-data="{open: false}">

                    <x-dropdown :align="'left'" :width="'44'">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg class="fill-gray-400" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="#"> Mark as spam</x-dropdown-link>
                            <x-dropdown-link href="#">Delete post</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </div>
</div>
