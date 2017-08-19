function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

$(document).ready(function(){

	if($("#sort").length > 0 && $("#show").length > 0){
		var getSort = getUrlVars()["sorting"];
		var getShow = getUrlVars()["show"];

		if(getShow === undefined || typeof getShow === undefined){
			getShow = '';
		}

		if(getSort === undefined || typeof getSort === undefined){
			getSort = '';
		}

		$("#sort").change(function(){
			current_val = $(this).val();
			url_query = 'sorting='+current_val+'&show='+getShow;
			window.location.href = current_url+"?"+url_query;
		});

		$("#show").change(function(){
			current_val = $(this).val();
			url_query = 'sorting='+getSort+'&show='+current_val;
			window.location.href = current_url+"?"+url_query;
		});

	}
});