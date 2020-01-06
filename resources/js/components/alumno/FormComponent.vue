<template>
    <div class="card">                
        <div class="card-header card-header-info text-center">
          <h4 class="card-title">{{currentVista.title}}</h4>                      
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="nombres" class="bmd-label-floating">Nombres</label>
                        <input type="text" class="form-control form-control-sm" id="nombres" v-model="currentAlumno.nombre_alumno">
                        <span class="bmd-help">Nombres</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="paterno" class="bmd-label-floating">Paterno</label>
                        <input type="text" class="form-control form-control-sm" id="paterno" v-model="currentAlumno.apellido_pat_alumno">
                        <span class="bmd-help">Paterno</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="materno" class="bmd-label-floating">Materno</label>
                        <input type="text" class="form-control form-control-sm" id="materno" v-model="currentAlumno.apellido_mat_alumno">
                        <span class="bmd-help">Materno</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        
                        <input type="date" class="form-control form-control-sm" id="fac_nacimiento" v-model="currentAlumno.fecha_nac_alumno">
                        <span class="bmd-help">Fecha nacimiento</span>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="ci" class="bmd-label-floating">CI</label>
                        <input type="text" class="form-control form-control-sm" id="ci" v-model="currentAlumno.documento_identidad_alumno">
                        <span class="bmd-help">CI</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="direccion" class="bmd-label-floating">Dirección</label>
                        <input type="text" class="form-control form-control-sm" id="direccion" v-model="currentAlumno.direccion_alumno">
                        <span class="bmd-help">Dirección</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="nro_referencia" class="bmd-label-floating">Numero referencia</label>
                        <input type="text" class="form-control form-control-sm" id="nro_referencia" v-model="currentAlumno.numero_referencia_alumno">
                        <span class="bmd-help">Numero referencia</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="nivel_estudio" class="bmd-label-floating">Nivel estudio</label>
                        <input type="text" class="form-control form-control-sm" id="nivel_estudio" v-model="currentAlumno.nivel_estudios_alumno">
                        <span class="bmd-help">Nievel estudio</span>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="informacion_adicional" class="bmd-label-floating">Informacion adicional</label>
                        <input type="text" class="form-control form-control-sm" id="informacion_adicional" v-model="currentAlumno.informacion_adicional">
                        <span class="bmd-help">Informacion adicional</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="telefono" class="bmd-label-floating">Teléfono</label>
                        <input type="text" class="form-control form-control-sm" id="telefono" v-model="currentAlumno.numero_telefonico_alumno">
                        <span class="bmd-help">Teléfono</span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="email" class="bmd-label-floating">Email</label>
                        <input type="text" class="form-control form-control-sm" id="email" v-model="currentAlumno.correo_alumno">
                        <span class="bmd-help">Email</span>
                    </div>
                </div>
                <div class="col-12 col-sm-1">
                    <div class="form-group">
                        <label for="estado" class="bmd-label-floating">Estado</label>
                        <input type="text" class="form-control form-control-sm" id="estado" v-model="currentAlumno.estado_alumno">
                        <span class="bmd-help">Estado</span>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="form-group">
                        <label for="key_alumno" class="bmd-label-floating">Key alumno</label>
                        <input type="text" class="form-control form-control-sm" id="key_alumno" v-model="currentAlumno.key_alumno">
                        <span class="bmd-help">Key alumno</span>
                    </div>
                </div>                          
            </div>
        </div>
        <div class="footer text-center">
          <button v-if="currentVista.vista=='edit'" class="btn btn-danger" @click="cancelEdit"><i class="material-icons">clear</i></button>
          <button v-if="currentVista.vista=='edit'" class="btn btn-info" @click="sendDataToEdit"><i class="material-icons">save</i></button>
          <button v-if="currentVista.vista=='insert'" class="btn btn-info" @click="sendData"><i class="material-icons">save</i></button>
        </div>
      
    </div>
</template>

<script>
    import {mapState,mapMutations} from 'vuex';
    export default {        
        data(){
            return{
                
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        computed:{
            ...mapState(['currentAlumno','currentVista'])
        },
        methods:{
            ...mapMutations(['cancelEdit']),
            sendData(){
                this.$store.dispatch("sendData");
            },
            sendDataToEdit(){
                this.$store.dispatch("updateData");
            }
        }
    }
</script>
