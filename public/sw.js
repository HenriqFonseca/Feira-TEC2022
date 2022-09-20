self.addEventListener('install', event=> {

    console.log('sw ./ => installing...');
    
    console.log("sw ./ => install event detected e cat.svg cacheado!!!");
});

self.addEventListener('activate', event => {
    console.log('sw ./ => Evento activate ocorreu, agora pronto para interceptar fetches');
});

self.addEventListener('fetch', event => {
    console.log("sw ./ => detectei um evento fetch para o recurso abaixo:");
    console.log("sq ./ =>"+event.request.url);

    const url = new URL (event.request.url);

});