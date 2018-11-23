
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
window.onload = function () {
	const app = new Vue({
		el: '#app'
	});

}

$(function(){ 

	function increment_like_number(data){
		var counter = parseInt($('#like_counter').text());
		$('#like_counter').text(counter+1);
	};

	var post_id = $('#post_container').attr('data-task-id');
	$("#like").on('click', function(){ 
		$.ajax({
			type: "POST",
			url: '/updatelike/' + post_id,
			data: {
				"_token": $('meta[name="csrf-token"]').attr('content'),
			},
			success: function(data){increment_like_number(data);}
		})
	});
});


