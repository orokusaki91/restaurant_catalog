<template>
    <div id="background">
        <div class="left-background">
            <img :src="background" alt="background" />
        </div>
        <div class="right-background"></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                background: 'img/background.jpg'
            }
        }
    }
</script>