<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Project List</h1>

    @if (session()->has('message'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="mb-6 bg-white p-4 rounded shadow">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block">Title</label>
                <input type="text" wire:model="title" class="w-full border p-2 rounded">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block">Client</label>
                <input type="text" wire:model="client" class="w-full border p-2 rounded">
                @error('client') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block">Image (comma separated URLs)</label>
                <input type="text" wire:model="image" class="w-full border p-2 rounded">
                @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block">Tech (comma separated)</label>
                <input type="text" wire:model="tech" class="w-full border p-2 rounded">
                @error('tech') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block">Private?</label>
                <select wire:model="is_private" class="w-full border p-2 rounded">
                    <option value="">-- Select --</option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
                @error('is_private') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block">Website</label>
                <input type="text" wire:model="web" class="w-full border p-2 rounded">
                @error('web') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-4 flex justify-between">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $isEdit ? 'Update' : 'Save' }}</button>
            @if ($isEdit)
                <button type="button" wire:click="resetForm" class="text-gray-600">Cancel</button>
            @endif
        </div>
    </form>

    <div class="bg-white shadow rounded">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2 text-left">#</th>
                    <th class="p-2 text-left">Title</th>
                    <th class="p-2 text-left">Client</th>
                    <th class="p-2 text-left">Private</th>
                    <th class="p-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr class="border-t">
                    <td class="p-2">{{ $project->id }}</td>
                    <td class="p-2">{{ $project->title }}</td>
                    <td class="p-2">{{ $project->client }}</td>
                    <td class="p-2">{{ $project->is_private }}</td>
                    <td class="p-2 space-x-2">
                        <button wire:click="edit({{ $project->id }})" class="text-blue-600">Edit</button>
                        <button wire:click="delete({{ $project->id }})" class="text-red-600">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4">
            {{ $projects->links() }}
        </div>
    </div>
</div>
