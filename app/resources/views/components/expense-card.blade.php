<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <div class="min-w-0 flex-auto">{{ $expense->amount }}</div>
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{ $expense->name }}</p>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <span>
            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Edit</a>
            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Delete</a>
        </span>
        <button id="test">test</button>
    </div>
</li>
