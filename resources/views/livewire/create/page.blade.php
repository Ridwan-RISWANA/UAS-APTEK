<div>
    <div>
        {{-- With label, invalid feedback disabled, and form group class --}}
        {{$title}}
        <div class="row">
            <x-adminlte-input name="iLabel" wire:model="title" label="judul" placeholder=""
                fgroup-class="col-md-6" disable-feedback/>
        </div>

        </div>
        <div class="row">
            <x-adminlte-textarea name="iLabel" wire:model="short" label="Konten" placeholder=""
            fgroup-class="col-md-6" disable-feedback/>
        </div>
        <div class="row">
            <x-adminlte-textarea name="iLabel" wire:model="long" label="tanggal" placeholder=""
            fgroup-class="col-md-6" disable-feedback/>
        </div>
        <div class="row">
            <x-adminlte-button wire:click="save" icon="fa fa-save" theme="success" label="save"/>
        </div>
</div>