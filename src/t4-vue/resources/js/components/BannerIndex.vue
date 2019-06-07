<template>
    <div>
        <div class="row row-banner m-0">
            <div class="col text-center p-0">
                <img v-bind:src="image" alt="Banner boa aparência">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                image: null,
            }
        },
        mounted: function () {
            axios
                .get('/api')
                .then(response => {
                    this.image = response.data.banner
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
</script>
