<template>
    <div class="card">                
        <div class="card-header card-header-primary text-center">
          <h4 class="card-title">Listado de Alumnos</h4>
        </div>
        <div class="card-body">
            <!--<button class="btn btn-info">Nuevo</button>-->
            <Alert/>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">CI</th>
                  <th scope="col">NOMBRES</th>
                  <th scope="col">PATERNO</th>
                  <th scope="col">MATERNO</th>
                  <th scope="col">TELEFONO</th>
                  <th scope="col">ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item,index) in alumnos">
                  <td>{{index+1}}</td>
                  <td>{{item.documento_identidad_alumno}}</td>
                  <td>{{item.nombre_alumno}}</td>
                  <td>{{item.apellido_pat_alumno}}</td>
                  <td>{{item.apellido_mat_alumno}}</td>
                  <td>{{item.numero_telefonico_alumno}}</td>
                  <td>
                    <button class="btn btn-danger" @click="deleteData(item)"><i class="material-icons">clear</i></button>
                    <button class="btn btn-warning" @click="fillForm(item)"><i class="material-icons">edit</i></button>
                  </td>
                </tr>                
              </tbody>
            </table>
            
        </div>                  
        <div class="footer text-center">                      
        </div>                
    </div>
</template>

<script>
    import {mapState,mapMutations} from 'vuex';
    export default {
        mounted() {
            console.log('Component mounted.');
            this.getAll();
        },
        computed:{
            ...mapState(['alumnos','currentAlumno','currentVista','alert']),
            allAlumnos(){//otra forma de leer los datos del state
                return this.$store.getters.allAlumnos;
            }
        },
        methods:{
            ...mapMutations(['prepareForm']),
            getAll(){
                this.$store.dispatch("getAllAlumnos");
            },
            fillForm(data){
                this.prepareForm(data);
            },
            updateData(data){
                console.log("editar ",{id:data.id,data:data});
                this.$store.dispatch("updateData",{id:data.id,data:data});
            },
            deleteData(data){
                console.log("eliminar ",data);
                this.$store.dispatch("deleteData",data.id);
            }
        }
    }
    
</script>
