<template>
    <header class="fixed pt-4">
        <div class="row align-items-center">
            <div class="col-md-2">
                <a href="javascript:void(0)" class="logo">
                    <img :src="image" :alt="image" title="Logo" />
                    Logo
                </a>
            </div>
            <div class="col-md-10 text-right">
                <ul v-scroll-spy-active="{selector: 'li'}" v-scroll-spy-link="{selector: 'a'}">
                    <li>
                        <a href="#home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#aboutUs">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            Menu
                        </a>
                    </li>
                    <li>
                        <a href="#thisWeek">
                            This week
                        </a>
                    </li>
                    <li>
                        <a href="#gallery">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                image: 'img/logo.png'
            }
        }
    };
</script>