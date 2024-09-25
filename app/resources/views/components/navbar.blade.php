<nav class="bg-gray-800">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
    <div class="flex items-center">
        <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
            <a
                href="{{ route('wallet-tracker.index') }}"
                class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                aria-current="page">Dashboard
            </a>
            <a
                href="{{ route('wallet-tracker.add') }}"
                class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                aria-current="page">Add Expense
            </a>
        </div>
        </div>
    </div>
    </div>
</div>
</nav>
