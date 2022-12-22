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
      <legend>I'm looking for a</legend>

      <label for="developer">
        <input
          id="developer"
          v-model="developer"
          type="checkbox"
          name="developer"
        />
        Developer
      </label>

      <label for="designer">
        <input
          id="designer"
          v-model="designer"
          type="checkbox"
          name="designer"
        />
        Designer
      </label>
    </fieldset>

    <button :disabled="!userSelected" type="submit">Show me your work</button>
  </form>
</template>

<style lang="scss" scoped>
form {
  padding: 4rem;
}

form > button {
  font-size: 2rem;
  margin: 2.5rem 0 0;
}

form > button {
  color: #fff;
  border: 0.15em solid #fff;
  font-weight: 500;
  border-radius: 5rem;
  padding: 0.7rem 2rem 0.9rem;
  background-color: Transparent;
  background-repeat: no-repeat;

  cursor: pointer;
  overflow: hidden;
  outline: none;

  transition: all 0.15s ease-in-out;
}

form > button:hover {
  background: white;
  color: black;
  mix-blend-mode: screen;
}

form > fieldset {
  border: none;
  padding: 0;
  margin: 0;
}

form > fieldset > legend {
  font-size: 3rem;
  margin: 0 0 2rem;
}

// Made with the help of https://moderncss.dev/pure-css-custom-checkbox-style

label {
  font-size: 2rem;
  font-weight: 600;
  line-height: 0.9;
  display: grid;
  grid-template-columns: 1em auto;
  gap: 1.5rem;
}

label + label {
  margin-top: 1.5rem;
}

input[type="checkbox"] {
  /* Add if not using autoprefixer */
  -webkit-appearance: none;
  /* Remove most all native input styles */
  appearance: none;
  /* For iOS < 15 */
  background-color: var(--form-background);
  /* Not removed via appearance */
  margin: 0;

  font: inherit;
  color: currentColor;
  width: 1.15em;
  height: 1.15em;
  border: 0.15em solid currentColor;
  border-radius: 0.15em;
  transform: translateY(-0.075em);

  display: grid;
  place-content: center;
}

input[type="checkbox"]::before {
  content: "";
  width: 0.55em;
  height: 0.55em;
  clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
  transform: scale(0);
  transform-origin: bottom left;
  box-shadow: inset 1em 1em #fff;
  /* Windows High Contrast Mode */
  background-color: CanvasText;
}

input[type="checkbox"]:checked::before {
  transform: scale(1);
}

input[type="checkbox"]:focus {
  outline: 0.1em solid rgba(255, 255, 255, 0.5);
  outline-offset: max(2px, 0.15em);
}

input[type="checkbox"]:disabled {
  --form-control-color: var(--form-control-disabled);

  color: var(--form-control-disabled);
  cursor: not-allowed;
}
</style>
