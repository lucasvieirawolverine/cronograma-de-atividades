var http = require('http'),
host = '10.0.0.2',
port = '443',

var server = http.createserver(function(req,res){

});
var http = require('http'),
host = '10.0.0.2',
port = '443',

var server = http.createserver(function(req,res){
	res.writehead(200,{'Content-type': 'text/html; charset = utf-8'});
	res.end("<h1> Ola mundo!</h1>");
})	.listen(port,host,function(){
  console.log('servidor rodando em http://'+port ':' +host);	
	});


