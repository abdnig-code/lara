@extends('base')

@section('content')
    <div class="about">
        <section class="qna mb-40">
            <div class="qna__text">
                <h2 class="qna__title">Вопросы и ответы</h2>
                <p class="qna__info">
                    В данном разделе сайта
                    вы найдете ответы на
                    наиболее часто встречающиеся
                    вопросы относительно страхования
                </p>
            </div>
            <ul class="qna__list">
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Где можно узнать перечень аккредитованных страховых компаний?
                    </p>
                    <p class="qna__dropdown">
                        Перечень страховых компаний, которые соответствуют требованиям банка-кредитора, можно узнать на сайте банка или уточнить по телефону в самом отделении банка.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        В каких случаях требуется прохождение медицинского обследования при страховании жизни и здоровья заемщика?
                    </p>
                    <p class="qna__dropdown">
                        Необходимость проведения медицинского обследования устанавливается по каждому клиенту индивидуально, и зависит от размера страховой суммы и возраста заемщика, а также от информации о состоянии здоровья, указанной в заявлении-анкете. Лица, достигшие 65 лет и выше, на момент заключения договора страхования, не могут заключить договор страхования, вне зависимости от вышеперечисленных факторов.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Где и каким образом проходят мед. обследование?
                    </p>
                    <p class="qna__dropdown">
                        Мед. обследование проводят в частной клинике у высококвалифицированных специалистов, которая принадлежит страховой компании. Обследование проводят абсолютно бесплатно. Вас заранее запишут на обговоренное дату и время и по итогам Вам скажут результаты обследование и анализов.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Какой срок действия договора ипотечного страхования?
                    </p>
                    <p class="qna__dropdown">
                        Договор ипотечного страхования заключается на один год либо на весь срок действия кредитного договора с ежегодной пролонгацией. Срок действия полиса определяется требованиями банка. Так например, срок действия договора страхования ипотеки для клиентов ПАО «Сбербанк» составляет 1 год, а срок действия договора для клиентов ПАО «ВТБ» - можно выбрать на усмотрение клиента, либо на 1 год, либо на весь срок кредита.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Как уплачивается страховая премия?
                    </p>
                    <p class="qna__dropdown">
                        При заключении договора страхования сроком на 1 год страховой взнос уплачивается единовременно или в рассрочку (по согласованию с банком). Если договор заключается на срок более одного года, то страховой взнос уплачивается ежегодно в течение срока действия договора страхования.
                    </p>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        Какие способы оплаты возможны?
                    </p>
                    <div class="qna__dropdown">
                        <ul>
                            <li>Наличными</li>
                            <li>Банковской картой</li>
                            <li>Денежным переводом по выставленному счету</li>
                            <li>Оплатой счета через любой банк</li>
                            <li>Оплата на сайте страховой компании</li>
                        </ul>
                    </div>
                </li>
                <li class="qna__list-item js-list-item">
                    <p class="qna__list-title js-dropdown-list">
                        При наступлении страхового случая кто получит страховое возмещение?
                    </p>
                    <p class="qna__dropdown">
                        Банк в размере непогашенной части задолженности по кредитному договору. Собственники застрахованного имущества или их наследники – в оставшейся части страховой выплаты. Поэтому мы рекомендуем дополнительно застраховать ваше имущество на случай утраты или повреждения, в т.ч. внутреннюю отделку квартиры или дома, движимое имущество. Также можно обезопасить себя на случай причинения вреда соседям и заключить договор страхования гражданской ответственности.
                    </p>
                </li>
            </ul>
        </section>
    </div>
@endsection
