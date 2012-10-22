(function($){
	Drupal.behaviors.data_and_gis = {
		attach: function(context, settings) {
			var fDone = function() {
				var params = SimileAjax.parseURLParameters();
				var options = ["keywords", "format", "subject","label"];
				for ( var i in options ) {
					var option = options[i];
					if (option in params) {
						if (params[option]) {
							$('#' + option + "-facet").attr("ex:selection", params[option]);
						}
						else {
							$('#' + option + "-facet").attr("ex:selectMissing", "true");
						}
					}
				}
				window.exhibit = Exhibit.create();
				window.exhibit.configureFromDOM();
			};
			window.database = Exhibit.Database.create();
			debugger;
			window.database.loadDataLinks(fDone);
		}
	}
})(jQuery);