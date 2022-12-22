<script setup>
useHead({
  link: [
    {
      rel: "stylesheet",
      href: "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800",
    },
  ],
  htmlAttrs: {
    lang: "nl",
  },
});
</script>

<template>
  <main>
    <NuxtPage />
  </main>
</template>

<style lang="scss">
:root {
  --background-1: #150485;
  --background-2: #590995;
  --background-3: #c62a88;
}

html,
html > body,
html > body > div,
html > body > div > main {
  width: 100%;
  height: 100%;

  color: #fff;
  margin: 0;
  padding: 0;

  font-family: "Open Sans", sans-serif;
}

// Made with the help of https://www.gradient-animator.com

main {
  background: linear-gradient(
    130deg,
    var(--background-1),
    var(--background-2),
    var(--background-3)
  );

  animation: gradient 15s ease infinite;
  background-size: 600% 600%;
}

@keyframes gradient {
  0% {
    background-position: 0% 10%;
  }

  50% {
    background-position: 100% 91%;
  }

  100% {
    background-position: 0% 10%;
  }
}
</style>
