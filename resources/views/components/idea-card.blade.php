<div class="idea-container bg-white rounded-xl hover:shadow-card transition duration-100 ease-in flex cursor-pointer">
    <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="font-semibold text-2xl">12</div>
            <div class="text-gray-500">votes</div>
        </div>

        <div class="mt-8">
            <button
                class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 shadow transition duration-100 ease-in">Vote</button>
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
            <div class="text-gray-500 mt-3 line-clamp-3">
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
                <div class="flex items-center text-xs font-semibold gap-2 text-gray-400">
                    <div>10 hours ago</div>
                    <div>&bull;</div>
                    <div>Category</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">4 Comments</div>
                </div>

                <div class="flex items-center gap-2">
                    <div
                        class="flex items-center justify-center bg-gray-200 text-xxs font-bold leading-none rounded-full text-center w-28 h-7 py-2 px-4 transition duration-100 ease-in">
                        Open</div>
                    <div
                        class="bg-gray-100 hover:bg-gray-200 border rounded-full h-7 flex items-center py-2 px-3 transition duration-100 ease-in">
                        <svg fill="currentColor" width="24" height="6">
                            <path
                                d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                style="color: rgba(163, 163, 163, .5)">
                        </svg>
                        <ul
                            class="hidden absolute w-44 font-semibold text-left ml-8 mt-24 bg-white shadow-dialog rounded-xl py-3">
                            <li><a href=""
                                    class="hover:bg-gray-100 px-5 py-3 block transition duration-100 ease-in">Mark as
                                    spam</a></li>
                            <li><a href=""
                                    class="hover:bg-gray-100 px-5 py-3 block transition duration-100 ease-in">Delete
                                    post</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
