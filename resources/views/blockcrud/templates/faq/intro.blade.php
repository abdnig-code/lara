<section class="ins__faq__items">
    <div class="ins__faq__item">
        <h3 class="ins__faq__title{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
            @if (isset($edit_mode))
                contenteditable="true" id="faq_intro_1"
            @endif
        >{!! $faq_intro_1 ?? 'Вопросы и ответы' !!}</h3>
        <div class="ins__faq__content{{ isset($edit_mode) ? ' blockcrud-editable' : '' }}"
            @if (isset($edit_mode))
            contenteditable="true" id="faq_intro_2"
            @endif
        ><p>
            {!! $faq_intro_2 ?? 'В данном разделе сайта вы найдете ответы на наиболее часто встречающиеся вопросы относительно страхования' !!}
        </p></div>
    </div>
</section>
