$("#contact-us-toggle").click( function() {
	event.preventDefault();
	$("#contact-us").slideToggle( "slow", function() {});
});

$("#our-team-toggle").click( function() {
	event.preventDefault();
	$("#our-team").slideToggle( "slow", function() {});
});

$("#contributors-toggle").click( function() {
	event.preventDefault();
	$("#contributors").slideToggle( "slow", function() {});
});

$("#gadgets-toggle").click(function(){
	event.preventDefault();
	$("#gadgets-toggle-content").slideToggle("slow", function(){});
});

$("#socmed-toggle").click(function(){
	event.preventDefault();
	$("#socmed-toggle-content").slideToggle("slow", function(){});
});

$("#ite-toggle").click(function(){
	event.preventDefault();
	$("#ite-toggle-content").slideToggle("slow", function(){});
});

$("#security-toggle").click(function(){
	event.preventDefault();
	$("#security-toggle-content").slideToggle("slow", function(){});
});

$("#app-toggle").click(function(){
	event.preventDefault();
	$("#app-toggle-content").slideToggle("slow", function(){});
});

$("#opini-toggle").click(function(){
	event.preventDefault();
	$("#opini-toggle-content").slideToggle("slow", function(){});
});

$("#advisor").click(function(){
	event.preventDefault();
	$("#advisor").popover({
		"content"	: "QK. Dikara Barcah, MBA",
		"placement"	: 'top'
	})
})

$("#head-dev").click(function(){
	event.preventDefault();
	$("#head-dev").popover({
		"content"	: "Emanuel A. Cahyono",
		"placement"	: 'top'
	})
})

$("#content-mng").click(function(){
	event.preventDefault();
	$("#content-mng").popover({
		"html"		: true,
		"content"	: "Rizkina<br />Andy Syahrizal<br />Fatimah A. Hasanuddin",
		"placement"	: 'top'
	})
})

$("#front-end").click(function(){
	event.preventDefault();
	$("#front-end").popover({
		"html"		: true,
		"content"	: "Saras Kartika<br />Faras Dianda<br />Andhini Saraswati",
		"placement"	: 'top'
	})
})

$("#ui-designer").click(function(){
	event.preventDefault();
	$("#ui-designer").popover({
		"html"		: true,
		"content"	: "Ardie Ramadha<br />Azam A. Furqon",
		"placement"	: 'top'
	})
})

$("#back-end").click(function(){
	event.preventDefault();
	$("#back-end").popover({
		"html"		: true,
		"content"	: "Imam Hidayat<br />Nazilil Asror",
		"placement"	: 'top'
	})
})


/* Get Gravatar Functions */

function gravatarCallbackHandle(data) {

}

function gravatarVerifiedAccountLink(url, imgSource) {
	var str = '<a href="' + url + '" target="_blank"><img src="' + imgSource + '" /></a> ';
	return str;
};

function appendGravatar(idHash) {
	$.getJSON("http://www.gravatar.com/" + idHash + ".json?callback=?", function(data) {
		temporary.push(data);

		if ("accounts" in data.entry[0]) {
			var accountCount = data.entry[0].accounts.length;
			if (accountCount > 0) {
				for (var i = 0; i < accountCount; i++) {
					// Facebook
					if (data.entry[0].accounts[i].domain == "facebook.com") {
						$("p#" + idHash + "-accounts").append(gravatarVerifiedAccountLink(data.entry[0].accounts[i].url, SITE_THEME_URL + "/img/fb-icon.png"));
					}
					
					// Twitter
					if (data["entry"][0]["accounts"][i]["domain"] == "twitter.com") {
						$("p#" + idHash + "-accounts").append(gravatarVerifiedAccountLink(data.entry[0].accounts[i].url, SITE_THEME_URL + "/img/twitter-icon.png"));		
					}

					console.log("appended: " + idHash);
				}
			}	
		}
		
	})
};