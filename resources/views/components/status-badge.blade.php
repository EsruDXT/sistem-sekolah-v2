       @if ($status === 'Aktif')
            <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                {{ $slot }}
            </span>
        @elseif ($status === 'Tidak Aktif')
            <span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                {{ $slot }}
            </span>
        @endif
