<script setup>
useHead({
  title: "Sjors van Holst as a developer & designer",
});

const router = useRouter();

const revertUser = () => {
  router.push("/");
};
</script>
<template>
  <section>
    <button @click="revertUser">Go back</button>
    <h1>My work as a developer & designer</h1>
  </section>
</template>
