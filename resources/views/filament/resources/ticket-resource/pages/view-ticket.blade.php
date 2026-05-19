<x-filament::page>

    <!-- HEADER CARD -->
    <x-filament::card>
        <div style="display:flex; justify-content:space-between; align-items:flex-start;">

            <div style="max-width:70%;">

                <!-- 👤 USER NAME -->
                <div style="font-size:14px; font-weight:600; color:#111827;">
                    👤 {{ $record->user->name ?? 'N/A' }}
                </div>

                <!-- 🏷 SUBJECT -->
                <div style="font-size:13px; color:#374151; margin-top:4px;">
                    <strong>Subject:</strong> {{ $record->subject }}
                </div>

                <!-- 📝 DESCRIPTION -->
                <div style="font-size:13px; color:#6b7280; margin-top:4px;">
                    <strong>Description:</strong> {{ $record->description }}
                </div>

            </div>

            <!-- STATUS + PRIORITY -->
            <div style="display:flex; flex-direction:column; gap:6px; align-items:flex-end;">

                <span style="background:#dbeafe; color:#1e40af; padding:4px 10px; border-radius:999px; font-size:12px;">
                    Status: {{ ucfirst($record->status) }}
                </span>

                <span style="background:#fef3c7; color:#92400e; padding:4px 10px; border-radius:999px; font-size:12px;">
                    Priority: {{ ucfirst($record->priority) }}
                </span>

            </div>

        </div>
    </x-filament::card>

    <!-- CHAT CARD -->
    <x-filament::card class="mt-4">

        <!-- ✅ FIX 1: wire:ignore.self -->
        <div id="chatBox" wire:ignore.self
            style="height:400px; overflow-y:auto; padding:10px; background:#f9fafb; border-radius:10px;">

            @foreach ($record->messages->sortBy('created_at') as $msg)
                <div wire:key="msg-{{ $msg->id }}">

                    <!-- USER (RIGHT SIDE) -->
                    @if ($msg->is_admin)
                        <div style="display:flex; justify-content:flex-end; margin-bottom:10px;">
                            <div
                                style="background:#2563eb; color:white; padding:10px; border-radius:15px 15px 0 15px; max-width:70%;">

                                @if ($msg->message)
                                    <div>{{ $msg->message }}</div>
                                @endif

                                @if ($msg->attachment)

                                      <img onclick="openImageModal(this.src)" src="{{ asset('storage/' . $msg->attachment) }}"
                                      style="width:140px; margin-top:8px; border-radius:8px;">
                                @endif

                                <div style="font-size:10px; opacity:0.7; text-align:right;">
                                    {{ $msg->created_at->format('d M, h:i A') }}
                                </div>

                            </div>
                        </div>
                    @endif


                    <!-- ADMIN (LEFT SIDE) -->
                    @if (!$msg->is_admin)
                        <div style="display:flex; gap:8px; margin-bottom:10px;">

                            @php
                                $nameParts = explode(' ', $msg->user->name);
                                $initials = '';
                                foreach ($nameParts as $part) {
                                    $initials .= strtoupper(substr($part, 0, 1));
                                }
                                $initials = substr($initials, 0, 2);
                            @endphp

                            <!-- Avatar -->
                            <div
                                style="width:30px;height:30px;border-radius:50%;background:#d1d5db;display:flex;align-items:center;justify-content:center;font-size:12px;">
                                {{ $initials }}
                            </div>

                            <!-- Message Box -->
                            <div
                                style="background:white;padding:10px;border-radius:15px 15px 15px 0;max-width:70%;border:1px solid #e5e7eb;">

                                @if ($msg->message)
                                    <div>{{ $msg->message }}</div>
                                @endif

                                @if ($msg->attachment)
                                    <img src="{{ asset('storage/' . $msg->attachment) }}"
                                        onclick="openImageModal(this.src)"
                                        style="
                                         width:120px;
                                         height:120px;
                                         object-fit:cover;
                                         margin-top:8px;
                                         border-radius:8px;
                                         cursor:pointer;
                                         border:1px solid #ddd;
                                      ">
                                @endif

                                <div style="font-size:10px; color:#6b7280; margin-top:4px;">
                                    <div>{{ $msg->user->name }}</div>
                                    <div>{{ $msg->created_at->format('d M, h:i A') }}</div>
                                </div>

                            </div>

                        </div>
                    @endif

                </div>
            @endforeach





        </div>

    </x-filament::card>

    <!-- REPLY BOX -->
    <x-filament::card class="mt-4">

        <form wire:submit.prevent="sendReply" style="display:flex; gap:10px; align-items:center;">

            <input type="text" wire:model="message" placeholder="Write reply..."
                style="flex:1;padding:8px;border:1px solid #ddd;border-radius:6px;">

            <input type="file" wire:model="attachment">

            <!-- ❌ wire:click hata diya (conflict remove) -->
            <button type="submit"
                style="background:#2563eb;color:white;padding:8px 16px;border-radius:6px;border:none;">
                Send
            </button>

        </form>

    </x-filament::card>
    <div id="imageModal"
    style="
       display:none;
       position:fixed;
       inset:0;
       background:rgba(0,0,0,0.95);
       z-index:9999;
       justify-content:center;
       align-items:center;
   ">

   <!-- Close -->
   <span onclick="closeImageModal()"
         style="
           position:absolute;
           top:20px;
           right:30px;
           font-size:40px;
           color:white;
           cursor:pointer;
       ">
       ×
   </span>

   <!-- Image -->
   <img id="modalImage"
        src=""
        style="
           max-width:90vw;
           max-height:90vh;
           object-fit:contain;
           border-radius:10px;
           box-shadow:0 0 20px rgba(0,0,0,0.5);
       ">
</div>
    <!-- ✅ FINAL SCROLL SCRIPT -->
    <script>
        function scrollToBottom() {
            const box = document.getElementById('chatBox');
            if (!box) return;

            box.scrollTop = box.scrollHeight;
        }

        // Page load
        document.addEventListener('DOMContentLoaded', () => {
            scrollToBottom();
        });

        // 🔥 FINAL FIX (Livewire DOM update ke baad)
        document.addEventListener('livewire:init', () => {

            Livewire.hook('morph.updated', () => {
                scrollToBottom();
            });

        });

        function openImageModal(src) {
            document.getElementById('imageModal').style.display = 'flex';
            document.getElementById('modalImage').src = src;
        }

        function closeImageModal() {
            document.getElementById('imageModal').style.display = 'none';
        }

        // Close on background click
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target.id === 'imageModal') {
                closeImageModal();
            }
        });
    </script>

</x-filament::page>
