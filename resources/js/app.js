require("./bootstrap");

require("./bootstrap");

import Vue from "vue";
import App from "./components/App.vue";
import axios from "axios";
import router from "./components/route.js";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

new Vue({
    el: "#app",
    router,
    components: {
        App,
    },
});
