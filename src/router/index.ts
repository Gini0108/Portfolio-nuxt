import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";
import Home from "../views/Home.vue";

const routes: Array<RouteRecordRaw> = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/privacy-policy",
    name: "Privacy",
    component: () =>
      import(/* webpackChunkName: "privacy" */ "../views/Privacy.vue"),
  },
  {
    path: "/terms-of-service",
    name: "Terms",
    component: () =>
      import(/* webpackChunkName: "terms" */ "../views/Terms.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
