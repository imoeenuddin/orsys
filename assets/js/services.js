let services= ['Web Development', 'Web designing', 'App Development',' Logo and branding', "Seo", "Digital Marketing"];
var select = document.getElementById('select');
for (var i = 1; i <= services.length; i++) {
    var option = '<option value="'+ i + '" >' + services[i-1] + '</option>';
    select.insertAdjacentHTML( 'beforeend', option );
}