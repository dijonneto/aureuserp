<?php

namespace Webkul\Support\Enums;

enum Week: string
{
    case SUNDAY = 'sunday';

    case MONDAY = 'monday';

    case TUESDAY = 'tuesday';

    case WEDNESDAY = 'wednesday';

    case THURSDAY = 'thursday';

    case FRIDAY = 'friday';

    case SATURDAY = 'saturday';

    public static function options(): array
    {
        return [
            self::SUNDAY->value    => __('support::enums/day-of-week.sunday'),
            self::MONDAY->value    => __('support::enums/day-of-week.monday'),
            self::TUESDAY->value   => __('support::enums/day-of-week.tuesday'),
            self::WEDNESDAY->value => __('support::enums/day-of-week.wednesday'),
            self::THURSDAY->value  => __('support::enums/day-of-week.thursday'),
            self::FRIDAY->value    => __('support::enums/day-of-week.friday'),
            self::SATURDAY->value  => __('support::enums/day-of-week.saturday'),
        ];
    }
}
