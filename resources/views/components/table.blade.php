<div {{$attributes->merge(['class' => 'overflow-y-auto relative'])}}>
    <table class="table-hover table relative">
        {{ $slot }}
    </table>
</div>
<span class="hidden badge badge-flat-primary">Primary</span>
<span class="hidden badge badge-flat-secondary">Secondary</span>
<span class="hidden badge badge-flat-success">Success</span>
<span class="hidden badge badge-flat-error">Danger</span>
<span class="hidden badge badge-flat-warning">Warning</span>