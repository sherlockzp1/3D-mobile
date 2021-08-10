
$(document).ready(function(){
	
	selectPage('home');
    selectModel('coke');

	$('#navHome').click(selectPage.bind(this, 'home'));
	$('#navAbout').click(selectPage.bind(this, 'about'));
	$('#navModels').click(selectPage.bind(this, 'models'));

    $('#navCoke').click(selectModel.bind(this, 'coke'));
    $('#navDietcoke').click(selectModel.bind(this, 'dietcoke'));
    $('#navfanta').click(selectModel.bind(this, 'fanta'));

});

function selectModel(modelID){
	hideModels();
	$('#nav'+modelID[0].toUpperCase()+modelID.substr(1)).addClass('selected');
	$('#'+modelID).show();
	$('#interaction').show();
	$('#'+modelID+'Description').show();
}

function selectPage(name){
	$('#home').hide();
    $('#about').hide();
    $('#models').hide();
	$('#' + name).show();
}

function hideModels(){
	$('#coke').hide();
    $('#dietcoke').hide();
    $('#fanta').hide();
    $('#interaction').hide();
    $('#cokeDescription').hide();
    $('#dietcokeDescription').hide();
	$('#fantaDescription').hide();
	$('#navCoke').removeClass('selected');
	$('#navDietcoke').removeClass('selected');
	$('#navfanta').removeClass('selected');
}

function resetStyle(){
	changeBdHdFt('#FFFFFF','rgba(175,0,0,1)','rgba(175,0,0,1)');
}

var count = 0;
const MaxCount = 2;

function changeStyle(){
	count = (count + 1) % MaxCount;
	switch(count){
		case 0:
			changeBdHdFt("lightblue","#FF0000","#FF9900"); break;
		case 1:
			changeBdHdFt("#FF6600","#FF9999","#996699"); break;
	}	
}

// change body header footer
function changeBdHdFt(bc,hc,fc){
	document.getElementById('bodyColor').style.backgroundColor = bc;
	document.getElementById('headerColor').style.backgroundColor = hc;
    document.getElementById('footerColor').style.backgroundColor = fc;
}