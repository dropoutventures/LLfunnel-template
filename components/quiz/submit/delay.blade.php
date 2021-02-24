<div class="flex flex-col items-center justify-center py-12" x-data
     x-init="() => { setTimeout(function(){ @this.call('answer'); }, {{ $question->settings['delay'] ?? $question->objectable->settings['delay'] ?? 2500 }}); }"
>
    <i class="fad fa-6x fa-atom fa-fw fa-spin text-blue-400" wire:click="answer()"></i>
    <small class="mt-4">Pretending To Do Something ...</small>
</div>
