import { createApp } from 'vue';
import Footer from "../../vue/Components/Footer/Footer";

const app = createApp({})

app.component('v-footer', Footer);

app.mount('#footer');
