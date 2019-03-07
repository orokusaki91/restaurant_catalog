<template>
    <div id="aboutUs" class="section">
        <div class="container-wrap">
            <div class="container-wrap-background">
                <div class="container p-5">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>
                                Welcome To Restaurant
                            </h2>
                            <p class="subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit risus quis
                                arcu
                                commodo
                                scelerisque
                            </p>
                            <p class="info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <button class="btn">
                                Read more
                            </button>
                            <button class="btn">
                                Book a table
                            </button>
                        </div>
                        <div class="col-md-3">
                            <img :src="food" :alt="food" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                food: 'img/restaurant/food-graphic.png'
            }
        }
    }
</script>