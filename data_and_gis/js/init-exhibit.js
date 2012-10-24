(function($){
	Drupal.behaviors.data_and_gis = {
		attach: function(context, settings) {
			debugger;
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
			window.database.loadDataLinks(fDone);
			
			$('li#collections a').addClass('current');
			$('#right-sidebar li#browse a').addClass('current');
			$('.titleBox').live('click', function() {
				$(this).next('.details').slideToggle('fast');
			});
			$('.masterToggle').live('click', function() {
				$('.details').slideToggle('fast');
			})
		}
	}
})(jQuery);