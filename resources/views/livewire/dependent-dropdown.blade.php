<div class="max-w-md mx-auto">
    <h1 class="text-2xl text-indigo-700 font-semibold">Livewire Example</h1>

    <!-- Provinces -->
    <div class="mt-3">
        <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">จังหวัด</label>
        <div class="mt-2">
            <select wire:model.live ="seclectedProvince"
                class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>กรุณาเลือกจังหวัด</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Amphures -->
    @if (!is_null($seclectedProvince))
        <div class="mt-3">
            <label for="amphure" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">อำเภอ</label>
            <div class="mt-2">
                <select wire:model.live="seclectedAmphure"
                    class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected>กรุณาเลือกอำเภอ</option>
                    @if ($amphures)
                        @foreach ($amphures as $amphure)
                            <option value="{{ $amphure->id }}">{{ $amphure->name_th }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    @endif
    <!-- tumbons -->
    @if (!is_null($seclectedAmphure))
        <div class="mt-3">
            <label for="tambon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ตำบล</label>
            <div class="mt-2">
                <select
                    class="bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected>กรุณาเลือกตำบล</option>
                    {{-- @if ($tambons) --}}
                    @foreach ($tambons as $tambon)
                        <option value="{{ $tambon->id }}">{{ $tambon->name_th }}</option>
                    @endforeach

                    {{-- @endif --}}
                </select>

            </div>
        </div>
    @endif
</div>
