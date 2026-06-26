<?php

namespace Webkul\Invoice\Filament\Clusters\Customers\Resources\PaymentResource\Pages;

use Illuminate\Database\Eloquent\Builder;
use Webkul\Account\Filament\Resources\PaymentResource\Pages\ListPayments as BaseListPayments;
use Webkul\Invoice\Filament\Clusters\Customers\Resources\PaymentResource;
use Webkul\TableViews\Filament\Components\PresetView;

class ListPayments extends BaseListPayments
{
    protected static string $resource = PaymentResource::class;

    public function getPresetTableViews(): array
    {
        $presets = parent::getPresetTableViews();

        return [
            ...$presets,
            'customer_payments' => PresetView::make(__('invoices::filament/clusters/customers/resources/payment/pages/list-payments.tabs.customer-payments'))
                ->favorite()
                ->setAsDefault()
                ->icon('heroicon-s-banknotes')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereIn('partner_type', ['customer', 'company'])),
        ];
    }
}
