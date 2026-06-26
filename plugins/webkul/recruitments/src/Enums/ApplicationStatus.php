<?php

namespace Webkul\Recruitment\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ApplicationStatus: string implements HasColor, HasIcon, HasLabel
{
    case ONGOING = 'ongoing';
    case HIRED = 'hired';
    case REFUSED = 'refused';
    case ARCHIVED = 'archived';

    public function getLabel(): string
    {
        return match ($this) {
            self::ONGOING   => __('recruitments::enums/application-status.ongoing'),
            self::HIRED     => __('recruitments::enums/application-status.hired'),
            self::REFUSED   => __('recruitments::enums/application-status.refused'),
            self::ARCHIVED  => __('recruitments::enums/application-status.archived'),
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::ONGOING   => '#17a2b8',
            self::HIRED     => '#28a745',
            self::REFUSED   => '#dc3545',
            self::ARCHIVED  => '#6c757d',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::ONGOING   => 'heroicon-m-clock',
            self::HIRED     => 'heroicon-m-check-circle',
            self::REFUSED   => 'heroicon-m-x-circle',
            self::ARCHIVED  => 'heroicon-m-x-circle',
        };
    }

    public static function options(): array
    {
        return [
            self::ONGOING->value  => self::ONGOING->getLabel(),
            self::HIRED->value    => self::HIRED->getLabel(),
            self::REFUSED->value  => self::REFUSED->getLabel(),
            self::ARCHIVED->value => self::ARCHIVED->getLabel(),
        ];
    }
}
