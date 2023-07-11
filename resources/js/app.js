require("./bootstrap");

import "../css/app.css";

import Vue from "vue";
import App from "../js/App.vue";

import axios from "axios";
import router from "../js/route.js";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

const app = new Vue({
    el: "#app",
    router,
    render: (h) => h(App),
});
