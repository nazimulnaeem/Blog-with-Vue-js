import  moment from 'moment'
import Vue from 'vue'
//=== vue filter for which formate we are want to show in my display. thats why i pass an argument and return moment formate
Vue.filter('timeformate',(arg)=>{
  return moment(arg).format("MMM Do YYYY");   
});