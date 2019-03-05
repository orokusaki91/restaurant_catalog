<template>
	<div>
		<app-header></app-header>

		<full-page id="fullpage" :options="options" ref="fullpage">
			<div class="section">
				Ivan
			</div>
			<div class="section">
				a
			</div>
			<div class="section">
				dsf
			</div>
			<div class="section">
				sdghjkhjf
			</div>
			<div class="section">
				gfg
			</div>
		</full-page>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				options: {
					sectionsColor: ['#41b883', '#ff5f45', '#0798ec']
				}
			}
		}
	}
</script>