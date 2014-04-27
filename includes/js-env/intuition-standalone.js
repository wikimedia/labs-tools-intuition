(function ($) {
	var intuition,
		apiPath = 'api.php',
		messages = {},
		loaded = {},
		hasOwn = loaded.hasOwnProperty;

	intuition = {

		/**
		 * @param {string|Array} domains
		 * @param {string} [lang=en]
		 * @return {jQuery.Promise}
		 */
		load: function (domains, lang) {
			var i, len, d,
				queue = [];

			domains = typeof domains === 'string' ? [domains] : domains;

			for (i = 0, len = domains.length; i < len; i++) {
				if (!hasOwn.call(loaded, domains[i])) {
					queue.push(domains[i]);
				}
			}

			if (!queue.length) {
				d = $.Deferred();
				setTimeout(d.resolve);
				return d.promise();
			}

			return $.ajax({
				url: apiPath,
				data: {
					domains: queue.join('|'),
					userlang: lang || 'en'
				},
				dataType: 'jsonp'
			}).then(function (data) {
				if (!data || !data.messages) {
					return $.Deferred().reject(data);
				}

				$.each(data.messages, intuition.put);
			});
		},

		put: function (domain, msgs) {
			loaded[domain] = true;
			// Message store might return false instead of an object if the domain was not
			// found on the intuition server
			if (msgs) {
				$.each(msgs, function (key, val) {
					messages[domain + '-' + key] = val;
				});
			}
		},

		/** @return {string} */
		msg: function (domain, key) {
			return messages[domain + '-' + key] || ( '<' + key + '>');
		}
	};

	// Expose
	window.intuition = intuition;

}(jQuery));
