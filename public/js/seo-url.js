(function( $ ){
		$.fn.coolString = function(options) {

			var to_find = ['à', 'ô', 'ď', 'ḟ', 'ë', 'š', 'ơ', 'ß', 'ă', 'ř', 'ț', 'ň', 'ā', 'ķ', 'ŝ', 'ỳ', 'ņ', 'ĺ', 'ħ', 'ṗ', 'ó', 'ú', 'ě', 'é', 'ç', 'ẁ', 'ċ', 'õ', 'ṡ', 'ø', 'ģ', 'ŧ', 'ș', 'ė', 'ĉ', 'ś', 'î', 'ű', 'ć', 'ę', 'ŵ', 'ṫ', 'ū', 'č', 'ö', 'è', 'ŷ', 'ą', 'ł', 'ų', 'ů', 'ş', 'ğ', 'ļ', 'ƒ', 'ž', 'ẃ', 'ḃ', 'å', 'ì', 'ï', 'ḋ', 'ť', 'ŗ', 'ä', 'í', 'ŕ', 'ê', 'ü', 'ò', 'ē', 'ñ', 'ń', 'ĥ', 'ĝ', 'đ', 'ĵ', 'ÿ', 'ũ', 'ŭ', 'ư', 'ţ', 'ý', 'ő', 'â', 'ľ', 'ẅ', 'ż', 'ī', 'ã', 'ġ', 'ṁ', 'ō', 'ĩ', 'ù', 'į', 'ź', 'á', 'û', 'þ', 'ð', 'æ', 'µ', 'ĕ', 'ı'];
			var to_repl = ['a', 'o', 'd', 'f', 'e', 's', 'o', 's', 'a', 'r', 't', 'n', 'a', 'k', 's', 'y', 'n', 'l', 'h', 'p', 'o', 'u', 'e', 'e', 'c', 'w', 'c', 'o', 's', 'o', 'g', 't', 's', 'e', 'c', 's', 'i', 'u', 'c', 'e', 'w', 't', 'u', 'c', 'o', 'e', 'y', 'a', 'l', 'u', 'u', 's', 'g', 'l', 'f', 'z', 'w', 'b', 'a', 'i', 'i', 'd', 't', 'r', 'a', 'i', 'r', 'e', 'u', 'o', 'e', 'n', 'n', 'h', 'g', 'd', 'j', 'y', 'u', 'u', 'u', 't', 'y', 'o', 'a', 'l', 'w', 'z', 'i', 'a', 'g', 'm', 'o', 'i', 'u', 'i', 'z', 'a', 'u', 't', 'd', 'a', 'u', 'e', 'i'];

			var eo = this;

			return this.each(function() {        
				eo.focusout(function() {

					var input = eo.val().toLowerCase();
					var result = '';

					for (var i = 0; i < input.length; i++)
					{
						var position = jQuery.inArray(input[i], to_find);

						if(position > -1) result += to_repl[position];
						else result += input[i];
					}

					result = result.replace(/ +?/g, '-').replace(/[^\w\s]|(.)\1/gi, '-').replace(/[\-]{2,}/g, '-').toLowerCase();

					eo.val(result);
				});
			});		


		};
	})( jQuery )

	//$('.coolString').coolString();  <input class="coolString" value="" class="coolString" />