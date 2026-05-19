<div class="grid grid-cols-1 md:grid-cols-3 gap-5">

    <!-- Country -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
            Country <span class="text-red-500">*</span>
        </label>

        <select
            name="country"
            id="{{ $prefix }}_country"
            class="w-full px-4 py-3 rounded-xl bg-gray-50/50 border border-gray-200">

            <option value="">Select Country</option>

            @foreach($countries as $country)
            <option
            value="{{ $country['id'] }}"
            {{ $country['id'] == $selectedCountry  ? 'selected' : '' }}>

            {{ $country['name'] }}
        </option>
        @endforeach

        </select>
    </div>

    <!-- State -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
            State <span class="text-red-500">*</span>
        </label>

        <select
            name="state"
            id="{{ $prefix }}_state"
            class="w-full px-4 py-3 rounded-xl bg-gray-50/50 border border-gray-200">

            <option value="">Select State</option>
        </select>
    </div>

    <!-- City -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
            City <span class="text-red-500">*</span>
        </label>

        <input
            type="text"
            name="city"
            class="w-full px-4 py-3 rounded-xl bg-gray-50/50 border border-gray-200"
            placeholder="City">
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
    
        let countryDropdown =
            document.getElementById('{{ $prefix }}_country');
    
        let stateDropdown =
            document.getElementById('{{ $prefix }}_state');
    
        let stateRoute =
            "{{ route('get.state', ':countryId') }}";
    
        /**
         * Load States
         */
        function loadStates(countryId)
        {
            if (!countryId) {
    
                stateDropdown.innerHTML =
                    '<option value="">Select State</option>';
    
                return;
            }
    
            stateDropdown.innerHTML =
                '<option value="">Loading...</option>';
    
            let url =
                stateRoute.replace(':countryId', countryId);
    
            fetch(url)
    
                .then(response => response.json())
    
                .then(states => {
    
                    let options =
                        '<option value="">Select State</option>';
    
                    states.forEach(function(state) {
    
                        options += `
                            <option value="${state.id}">
                                ${state.name}
                            </option>
                        `;
                    });
    
                    stateDropdown.innerHTML = options;
                });
        }
    
        /**
         * On Country Change
         */
        countryDropdown.addEventListener('change', function () {
    
            loadStates(this.value);
    
        });
    
        /**
         * Default Load on Page Open
         */
        loadStates(countryDropdown.value);
    
    });
    </script>