@php

    $styles = [

        'success' => [
            'bg' => 'bg-emerald-50',
            'border' => 'border-emerald-200',
            'iconBg' => 'bg-emerald-100',
            'iconColor' => 'text-emerald-600',
            'title' => 'Success',
            'icon' => 'fa-check-circle',
            'button' => 'bg-emerald-600 hover:bg-emerald-700'
        ],

        'error' => [
            'bg' => 'bg-red-50',
            'border' => 'border-red-200',
            'iconBg' => 'bg-red-100',
            'iconColor' => 'text-red-600',
            'title' => 'Error',
            'icon' => 'fa-circle-xmark',
            'button' => 'bg-red-600 hover:bg-red-700'
        ],

        'warning' => [
            'bg' => 'bg-yellow-50',
            'border' => 'border-yellow-200',
            'iconBg' => 'bg-yellow-100',
            'iconColor' => 'text-yellow-600',
            'title' => 'Warning',
            'icon' => 'fa-triangle-exclamation',
            'button' => 'bg-yellow-500 hover:bg-yellow-600'
        ],

        'info' => [
            'bg' => 'bg-blue-50',
            'border' => 'border-blue-200',
            'iconBg' => 'bg-blue-100',
            'iconColor' => 'text-blue-600',
            'title' => 'Information',
            'icon' => 'fa-circle-info',
            'button' => 'bg-blue-600 hover:bg-blue-700'
        ]

    ];

    $style = $styles[$type];

@endphp

@if($message)

<div
    class="relative mb-6 overflow-hidden rounded-2xl border {{ $style['border'] }} {{ $style['bg'] }} shadow-sm">

    <!-- Top Accent -->
    <div class="h-1.5 w-full {{ $style['button'] }}"></div>

    <div class="flex items-start gap-4 p-5">

        <!-- Icon -->
        <div
            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl {{ $style['iconBg'] }} {{ $style['iconColor'] }}">

            <i class="fas {{ $style['icon'] }} text-lg"></i>

        </div>

        <!-- Content -->
        <div class="flex-1">

            <div class="flex items-center justify-between">

                <h4 class="text-base font-semibold text-gray-900">

                    {{ $style['title'] }}

                </h4>

                <!-- Close -->
                <button
                    type="button"
                    onclick="this.closest('.relative').remove()"
                    class="text-gray-400 hover:text-gray-600">

                    <i class="fas fa-times"></i>

                </button>

            </div>

            <p class="mt-1.5 text-sm leading-6 text-gray-600">

                {{ $message }}

            </p>

        </div>

    </div>

</div>

@endif