$('#add').click(function(){
var textFieldValue = $('#textfield').val();
if ( textFieldValue){
$('#list').append('<li>'+ textFieldValue + '</li>');
}
else{
window.alert("Please fill in the field");
}
});

