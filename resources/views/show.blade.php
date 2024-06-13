<x-app-layout>
    <div class="flex items-center px-4 py-2 sm:px-6">
        <svg class="w-4 sm:w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
        <a wire:navigate href="/" class="ml-2 font-semibold sm:ml-4">Back</a>
    </div>

    <div class="flex flex-col mt-6 bg-white idea-container rounded-xl sm:flex-row">

        <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
            <div class="flex-none">
                <a href="/">
                    <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                        alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full mx-2 md:mx-4">
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

                <div class="flex flex-col justify-between mt-6 md:flex-row sm:flex-row">
                    <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                        <div class="hidden text-gray-900 md:block">John Doe</div>
                        <div class="hidden md:block ">&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">4 Comments</div>
                    </div>

                    <div class="flex items-center gap-2 mt-4 sm:mt-0">
                        <div
                            class="flex items-center justify-center px-4 py-2 font-bold leading-none text-center transition duration-100 ease-in bg-gray-200 rounded-full text-xxs w-28 h-7">
                            Open
                        </div>
                        <x-dropdown :align="'right'" :width="'44'">
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
                                <x-dropdown-link href="#">Mark as spam</x-dropdown-link>
                                <x-dropdown-link href="#">Delete post</x-dropdown-link>
                            </x-slot>
                        </x-dropdown>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center justify-between mt-6 space-y-4 sm:flex-row sm:space-y-0 buttons-container">
        <div class="flex items-center space-x-4">
            <x-dropdown :width="'104'" :align="'top'">
                <x-slot name="trigger">
                    <button
                        class="flex items-center justify-center w-32 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-blueHover rounded-xl hover:border-gray-400">
                        Reply
                    </button>
                </x-slot>

                <x-slot name="content" class="absolute px-3 py-2 text-sm font-semibold text-left w-80 ">
                    <form action="#" class="px-4 py-6 space-y-4">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-blueHover rounded-xl hover:border-gray-400">
                                Post Comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-32 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                <svg class="w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>
                                Attach
                            </button>
                        </div>
                    </form>
                </x-slot>
            </x-dropdown>

            <x-dropdown :width="'76'" :align="'right'">
                <x-slot name="trigger">
                    <button
                        class="flex items-center justify-center px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                        <span>Set Status</span>
                        <svg class="w-5 ml-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content" class="text-sm font-semibold text-left">
                    <form action="#" class="px-4 py-6 space-y-4">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="text-black border-none bg-slate-200"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="border-none bg-slate-200 text-purple"
                                        name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="border-none bg-slate-200 text-yellow"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="border-none bg-slate-200 text-green"
                                        name="radio-direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="border-none bg-slate-200 text-red"
                                        name="radio-direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="4"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                <svg class="w-5 text-gray-500 transform -rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>
                                Attach
                            </button>

                            <button type="button"
                                class="flex items-center justify-center px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-blueHover rounded-xl hover:border-gray-400">
                                Update
                            </button>
                        </div>

                        <div class="inline-flex items-center font-normal">
                            <input type="checkbox" name="notify_voters" class="bg-gray-200 rounded" checked>
                            <span class="ml-2">Notify all voters</span>
                        </div>
                    </form>
                </x-slot>
            </x-dropdown>
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

    <div class="relative pt-4 my-8 space-y-6 comments-container sm:ml-22">
        <x-comment />
        <x-admin-comment />
        <x-comment />
    </div>
</x-app-layout>
