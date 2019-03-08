<template>
    <div id="app-component">
        <background-component></background-component>
        <header-component></header-component>
        <fullpage-component></fullpage-component>
    </div>
</template>

<script>
    import Background from '@/components/Background'
    import Header from '@/components/Header'
	import FullPage from '@/components/FullPage'
	
    export default {
    	components: {
    		'background-component': Background
    		'header-component': Header,
    		'fullpage-component': FullPage
    	}
    }
</script>