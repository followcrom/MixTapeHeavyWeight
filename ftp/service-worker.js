const CACHE_NAME = "jellygut-cache-norf-v2"; // Incremented version
const PRECACHE_ASSETS = [
  '/',
  '/index.html',
  '/css/404.css',
  '/css/hifi_stack.css',
  '/css/mixtape.css',
  '/css/nav-bar.css',
  '/css/reviews.css'
];

// Install event - Precaching with immediate activation
self.addEventListener("install", (event) => {
  console.log("Service Worker: Install event");
  
  // Force immediate activation of the new service worker
  self.skipWaiting();
  
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then((cache) => cache.addAll(PRECACHE_ASSETS))
      .catch((error) => {
        console.error("Error in caching during install", error);
        throw error; // Ensure service worker installation fails if caching fails
      })
  );
});

// Fetch event - Network-first with fallback to cache
self.addEventListener("fetch", (event) => {
  event.respondWith(
    fetch(event.request)
      .then((response) => {
        // Try network first
        return caches.open(CACHE_NAME).then((cache) => {
          // Only cache successful network responses
          if (response.ok && response.type === 'basic') {
            cache.put(event.request, response.clone());
          }
          return response;
        });
      })
      .catch(() => {
        // Fallback to cache if network request fails
        console.log("Network request failed, fetching from cache:", event.request.url);
        return caches.match(event.request);
      })
  );
});

// Activate event - Clean up old caches and claim clients
self.addEventListener("activate", (event) => {
  console.log("Service Worker: Activate event");
  
  event.waitUntil(
    caches.keys().then((keyList) => {
      return Promise.all(
        keyList.map((key) => {
          if (key !== CACHE_NAME) {
            console.log(`Deleting old cache: ${key}`);
            return caches.delete(key);
          }
        })
      );
    })
  );
  
  // Immediately take control of all pages under this service worker's scope
  event.waitUntil(self.clients.claim());
});