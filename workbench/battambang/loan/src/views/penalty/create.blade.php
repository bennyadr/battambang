@extends(Config::get('battambang/cpanel::views.layout'))

@section('content')

{{Former::open( route('loan.penalty.store'))->method('POST')}}

<?php
echo FormPanel2::make(
    'General',
    Former::text('name', 'name')->required() . ''
    .Former::select('ln_lv_penalty_type', 'Penalty Type')
        ->options(\LookupValueList::getBy('penalty type',' limit 1'))
        ->placeholder('--Select One')
        ->required()
    .Former::number('grace_period', 'grace_period')->required()
    .Former::select('ln_lv_calculate_type', 'calculate Type')
        ->options(\LookupValueList::getBy('penalty calculate type'))
        ->placeholder('--Select One')
        ->required()

    ,
    Former::number('amount', 'amount')->step(0.01)->min(0)->required(). ''
    .Former::select('ln_lv_percentage_of', 'Percentage Of')
        ->options(LookupValueList::getBy('penalty percentage of'))
        ->placeholder('--Select One')
        ->required()


);
?>

<div class="text-center">
    {{ Former::lg_primary_submit('Submit') . '&nbsp;' . Former::lg_inverse_reset('Reset') }}
</div>
{{Former::close()}}

@stop
