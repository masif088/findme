<div>
    <div class="row">
        <div class="col-lg-6 p-4">
            <div style="height: 600px; background-color: #ACDEF3; border-radius: 25px;" class="p-3">
                <textarea name="" id="" rows="15" wire:model="text"
                          style="width: 100%; border-radius: 25px;border: none; padding: 10px"></textarea>
                <br>

                <div class="center">
                    <button class="btn-custom" wire:click="extraction">
                        SEDERHANAKAN
                    </button>
                    <div wire:loading wire:target="extraction">
                        Menunggu proses ...
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 p-4">
            <div style="height: 290px; background-color: #ACDEF3; border-radius: 25px; margin-bottom: 20px" class="p-3">
                <div class="center">
                    <div class="bg-header">
                        KATA KUNCI
                    </div>
                </div>
                <textarea name="" id="" rows="5"
                          style="width: 100%; border-radius: 25px;border: none; margin-top: 10px;padding: 10px">{!! $keyword !!}</textarea>
            </div>
            <div style="height: 290px; background-color: #ACDEF3; border-radius: 25px; margin-bottom: 20px" class="p-3">
                <div class="center">
                    <div class="bg-header">
                        FRASA KUNCI
                    </div>
                </div>
                <textarea name="" id="" rows="5"
                          style="width: 100%; border-radius: 25px;border: none; margin-top: 10px;padding: 10px" >{!! $keyphrases !!}</textarea>
            </div>
        </div>
    </div>
</div>
