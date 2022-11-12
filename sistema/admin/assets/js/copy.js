function copyFinger() {
    var textBox = document.getElementById("json");
    textBox.select();
    document.execCommand("copy");
	
   alert('Codigo copiado!');
   
}