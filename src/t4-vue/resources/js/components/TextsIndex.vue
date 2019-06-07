<template>
    <div>
        <div class="row row-text justify-content-between m-0">
            <div class="col-12 col-md p-0" v-for="text in texts">
                <h5 v-html="text.title">{{ text.title }}</h5>
                <span v-html="text.text">{{ text.text }}</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                texts: null,
            }
        },
        mounted: function () {
            axios
                .get('/api')
                .then(response => {
                    this.texts = response.data.text
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
</script>
