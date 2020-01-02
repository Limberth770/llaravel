<template>
    <div class="section section-basic">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <alumno-form-component/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <alumno-list-component/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>    

    export default {
        mounted() {
            console.log('Component mounted.');
            //console.log("getAllAlumnos = ",this.getAllAlumnos);
            //this.getAll();
        },
        computed:{
            /*
            getAllAlumnos(){
                return this.$store.getters.getAlumnos;
            }
            */
        },
        methods:{
            /*
            getAll(){
                console.log("getAll()");
            }
            */

        },

    }
</script>
