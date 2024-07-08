@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => 'bg-white py-3 font-semibold text-left z-10 shadow-dialog rounded-xl',
])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-top';
            break;
        case 'right':
        default:
            $alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
            break;
    }

    switch ($width) {
        case '44':
            $width = 'w-44';
            break;
        case '48':
            $width = 'w-48';
            break;
        case '76':
            $width = 'w-76';
            break;
        case '104':
            $width = 'md:w-104 ';
            break;
    }
@endphp

<div class="relative" x-data="{ open: false }"x-init="$wire.on('statusWasUpdated', () => { isOpen = false })" @click.outside="open = false"
    @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show.transition.origin.top.left.duration.150ms.150ms="open"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
        style="display: none;">
        <div class="{{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
