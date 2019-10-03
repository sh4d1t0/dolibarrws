<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Holiday History by Users</div>

                    <div class="card-body">
                        La tabla. {{ info }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['info'],
        mounted() {
            console.log('Component holiday history was mounted.')
            axios.get('http://localhost:8000/api/v1/holidays/188').then(response => (this.info = response))
        }
    }
</script>
