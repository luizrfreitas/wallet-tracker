@extends('layouts.base-layout')

@section('title', 'Wallet Tracker - Dashboard')

@section('content')
<div class="min-h-full">
    <x-navbar></x-navbar>
    <x-header-title>Dashboard</x-header-title>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @if($expenses->isEmpty())
                <p>No expenses available.</p>
            @else
                <ul class="">
            @foreach ($expenses as $expense)
                <x-expense-card :$expense></x-expense-card>
            @endforeach
                </ul>
            @endif
        </div>
    </main>
</div>
@endsection
