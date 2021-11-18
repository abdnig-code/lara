<div class="team__item js_filtering_box js-filter-item" data-city="city_{{ $employee->city_id }}" data-category="category_{{ $employee->vacancy_category_id }}">
    <div class="team__photo">
        @if ($item->photo)
            <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}">
        @endif
    </div>
    <div class="team__name">{{ $item->name }}</div>
    <div class="team__descr">
        {{ $item->position }}<br>
        {{ $item->department->name ?? '' }}
    </div>
</div>

