// ====================GUEST JS START====================

    // Flatpickr Datepicker for Guest Date of Birth
    flatpickr("#guest_dob", {
      dateFormat: "d/m/Y",
      maxDate: "today",
      allowInput: false,
      disableMobile: false,
    });
    
    // File upload - show file name
    document.querySelectorAll('.file-input').forEach(input => {
      input.addEventListener('change', function(e) {
        const fileNameDiv = document.getElementById(this.getAttribute('data-file-name'));
        if (fileNameDiv && this.files && this.files[0]) {
          fileNameDiv.textContent = this.files[0].name;
        }
      });
    });
    
    // State dropdown API call
    async function countery(value) {
      if (!value) return;
      try {
        const response = await fetch(`${window.location.origin}/api/selectstate/${value}`).then(res => res.json());
        if (!response.msg) {
          $('#state').empty().append('<option value="">Select State</option>');
          $.each(response, (key, val) => $('#state').append($('<option>').val(val.name).text(val.name)));
        }
      } catch(e) {}
    }
    
    $('#country').on('change', function() { countery($(this).val()); });
    $(document).ready(() => { if($('#country').val()) countery($('#country').val()); });
  

    // ===========CREW JS START=====================
    
        // Initialize Select2 for Languages
        $('#crew_languages').select2({
            placeholder: "Select languages",
            allowClear: false,
            width: '100%'
        });

        // Flatpickr for Crew Date of Birth
        flatpickr("#crew_dob", {
            dateFormat: "d/m/Y",
            maxDate: "today",
            allowInput: false,
            disableMobile: false,
        });

        // File upload - show file name
        document.querySelectorAll('.crew-file-input').forEach(input => {
            input.addEventListener('change', function () {
                const div = document.getElementById(this.dataset.fileName);
                if (div && this.files[0]) div.textContent = this.files[0].name;
            });
        });

        // Photo upload preview
        const crewPhotoInput = document.getElementById('crew_upload_photos');
        const crewPreviewArea = document.getElementById('crew_preview_area');
        const crewUploadArea = document.getElementById('crew_photo_upload_area');

        if (crewUploadArea) {
            crewUploadArea.addEventListener('click', () => crewPhotoInput.click());
            crewUploadArea.addEventListener('dragover', (e) => { e.preventDefault(); crewUploadArea.classList.add('border-brand', 'bg-brand/5'); });
            crewUploadArea.addEventListener('dragleave', () => crewUploadArea.classList.remove('border-brand', 'bg-brand/5'));
            crewUploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                crewUploadArea.classList.remove('border-brand', 'bg-brand/5');
                crewPhotoInput.files = e.dataTransfer.files;
                crewPreviewPhotos(crewPhotoInput.files);
            });
        }

        crewPhotoInput?.addEventListener('change', (e) => crewPreviewPhotos(e.target.files));

        function crewPreviewPhotos(files) {
            if (!crewPreviewArea) return;
            crewPreviewArea.innerHTML = '';
            if (files.length < 2) {
                const warn = document.createElement('p');
                warn.className = 'text-red-500 text-sm mt-2';
                warn.textContent = 'Please upload at least 2 photos';
                crewPreviewArea.appendChild(warn);
            }
            Array.from(files).forEach(file => {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const div = document.createElement('div');
                    div.className = 'relative w-16 h-16 rounded-lg overflow-hidden border border-gray-200';
                    div.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover"><button type="button" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 text-xs remove-photo">&times;</button>`;
                    crewPreviewArea.appendChild(div);
                };
                reader.readAsDataURL(file);
            });
        }

        // State dropdown
        async function crewCountery(value) {
            if (!value) return;
            try {
                const res = await fetch(`${window.location.origin}/api/selectstate/${value}`).then(r => r.json());
                if (!res.msg) {
                    $('#crew_state').empty().append('<option value="">Select State</option>');
                    $.each(res, (k, v) => $('#crew_state').append($('<option>').val(v.name).text(v.name)));
                }
            } catch (e) { }
        }
        $('#crew_country').on('change', function () { crewCountery($(this).val()); });
        $(() => { if ($('#crew_country').val()) crewCountery($('#crew_country').val()); });
    

        // ========PARTNER JS START

        
        // Flatpickr for Partner Date of Birth
        flatpickr("#partner_dob", {
            dateFormat: "d/m/Y",
            maxDate: "today",
            allowInput: false,
            disableMobile: false,
        });

        // File upload - show file name
        document.querySelectorAll('.partner-file-input').forEach(input => {
            input.addEventListener('change', function () {
                const div = document.getElementById(this.dataset.fileName);
                if (div && this.files[0]) div.textContent = this.files[0].name;
            });
        });

        // State dropdown
        async function partnerCountery(value) {
            if (!value) return;
            try {
                const res = await fetch(`${window.location.origin}/api/selectstate/${value}`).then(r => r.json());
                if (!res.msg) {
                    $('#partner_state').empty().append('<option value="">Select State</option>');
                    $.each(res, (k, v) => $('#partner_state').append($('<option>').val(v.name).text(v.name)));
                }
            } catch (e) { }
        }
        $('#partner_country').on('change', function () { partnerCountery($(this).val()); });
        $(() => { if ($('#partner_country').val()) partnerCountery($('#partner_country').val()); });
    

        //==============OWNER JS START=======
        
        // Flatpickr for Owner Date of Birth
        flatpickr("#owner_dob", { dateFormat: "d/m/Y", maxDate: "today", allowInput: false, disableMobile: false });

        // File upload - show file name
        document.querySelectorAll('.owner-file-input').forEach(input => {
            input.addEventListener('change', function () {
                const div = document.getElementById(this.dataset.fileName);
                if (div && this.files[0]) div.textContent = this.files[0].name;
            });
        });

        // State dropdown for main location
        async function ownerCountery(value) {
            if (!value) return;
            try {
                const res = await fetch(`${window.location.origin}/api/selectstate/${value}`).then(r => r.json());
                if (!res.msg) {
                    $('#owner_state').empty().append('<option value="">Select State</option>');
                    $.each(res, (k, v) => $('#owner_state').append($('<option>').val(v.name).text(v.name)));
                }
            } catch (e) { }
        }
        $('#owner_country').on('change', function () { ownerCountery($(this).val()); });
        $(() => { if ($('#owner_country').val()) ownerCountery($('#owner_country').val()); });

        // State dropdown for bank details
        async function ownerBankCountery(value) {
            if (!value) return;
            try {
                const res = await fetch(`${window.location.origin}/api/selectstate/${value}`).then(r => r.json());
                if (!res.msg) {
                    $('#owner_bank_state').empty().append('<option value="">Select State</option>');
                    $.each(res, (k, v) => $('#owner_bank_state').append($('<option>').val(v.name).text(v.name)));
                }
            } catch (e) { }
        }
        $('#owner_bank_country').on('change', function () { ownerBankCountery($(this).val()); });
        $(() => { if ($('#owner_bank_country').val()) ownerBankCountery($('#owner_bank_country').val()); });
   