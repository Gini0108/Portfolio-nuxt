<script setup>
useHead({
  title: "Sjors van Holst",
});

const router = useRouter();
const designer = ref(false);
const developer = ref(false);

const redirectUser = () => {
  if (developer.value && designer.value) {
    router.push("/fullstack");
  } else if (developer.value) {
    router.push("/developer");
  } else if (designer.value) {
    router.push("/designer");
  } else {
    router.push("/");
  }
};

const userSelected = computed(() => {
  return developer.value || designer.value;
});

watch([developer, designer], () => {
  localStorage.setItem("developer", developer.value);
  localStorage.setItem("designer", designer.value);
});

onMounted(() => {
  developer.value = localStorage.getItem("developer");
  designer.value = localStorage.getItem("designer");
});
</script>
<template>
  <form @submit.prevent="redirectUser">
    <fieldset>
      <legend>For what are you looking?</legend>

      <div>
        <input
          id="developer"
          v-model="developer"
          type="checkbox"
          name="developer"
        />
        <label for="developer">Developer</label>
      </div>

      <div>
        <input
          id="designer"
          v-model="designer"
          type="checkbox"
          name="designer"
        />
        <label for="designer">Designer</label>
      </div>
    </fieldset>

    <button :disabled="!userSelected" type="submit">Show me your work</button>
  </form>
</template>
