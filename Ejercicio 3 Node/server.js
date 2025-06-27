const http = require('http');

const server = http.createServer((req, res) => {
    if (req.url === '/') {
        res.end('Mensaje de bienvenida');
    } else if (req.url === '/api') {
        res.setHeader('Content-Type', 'application/json');
        res.end(JSON.stringify({ message: 'Hola mundo' }));       
    }
});

server.listen(3000, () => {
    console.log('Servidor en el puerto 3000');
});
