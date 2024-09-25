@extends('layouts.base-layout')

@section('title', 'Wallet Tracker - Add Expense')

@section('content')
<div class="min-h-full">
    <x-navbar></x-navbar>
    <x-header-title>Add Expense</x-header-title>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div>
                <label for="expense" class="block text-sm font-medium leading-6 text-gray-900">Expense</label>
                <input
                    type="text"
                    name="expense"
                    id="expense"
                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div>
                <label for="amount" class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                <input
                    type="text"
                    name="amount"
                    id="amount"
                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="0.00">
            </div>
            <div>
                <label for="tags" class="block text-sm font-medium leading-6 text-gray-900">Tags</label>
                <input
                    type="text"
                    name="tags"
                    id="tags"
                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
    </main>
</div>
@endsection
