<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Customers Group') }}
        </h2>
    </x-slot>

    <div class="card bg-base-100 shadow-xl">
        <form action="{{ route('customer-groups.update', $customerGroup) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="card-title">{{ __('Edit customer group') }}</div>
                <x-show-message-bags />

                @include('customerGroups.form')
                <div class="card-actions">
                    <button class="btn btn-pr"> {{ __('Edit') }} </button>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>