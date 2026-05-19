<div class="mb-8">

    <div class="grid grid-cols-1 gap-5">

        <div class="file-upload">

            <!-- Hidden File Input -->
            <input
                type="file"
                name="{{ $name }}"
                id="{{ $prefix }}_photo"
                accept="image/*"
                class="hidden"
                required>

            <!-- Upload Box -->
            <label
                for="{{ $prefix }}_photo"
                class="flex items-center justify-between gap-4 border border-dashed border-gray-300 rounded-2xl p-5 cursor-pointer hover:border-indigo-500 transition bg-gray-50">

                <div class="flex items-center gap-4">

                    <!-- Preview -->
                    <div
                        class="w-16 h-16 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center">

                        <img
                            id="{{ $prefix }}_preview"
                            src="https://placehold.co/100x100"
                            class="w-full h-full object-cover hidden">

                        <i
                            id="{{ $prefix }}_icon"
                            class="fas fa-camera text-gray-400 text-xl">
                        </i>

                    </div>

                    <!-- Text -->
                    <div>

                        <p class="font-semibold text-sm text-gray-700">
                            {{ $label }}
                        </p>

                        <p class="text-xs text-gray-400">
                            Upload image preview
                        </p>

                        <p
                            id="{{ $prefix }}_file_name"
                            class="text-xs text-indigo-500 mt-1">
                        </p>

                    </div>

                </div>

                <!-- Upload Icon -->
                <i class="fas fa-upload text-gray-400 text-sm"></i>

            </label>

        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    let fileInput =
        document.getElementById('{{ $prefix }}_photo');

    let previewImage =
        document.getElementById('{{ $prefix }}_preview');

    let fileName =
        document.getElementById('{{ $prefix }}_file_name');

    let icon =
        document.getElementById('{{ $prefix }}_icon');

    /**
     * Image Preview
     */
    fileInput.addEventListener('change', function (e) {

        let file = e.target.files[0];

        if (!file) return;

        fileName.innerHTML = file.name;

        let reader = new FileReader();

        reader.onload = function (event) {

            previewImage.src = event.target.result;

            previewImage.classList.remove('hidden');

            icon.classList.add('hidden');
        };

        reader.readAsDataURL(file);

    });

});
</script>