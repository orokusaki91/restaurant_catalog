<template>
    <full-page id="fullpage" :options="options" ref="fullpage">
        <home-component></home-component>
        <aboutus-component></aboutus-component>
        <menu-component></menu-component>
        <thisweek-component></thisweek-component>
        <gallery-component></gallery-component>
        <contact-component></contact-component>
    </full-page>
</template>

<script>
    export default {
        data() {
            return {
                options: {
                    licenseKey: 'xxxxxxxx-xxxxxxxx-xxxxxxxx-xxxxxxxx',
                    navigation: true,
                    scrollingSpeed: 1000,
                    lazyLoading: true,
                    slidesNavigation: true,
                    fadingEffect: true,
                    controlArrows: false,
                    autoScrolling: true,
                    dragAndMove: true
                }
            }
        }
    }
</script>