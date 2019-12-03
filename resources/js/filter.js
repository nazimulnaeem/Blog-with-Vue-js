import  moment from 'moment'
import Vue from 'vue'
//=== vue filter for which formate we are want to show in my display. thats why i pass an argument and return moment formate
Vue.filter('timeformate',(arg)=>{
  return moment(arg).format("MMM Do YYYY");   
});


// vue filter for sortest length in post description and title 
Vue.filter('sortlength',function(text,length,suffix){
  return text.substring(0,length)+suffix;
});