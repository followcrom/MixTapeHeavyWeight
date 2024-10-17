const CACHE_NAME = 'mixtape-cache-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/css/404.css',
  '/css/hifi_stack.css',
  '/css/mixtape.css',
  '/css/nav-bar.css',
  '/css/reviews.css',
  '/js/djMixPlayer.js',
  '/js/djMixPlayer_Sma.js',
  '/js/rollovers.js',
  'images/apple-touch-icon.png',
  'images/favicon-32x32.png'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => {
        return response || fetch(event.request);
      })
  );
});

self.addEventListener('activate', (event) => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (!cacheWhitelist.includes(cacheName)) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
