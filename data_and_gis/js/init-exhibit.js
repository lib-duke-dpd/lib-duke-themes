 SimileAjax.jQuery(document).ready(function() {

 var fDone = function() {
   var params = SimileAjax.parseURLParameters();
   var options = ["keywords", "format", "subject","label"];
	 for ( var i in options ) {
	   var option = options[i];
	   if (option in params) {
		 if (params[option]) {
		   document.getElementById(option + "-facet").setAttribute("ex:selection", params[option]);
		 }
		 else {
		  document.getElementById(option +
			"-facet").setAttribute("ex:selectMissing", "true");
		 }
	   }
	 }
	 window.exhibit = Exhibit.create();
	 window.exhibit.configureFromDOM();
 };
 window.database = Exhibit.Database.create();
 window.database.loadDataLinks(fDone);
});