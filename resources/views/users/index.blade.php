<x-app-layout>
    <input type="search" placeholder="find a user"
        class="w-1/2 px-4 py-2 pl-8 bg-white border-none shadow rounded-xl placeholder-text-gray-900 mb-6">
    <table class="w-full">
        <thead class="bg-gray-200 font-semibold border-b border-gray-200">
            <tr>
                <td class="px-5 py-2 text-sm whitespace-no-wrap leading-5">
                    Name
                </td>
                <td class="px-5 py-2 text-sm whitespace-no-wrap leading-5">
                    Email
                </td>
                <td class="px-5 py-2 text-sm whitespace-no-wrap leading-5">
                    Last login
                </td>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b border-gray-200">
                    <td class="px-5 py-4 text-sm whitespace-no-wrap leading-5">{{ $user->name }}</td>
                    <td class="px-5 py-4 text-sm whitespace-no-wrap leading-5">{{ $user->email }}</td>
                    <td class="px-5 py-4 text-sm whitespace-no-wrap leading-5">
                        {{ $user->lastLogin->created_at->diffForHumans() }}
                        <span class="text-sm text-gray-400">({{ $user->lastLogin->ip_address }})</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-6">
        {{ $users->links() }}
    </div>
</x-app-layout>
