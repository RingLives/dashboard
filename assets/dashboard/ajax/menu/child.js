var child_menu = (function(){

    return {
        init: function(){
        	var itemoptions = {

        	    url: function(phrase) {
        	        return baseURL+"/get/ifaRegistervalue";
        	    },

        	    getValue: function(element) {
        	        return element.name;
        	    },

        	    list: {
        	        match: {
        	            enabled: true
        	        },
        	    },
        	    // template: {
        	    // 	type: "description",
        	    // 	fields: {
        	    // 		description: "type"
        	    // 	}
        	    // },
        	    ajaxSettings: {
        	        dataType: "json",
        	        method: "GET",
        	        data: {
        	            dataType: "json"
        	        }
        	    },

        	    requestDelay: 400
        	};
        	$("body #assign_ifa_register_name").easyAutocomplete(itemoptions);
        	$(".add_input .easy-autocomplete").css("width","100%");
        }
    }
});
$(document).ready(function(){
    child_menu.init();
});