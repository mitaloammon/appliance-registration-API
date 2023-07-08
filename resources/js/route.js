import GetAppliance from "./components/CreateAppliance.vue";
import CreateAppliance from "./components/CreateAppliance.vue";
import EditAppliance from "./components/EditAppliance.vue";

export const routes = [
    {
        name: "home",
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
    },
];
