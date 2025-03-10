<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissions') }}
        </h2>
    </x-slot>
    <x-show-message-bags />

    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <span class="card-title">{{ $permission ? __('Edit Permission') : __('Add Permission') }}</span>
            <form action="{{ $permission ? route('permissions.update', $permission->id) : route('permissions.store') }}"
                method="POST">
                @csrf
                @isset($permission)
                    @method('PATCH')
                @endisset

                <div class="grid grid-cols-4 gap-5">
                    <div class="col-span-4 md:col-span-2">
                        <x-input name="name" id="name" placeholder="{{ __('Permission wildcard') }}" title=""
                            :value="old('name', $permission->name ?? '')" />
                    </div>
                    <div></div>
                    <div class="col-span-4">
                        <x-textarea name="description" id="description" title="{{ __('Description') }}"
                            placeholder="{{ __('Description') }}" :value="old('description', $permission->description ?? '')" />
                    </div>

                    <h3 class="col-span-4 text-lg font-semibold mb-2">{{ __('Roles') }}</h3>
                    @foreach ($roles as $role)
                        <div class="col-span-2 md:col-span-1">
                            <x-checkbox title="{{ $role->name }}" name="roles[]" id="roles-{{ $role->id }}"
                                value="{{ $role->id }}" :checked="$syncedRoles->contains($role->id)" />
                        </div>
                    @endforeach
                    <div class="col-span-4">
                        <button type="submit"
                            class="btn btn-primary">{{ $permission ? __('Edit') : __('Add') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
