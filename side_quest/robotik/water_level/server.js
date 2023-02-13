import net from 'net';

var data = '', level = 0, value = 0;
var server = net.createServer(function (socket) {
	socket.write('callback server\r\n');
	socket.on('data', (raw_data) => {
		data = raw_data.toString('utf8').split("n");
		value = data[1];
		level = data[0];
		console.log(`
		Level ${level}
		Value ${value}`);
	});
});

server.listen(52275, '0.0.0.0');
