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

/* Category Accordion */

$("#gadgets-toggle").click(function(){
	event.preventDefault();
	$("#gadgets-toggle-content").slideToggle("slow", function(){});
});

$("#sosial-media-toggle").click(function(){
	event.preventDefault();
	$("#sosial-media-toggle-content").slideToggle("slow", function(){});
});

$("#uu-ite-toggle").click(function(){
	event.preventDefault();
	$("#uu-ite-toggle-content").slideToggle("slow", function(){});
});

$("#security-toggle").click(function(){
	event.preventDefault();
	$("#security-toggle-content").slideToggle("slow", function(){});
});

$("#apps-os-toggle").click(function(){
	event.preventDefault();
	$("#apps-os-toggle-content").slideToggle("slow", function(){});
});

$("#opini-toggle").click(function(){
	event.preventDefault();
	$("#opini-toggle-content").slideToggle("slow", function(){});
});

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