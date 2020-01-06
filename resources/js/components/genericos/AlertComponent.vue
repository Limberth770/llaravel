<template>
    <div v-if="alert.show" v-bind:class="{'alert alert-danger':alert.type=='danger','alert alert-success':alert.type=='success','alert alert-warning':alert.type=='warning','alert alert-info':alert.type=='info'}">
      <div class="container">
        <div class="alert-icon">
          <i class="material-icons">error_outline</i>
        </div>
        <button type="button" class="close" aria-label="Close" @click="closeAlert">
          <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button>
        {{alert.message}}
      </div>
    </div>
</template>

<script>
    import {mapState,mapMutations} from 'vuex';
    export default {
      props:{datos:{}},
      data:function(){
        return{
          
        }
      },
      mounted() {
        console.log('Component mounted datos=',this.alert);
      },
      computed:{
        ...mapState(['alert'])
      },
      methods:{
        ...mapMutations(['closeAlert'])
      }
    }
</script>