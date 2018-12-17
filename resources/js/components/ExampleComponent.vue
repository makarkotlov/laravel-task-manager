<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
<<<<<<< HEAD
        computed: {
            echoThread() { return window.Echo.private('employee.' + window.Laravel.user); },
        },
        mounted() {
            this.echoThread
                .listen('TaskAdded', (e) => {
                    console.log(e);
                });
=======
        mounted() {
            console.log('Component mounted.')
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
        }
    }
</script>
