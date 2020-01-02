/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'vuex';
Vue.use(Vuex);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//ALUMNO COMPONENT
Vue.component('alumno-component', require('./views/AlumnoComponent.vue').default);
Vue.component('alumno-form-component', require('./components/alumno/FormComponent.vue').default);
Vue.component('alumno-list-component', require('./components/alumno/ListComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const store = new Vuex.Store({
	state:{
		alumnos:[
			//{id:1,documento_identidad_alumno:'6478186',nombre_alumno:'Limberth',apellido_pat_alumno:'Linarez',apellido_mat_alumno:'Ortuño',numero_telefonico_alumno:'73760713'},			
		],
		currentAlumno:{
			id:0,
            nombre_alumno:'',
            apellido_pat_alumno:'',
            apellido_mat_alumno:'',
            fecha_nac_alumno:'',
            documento_identidad_alumno:'',
            direccion_alumno:'',
            numero_referencia_alumno:'',
            nivel_estudios_alumno:'',
            informacion_adicional:'',
            numero_telefonico_alumno:'',
            correo_alumno:'',
            estado_alumno:'',
            key_alumno:''
        },
        currentVista:{vista:'insert',title:'Formulario de nuevo registro'}
	},
	getters:{
		allAlumnos(state){
			return state.alumnos;
		}
	},
	actions:{
		getAllAlumnos(context){
			axios.get('/alumnos')
                .then((response)=>{
                	console.log("response ",response);
                	context.commit('setAllAlumnos',response.data);
                })
                .catch(error => {
		        	console.log(error)
		        	//this.errored = true
		        })
		      	.finally(() => {
		      		console.log("finally");
		      	});
            
		},
		sendData(context,payload){
			axios.post('/alumnos', this.state.currentAlumno)
	            .then((res) => {	                
	                context.dispatch('getAllAlumnos'); // llamada a otro action
	                context.commit('clearForm');//llamada a mutation
	            })
	            .catch(error => {
		        	console.log(error)
		        	//this.errored = true
		        })
		      	.finally(() => {
		      		console.log("finally");
		      	});
		},
		updateData(context,payload){
			axios.put('/alumnos/'+this.state.currentAlumno.id,this.state.currentAlumno)
	            .then((res) => {
	                context.dispatch('getAllAlumnos');
	                context.commit('clearForm');
	                this.state.currentVista={vista:'insert',title:'Formulario de nuevo registro'};

	            })
	            .catch(error => {
		        	console.log(error)
		        	//this.errored = true
		        })
		      	.finally(() => {
		      		console.log("finally");
		      	});
		},
		deleteData(context,payload){
			console.log("payload = ",payload);
			axios.delete('/alumnos/'+payload)
	            .then((res) => {
	                context.dispatch('getAllAlumnos');
	                context.commit('clearForm');
	                this.state.currentVista={vista:'insert',title:'Formulario de nuevo registro'};

	            })
	            .catch(error => {
		        	console.log(error)
		        	//this.errored = true
		        })
		      	.finally(() => {
		      		console.log("finally");
		      	});
		}
	},
	mutations: {
		setAllAlumnos(state,payload){
			return state.alumnos = payload;
		},
		prepareForm(state,payload){
			state.currentAlumno = payload;

			state.currentAlumno = {
				id:payload.id,
	            nombre_alumno:payload.nombre_alumno,
	            apellido_pat_alumno:payload.apellido_pat_alumno,
	            apellido_mat_alumno:payload.apellido_mat_alumno,
	            fecha_nac_alumno:payload.fecha_nac_alumno,
	            documento_identidad_alumno:payload.documento_identidad_alumno,
	            direccion_alumno:payload.direccion_alumno,
	            numero_referencia_alumno:payload.numero_referencia_alumno,
	            nivel_estudios_alumno:payload.nivel_estudios_alumno,
	            informacion_adicional:payload.informacion_adicional,
	            numero_telefonico_alumno:payload.numero_telefonico_alumno,
	            correo_alumno:payload.correo_alumno,
	            estado_alumno:payload.estado_alumno,
	            key_alumno:payload.key_alumno
	        };
			state.currentVista = {vista:'edit',title:'Formulario de edición'};
			console.log("state.currentAlumno=",state.currentAlumno);
		},
		cancelEdit(state){
			state.currentAlumno = {
				id:0,
	            nombre_alumno:'',
	            apellido_pat_alumno:'',
	            apellido_mat_alumno:'',
	            fecha_nac_alumno:'',
	            documento_identidad_alumno:'',
	            direccion_alumno:'',
	            numero_referencia_alumno:'',
	            nivel_estudios_alumno:'',
	            informacion_adicional:'',
	            numero_telefonico_alumno:'',
	            correo_alumno:'',
	            estado_alumno:'',
	            key_alumno:''
	        };
			state.currentVista = {vista:'insert',title:'Formulario de nuevo registro'};
		},
		clearForm(state){
			console.log("Entre a limpiar el form");
			state.currentAlumno = {
				id:0,
	            nombre_alumno:'',
	            apellido_pat_alumno:'',
	            apellido_mat_alumno:'',
	            fecha_nac_alumno:'',
	            documento_identidad_alumno:'',
	            direccion_alumno:'',
	            numero_referencia_alumno:'',
	            nivel_estudios_alumno:'',
	            informacion_adicional:'',
	            numero_telefonico_alumno:'',
	            correo_alumno:'',
	            estado_alumno:'',
	            key_alumno:''
	        };
		}
	}
});


const app = new Vue({
    el: '#app',
    store
});
