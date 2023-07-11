import GetAppliance from "./components/CreateAppliance.vue";
import CreateAppliance from "./components/CreateAppliance.vue";
import EditAppliance from "./components/EditAppliance.vue";

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        name: "profile",
        path: "/",
        component: GetAppliance,
    },
    {
        name: "create",
        path: "/create",
        component: CreateAppliance,
    },
    {
        name: "edit",
        path: "/edit/:id",
        component: EditAppliance,
        props: true,
    },
];

const router = new VueRouter({
    mode: "history",
    routes,
});

export default router;
