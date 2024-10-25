const CACHE_NAME = "jellygut-cache-norf-v1";
const PRECACHE_ASSETS = [
  '/index.html',
  '/css/404.css',
  '/css/hifi_stack.css',
  '/css/mixtape.css',
  '/css/nav-bar.css',
  '/css/reviews.css',
  '/js/djMixPlayer.js',
  '/js/djMixPlayer_Sma.js',
  '/js/rollovers.js',
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

// Fetch event - Cache-first strategy with follow redirect
self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((cachedResponse) => {
      if (cachedResponse) {
        console.log("Found in cache:", event.request.url);
        return cachedResponse; // Return cached response if found
      }
      // If not found in cache, attempt to fetch from network
      return fetch(event.request, { redirect: 'follow' }) // Ensure redirects are followed
        .then((response) => {
          // Check if the response is valid
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          // Optionally cache the new response
          return caches.open(CACHE_NAME).then((cache) => {
            cache.put(event.request, response.clone()); // Cache the response
            return response; // Return the fetched response
          });
        })
        .catch((error) => {
          console.error('Fetch failed:', error);
          // Optionally return a fallback response or cached content
          return caches.match('/index.html'); // Fallback to index.html if fetch fails
        });
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
            return caches.delete(key)
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
