const CACHE_NAME = "jellygut-cache-norf-v1";
const PRECACHE_ASSETS = [
  '/',
  '/index.html',
  '/css/404.css',
  '/css/hifi_stack.css',
  '/css/mixtape.css',
  '/css/nav-bar.css',
  '/css/reviews.css'
];

// Install event - Precaching
self.addEventListener("install", (event) => {
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then((cache) => cache.addAll(PRECACHE_ASSETS))
      .catch((error) => {
        console.error("Error in caching during install", error);
        throw error; // Rethrow to ensure the service worker installation fails.
      })
  );
});

// Fetch event - Cache-first strategy
self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      if (response) {
        console.log("Found in cache:", event.request.url);
        return response;
      }
      return fetch(event.request);
    })
  );
});

// Activate event - Clean up old caches
self.addEventListener("activate", (event) => {
  event.waitUntil(
    caches.keys().then((keyList) => {
      return Promise.all(
        keyList.map((key) => {
          if (key !== CACHE_NAME) {
            console.log(`Deleting old cache: ${key}`);
            return caches
              .delete(key)
              .catch((err) =>
                console.error(`Error deleting cache: ${key}`, err)
              );
          }
        })
      );
    })
  );
  event.waitUntil(self.clients.claim());
});