<x-app-layout>
    <div class="flex items-center justify-between">
        <x-back-button :backUrl="$backUrl" />
        <input type="search" placeholder="find a user"
            class="w-1/2 px-4 py-2 pl-8 mb-6 bg-white border-none shadow rounded-xl placeholder-text-gray-900">
    </div>

    <table class="w-full">
        <thead class="font-semibold bg-gray-200 border-b border-gray-200">
            <tr>
                <td class="px-5 py-2 text-sm leading-5 whitespace-no-wrap">
                    Name
                </td>
                <td class="px-5 py-2 text-sm leading-5 whitespace-no-wrap">
                    Email
                </td>
                <td class="px-5 py-2 text-sm leading-5 whitespace-no-wrap">
                    Last login
                </td>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b border-gray-200">
                    <td class="px-5 py-4 text-sm leading-5 whitespace-no-wrap">{{ $user->name }}</td>
                    <td class="px-5 py-4 text-sm leading-5 whitespace-no-wrap">{{ $user->email }}</td>
                    {{-- <td class="px-5 py-4 text-sm leading-5 whitespace-no-wrap">
                        {{ $user->lastLogin->created_at->diffForHumans() }}
                        <span class="text-sm text-gray-400">({{ $user->lastLogin->ip_address }})</span>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-6">
        {{ $users->links() }}
    </div>
</x-app-layout>
