<template>
    <section class="ins__faq__items">
        <div class="ins__faq__item js-list-item" @click="showDropdown" v-for="item in faq" :key="item.id">
            <h3 class="ins__faq__title js-dropdown-list">
                {{item.question}}
            </h3>
            <div class="ins__faq__content" v-html="item.answer">
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: "qna",
    props: {
        faq: Array
    },
    methods: {
        showDropdown(evt) {
            if ($(evt.currentTarget).hasClass('m-visible')) {
                $(evt.currentTarget).removeClass('m-visible')
                $(evt.currentTarget).find('.js-dropdown-list').removeClass('m-visible')
            } else {
                $(evt.currentTarget).addClass('m-visible')
                $(evt.currentTarget).find('.js-dropdown-list').addClass('m-visible')
            }
        }
    }
}
</script>

<style scoped>

</style>
