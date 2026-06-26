<?php

namespace Webkul\Invoice\Filament\Clusters\Settings\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Webkul\Product\Settings\ProductSettings;
use Webkul\Support\Filament\Clusters\Settings;

class Products extends SettingsPage
{
    use HasPageShield;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cube';

    protected static string|\UnitEnum|null $navigationGroup = 'Invoices';

    protected static ?int $navigationSort = 1;

    protected static string $settings = ProductSettings::class;

    protected static ?string $cluster = Settings::class;

    protected static function getPagePermission(): ?string
    {
        return 'page_invoice_products';
    }

    public function getBreadcrumbs(): array
    {
        return [
            __('invoices::filament/clusters/settings/pages/manage-products.title'),
        ];
    }

    public function getTitle(): string
    {
        return __('invoices::filament/clusters/settings/pages/manage-products.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('invoices::filament/clusters/settings/pages/manage-products.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('enable_uom')
                    ->label(__('invoices::filament/clusters/settings/pages/manage-products.form.enable-uom'))
                    ->helperText(__('invoices::filament/clusters/settings/pages/manage-products.form.enable-uom-helper-text')),
            ]);
    }
}
