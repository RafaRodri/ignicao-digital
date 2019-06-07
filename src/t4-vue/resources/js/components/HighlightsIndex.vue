<template>
    <div>
        <div class="row row-featured m-0">
            <div class="col p-0" v-for="highlight in highlights">
                <img v-bind:src="highlight.image" v-bind:alt="highlight.title" class="w-100">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                highlights: null,
            }
        },
        mounted: function () {
            axios
                .get('/api')
                .then(response => {
                    this.highlights = response.data.highlights
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
</script>
