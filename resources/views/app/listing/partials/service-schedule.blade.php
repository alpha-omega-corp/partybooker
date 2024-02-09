<x-service.list
    :title="__('service.timetable')"
    :data="$schedule->timetable_specs"
    :keys="['name', 'start', 'end']"/>

<x-service.list
    :title="__('service.holidays')"
    :data="$schedule->holiday_specs"
    :keys="['name', 'start', 'end']"/>

<x-service.list
    :title="__('service.extensions')"
    :data="$schedule->extension_specs"
    :keys="['name', 'description']"/>
