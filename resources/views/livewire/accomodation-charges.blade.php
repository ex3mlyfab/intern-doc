<div>
    <div class="w-full py-2 mb-2 rounded-lg bg-gradient-to-r from-green-200 via-slate-100 to-green-700" >
        <div class="flex flex-col items-center justify-center gap-1 m-2 bg-white shadow-md">
            <div class="text-normal">
                <span class="font-semibold underline uppercase underline-offset-0">Accomodation Details</span>
            </div>
            <div class="text-normal">
                <span class="pr-2 font-semibold">Room:</span> {{ $room_no}}
            </div>
            <div class="text-normal">
                <span class="font-semibold">Date Assigned:</span> {{$assignedDate}}
            </div>
        </div>
    </div>
    {{$this->table}}
</div>
